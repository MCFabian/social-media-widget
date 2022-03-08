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
		$query = $connection->prepare("SELECT id, finderid, code, creator FROM socialcodes WHERE finderid = $currentfinderID");
		$query->execute();
		$query->setFetchMode(PDO::FETCH_ASSOC);

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

		}
	}

?>