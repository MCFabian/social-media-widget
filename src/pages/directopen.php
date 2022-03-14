<form action="#" method="POST" id="directopen">
    <label for="directcode">Code eingeben</label>
    <input id='directcode' placeholder='Code' type="text">
    <button class="button" id="directopen" name="directopen" form="directopen"><i class="fas fa-save"></i>Öffnen</button>
</form>
<?php
	include("connection.php");
	include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['directopen'])) {
            $directcode = $_POST['directcode'];

            if(empty($directcode)){
                echo"Kein Code";
            }

            if(!empty($directcode)){
                header("Location: https://dev-social-media.fabianr.de/src/pages/socialcode.php?id=$directcode");  
            }
        }
    }


?>