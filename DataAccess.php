<?php 
class DataAccess {

//Se crean variables de conexión 
public $localhost;
public $user;
public $pass;
public $database;

//constructor de conexión
	 function DataAccess($localhost, $user, $pass, $database) {
	    $this->localhost = $localhost;
	    $this->user = $user;
	    $this->pass = $pass;
	    $this->database = $database;
	  }

//funcion de conexión 
	function connect_db(){
	$mysqli = new MySQLi($this->localhost, $this->user, $this->pass, $this->database);
			if ($mysqli -> connect_errno) {
				die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
					. ") " . $mysqli -> mysqli_connect_error());
			} 
	} 
}
?>