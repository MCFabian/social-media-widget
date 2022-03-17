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
		$query = $connection->prepare("SELECT id, style, finderid, check_facebook, check_instagram, check_youtube, code, creator FROM socialcodes WHERE finderid = $currentfinderID");
		$query->execute();
		$query->setFetchMode(PDO::FETCH_ASSOC);

		while ($row = $query->fetch()){

			$id						= $row['id'];
			$style						= $row['style'];
			$finderid 					= $row['finderid'];
			$code 						= $row['code'];
			$creator 					= $row['creator'];

			$check_facebook     				= $row['check_facebook'];
			if($check_facebook == "on") {
				$check_facebook = "checked";
			}

			if($check_facebook == "off") {
				$check_facebook = "";
			}
			
			$check_instagram     				= $row['check_instagram'];
			if($check_instagram == "on") {
				$check_instagram = "checked";
			}

			if($check_instagram == "off") {
				$check_instagram = "";
			}
			
			$check_youtube    				= $row['check_youtube'];
			if($check_youtube == "on") {
				$check_youtube = "checked";
			}

			if($check_youtube == "off") {
				$check_youtube = "";
			}


			echo"
			<div class='wrapper'>
				<div class='box'>
					<h2>Kanäle auswählen</h2>
					<p>Bitte die zutreffenden Kanäle auswählen. Wird keine Verlinkung angebgeben, so wird auf die Hersteller-Seite verlinkt.</p>
					<a onclick='selectall()' id='selectall' class='link'>Alle auswählen</a>
					<hr>
					<ul id='medias'>
						<li>
	
							<input $check_facebook class='checkboxes toogle' type='checkbox' name='checkfacebook' id='checkfacebook'>
							<label for='checkfacebook'>
								Facebook
							</label>
							<input placeholder='Link eingeben' type='text' name='linkfacebook' id='linkfacebook'>
						</li>
	
						<li>
							<input $check_instagram class='checkboxes toogle' type='checkbox' name='checkinstagram' id='checkinstagram'>
							<label for='checkinstagram'>Instagram</label>
							<input placeholder='Link eingeben' type='text' name='linkinstagram' id='linkinstagram'>
						</li>
						<li>
							<input $check_youtube class='checkboxes toogle' type='checkbox' name='checkyoutube' id='checkyoutube'>
							<label for='checkyoutube'>YouTube</label>
							<input placeholder='Link eingeben' type='text' name='linkyoutube' id='linkyoutube'>
						</li>
						<li>
							<input class='checkboxes toogle' type='checkbox' name='checktwitter' id='checktwitter'>
							<label for='checktwitter'>Twitter</label>
							<input placeholder='Link eingeben' type='text' name='linktwitter' id='linktwitter'>
						</li>
						<li>
							<input class='checkboxes toogle' type='checkbox' name='checktiktok' id='checktiktok'>
							<label for='checktiktok'>TikTok</label>
							<input placeholder='Link eingeben' type='text' name='linktiktok' id='linktiktok'>
						</li>
						<li>
							<input class='checkboxes toogle' type='checkbox' name='checkxing' id='checkxing'>
							<label for='checkxing'>Xing</label>
							<input placeholder='Link eingeben' type='text' name='linkxing' id='linkxing'>
						</li>
						<li>
							<input class='checkboxes toogle' type='checkbox' name='checklinkedin' id='checklinkedin'>
							<label for='checklinkedin'>LinkedIn</label>
							<input placeholder='Link eingeben' type='text' name='linklinkedin' id='linklinkedin'>
						</li>
						<li>
							<input class='checkboxes toogle' type='checkbox' name='checklinktree' id='checklinktree'>
							<label for='checklinktree'>LinkTree</label>
							<input placeholder='Link eingeben' type='text' name='linklinktree' id='linklinktree'>
						</li>
						<li>
							<input class='checkboxes toogle' type='checkbox' name='checkmail' id='checkmail'>
							<label for='checkmail'>E-Mail</label>
							<input placeholder='E-Mail eingeben' type='email' name='linkmail' id='linkmail'>
						</li>
						<li>
							<input class='checkboxes toogle' type='checkbox' name='checkphone' id='checkphone'>
							<label for='checkphone'>Telefon</label>
							<input placeholder='Telefonnr. eingeben' type='text' name='linkphone' id='linkphone'>
						</li>
						<li>
							<input class='checkboxes toogle' type='checkbox' name='checkwhatsapp' id='checkwhatsapp'>
							<label for='checkwhatsapp'>WhatsApp</label>
							<p>Bitte die Landesvorwahl <strong>'0' durch +49</strong> für Deutschland ersetzen.</p>
							<input placeholder='Nummer eingeben' type='text' name='linkwhatsapp' id='linkwhatsapp'>
						</li>
						<li>
							<input class='checkboxes toogle' type='checkbox' name='checkcustomicon' id='checkcustomicon'>
							<label for='checkcustomicon'>Eigenes Icon mit Link</label>
							<div class='expandme'><p>Bitte die Icon-Klasse von <a target='_blank' href='https://fontawesome.com/' class='link expandme'>Font-Awsome einfügen.</a></p>
								<div class='expander'>
									<img src='src/img/font.png' alt='Font-Awsome'>
								</div>
							</div>
							<input type='text' id='customiconclass' placeholder='Icon Class eingeben'>
							<select name='customiconclasstype' id='customiconclasstype'>
								<option value='fas'>FAS</option>
								<option value='fab'>FAB</option>
								<option value='far'>FAR</option>
								<option value='fa'>FA</option>
							</select>
							<input placeholder='Link eingeben' type='text' name='linkcustomicon' id='linkcustomicon'>
						</li>
					</ul>
					<hr>
					<div class='hint'>
						<i class='far fa-smile-wink'></i> Wird kein Link angebgeben, so wird auf die Herstellterseite der Social Media Kanäle verlinkt.
					</div>
				</div>
	
				<div class='box'>
					<h2>Design auswählen</h2>
					<label for='style'>Style festlegen</label>
					<p class=''>Wählen Sie einen der vorgebenen Stile für das Social-Media-Widget.</p>
					<select name='style' id='style'>
						<option value='$style'>Geladener Style</option>
						<option value='basic'>Basic</option>
						<option value='basic-invert'>Basic Umgekehrt</option>
						<option value='round'>Rund</option>
						<option value='square'>Quadrat</option>
						<option value='minimal'>Minimal</option>
						<option value='darker'>Verdunkeln</option>
						<option value='move'>Verschieben</option>
						<option value='basic-asside'>Seitlich - Nur SEO Kachel</option>
						<option value='basic-buble-asside'>Seitlich - Nur SEO Kachel - Rund</option>
					</select>
	
					<a id='morestyles' class='link' href='#'><i class='fas fa-plus'></i>Erweitertes Styling</a>
	
					<div class='setown' id='setown'>
						<hr>
						<label for=''>Eigenen Style festlegen</label>
						<p class=''>Sie können einen eigenen Style festlegen.</p>
						
						<ul id='borderstyles'>
							<li>
								<label for='borderwidth'>Konturstärke</label>
								<input min='0' type='number' name='borderwidth' id='borderwidth' placeholder='0px'>
							</li>
							<li>
								<label for='bordercolor'>Konturfarbe</label>
								<input placeholder='#fff' type='text' name='bordercolor' id='bordercolor'>
							</li>
							<li>
								<label for='bordertype'>Konturtype</label>
								<select name='bordertype' id='bordertype'>
									<option value='none'>Bitte wählen</option>
									<option value='solid'>solid</option>
									<option value='dotted'>dotted</option>
									<option value='double'>double</option>
									<option value='dashed'>dashed</option>
								</select>
							</li>
	
							<li>
								<label for='borderradius'>Konturradius</label>
								<input min='0' type='number' name='borderradius' id='borderradius' placeholder='0px'>
							</li>
						</ul>
						<hr>
						<label for='hoverbg'>Hintergrundfarbe bei Hover</label>
						<p>Legt die Hintergrundfarbe der Iconcontainer fest, wenn sich der Mauszeiger über diese bewegt. Zugelassene Formate sind Hex, RGB-A, CSS-Farbworte, HSL.</p>
						<input placeholder='#fff' type='text' name='hoverbg' id='hoverbg'>
						<hr>
						<label >Größe</label>
						<p>Sie können Sie Größe der Social Media Icons in drei Stufen festlegen.</p>
						<ul id='resize' class='tab'>
							<li><input value='small' name='tab' id='small' type='radio'><label for='small'><i class='fas fa-angle-down'></i>Klein</label></li>
							<li><input checked value='medium' name='tab' id='medium' type='radio'><label for='medium'><i class='fas fa-circle'></i>Standard</label></li>
							<li><input value='large' name='tab' id='large' type='radio'><label for='large'><i class='fas fa-angle-up'></i>Groß</label></li>
							<li><input value='larger' name='tab' id='larger' type='radio'><label for='larger'><i class='fas fa-angle-double-up'></i>Größer</label></li>
						</ul>
					</div>
					<hr>
	
					<ul id='customcolors'>
						<li>
							<label for='color'>Iconfarbe</label>
							<p class=''>Zugelassene Formate sind Hex, RGB-A, CSS-Farbworte, HSL.</p>
							<input value='$finderid' name='color' placeholder='#fff' type='text' id='color'>
						</li>
						<li>
							<label for='background'>Hintergrundfarbe</label>
							<p class=''>Zugelassene Formate sind Hex, RGB-A, CSS-Farbworte, HSL.</p>
							<input name='background' placeholder='#fff' type='text' id='background'>
						</li>
					</ul>
					<hr>
					<label for='alignment'>Zentrierung</label>
					<p class=''>Wählen Sie eine Anordnung der Social-Media-Icons. Bei seitlicher Anordnung (nur SEO Kachel) ist die Funktion nicht verfügbar.</p>
	
					<ul class='tab' id='alignment'>
						<li><input checked value='left' name='alignment' id='left' type='radio'><label for='left'><i class='fas fa-align-left'></i>Links</label></li>
						<li><input value='center' name='alignment' id='center' type='radio'><label for='center'><i class='fas fa-align-center'></i>Mittig</label></li>
						<li><input value='right' name='alignment' id='right' type='radio'><label for='right'><i class='fas fa-align-right'></i>Rechts</label></li>
					</ul>
	
					<hr>
	
					<label for='direction'>Richtung</label>
					<p class=''>Wählen Sie eine Richtung, in der die Icons ausgerichtet werden sollen.</p>
					<ul class='tab' id='direction'>
						<li><input checked value='direction-row' name='direction' id='direction-row' type='radio'><label for='direction-row'><i class='fas fa-right-left'></i>Nebeneinander</label></li>
						<li><input value='direction-col' name='direction' id='direction-col' type='radio'><label for='direction-col'><i id='icon-direction-col' class='fas fa-right-left'></i>Unterneinander</label></li>
					</ul>
					<hr>
					<div class='button' id='generate'><i class='fas fa-code'></i>Übernehmen</div>
				</div>
				<div class='box'>
					<h2>Vorschau</h2>
					<div id='socialmedialistdata'>
						<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
						<div id='socialmedialist' class='basic preview'>
	
						</div>
					</div>
					<div id='hint'></div>
					<hr>
					<label for='export'>Exportcode</label>
					<textarea name='export' id='export'></textarea>
	
				</div>
			</div>
			<div class='fab-group'>
				<a href='/' class='fab'>Zurück</a>
				<div class='static-hint fab'> <i class='fas fa-circle-question'></i> Geladener Code: $finderid</div>
				<a title='Dark/Light Mode' class='fab' onclick='setTheme()'><i class='fas fa-adjust'></i></a>
				<div onclick='openmoremenu()' id='morebtn' class='fab'><i class='fas fa-ellipsis-v'></i>Mehr</div>
				<ul id='moremenu'>
					<li><a target='_blank' href='https://github.com/MCFabian/social-media-widget/issues/new' title='Bug melden via GitHu'><i class='fas fa-bug'></i>Fehler melden</a></li>
				</ul>
			</div>
	

			";

		}
	}

?>
