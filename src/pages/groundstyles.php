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

		.direction-row {
			flex-direction: row;
		}

		.direction-col {
			flex-direction: column;
		}

		.direction-col .media {
			margin: 0;
		}

		.direction-col .media + .media {
			margin-top: 5px;
		}

	</style>