<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = «utf-8»>

	<?php $title = "LRM" ?>
	<title><?php echo $title;?></title>

	<link rel="icon" href="chestbta-icon.svg" type="image/svg+xml">
	<link rel="icon" sizes="32x32" href="chestbta-icon.png" type="image/png">

	<!-- Metadatos Open Graph -->
	<meta property="og:title" content="<?php echo $title; ?>"/>
	<meta property="og:type" content="website" />
	<meta property="og:description" content="A modpack and a server featuring Create, Computercraft and more! made and hosted by dpkgluci" />

	<link rel="stylesheet" href="normalize.css" type="text/css">
	<link rel="stylesheet" href="sakura-dark.css" type="text/css">
	<?php include "styleandpreload.php" ?>
	<link rel="preload" href="button-tg-h.svg" as="image">
	<link rel="preload" href="button-lrm-modrinth-h.svg" as="image">

</head>
<body>
	<header>
		<?php include "header.php" ?>
		<hr>
	</header>
	<main>
		<p>
			Luci's Remixed Minecraft is a modpack made by dpkgluci, which is intended to be played in my server, <i>LRM Server</i> (Very elaborated name, huh)
    	</p>
		<p><img src="photo_2025-02-22_16-47-38.jpg">
			This modpack features Create, Computercraft, Farmer's delight, Nostalgic tweaks and a lot of other mods! If you like machines and automation, you'll love playing on this server!
		</p>
		<!--
			<p>
			<a href="https://chestbta.duckdns.org/lrm-screenshots.php"
			class="boton-imagen"
			aria-label="Screenshots"
			style="--boton-bg: url('button-screenshots.svg');"></a>
			</p>
		-->
    	<p>
			To play in my server, you have to get the modpack. For that you have to have a modrinth modpack compatible launcher, like multimc, prismlauncher or modrinth launcher. Personally, I prefer to use prismlauncher because it allows you not to only play modrinth packs, but vanilla, curseforge modpacks, betas, and a lot more with ease. It is a really good launcher.
		</p>
		<p>
			To join the server, you have to be white-listed. Join the telegram group to do so.
		</p>
		<p>
			server status: <img src="status.svg" style="vertical-align: -38px;">
		</p>
		<p>
			<a href="https://modrinth.com/modpack/lrm"
				class="boton-imagen"
	   			aria-label="LRM on Modrinth"
				style="--boton-bg: url('button-lrm-modrinth.svg');">
			</a>
		</p>
		<p>
			Server IP: <code>chestbta.duckdns.org:40100</code>
		</p>
    	<p>
      		To share screenshots, videos, chat with the community and get the latest information of the server, join the telegram group using this button below:
		</p>
		<p>
			<a href="https://t.me/chestbta/8678"
				class="boton-imagen"
	   			aria-label="Join the telegram group"
				style="--boton-bg: url('button-tg.svg');">
			</a>
		</p>
		<p>
			Enjoy ;)
		</p>
	</main>
	<?php include "footer.php" ?>
</body>
</html>
