<html>
  <head>
    <meta charset="utf-8">
    <title> Trill </title>
    <link rel='stylesheet' type='text/css' href='css/index.css' />
    <link href='https://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>

  </head>

  <body>
    <header>
      <!-- <img class="icon" src="trill.png" height="80" width="80"> -->
      <a class="trill" href="index.php"> Trill </a>
      <div class="loginForm">
        <form action="login.php" method="post">
            <input type="text" name="username" value="<?php echo $submitted_username; ?>" autocomplete="off" placeholder="Username"/>
            <input type="password" name="password" value="" placeholder="Password"/>
            <input type="submit" value="Log In" />
        </form>
      </div>
    </header>

    <div class="registerForm">
      <h1>Register</h1>
      <form action="register.php" method="post">
          <input type="text" name="username" placeholder="Username"/>
          <input type="text" name="email" placeholder="Email"/>
          <input type="password" name="password" placeholder="Password"/>
          <input type="submit" value="Register"/>
      </form>
    </div>

    <footer>
    </footer>
  </body>
</html>
