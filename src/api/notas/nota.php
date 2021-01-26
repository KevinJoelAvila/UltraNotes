<?php
//include('../BdConnect.php');

header('Content-Type: application/json');
$arr = array("1"=>"titulo 1", "2"=>"titulo 2", "3"=>"titulo 3", "4"=>"Titulo 4", "5"=>"titulo 5", "titulo 6"=>"Hola", "Titulo 7"=>"Titulo 7");
echo json_encode($arr);
?>