<?php
	require('functions.php');
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>IEEE UP SB Sounds</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<!-- Custom Theme files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!-- //Custom Theme files -->
<!-- web font -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/play.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="bg-dark">
<!--main-content-->
<div class="container-fluid" id="main_content">
	<h1 class="text-center text-light my-3 py-2" style="font-family:'Monospace'">¯\_(ツ)_/¯</h1>
	<div class="container">
		<div class="row justify-content-center">
			<?php insertButtons(); ?>
			<a class="btn btn-outline-light btn-lg btn-block my-3" href="/playrand.php" role="button">Random</a>
		</div>
	</div>
</div>
<footer>
<p>IEEE UP SB - IT Dept</p>
</footer>
</body>
</html>
