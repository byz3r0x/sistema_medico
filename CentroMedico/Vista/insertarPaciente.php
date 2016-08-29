    <form id="form1" name="form1" method="post" class="form-horizontal" action="../controlador/validarInsertarPaciente.php">
      <table width="42%" border="0" align="center">
        <tr class="texto_titulo">
		
          <td colspan="2" align="right">INSERTAR PACIENTE</td>
		 
        </tr>
	
        <tr>
		<hr>
       <td width="28%" align="right" class="col-lg-2 control-label">Identificación</td>
          <td width="72%"><label for="identificacion"></label>
          <input name="identificacion" type="int" id="identificacion" "size="60" class="form-control"  required /></td>
        </tr>
        <tr>
        <td width="28%" align="right" class="col-lg-2 control-label">Nombres</td>
          <td><input name="nombres" type="text" id="nombres" size="40" class="form-control" required /></td>
        </tr>
        <tr>
         <td width="28%" align="right" class="col-lg-2 control-label">Apellidos</td>
          <td><input name="apellidos" type="text" id="apellidos" size="40" class="form-control" required/></td>
        </tr>
        <tr>
         <td width="28%" align="right" class="col-lg-2 control-label">Fecha Nacimiento</td>
          <td><input name="fechaNacimiento" type="date" id="fechaNacimiento" style="width:270px" class="form-control" required/></td>
        </tr>
        <tr>
         <td width="28%" align="right"class="col-lg-2 control-label">Sexo</td>
          <td><label for="sexo"></label>
            <select name="sexo" id="sexo" class="form-control">
               <option value="No">Seleccione</option>	
              <option value="Femenino">Femenino</option>
              <option value="Masculino">Masculino</option>
          </select></td>
        </tr>
        <tr  class="texto_titulo">
		
          <td colspan="2" align="center" ><hr><input type="submit" name="button" id="button" value="Enviar" class="btn btn-default"/></td>
        </tr>
      </table>
    </form>
    
    <?php
if ($msj==1)
	echo '<p align="center" >Se ha Agregado el Paciente Correctamente';
if ($msj==2)
	echo '<p align="center"> Problemas al Agregar el Paciente, favor Revisar';

?>