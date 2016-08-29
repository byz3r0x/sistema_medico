    <form id="form1" name="form1" method="post" class="form-horizontal" action="../Controlador/validarInsertarConsultorio.php">
      <table width="42%" border="0" align="center">
        <tr class="texto_titulo">
		
          <td colspan="2" align="right">Insertar Consultorio</td>
		 
        </tr>
	
        <tr>
		<hr>
       <td width="28%" align="right" class="col-lg-2 control-label">Numero de Consultorio</td>
          <td width="72%"><label for="idConsultorio"></label>
          <input name="idConsultorio" type="int" id="idConsultorio " size="60" class="form-control"></td>
        </tr>
          <td width="28%" align="right" class="col-lg-2 control-label">Nombres</td>
          <td width="72%"><label for="Nombres"></label>
          <input name="Nombres" type="text" id="Nombres " size="60" class="form-control"  required /></td>
        </tr>
        <tr>
        
       
        <tr  class="texto_titulo">
		
          <td colspan="2" align="center" ><hr><input type="submit" name="button" id="button" value="Enviar" class="btn btn-default"/></td>
        </tr>
      </table>
    </form>
    
    <?php
if ($msj==1)
	echo '<p align="center" >Se ha Agregado el Consultorio Correctamente';
if ($msj==2)
	echo '<p align="center"> Problemas al Agregar el Paciente, favor Revisar';

?>