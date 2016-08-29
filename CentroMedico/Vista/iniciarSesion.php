<link href="Css/login.css" rel="stylesheet">
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
				
						
					</div>
						<div class="logo" align="center">Iniciar Sesión</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
<form id="form1" name="form1" method="post" action="Controlador/validarInicioSesion.php" role="form" style="display: block;">
  <table border="0" align="center">
  
	<div class="form-group">
    <tr>
 
      <input align="rigth" name="login" type="text" id="login" size="40" class="form-control" placeholder="Digite su usuario" required/></td>
    </tr>
	</div>
	<hr>
    <tr>
     
      <input align="rigth" name="pass" type="password" id="pass" size="40" class="form-control" placeholder="Digite su Contraseña" required/></td>
    </tr>
    <tr>
	<hr>
      <td  ><input type="submit" align="center" name="button" id="button" value="Enviar"  class="form-control btn btn-login"/></td>
    </tr>
  </table>
</form>

<?php

if ($x==1)
	echo "<br><p align='center'> Usuario no registrado con los datos ingresados, vuelva a intentar";
if ($x==2)
	echo "<br><p align='center'> Deben Iniciar Sesión para poder ingresar a la Aplicación";
if ($x==3)
	echo "<br><p align='center'> El Usuario ha cerrado la Sesión";
?>