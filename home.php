<html>

	<head>
		<meta charset="utf-8">
		<title> Trill </title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript">
			function searchq() {

				if($("input[name='search']").val() == '') {

				} else {

				var searchTxt = $("input[name='search']").val();

				$.post("search.php", {searchVal: searchTxt}, function(output){

					$("#output").html(output);
				});
			}
			}
		</script>
	</head>

	<body>

		<form action="home.php" method="post">
			<input type="text" name="search" placeholder="Search..." autocomplete="off" onkeyup="searchq();">
			<input type="submit" value=">>">
		</form>

		<div id="output">

		</div>

	</body>
</html>
