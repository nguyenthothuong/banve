<?php
class TuyenBayHK{
	private $matbhk,$matb,$mahanghk;
	public function __construct($matbhk,$matb,$mahanghk){
		$this->matbhk= $matbhk;
		$this->matb = $matb;
		$this->mahanghk = $mahanghk;
	}
	public function getmatbhk(){
		return $this->matbhk;
	}
	public function getmatb(){
		return $this->matb;
	}
	public function getmahanghk(){
		return $this->mahanghk;
	}
	public function setmatbhk($value){
		$this->matbhk = $value;
	}
	public function setmatb($value){
		$this->matb= $value;
	}
	}
	public function setmahanghk($value){
		$this->mahanghk= $value;
	}
}