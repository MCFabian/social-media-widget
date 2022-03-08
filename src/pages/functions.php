<?php
	function clearReloadForm(){
		echo"
			<script>
				if ( window.history.replaceState ) {
					window.history.replaceState( null, null, window.location.href );
				}
			</script>
		";
	}


	function MediatNotFound(){
		echo "nichts gefunden 1";
	}

	function getMediaData($currentfinderID){
		include("connection.php");

		if($currentfinderID <= 0) return null;

		global $connection;
		//SQL-Zugriff auf Datensaetze
		$QueryRes = $DB->query("SELECT id, finderid, code, creator FROM socialcodes WHERE finderid = $currentfinderID");
		$RESULT = $QueryRes->fetch_assoc();
		$QueryRes->close();
		
		/* 
		while ($row = $query->fetch()){

			$id							= $row['id'];
			$finderid 					= $row['finderid'];
			$code 						= $row['code'];
			$creator 					= $row['creator'];


			echo"

			";

			echo"
				ID: $id <br>
				FINDERID: $finderid <br>
				CREATOR: $creator <br>
				$code
			";

		} */
	}

?>