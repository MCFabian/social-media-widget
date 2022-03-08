<?php
	include("pagehead.php"); 	
    include("connection.php");
	include("functions.php");


    $socialdata = getMediaData($_GET["id"]), true;
    if(!isSet($socialdata)) echo"nichts gefunden!";
?>