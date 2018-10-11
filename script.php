<?php 
//se incluye codigo de conexión
require 'DataAccess.php';
//Se crea el objeto con los parametros requeridos
$DataAccess = new DataAccess("localhost", "root","", "userdb");
//Se llama a la funcion de connect_db
$DataAccess->connect_db();

require 'Students.php';

if ($argc < 2 )
{
    exit(include 'menu.php' );
}

switch ($argv[1]) {
	case 'Insert':
		$Student = new Student($argv[2], $argv[3], $argv[4]);
		break;
	
	default:
		include 'menu.php';
		break;
}



?>
