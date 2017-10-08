<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Main</title>
</style>
</head>
<body background="assets/background.jpg">
	<header>
	<h1 class="logo"><a href="index.php">GameName</a></h1>
	<?php
		require('menu.php');
        echo Menu::returnHTMLmenu($_GET['page']);
    ?>
	</header>
	<?php
		require('content.php');
        echo Content::getPage($_GET['page']);
    ?>
</body>
</html>