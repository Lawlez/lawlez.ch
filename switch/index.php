<?php
require 'constants.php';
error_reporting(E_ALL);
?>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/npm.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css"><!--m<style-->
	<link rel="stylesheet" href="css/animate.css">
	<title>Lawlez.</title> 
</head>

<body>

<?php
include DOC_ROOT.'header.html';
?>
	
<?php
usleep(4800000);
include DOC_ROOT.'switch.php';
?>


<?php
include DOC_ROOT.'footer.html';
?>
<?php include_once("ga-js.php") ?>
</body>

</html>