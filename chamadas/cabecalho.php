<?session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title><?php echo $_SESSION["titulo"];?></title>
	<meta charset="utf-8">
	<meta http-equiv="Expires" content="-1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
	<link rel="shortcut icon" href="<?php echo $_SESSION['icone']; ?>" type="image/x-icon">
	<link rel="stylesheet" href="/var/www/html/css/resetCSS.css">
	<link rel="stylesheet" href="/var/www/html/css/bootstrap.min.css">
	<link rel="stylesheet" href="/var/www/html/css/cssPessoal.css">
	<link rel="stylesheet" href="/var/www/html/js/jquery.min.js">
	<link rel="stylesheet" href="/var/www/html/js/bootstrap.min.js">
	<link rel="stylesheet" href="/var/www/html/js/popper.min.js">
	</head>
<body>
