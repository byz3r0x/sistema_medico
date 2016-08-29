<?php
class Consultorio
{
	private $idConsultorio;
	private $Nombres;

	
	public function setidConsultorio($idConsultorio)
	{
		$this->idConsultorio=idConsultorio;
	}
	
	public function getidConsultorio()
	{
		return ($this->idConsultorio);
	}
	
	public function setNombres($Nombres)
	{
		$this->Nombres=$Nombres;
	}
	
	public function getNombres()
	{
		return ($this->Nombres);
	}
	
	
	
	public function Consultorio()
	{
		//$objConexion = Conectarse();
	}
	
	public function CrearConsultorio($idConsultorio,$Nombres)
	{
		$this->idConsultorio=$idConsultorio;
		$this->Nombres=$Nombres;
		
	}
	
	public function agregarConsultorio()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into consultorios (idConsultorio,conNombre)
values ('$this->idConsultorio','$this->Nombres')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarConsultorios()
	{
		$this->Conexion=Conectarse();
		$sql="select * from consultorios";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarConsultorio($idConsultorio)
	{
		$this->Conexion=Conectarse();
		$sql="select * from consultorios where idConsultorio='$idConsultorio'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function actualizarConsultorio($idConsultorio)
	{
		$this->Conexion=Conectarse();
		$sql="update consultorios set idConsultorio='$_REQUEST[idConsultorio]', conNombre = '$_REQUEST[Nombres]'
         
           where idConsultorio = '$_REQUEST[idConsultorio]' ";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function eliminarConsultorio($idConsultorio)
	{
		$this->Conexion=Conectarse();
		$sql="select * from consultorios where idConsultorio='$idConsultorio'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
}

?>