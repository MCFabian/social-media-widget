<?php
	include("src/pages/connection.php");
	include("src/pages/functions.php");

	//if($_SERVER['REQUEST_METHOD'] == 'POST') {
		//if(isset($_POST['savecode'])) {
			//DATA VARS
			$check_facebook = $_POST['checkfacebook'];
			if(empty($check_facebook)){
				$check_facebook = 'off';
			}
			$check_instagram = $_POST['checkinstagram'];
			if(empty($check_instagram)){
				$check_instagram = 'off';
			}
			$check_youtube = $_POST['checkyoutube'];
			if(empty($check_youtube)){
				$check_youtube = 'off';
			}
			$check_twitter = $_POST['checktwitter'];
			if(empty($check_twitter)){
				$check_twitter = 'off';
			}
			$check_tiktok = $_POST['checktiktok'];
			if(empty($check_tiktok)){
				$check_tiktok = 'off';
			}
			$check_xing = $_POST['checkxing'];
			if(empty($check_xing)){
				$check_xing = 'off';
			}
			$check_linkedin = $_POST['checklinkedin'];
			if(empty($check_linkedin)){
				$check_linkedin = 'off';
			}
			$check_linktree = $_POST['checklinktree'];
			if(empty($check_linktree)){
				$check_linktree = 'off';
			}

			$value_facebook = $_POST['linkfacebook'];
			$value_instagram = $_POST['linkinstagram'];
			$value_youtube = $_POST['linkyoutube'];
			$value_twitter = $_POST['linktwitter'];
			$value_tiktok = $_POST['linktiktok'];
			$value_xing = $_POST['linkxing'];
			$value_linkedin = $_POST['linklinkedin'];
			$value_linktree = $_POST['linklinktree'];

			$value_email = $_POST['linkmail'];
			if(!empty($value_email)){
				$genemailvalue = "mailto:".$value_email;
				$value_email = '#';
			}

			$value_phone = $_POST['linkphone'];
			if(!empty($value_phone)){
				$genphonevalue = "tel:".$value_phone;
				$value_phone = '#';
			}

			$value_whatsapp = $_POST['linkwhatsapp'];
			if(!empty($value_whatsapp)){
				$genwhatsappvalue = "https://wa.me/".$value_whatsapp;
				$value_whatsapp = '#';
			}

			if(empty($value_email)){
				$value_email = '#';
			}

			if(empty($value_phone)){
				$value_phone = '#';
			}

			if(empty($value_whatsapp)){
				$value_whatsapp = '#';
			}

			$iconcolor = $_POST['color'];
			$backgroundcolor = $_POST['background'];

			$borderwidth = $_POST['borderwidth'];
			$bordercolor = $_POST['bordercolor'];
			$bordertype = $_POST['bordertype'];
			$borderradius = $_POST['borderradius'];
			
			$backgroundhover = $_POST['hoverbg'];

			$size = $_POST['tab'];
			$alignemt = $_POST['alignment'];

			$code = $_POST['export']; 
			$style = $_POST['style'];
			
			$creator = $_POST['initial'];
			$myc = rand(10000, 99999);

			//replace id of preview window with creation ID
			$newcode = str_ireplace("socialmedialist", $myc, $code);
			//replace email in code
			$newcode = str_ireplace("href=\"$genemailvalue\"","href=\"$value_email\"", $newcode);
			//replace phone in code
			$newcode = str_ireplace("href=\"$genphonevalue\"","href=\"$value_phone\"", $newcode);
			//replace whatsapp in code
			$newcode = str_ireplace("href=\"$genwhatsappvalue\"","href=\"$value_whatsapp\"", $newcode);

			global $connection;

			//SQL-Zugriff auf Datensaetze
			$query = $connection->prepare("INSERT INTO socialcodes(style, check_facebook, check_instagram, check_youtube, check_twitter, check_tiktok, check_xing, check_linkedin, check_linktree, value_facebook, value_instagram, value_youtube, value_twitter, value_tiktok, value_xing, value_linkedin, value_linktree, iconcolor, backgroundcolor, borderwidth, bordercolor, bordertype, borderradius, backgroundhover, size, alignemt, code, finderid, creator) VALUES(:style, :check_facebook, :check_instagram, :check_youtube, :check_twitter, :check_tiktok, :check_xing, :check_linkedin, :check_linktree, :value_facebook, :value_instagram, :value_youtube, :value_twitter, :value_tiktok, :value_xing, :value_linkedin, :value_linktree, :iconcolor, :backgroundcolor, :borderwidth, :bordercolor, :bordertype, :borderradius, :backgroundhover, :size, :alignemt, :code, :finderid, :creator)");
			if($query->execute(array(':style'=> $style, ':check_facebook' => $check_facebook, ':check_instagram' => $check_instagram, ':check_youtube' => $check_youtube, ':check_twitter' => $check_twitter, ':check_tiktok' => $check_tiktok, ':check_xing' => $check_xing, ':check_linkedin' => $check_linkedin, ':check_linktree' => $check_linktree, ':value_facebook' => $value_facebook, ':value_instagram' => $value_instagram, ':value_youtube' => $value_youtube, ':value_twitter' => $value_twitter, ':value_tiktok' => $value_tiktok, ':value_xing' => $value_xing, ':value_linkedin' => $value_linkedin, ':value_linktree' => $value_linktree, ':iconcolor' => $iconcolor, ':backgroundcolor' => $backgroundcolor, ':borderwidth' => $borderwidth, ':bordercolor' => $bordercolor, ':bordertype' => $bordertype, ':borderradius' => $borderradius, ':backgroundhover' => $backgroundhover, ':size' => $size, ':alignemt' => $alignemt, ':code'=> $newcode, ':finderid' => $myc, ':creator' => $creator))){
				clearReloadForm();
				echo"<script src='src/js/script.js'></script>";
				echo"<script>notification('success', 'Der Code wurde erfolgreich gespeichert! Deine gespeicherte ID lautet: $myc');</script>";
                echo"Erfolg";
			}

			else{
				clearReloadForm();
				echo"<script src='src/js/script.js'></script>";
				echo"<script>notification('error', 'Der Code konnte nicht gespeichert werden!');</script>";
				echo"Fehler";
			}
		
		//}
	//}

?>