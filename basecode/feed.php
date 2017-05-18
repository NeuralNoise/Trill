<?php
	require("Core/common.php");
?>
<html>

	<head>
		<meta charset="utf-8">
		<title> Trill </title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="Js/search.js"></script>
		<script type="text/javascript" src="Js/post.js"></script>
 		<link rel='stylesheet' type='text/css' href="Css/feed.css"/>
	</head>

	<body>
	<div class="navbar">
		<form action="feed.php" method="get">
			<input type="text" name="search" placeholder="Search..." autocomplete="off" onkeyup="searchq();">
			<input type="submit" value=">>">
		</form>
	</div>

	<div class="empty">
		<form action="Core/post.php" method="post">
			<textarea name="newPost" placeholder="Write about your day..."></textarea>
			<input type="submit" name="Post" value="Post">
		</form>
	</div>

	<div class="feed">
			<?php  $query = "SELECT * FROM posts ORDER BY id DESC";

			 $stmt = $db->prepare($query);
			 $result = $stmt->execute();

			 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				 $username = $row['username'];
				 $message = $row['message'];

				 $post = "<div class='post'><h1>".$username."</h1>".$message."</div>";
				 echo $post;
			 }
		 ?>
		</div>

		<!-- <div id="output">

		</div> -->

		</body>
</html>
