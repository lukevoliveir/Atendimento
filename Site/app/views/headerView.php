<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= $title ?></title>
	
	<link rel="stylesheet" href="<?=$base ?>app/www/css/normalize.css">
	<link rel="stylesheet" href="<?=$base ?>app/www/css/style.css">
	<link rel="icon"  href="<?=$base ?>app/www/images/favicon.ico">
</head>
<body>
<div class="layout">		
	<header>
		<nav class="nav">
			<ul>
				<li><a class="nav__item" href="#">Login</a></li>
			</ul>
		</nav>

		<section class="section-title">
			<h1 class="section-title__logo">Faculdade Bilac</h1>
		</section>	
	</header>

	<?php include $centro; ?>
	