<?php
require('../BdConnect.php');

// Captura el envio de datos al php
$data = json_decode(file_get_contents("php://input"));

$accion = $_GET['accion'];

if($_GET['user']) $user = $_GET['user'];

if($_GET['pass']) $pass = $_GET['pass'];

if($_GET['accion'] == "login") $accion = "SELECT user, pass, token FROM users WHERE user = :user AND pass = :pass";
else if($_GET['accion'] == "register") $accion = "INSERT INTO users (user, pass) VALUES (:user, :pass)";

if( $_SERVER['REQUEST_METHOD'] == "GET" ){
    
    if($user != "" && $pass != "")
    {
        try {
            $consulta = (BdD::$connection)->prepare($accion);
            $consulta->bindParam('user',$user);
            $consulta->bindParam('pass',$pass);
            $qFiles = $consulta->execute();
            if ($qFiles > 0) {
                $consulta->setFetchMode(PDO::FETCH_ASSOC); 
                $result = $consulta->fetchAll();
                
            }
            if (!empty($result))
            {
                foreach($result as $fila) {
                    $resposta = $fila;
                }
                echo json_encode($resposta);
            }
            else echo json_encode(array("error" => "Credenciales incorrectas"));
        } catch(PDOException $e) {
            echo json_encode(array("Error" => $e->getCode(), "Mensaje" => $e->getMessage()));
        }    
    }
}







?>