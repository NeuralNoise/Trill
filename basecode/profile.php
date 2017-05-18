<?php
  require("Core/common.php");

  $profile = $_GET['u'];
  echo $profile;
 ?>
<html>
<head>
  <meta charset="utf-8">
  <title> Trill </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="Js/search.js"></script>
  <link rel='stylesheet' type='text/css' href="Css/profile.css"/>
</head>

<body>
<div class="navbar">
  <div class="searchBar">
  <form action="search.php" method="get">
    <input type="text" name="search" placeholder="Search..." autocomplete="off">
    <input type="submit" value=">>">
  </form>
  </div>

</div>
</html>
