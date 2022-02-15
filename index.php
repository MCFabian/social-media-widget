<!doctype html>
<html id="themehere" class="dark">
<head>
	<meta charset="utf-8">
	<title>Social Media Generator - PHP Version</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="src/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="src/img/gen.png" type="image/x-icon">

</head>

<body>

	<?php include("src/pages/list.php") ?>
	<div id="popupcontainer" class="popupcontainer">
		<div class="popup">
			<h2>Updates</h2>
			<hr>
			<ul>
				<li>Die Codeausgabe wurde optimiert: Es werden nun nur die Social-Media Kanäle erzeugt und ausgegeben, welche auch ausgewählt sind. Gleiches gilt für den gewählten Style.</li>
				<li>Man kann nun einen Borderradius festlegen, dieser ist an den weiteren Kontureinstellungn gebunden.</li>
				<li>Kleine Optimierungen und Fehlerbehebungen.</li>
			</ul>
			<hr>
			<button onclick="popup()" class="button">Schließen</button>
		</div>
	</div>

	<style id="hovestyle"></style>

	<style id="basic">
		/* BASIC */
		.basic > .media {
			background: #fff;
			color: #323232;
			border-radius: 2px;
			transition: .2s ease-in;
		}

		.basic > #whatsapp:hover{
			color: #fff !important;
			background: #25D366 !important;
		}
		
		.basic > #facebook:hover{
			color: #fff !important;
			background: #1877f2 !important;
		}
		
		.basic > #instagram:hover{
			color: #fff !important;
			background: #ec4354 !important;
		}

		.basic > #youtube:hover{
			color: #fff !important;
			background: #ff0000 !important;
		}

		.basic > #twitter:hover{
			color: #fff !important;
			background: #1d9bf0 !important;
		}

		.basic > #tiktok:hover{
			color: #fff !important;
			background: #fe2c55 !important;
		}
		
		.basic > #xing:hover{
			color: #fff !important;
			background: #1A7576 !important;
		}
		
		.basic > #linkedin:hover{
			color: #fff !important;
			background: #0073b1 !important;
		}
		
		.basic > #linktree:hover{
			color: #fff !important;
			background: #0273A6 !important;
		}
		
		.basic > #mail:hover{
			color: #fff !important;
			background: #0273A6 !important;
		}

		.basic > #telefon:hover{
			color: #fff !important;
			background: #0273A6 !important;
		}
		
		.basic > #customicon:hover{
			color: #fff !important;
			background: #0273A6 !important;
		}

	</style>

	<style id="basic-invert">
		.basic-invert > .media {
			border-radius: 2px;
			transition: .2s ease-in;
		}

		.basic-invert #whatsapp:hover,
		.basic-invert #facebook:hover,
		.basic-invert #instagram:hover,
		.basic-invert #youtube:hover,
		.basic-invert #twitter:hover,
		.basic-invert #tiktok:hover,
		.basic-invert #xing:hover,
		.basic-invert #linkedin:hover,
		.basic-invert #linktree:hover,
		.basic-invert #mail:hover,
		.basic-invert #telefon:hover,
		.basic-invert #customicon:hover {
			background: #fff;
			color: #323232;
		}

		/*INVERT*/

		.basic-invert > #whatsapp{
			color: #fff;
			background: #25D366;
		}
		
		.basic-invert > #facebook{
			color: #fff;
			background: #1877f2;
		}
		
		.basic-invert > #instagram{
			color: #fff ;
			background: #ec4354;
		}

		.basic-invert > #youtube{
			color: #fff;
			background: #ff0000;
		}


		.basic-invert > #twitter{
			color: #fff;
			background: #1d9bf0;
		}

		.basic-invert > #tiktok{
			color: #fff;
			background: #fe2c55;
		}
		
		.basic-invert > #xing{
			color: #fff;
			background: #1A7576;
		}

		.basic-invert > #linkedin{
			color: #fff;
			background: #0073b1;
		}
		
		.basic-invert > #linktree{
			color: #fff;
			background: #0273A6;
		}
		
		.basic-invert > #mail{
			color: #fff;
			background: #0273A6;
		}

		.basic-invert > #telefon {
			color: #fff;
			background: #0273A6;
		}

		.basic-invert > #customicon{
			color: #fff;
			background: #0273A6;
		}
	</style>

	<style id="round">
		/*ROUND*/
		.round >  .media {
			border-radius: 100%;
			background: grey;
			color: #fff;
			transition: border-radius .3s ease-in-out;
		}
		
		.round > .media:hover {
			border-radius: 10%;
		}
	</style>

	<style id="square">
		/*SQUARE*/
		.square > .media {
			border-radius: 0;
			background: grey;
			color: #fff;
			transition: padding .2s;
		}
		
		.square > .media:hover {
			padding-left: 15px;
			padding-right: 15px;
		}
	</style>

	<style id="minimal">
		/* MINIMAL */
		.minimal > .media {
			border: none;
			color: #fff;
			background: none;
			padding-bottom: 10px;
			border-bottom: 1px solid transparent;
			border-radius: 0;
			transition: .2s ease-in-out;
		}
		
		.minimal > .media:hover {
			border-bottom: 1px solid #fff;
			transform:translate(0px,-4px);
		}
	</style>

	<style id="darker">
		/* DARKER */
		.darker > .media {
			border: none;
			color: #fff;
			background: none;
			padding-bottom: 10px;
			transition: .2s ease-in-out;
			position: relative;
			border-radius: 0;
			z-index: 2;
		}

		.darker >.media::after {
			width: 100%;
			height: 100%;
			position: absolute;
			top: 0;
			left: 0;
			content: "";
			background: rgba(0, 0, 0, 0.0);
			z-index: 1;
			transition: .2s ease-in;
		}

		.darker > .media:hover::after {
			background: rgba(0, 0, 0, 0.25);
		}
	</style>

	<style id="move">
		/* MOVE */
		.move > .media {
			position: relative;
			background: none;
			border: 1px solid #fff;
			border-radius: 0;
			z-index: 1;
		}

		.move > .media::after {
			width: 0;
			height: 100%;
			position: absolute;
			top: 0;
			left: 0;
			content: "";
			background: #fff;
			transition: .2s ease-in-out;
			z-index: -1;
		}

		.move > .media:hover::after {
			width: 100%;
		}
	</style>

	<style id="basic-asside">
		
		/* SEO ONE */
		.basic-asside {
			position: fixed;
			display: flex;
			flex-direction: column;
			right: 0;
			top: 50%;
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
			padding: 0 !important;
			box-shadow: -9px -1px 15px -6px rgba(0,0,0,0.41);
		}

		#socialmedialist.basic-asside {
			z-index: 99;
		}

		.basic-asside > .media {
			background: #fff;
			color: #323232;
			border-radius: 2px;
			transition: .2s ease-in;
			padding: 18px;
			margin: 0 !important;
			z-index: 2;
			font-size: 14px;
		}

		.basic-asside.large > .media {
			background: #fff;
			color: #323232;
			border-radius: 2px;
			transition: .2s ease-in;
			padding: 22px;
			margin: 0 !important;
			z-index: 2;
			font-size: 15px;
		}

		.basic-asside.larger > .media {
			background: #fff;
			color: #323232;
			border-radius: 2px;
			transition: .2s ease-in;
			padding: 24px 22px 20px 22px;
			margin: 0 !important;
			z-index: 2;
			font-size: 20px;
			height: 24px;
			width: 24px;
		}

		.basic-asside.small > .media {
			background: #fff;
			color: #323232;
			border-radius: 2px;
			transition: .2s ease-in;
			padding: 14px;
			margin: 0 !important;
			z-index: 2;
			font-size: 12px;
		}

		.basic-asside > .media + .media {
			border-top: 1px solid #ddd;	
		}

		
		.basic-asside > #whatsapp:hover{
			color: #fff !important;
			background: #25D366 !important;
		}
		
		.basic-asside > #facebook:hover{
			color: #fff !important;
			background: #1877f2 !important;
		}
		
		.basic-asside > #instagram:hover{
			color: #fff !important;
			background: #ec4354 !important;
		}

		.basic-asside > #youtube:hover{
			color: #fff !important;
			background: #ff0000 !important;
		}

		.basic-asside > #twitter:hover{
			color: #fff !important;
			background: #1d9bf0 !important;
		}

		.basic-asside > #tiktok:hover{
			color: #fff !important;
			background: #fe2c55 !important;
		}
		
		.basic-asside > #xing:hover{
			color: #fff !important;
			background: #1A7576 !important;
		}
		
		.basic-asside > #linkedin:hover{
			color: #fff !important;
			background: #0073b1 !important;
		}
		
		.basic-asside > #linktree:hover{
			color: #fff !important;
			background: #0273A6 !important;
		}
		
		.basic-asside > #mail:hover{
			color: #fff !important;
			background: #0273A6 !important;
		}

		.basic-asside > #telefon:hover{
			color: #fff !important;
			background: #0273A6 !important;
		}
		
		.basic-asside > #customicon:hover{
			color: #fff !important;
			background: #0273A6 !important;
		}

	</style>

	<style id="basic-buble-asside">
		#socialmedialist.basic-buble-asside {
			z-index: 99;
		}

		.basic-buble-asside > .media {
			background: #fff;
			color: #323232;
			transition: .2s ease-in;
			border-radius: 100%;
			box-shadow: -9px -1px 15px -6px rgba(0,0,0,0.41);
			margin: 5px 0;
			padding: 18px;
			z-index: 2;
			font-size: 15px;
		}

		.basic-buble-asside.small {
			right: 10px;
		}

		.basic-buble-asside.small > .media {
			background: #fff;
			color: #323232;
			transition: .2s ease-in;
			border-radius: 100%;
			box-shadow: -9px -1px 15px -6px rgba(0,0,0,0.41);
			margin: 5px 0;
			padding: 15px;
			z-index: 2;
			font-size: 12px;
		}

		.basic-buble-asside.large {
			right: 10px;
		}

		.basic-buble-asside.large > .media {
			background: #fff;
			color: #323232;
			transition: .2s ease-in;
			border-radius: 100%;
			box-shadow: -9px -1px 15px -6px rgba(0,0,0,0.41);
			margin: 5px 0;
			padding: 22px;
			z-index: 2;
			font-size: 18px;
		}

		.basic-buble-asside.larger  > .media {
			padding: 24px 22px 20px 22px;
			height: 24px;
			width: 24px;
			font-size: 20px;
			background: #fff;
			color: #323232;
			transition: .2s ease-in;
			border-radius: 100%;
			box-shadow: -9px -1px 15px -6px rgba(0,0,0,0.41);
			margin: 5px 0;
			z-index: 2;
		}

		.basic-buble-asside > .media + .media {
			border-top: 1px solid #ddd;	
		}

		
		.basic-buble-asside > #whatsapp:hover{
			color: #fff !important;
			background: #25D366 !important;
		}
		
		.basic-buble-asside > #facebook:hover{
			color: #fff !important;
			background: #1877f2 !important;
		}
		
		.basic-buble-asside > #instagram:hover{
			color: #fff !important;
			background: #ec4354 !important;
		}

		.basic-buble-asside > #youtube:hover{
			color: #fff !important;
			background: #ff0000 !important;
		}

		.basic-buble-asside > #twitter:hover{
			color: #fff !important;
			background: #1d9bf0 !important;
		}

		.basic-buble-asside > #tiktok:hover{
			color: #fff !important;
			background: #fe2c55 !important;
		}
		
		.basic-buble-asside > #xing:hover{
			color: #fff !important;
			background: #1A7576 !important;
		}
		
		.basic-buble-asside > #linkedin:hover{
			color: #fff !important;
			background: #0073b1 !important;
		}
		
		.basic-buble-asside > #linktree:hover{
			color: #fff !important;
			background: #0273A6 !important;
		}
		
		.basic-buble-asside > #mail:hover{
			color: #fff !important;
			background: #0273A6 !important;
		}

		.basic-buble-asside > #telefon:hover{
			color: #fff !important;
			background: #0273A6 !important;
		}
		
		.basic-buble-asside > #customicon:hover{
			color: #fff !important;
			background: #0273A6 !important;
		}

		/* SEO TWO */
		.basic-buble-asside {
			position: fixed;
			display: flex;
			flex-direction: column;
			right: 15px;
			top: 50%;
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
			padding: 0 !important;
		}

	</style>

	<style id="styledata">
		#socialmedialist {
			display: flex;
			justify-content: center;
			text-align: center;
		}
		
		.media {
			padding: 10px;
			font-size: 14px;
			height: 12px;
			width: 12px;
			border-radius: 10px;
			background: #fff;
			color: rgb(34, 34, 34);
			text-decoration: none;
			text-align: center;
			vertical-align: middle;
		}

		.media + .media {
			margin-left: 5px;
		}
	
		/*Size*/
		.small .media {
			font-size: 10px;
			padding: 7px;
			width: 10px;
			height: 10px;
		}

		.large .media {
			font-size: 18px;
			padding: 14px;
			width: 18px;
			height: 18px;
		}

		.larger .media {
			font-size: 20px;
			padding: 16px 14px 12px 14px;
			width: 24px;
			height: 24px;
		}

	</style>
	<div id="notification"></div>
	<div class="wrapper">
		<div class="box">
			<h2>Kanäle auswählen</h2>
			<p>Bitte die zutreffenden Kanäle auswählen. Wird keine Verlinkung angebgeben, so wird auf die Hersteller-Seite verlinkt.</p>
			<a onclick="selectall()" id="selectall" class="link">Alle auswählen</a>
			<hr>
			<ul id="medias">
				<li>
					<label for="checkfacebook">
						<input class="checkboxes" type="checkbox" name="checkfacebook" id="checkfacebook">
						Facebook
					</label>
					<input placeholder="Link eingeben" type="text" name="linkfacebook" id="linkfacebook">
				</li>

				<li>
					<label for="checkinstagram">
						<input class="checkboxes" type="checkbox" name="checkinstagram" id="checkinstagram">
						Instagram
					</label>
					<input placeholder="Link eingeben" type="text" name="linkinstagram" id="linkinstagram">
				</li>
				<li>
					<label for="checkyoutube">
						<input class="checkboxes" type="checkbox" name="checkyoutube" id="checkyoutube">
						YouTube
					</label>
					<input placeholder="Link eingeben" type="text" name="linkyoutube" id="linkyoutube">
				</li>
				<li>
					<label for="checktwitter">
						<input class="checkboxes" type="checkbox" name="checktwitter" id="checktwitter">
						Twitter
					</label>
					<input placeholder="Link eingeben" type="text" name="linktwitter" id="linktwitter">
				</li>
				<li>
					<label for="checktiktok">
						<input class="checkboxes" type="checkbox" name="checktiktok" id="checktiktok">
						TikTok
					</label>
					<input placeholder="Link eingeben" type="text" name="linktiktok" id="linktiktok">
				</li>
				<li>
					<label for="checkxing">
						<input class="checkboxes" type="checkbox" name="checkxing" id="checkxing">
						Xing
					</label>
					<input placeholder="Link eingeben" type="text" name="linkxing" id="linkxing">
				</li>
				<li>
					<label for="checklinkedin">
						<input class="checkboxes" type="checkbox" name="checklinkedin" id="checklinkedin">
						LinkedIn
					</label>
					<input placeholder="Link eingeben" type="text" name="linklinkedin" id="linklinkedin">
				</li>
				<li>
					<label for="checklinktree">
						<input class="checkboxes" type="checkbox" name="checklinktree" id="checklinktree">
						LinkTree
					</label>
					<input placeholder="Link eingeben" type="text" name="linklinktree" id="linklinktree">
				</li>
				<li>
					<label for="checkmail">
						<input class="checkboxes" type="checkbox" name="checkmail" id="checkmail">
						E-Mail
					</label>
					<input placeholder="E-Mail eingeben" type="email" name="linkmail" id="linkmail">
				</li>
				<li>
					<label for="checkphone">
						<input class="checkboxes" type="checkbox" name="checkphone" id="checkphone">
						Telefon
					</label>
					<input placeholder="Telefonnr. eingeben" type="text" name="linkphone" id="linkphone">
				</li>
				<li>
					<label for="checkwhatsapp">
						<input class="checkboxes" type="checkbox" name="checkwhatsapp" id="checkwhatsapp">
						WhatsApp
					</label>
					<p>Bitte die Landesvorwahl <strong>"0" durch +49</strong> für Deutschland ersetzen.</p>
					<input placeholder="Nummer eingeben" type="text" name="linkwhatsapp" id="linkwhatsapp">
				</li>
				<li>
					<label for="checkcustom">
						<input class="checkboxes" type="checkbox" name="checkcustomicon" id="checkcustomicon">
						Eigenes Icon mit Link
					</label>
					<div class="expandme"><p>Bitte die Icon-Klasse von <a target="_blank" href="https://fontawesome.com/" class="link expandme">Font-Awsome einfügen.</a></p>
						<div class="expander">
							<img src="src/img/font.png" alt="Font-Awsome">
						</div>
					</div>
					<input type="text" id="customiconclass" placeholder="Icon Class eingeben">
					<select name="customiconclasstype" id="customiconclasstype">
						<option value="fas">FAS</option>
						<option value="fab">FAB</option>
						<option value="far">FAR</option>
						<option value="fa">FA</option>
					</select>
					<input placeholder="Link eingeben" type="text" name="linkcustomicon" id="linkcustomicon">
				</li>
			</ul>
			<hr>
			<div class="hint">
				<i class='far fa-smile-wink'></i> Wird kein Link angebgeben, so wird auf die Herstellterseite der Social Media Kanäle verlinkt.
			</div>
		</div>

		<div class="box">
			<h2>Design auswählen</h2>
			<label for="style">Style festlegen</label>
			<p class="">Wählen Sie einen der vorgebenen Stile für das Social-Media-Widget.</p>
			<select id="style">
				<option value="basic">Basic</option>
				<option value="basic-invert">Basic Umgekehrt</option>
				<option value="round">Rund</option>
				<option value="square">Quadrat</option>
				<option value="minimal">Minimal</option>
				<option value="darker">Verdunkeln</option>
				<option value="move">Verschieben</option>
				<option value="basic-asside">Seitlich - Nur SEO Kachel</option>
				<option value="basic-buble-asside">Seitlich - Nur SEO Kachel - Rund</option>
			</select>

			<a id="morestyles" class="link" href="#"><i class="fas fa-plus"></i>Erweitertes Styling</a>

			<div class="setown" id="setown">
				<hr>
				<label for="">Eigenen Style festlegen</label>
				<p class="">Sie können einen eigenen Style festlegen.</p>
				
				<ul id="borderstyles">
					<li>
						<label for="borderwidth">Konturstärke</label>
						<input min="0" type="number" name="borderwidth" id="borderwidth" placeholder="0px">
					</li>
					<li>
						<label for="bordercolor">Konturfarbe</label>
						<input placeholder="#fff" type="text" name="bordercolor" id="bordercolor">
					</li>
					<li>
						<label for="bordertype">Konturtype</label>
						<select name="bordertype" id="bordertype">
							<option value="none">Bitte wählen</option>
							<option value="solid">solid</option>
							<option value="dotted">dotted</option>
							<option value="double">double</option>
							<option value="dashed">dashed</option>
						</select>
					</li>

					<li>
						<label for="borderradius">Konturradius</label>
						<input min="0" type="number" name="borderradius" id="borderradius" placeholder="0px">
					</li>
				</ul>
				<hr>
				<label for="hoverbg">Hintergrundfarbe bei Hover</label>
				<p>Legt die Hintergrundfarbe der Iconcontainer fest, wenn sich der Mauszeiger über diese bewegt. Zugelassene Formate sind Hex, RGB-A, CSS-Farbworte, HSL.</p>
				<input placeholder="#fff" type="text" name="hoverbg" id="hoverbg">
				<hr>
				<label >Größe</label>
				<p>Sie können Sie Größe der Social Media Icons in drei Stufen festlegen.</p>
				<ul id="resize" class="tab">
					<li><input value="small" name="tab" id="small" type="radio"><label for="small"><i class="fas fa-angle-down"></i>Klein</label></li>
					<li><input checked value="medium" name="tab" id="medium" type="radio"><label for="medium"><i class="fas fa-circle"></i>Standard</label></li>
					<li><input value="large" name="tab" id="large" type="radio"><label for="large"><i class="fas fa-angle-up"></i>Groß</label></li>
					<li><input value="larger" name="tab" id="larger" type="radio"><label for="larger"><i class="fas fa-angle-double-up"></i>Größer</label></li>
				</ul>
			</div>
			<hr>

			<ul id="customcolors">
				<li>
					<label for="color">Iconfarbe</label>
					<p class="">Zugelassene Formate sind Hex, RGB-A, CSS-Farbworte, HSL.</p>
					<input placeholder="#fff" type="text" id="color">
				</li>
				<li>
					<label for="background">Hintergrundfarbe</label>
					<p class="">Zugelassene Formate sind Hex, RGB-A, CSS-Farbworte, HSL.</p>
					<input placeholder="#fff" type="text" id="background">
				</li>
			</ul>
			<hr>
			<label for="alignment">Zentrierung</label>
			<p class="">Wählen Sie eine Anordnung der Social-Media-Icons. Bei seitlicher Anordnung (nur SEO Kachel) ist die Funktion nicht verfügbar.</p>

			<ul class="tab" id="alignment">
				<li><input checked value="left" name="alignment" id="left" type="radio"><label for="left"><i class="fas fa-align-left"></i>Links</label></li>
				<li><input value="center" name="alignment" id="center" type="radio"><label for="center"><i class="fas fa-align-center"></i>Mittig</label></li>
				<li><input value="right" name="alignment" id="right" type="radio"><label for="right"><i class="fas fa-align-right"></i>Rechts</label></li>
			</ul>


			<hr>
			<button class="button" id="generate">Übernehmen</button>
		</div>
		<div class="box">
			<h2>Vorschau</h2>
			<div id="socialmedialistdata">
				<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
				<div id="socialmedialist" class="basic">

				</div>
			</div>
			<div id="hint"></div>
			<hr>
			<label for="export">Exportcode</label>
			<textarea id="export"></textarea>

		</div>
	</div>
	<div class="fab-group">
		<a id="savecode" class="fab"><i class="fas fa-save"></i>Code speichern</a>
		<a class="fab"><i class="fas fa-ellipsis-v"></i>Mehr</a>
		<ul id="moremenu">
			<li><a onclick="popup()" id="" class="" title="What's new?"><i class="fas fa-certificate" ></i>Updates</a></li>
			<li><a target="_blank" href="https://github.com/MCFabian/social-media-widget/issues/new" class="" title="Bug melden via GitHu"><i class="fas fa-bug"></i>Fehler melden</a></li>
		</ul>
        
		
		
		<a title="Dark/Light Mode" class="fab" onclick="setTheme()"><i class="fas fa-adjust"></i></a>
	</div>

	<script src="src/js/script.js"></script>
	<script src="src/js/gen.js"></script>
</body>
</html>
