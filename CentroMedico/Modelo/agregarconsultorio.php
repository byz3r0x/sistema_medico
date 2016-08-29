<?php
//Se reciben los datos del formulario
require "../Modelo/ConexionDatos.php";
extract ($_REQUEST);

$objConexion=Conectarse();

$sql = "insert into consultorios (idConsultorio,conNombre) 
values ('$_REQUEST[idConsultorio]' , '$_REQUEST[Nombres]')";

$resultado = $objConexion->query($sql);

if ($resultado)
	echo "El consultorio se ha agregado correctamente";
else
	echo "Problemas al Agregar el medico";

?>
