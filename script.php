<?php 
//se incluye codigo de conexión
require 'DataAccess.php';
//Se crea el objeto con los parametros requeridos
$DataAccess = new DataAccess("localhost", "root","", "userdb");
//Se llama a la funcion de connect_db
$DataAccess->connect_db();

?>
