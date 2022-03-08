<?php
	include("pagehead.php"); 	
    include("connection.php");
	include("functions.php");


    $socialdata = getMediaData($_GET["id"]);
    if(!isset($socialdata)) echo"nichts gefunden!";
?>