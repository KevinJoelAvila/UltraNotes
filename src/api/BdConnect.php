<?php
require('PDO.php');

$servidor = "localhost";
$usuari = "root";
$contrasenna = "";
$BD = "ultranotes";
BdD::connect($servidor, $usuari, $contrasenna, $BD);

?>