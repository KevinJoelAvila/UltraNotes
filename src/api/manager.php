<?php
require __DIR__ . '\vendor\autoload.php';
use GuzzleHttp\Client;

$tokenSecreto = "ljdf9q8uequerq0e98ueq9";

$usuariosUri = new Client([
    'base_uri' => 'http://localhost/prueba/ultranotes/src/api/usuarios/usuariosManager.php',
    'timeout'  => 5.0
]);

$notasUri = new Client([
    'base_uri' => 'http://localhost/prueba/ultranotes/src/api/notas/notasManager.php',
    'timeout'  => 5.0
]);

// Comprobamos si el método es PUT, significa que queremos INSERTAR DATOS
if($_SERVER["REQUEST_METHOD"] == "PUT")
{
    // Miramos si la request uri contiene /api/usuarios/, significará que queremos añadir un nuevo usuario
    if (false !== strpos($_SERVER['REQUEST_URI'], '/api/usuarios/')) 
    {
        // Comprobamos si el usuario ha pasado por PUT lo necesario para añadir un nuevo usuario
        if(isset($_PUT["user"]) && isset($_PUT["password"]))
        {
            // Hacemos web-request a la verdadera API (usando la libreria de Carles) (y usando el token secreto)
            $res = $usuariosUri->request('PUT',null,[
                'query' => ['user' => $_PUT["user"], 'password' => $_PUT["password"], 'tokensecreto' => $tokenSecreto]  
            ]);
            if ($res->getStatusCode() == '200') //Si retorna 200 = OK
            {
                // Mostrem el que ens ha retornat el server
                echo $res->getBody();
            }
        }
    }

    // Miramos si la request uri contiene /api/notas/, significará que queremos añadir una nueva nota
    if (false !== strpos($_SERVER['REQUEST_URI'], '/api/notas/')) 
    {
        // Comprobamos si el usuario ha pasado por PUT lo necesario para añadir una nueva nota
        if(isset($_PUT["user"]) && isset($_PUT["titulo"]) && isset($_PUT["contenido"]) && isset($_PUT["token"]))
        {
            // Hacemos web-request a la verdadera API (usando la libreria de Carles)

        }
    }
}

// Comprobamos si el método es GET, significa que queremos COGER DATOS
if($_SERVER["REQUEST_METHOD"] == "GET")
{
    echo "HOLA1";
    // Miramos si la request uri contiene /api/usuarios/, significará que queremos saber si usuario y contraseña son correctos
    if (false !== strpos($_SERVER['REQUEST_URI'], '/api/usuarios/')) 
    {
        echo "HOLA2";
        // Comprobamos si el usuario ha pasado por GET lo necesario para comprobar si credenciales son correctas
        if(isset($_GET["user"]) && isset($_GET["password"]))
        {
            // Hacemos web-request a la verdadera API (usando la libreria de Carles) (y usando el token secreto)
            $res = $usuariosUri->request('GET',null,[
                'query' => ['user' => $_GET["user"], 'password' => $_GET["password"], 'tokensecreto' => $tokenSecreto]  
            ]);
            if ($res->getStatusCode() == '200') //Si retorna 200 = OK
            {
                // Mostrem el que ens ha retornat el server
                echo $res->getBody();
            }
        }
    }

    // Miramos si la request uri contiene /api/notas/, significará que queremos añadir una cojer informacion de una nota
    if (false !== strpos($_SERVER['REQUEST_URI'], '/api/notas/')) 
    {
        // Comprobamos si el usuario ha pasado por GET lo necesario para coger informacion de la nota
        if(isset($_GET["id"]) && isset($_GET["token"]))
        {
            // Hacemos web-request a la verdadera API (usando la libreria de Carles)

        }
    }
}


/*


$client = new Client();
$usuariosUri = "http://localhost/prueba/ultranotes/src/api/usuarios/usuariosManager.php";


// Comprobamos si el método es GET, significa que queremos COGER DATOS
if($_SERVER["REQUEST_METHOD"] == "GET")
{
    // Comprobamos si el usuario ha pasado por GET lo necesario para comprobar si credenciales son correctas
    if(isset($_GET["user"]) && isset($_GET["password"]))
    {
        // Hacemos web-request a la verdadera API (usando la libreria de Carles) (y usando el token secreto)
        $res = $client->get($usuariosUri, ['query' => ['user' => $_GET["user"], 'password' => $_GET["password"], 'tokensecreto' => $tokenSecreto]]);
        if ($res->getStatusCode() == '200') //Si retorna 200 = OK
        {
            // Mostrem el que ens ha retornat el server
            echo $res->getBody();
        }
    }

    // Miramos si la request uri contiene /api/notas/, significará que queremos añadir una cojer informacion de una nota
    if (false !== strpos($_SERVER['REQUEST_URI'], '/api/notas/')) 
    {
        // Comprobamos si el usuario ha pasado por GET lo necesario para coger informacion de la nota
        if(isset($_GET["id"]) && isset($_GET["token"]))
        {
            // Hacemos web-request a la verdadera API (usando la libreria de Carles)

        }
    }
}
*/

?>