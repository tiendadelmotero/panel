<?php
/*$server="localhost";
$user="root";
$pass="";
$bd="motos";

$conexion=mysqli_connect($server,$user,$pass,$bd);
if($conexion){
    //echo "exito";
}else{
    echo "pailas";
}*/
$dbHost = 'remotemysql.com';

$dbUsername = 'HRme7q7ZMd';

$dbPassword = 'SHriNyNfWv';

$dbName = 'HRme7q7ZMd';
//Conectamos y seleccionamos la base de datos

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {

die("Conexión fallida:". $db->connect_error);

}

?>
