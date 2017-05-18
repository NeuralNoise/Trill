<html>
  <head>
    <meta charset="utf-8">
    <title> Trill </title>
    <link rel='stylesheet' type='text/css' href='css/index.css' />
    <link href='https://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
  </head>

  <body>
      <div class="loginForm">
        <a class="trill" href="index.php"> Trill </a>
        <form action="Core/login.php" method="post" class="lform">
            <label for="uname">Username:</tag></br>
            <input type="text" id="uname" name="username" value="<?php echo $submitted_username; ?>" autocomplete="off" placeholder="..."/>
          </br></br>
            <label for="pword">Password:</br>
            <input type="password" id="pword" name="password" value="" placeholder="..." required/>
          </br></br>
            <input type="submit" value="Log In" />

            <?php echo $lfailed;?>
        </form>
      </div>

    <div class="registerForm">
      <h1>Sign up now</h1>
      <p>You'll love raccoons</p>
      <form action="Core/register.php" method="post" class="rform">
          <input type="text" name="firstname" id="firstname" placeholder="First" autocomplete="off"required/>
          <input type="text" name="lastname" placeholder="Last" autocomplete="off" required/>
        </br></br>
          <input type="text" name="username" placeholder="Username" autocomplete="off" required/>
        </br></br>
          <input type="text" name="email" placeholder="Email" autocomplete="off" required/>
        </br></br>
          <input type="password" name="password" placeholder="Password" required/>
        </br></br>
          <input type="submit" value="Register"/>
      </form>
    </div>

    <div class="footer">
    </div>
  </body>
</html>
