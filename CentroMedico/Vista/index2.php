<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
	header("location:../index.php?x=2");//x=2 significa que no han iniciado sesión
if (!isset($_REQUEST['pag']))
	$pag='contenido';
	
if (!isset($_REQUEST['msj']))
	$msj=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Plantilla Principal</title>
<script src="../Js/menu.js"> </script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="../Css/estilos.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../Css/estiloMenu.css" >
</head>
<body>

<div id="divContenedor">
    <div id="divEncabezado"><?php include "encabezado.php"?></div>
	<div id="divMenu"> <?php include "menu.php"?> </div>
	<div id="divContenido"><?php include $pag.".php" ?> </div>
    <div id="divPiePagina"><?php include "piePagina.php"?> </div>
</div>
</body>
</html>