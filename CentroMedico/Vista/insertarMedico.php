  
	<form id="form1" name="form1" method="post" action="../controlador/validarInsertarMedico.php">
      <table width="42%" border="0" align="center">
        <tr class="texto">
          <td colspan="2" align="center">INSERTAR MEDICO</td>
        </tr>
        <tr>
	<td width="28%" align="right" class="col-lg-2 control-label" >Identificación</td>
          <td width="72%"><label for="identificacion"></label>
          <input name="identificacion" type="int" id="identificacion" size="40" class="form-control" required /></td>
        </tr>
        <tr>
          <td width="28%" align="right" class="col-lg-2 control-label">Nombres</td>
          <td><input name="nombres" type="text" id="nombres" size="40" class="form-control"required /></td>
        </tr>
        <tr>
          <td width="28%" align="right" class="col-lg-2 control-label">Apellidos</td>
          <td><input name="apellidos" type="text" id="apellidos" size="40"class="form-control" required/></td>
        </tr>
        <tr>
          <td width="28%" align="right" class="col-lg-2 control-label">Fecha Ingreso</td>
          <td><input name="fechaIngreso" type="date" id="fechaIngreso" style="width:270px" class="form-control"required/></td>
        </tr>
		        <tr>
         <td width="28%" align="right"class="col-lg-2 control-label">Especialidad</td>
          <td><input name="especialidad" type="text" id="especialidad"class="form-control" size="40" required /></td>
        </tr>
        <tr>
		        <tr>
          <td width="28%" align="right" class="col-lg-2 control-label">Telefono</td>
          <td><input name="telefono" type="text" id="telefono" size="40" class="form-control"required /></td>
        </tr>
        <tr>
		        <tr>
          <td width="28%" align="right" class="col-lg-2 control-label">Correo</td>
          <td><input name="correo" type="email" id="correo" size="40" class="form-control"required /></td>
        </tr>
        <tr>
        
        <tr  class="texto">
          <td colspan="2" align="center" ><hr><input type="submit" name="button" id="button" value="Enviar" class="btn btn-default"/></td>
        </tr>
      </table>
    </form>
    
    <?php
if ($msj==1)
	echo '<p align="center" >Se ha Agregado el Medico Correctamente';
if ($msj==2)
	echo '<p align="center"> Problemas al Agregar el Medico, favor Revisar';

?>