<?php
require('../BdConnect.php');

// Captura el envio de datos al php
$data = json_decode(file_get_contents("php://input"));

if( $_SERVER['REQUEST_METHOD'] == "GET" ){
    if($_GET['user'])
    $user = $_GET['user'];

    if($_GET['password'])
    $password = $_GET['password'];

    $tokensecreto = "ljdf9q8uequerq0e98ueq9";

    if($user != "" && $password != ""){
        try {
            $consulta = (BdD::$connection)->prepare('
                    SELECT user, pass, token FROM users WHERE user = :user AND pass = :password 
                ');
            $consulta->bindParam('user',$user);
            $consulta->bindParam('password',$password);
            $qFiles = $consulta->execute();
            if ($qFiles > 0) {
                $consulta->setFetchMode(PDO::FETCH_ASSOC); 
                $result = $consulta->fetchAll();
                foreach($result as $fila) {
                    $resposta = $fila;
                }
            }
            if ($consulta->fetchColumn() > 0)
                echo json_encode(1);
            else echo json_encode(1);
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }    
    }
}







?>