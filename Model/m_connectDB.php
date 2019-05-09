<?php
class Database{
	private static $dsn = 'mysql:host=localhost; dbname=banvemaybay';
	private static $username='root';
	private static $password='';
	private static $db;
	private static $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

	private function __construct(){		
	}
	public static function getDB(){
		if(!isset(self::$db)){
			try{
				self::$db = new PDO(self::$dsn,
									self::$username,
									self::$password,
									self::$options);
				}catch(PDOException $e){
					$error_message = $e->getMessage();
					echo "Error connecting to database :$error_message";
					exit();
			}
		}
		return self::$db;	
	}		
}
?>