<?php
class SanBay{
	private $masb,$tensb;
	public function __construct($masb,$tensb){
		$this->masb= $masb;
		$this->tensb = $tensb;
	}
	public function getmasb(){
		return $this->masb;
	}
	public function gettensb(){
		return $this->tensb;
	}
	public function setmasb($value){
		$this->masb = $value;
	}
	public function settensb($value){
		$this->tensb = $value;
	}
}

class sanbayDB{

	public static function getAll(){
		$db=Database::getDB();
		$query='SELECT * FROM sanbay';
		try{
			$statement=$db->prepare($query);
			$statement->execute();
			$result=$statement->fetchAll();
			return $result;
			$statement->closeCursor();
		} catch (PDOException $e) {
			$error_message=$e->getMessage();
			echo "Error database : $error_message";
			exit();
		}
	}
}