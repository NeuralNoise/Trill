<?php


 require("common.php");
 // Connection to db

$submitted_username = '';


if(!empty($_POST)) {

    $login_ok = false;

    $query = "SELECT id, username, password, salt, email FROM users WHERE username = :username";
    $query_params = array(':username' => $_POST['username']);

    try
    {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex)
    {
        die("There might a raccoon in the code...");
    }

    $row = $stmt->fetch();




    if($row)
    {
        // Using the password submitted by the user and the salt stored in the database,
        // we now check to see whether the passwords match by hashing the submitted password
        // and comparing it to the hashed version already stored in the database.
        $check_password = hash('sha256', $_POST['password'] . $row['salt']);
        for($round = 0; $round < 65536; $round++)
        {
            $check_password = hash('sha256', $check_password . $row['salt']);
        }

        if($check_password === $row['password'])
        {
            // If they do, then we flip this to true
            $login_ok = true;
        }
    }

    // If the user logged in successfully, then we send them to the private members-only page
    // Otherwise, we display a login failed message and show the login form again
    if($login_ok)
    {
        // Here I am preparing to store the $row array into the $_SESSION by
        // removing the salt and password values from it.  Although $_SESSION is
        // stored on the server-side, there is no reason to store sensitive values
        // in it unless you have to.  Thus, it is best practice to remove these
        // sensitive values first.
        unset($row['salt']);
        unset($row['password']);

        // This stores the user's data into the session at the index 'user'.
        // We will check this index on the private members-only page to determine whether
        // or not the user is logged in.  We can also use it to retrieve
        // the user's details.
        $_SESSION['user'] = $row;

        // Redirect the user to the private members-only page.
        header("Location: home.php");
        die("Redirecting to: home.php");
    }
    else
    {
        print("Login Failed.");

        $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');

    }
}

?>
