<?php 
/*require 'DataAccess.php';
$DataAccess = new DataAccess();
$DataAccess->connect_db();*/

require 'Students.php';

if ($argc < 2 )
{
    exit(include 'menu.php' );
}

switch ($argv[1]) {
	case 'Insert':
		$Student = new Student('', $argv[2], $argv[3], $argv[4]);
		$Student->insert();
		echo "Datos insertados: {$Student->to_string()}";
//		 mysqli_query($DataAccess->mysqli,"INSERT INTO students VALUES('', '$argv[2]', '$argv[3]', '$argv[4]')");
		break;
	case 'Select':
		$Student = new Student('','','','');
		$Student->select();	
		break;
	default:
		include 'menu.php';
		break;
}



?>
