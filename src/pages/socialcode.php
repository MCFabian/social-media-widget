<link rel="stylesheet" href="../css/style.css">


<?php
	include("pagehead.php"); 	
    include("connection.php");
    //include("groundstyles.php");


    $socialdata = getMediaData($_GET["id"]);
    //if(!isSet($socialdata)) MediatNotFound();


?>

<script src="../js/script.js"></script>
<script src="../js/gen.js"></script>