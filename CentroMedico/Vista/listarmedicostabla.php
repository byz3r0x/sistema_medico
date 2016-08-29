<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Medico.php";
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$_REQUEST['x']=0;
$objMedico=new Medico();
$medicos=$objMedico->consultarMedicos();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar Medicos:)</title>
</head>

<body>
<h1 align="center">LISTADO DE MEDICOS</h1>
<table class="table table-hover">
  <tr align="center"  class="texto">
    <td>Identificacion</td>
    <td>Nombres</td>
    <td>Apellidos</td>
    <td>Especialidad</td>
	<td>Telefono</td>
    <td>Correo</td>
	<td>Editar</td>
	<td>Eliminar</td>
  </tr>
 <?php
while($registro=$medicos->fetch_object())
{
?>
  <tr>
    <td><?php echo $registro->medIdentificacion?></td>
    <td><?php echo $registro->medNombres?></td>
    <td><?php echo $registro->medApellidos?></td>
    <td><?php echo $registro->medEspecialidad?></td>
    <td><?php echo $registro->medTelefono?></td>
	 <td><?php echo $registro->medCorreo?></td>
   
  <td align="center"><a href="frmactualizarmedico.php?idMedico=<?php echo $registro->idMedico?>"><img src="../Imagenes/editar.jpg"
   width="29" height="24" /></a></td>        
   <td align="center"><a href="eliminarmedico.php?idMedico=<?php echo $registro->idMedico?>"><img src="../Imagenes/eliminar.png"
    width="29" height="24" /></a></td>
  	</tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>
<p>
<?php

if ($_REQUEST['x']==1)
	echo "Se ha actualizado el Medico correctamente";
if ($_REQUEST['x']==2)
	echo "Problemas al actualizar el Medico";	
if ($_REQUEST['x']==3)
	echo "Se ha eliminado el Medico correctamente";
if ($_REQUEST['x']==4)
	echo "Problemas al eliminar el Medico";

?>
</body>
</html>