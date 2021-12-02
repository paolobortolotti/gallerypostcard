<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
		<title>LA RIVA </title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	<body>
		<main>
			<header>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1417.323 228.671"><path d="M433.927,243.847V420.135h64.806V452.12H397.851V243.847Z" transform="translate(-397.851 -237.896)" style="fill:#1a171b"/><path d="M705.143,406.564H629.406L608.512,452.12H568.718L670.81,237.9,763.973,452.12H725.2Zm-35.73-86.2-26.408,57.185h50.657Z" transform="translate(-397.851 -237.896)" style="fill:#1a171b"/><path d="M1085.987,364.349V452.12h-36.076V243.847h62.669c37.47,0,68.525,22.78,68.525,60.345a59.239,59.239,0,0,1-34.494,54.112l53.994,93.816h-39.7l-50.644-87.771Zm0-88.517v57.554h25.1c18.97,0,33.939-9.205,33.939-29.01,0-19.432-14.969-28.544-34.031-28.544Z" transform="translate(-397.851 -237.896)" style="fill:#1a171b"/><path d="M1316.211,243.847V452.12h-36.076V243.847Z" transform="translate(-397.851 -237.896)" style="fill:#1a171b"/><path d="M1435.78,243.847l57.925,129.8,54.394-129.8h39.144l-93.538,214.224-96.976-214.224Z" transform="translate(-397.851 -237.896)" style="fill:#1a171b"/><path d="M1757.035,406.564h-76.429l-20.893,45.556h-39.794L1722.011,237.9l93.163,214.224H1776.4Zm-36.421-86.2-26.407,57.185h50.657Z" transform="translate(-397.851 -237.896)" style="fill:#1a171b"/><rect x="426.433" y="199.844" width="100.882" height="28.826" style="fill:#1a171b"/></svg> </header>

			<section id="gallery" class="mobile">
	<?php
	$handle = opendir(dirname(realpath(__FILE__)).'/images/v/');
		while($file = readdir($handle)){

		  if($file !== '.' && $file !== '..'){

			  echo '<div class="polaroid">
			<img class="lazy" src="images/v/'.$file.'" border="0" /></div>';
			  }
			  }
			   ?>
			</section>
		</main>
	</body>
</html>
