<?php
require 'constants.php';
error_reporting(E_ALL);
?>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0"> 
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<script type="text/javascript" src="js/<?php JQUERY ?>"></script>
	<script type="text/javascript" src="js/material.js"></script>
	<script type="text/javascript" src="js/npm.js"></script>
	<link rel="stylesheet" href="css/material.css">
	<link rel="stylesheet" href="css/style.css"><!--m<style-->
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<title>Lawlez - Web Portfolio</title> 
</head>

<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
<?php
include DOC_ROOT.'/web/header.html';
?>
<div class="mdl-layout__header-row portfolio-navigation-row mdl-layout--large-screen-only">
                <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                    <a class="mdl-navigation__link is-active" href="">Overview</a>
                    <a class="mdl-navigation__link  " href="">My Skills</a>
                    <a class="mdl-navigation__link " href="">Contact</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                <a class="mdl-navigation__link is-active" href="index.html">Overview</a>
                <a class="mdl-navigation__link" href="blog.html">My Skills</a>
                <a class="mdl-navigation__link" href="contact.html">Contact</a>
            </nav>
        </div>

<main class="mdl-layout__content">
<!-- MDL Spinner Component -->
<div class="mdl-spinner mdl-js-spinner is-active"></div>

<?php

include DOC_ROOT.'/web/main.html';
?>


<?php
include DOC_ROOT.'/web/footer.html';
?>
        </main>
    </div>
    <script type="text/javascript">
    // When ready...
window.addEventListener("load",function() {
	// Set a timeout...
	setTimeout(function(){
		// Hide the address bar!
		window.scrollTo(0, 1);
	}, 0);
});</script>
<?php include_once("ga-js.php") ?>
</body>

</html>