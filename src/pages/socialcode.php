<link rel="stylesheet" href="../css/style.css">


<?php
	include("pagehead.php"); 	
    include("connection.php");
    include("functions.php");
    include("groundstyles.php");

?>

<div class="hint static-hint">Sie befinden sich in der Ladenansicht von: <strong><?php $_GET["id"]?></strong></div>

<?php
    $socialdata = getMediaData($_GET["id"]);
    //if(!isSet($socialdata)) MediatNotFound();


?>

<script src="../js/script.js"></script>
<script src="../js/gen.js"></script>