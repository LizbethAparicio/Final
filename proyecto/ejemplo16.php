<?php
class Empleado extends PHPUnit_Framework_TestCase{
	public $nombre;
	public $salario;
	public $alto;
   public function __construct($nombre,$salario,$alto)
	{

		$this->nombre=$nombre;
		$this->salario=$salario;
		$this->alto=$alto;

	}
		public function testgetNombre(){
			return $this->nombre;
		}
		public function testgetSalario(){
			return $this->salario;
		}
		public function testgetAlto(){
			return $this->alto;
		}
	}
	$miper= new Empleado ("paco",20,1996);
	echo"Empleado 1<br>";
	$res=$miper->testgetNombre();
	echo "$res<br>";
	$res=$miper->testgetSalario();
	echo "$res<br>";
	$res=$miper->testgetAlto();
		echo "$res<br>";
	
	

?>