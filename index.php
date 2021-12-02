<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
		<title> Name </title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	<body>
		<main>
			<header>

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
