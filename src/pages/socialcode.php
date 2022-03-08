<?php
	include("pagehead.php"); 	
    include("connection.php");
	include("functions.php");

    if(isset($_GET["finderid"]))
        getMediaData($_GET["finderid"]);
    else
        echo "";
?>