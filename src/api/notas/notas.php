<?php
//include('../BdConnect.php');

header('Content-Type: application/json');
//Array que simula la respuesta de una consulta
$arrayTodos = [];
array_push($arrayTodos, ["id"=>"456", "titulo"=>"Soy la primra nota"]);
array_push($arrayTodos, ["id"=>"456", "titulo"=>"Soy la primra nota"]);
//Envio de los datos
echo json_encode($arrayTodos);
?>