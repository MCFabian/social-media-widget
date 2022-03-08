<?php
	include("pagehead.php"); 	
    include("connection.php");
	include("functions.php");

    if(isset($_GET["id"]))
        getMediaData($_GET["id"]);
    else
        echo "";
?>