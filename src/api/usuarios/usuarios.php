<?php
require('../BdConnect.php');
//header('Access-Control-Allow-Credentials: true');
// Captura el envio de datos al php
$data = json_decode(file_get_contents("php://input"));

// Accion que se ha realizado en la vista
$accion = $_GET['accion'];

// Usuario y contraseña
if($_GET['user']) $user = $_GET['user'];
if($_GET['pass']) $pass = $_GET['pass'];

// Compruebo que el metodo de envio sea el que utiliza axios
if( $_SERVER['REQUEST_METHOD'] == "GET" ){
    
    if($user != "" && $pass != "")
    {
        // Encriptacion de contraseña
        $passEncrypted = hash('sha256',$pass);
        // Intenta ejecutar un consulta SQL
        try {
            if($accion == "login"){
                $consulta = (BdD::$connection)->prepare("SELECT user, pass, token FROM users WHERE user = :user AND pass = :pass");
                $consulta->bindParam('user',$user);
                $consulta->bindParam('pass',$passEncrypted);
                $consulta->execute();
                $result = $consulta->fetch(PDO::FETCH_ASSOC);
                // Si el array no esta vacio, significa que existe el usuario
                if (!empty($result))
                {
                    //setcookie ( "user" , $userEncrypted , time()+86400, "localhost", "/", false, true );
                    //setcookie ( "pass" , $passEncrypted , time()+86400, "localhost", "/", false, true );
                    //setcookie ( "token" , $result['token'] , time()+86400, "localhost", "/", false, true );
                    echo json_encode(array("Respuesta" => array("usuario" => $user, "pass" => $passEncrypted, "token" => $result['token'])));
                }
                else echo json_encode(array("Error" => "1"));
            } else if($accion == "register"){
                $consulta = (BdD::$connection)->prepare("SELECT user, pass, token FROM users WHERE user = :user AND pass = :pass");
                $consulta->bindParam('user',$user);
                $consulta->bindParam('pass',$passEncrypted);
                $consulta->execute();
                $result = $consulta->fetch(PDO::FETCH_ASSOC);
                // SI devuelve resultados el usuario no se registra
                if (!empty($result))
                {
                    echo json_encode(array("Error" => "2"));
                }
                else {
                    $consulta = (BdD::$connection)->prepare("INSERT INTO users (user, pass) VALUES (:user, :pass)");
                    $consulta->bindParam('user',$user);
                    $consulta->bindParam('pass',$passEncrypted);
                    $consulta->execute();
                    
                    echo json_encode(array("Respuesta" => "Correcto"));
                }
            }
            
        } 
        // Captura y envia el error SQL
        catch(PDOException $e) 
        {
            echo json_encode(array("Error" => $e->getCode(), "Mensaje" => $e->getMessage()));
        }    
    }
}







?>