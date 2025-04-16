<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = «utf-8»>

	<?php $title = "Random Events" ?>
	<title><?php echo $title;?></title>

	<link rel="icon" href="chestbta-icon.svg" type="image/svg+xml">
	<link rel="icon" sizes="32x32" href="chestbta-icon.png" type="image/png">

	<!-- Metadatos Open Graph -->
	<meta property="og:title" content="<?php echo $title; ?>"/>
	<meta property="og:type" content="website" />
	<meta property="og:description" content="Random Events" />

	<link rel="stylesheet" href="normalize.css" type="text/css">
	<link rel="stylesheet" href="sakura-dark.css" type="text/css">
	<?php include "styleandpreload.php" ?>

</head>
<body>
	<div class="container">
		<header>
			<?php include "header.php" ?>
			<hr>
		</header>
		<main>
			<p>
				<del>This page keeps track of random events that happen on the server</del> NOT ANYMORE
			</p>
			<p>
				Now we do all the event releated things through telegram. To join events, you must join our telegram group
			</p>
			<p>
				There are Bingo events (<a href="https://playminecraftbingo.com/">using a map made by LORGON111</a>), Pixel art events, both on ChestBTA and LRM, and more! .
			</p>
		</main>
		<?php include "footer.php" ?>
	</div>
</body>
</html>
