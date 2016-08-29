<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Consultorio.php";
//Creamos el objeto Paciente
$objConsultorio= new Consultorio();
$objConsultorio->CrearConsultorio($_REQUEST['idConsultorio'],$_REQUEST['conNombre']);

$resultado = $objConsultorio->agregarConsultorio();
if ($resultado)
	header ("location:../vista/index2.php?pag=insertarConsultorio&msj=1");
else
	header ("location:../vista/index2.php?pag=insertarConsultorio&msj=2");

?>
