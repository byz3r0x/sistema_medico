<?php
require "../Modelo/conexionBasesDatos.php";
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST


$objConexion = Conectarse();

$sql="DELETE FROM consultorios WHERE idConsultorio='$_REQUEST[idConsultorio]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	
	header ("location:../vista/listarConsultoriostabla.php?x=3");
else
	header ("location:../vista/listarConsultoriostabla.php?x=4");

?>
