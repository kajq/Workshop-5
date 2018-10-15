<?php 
require 'Students.php';
if ($argc < 2 ) {exit(include 'menu.php' );}

switch ($argv[1]) {
	case 'Insert':
		if ($argc <= 4 ) {exit(include 'menu.php' );}
		$Student = new Student('', $argv[2], $argv[3], $argv[4]);
		$Student->insert();
		echo "Datos insertados: {$Student->to_string()}";
		$Student->select();	
		break;
	case 'Select':
		$Student = new Student('','','','');
		$Student->select();	
		break;
	case 'Update':
		if ($argc <= 5 ) {exit(include 'menu.php' );}
		$Student = new Student($argv[2], $argv[3], $argv[4], $argv[5]);
		$Student->update();
		$Student->select();	
		break;
	case 'Delete':
		if ($argc <= 2 ) {exit(include 'menu.php' );}
		$Student = new Student($argv[2],'','','');
		$Student->delete();
		$Student->select();
		break;
	default:
		include 'menu.php';
		break;
}



?>
