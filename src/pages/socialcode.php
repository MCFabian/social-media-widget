<link rel="stylesheet" href="../css/style.css">
<script src="../js/script.js"></script>
<script src="../js/gen.js"></script>

<?php
	include("pagehead.php"); 	
    include("connection.php");
	include("functions.php");


    $socialdata = getMediaData($_GET["id"]);
    //if(!isSet($socialdata)) MediatNotFound();


?>

