<?php

require_once ('includes/header.php');

if(isset($_GET["page"]) && FILE_EXISTS($_GET["page"].".php")) {
	$page = $_GET["page"];
} else {
	$page = "home";
}

include ($page.".php");
include ('includes/footer.php'); 
?>
