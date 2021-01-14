<?php

class BdD
{
	/**
	 * @var array The default driver settings
	 */
	private static $settings = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
		PDO::ATTR_EMULATE_PREPARES => false,
	);
	/**
	 * @var PDO A database connection
	 */
	public static $connection;

	/**
	 * Connects to the database using given credentials
	 * @param string $host Host name
	 * @param string $user Username
	 * @param string $password Password
	 * @param string $database Database name
	 */
	public static function connect($host, $user, $password, $database) {
		if (!isset(self::$connection)) {
			self::$connection = @new PDO(
				"mysql:host=$host;dbname=$database",
				$user,
				$password,
				self::$settings
			);
        }
    }
}


$servidor = "localhost";
$usuari = "root";
$contrasenna = "";
$BD = "sono_tone";
BdD::connect($servidor, $usuari, $contrasenna, $BD);



?>