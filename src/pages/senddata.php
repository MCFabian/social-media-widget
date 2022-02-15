<?php
    include("src/pages/connection.php");
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(isset($_POST['savecode'])) {
			$code = $_POST['export']; //EXPORT CODE TEXTAREA
			$style = $_POST['style']; //STYLE FROM FORM

			global $connection;

			//SQL-Zugriff auf Datensaetze
			$query = $connection->prepare("INSERT INTO socialcodes(style, code) VALUES(:style, :code)");
			if($query->execute(array(':style'=> $style, ':code'=> $code))){
				echo"Eingefügt";
			}

			else{
				echo"Es wurde nichts eingefügt";
			}
		
		}
	}

?>