<?php
class HangHK{
	private $mahanghk,$tenhanghk;
	public function __construct($mahanghk,$tenhanghk){
		$this->mahanghk= $mahanghk;
		$this->tenhanghk = $tenhanghk;
	}
	public function getmahanghk(){
		return $this->mahanghk;
	}
	public function gettenhanghk(){
		return $this->tenhanghk;
	}
	public function setmahanghk($value){
		$this->mahanghk = $value;
	}
	public function settenhanghk($value){
		$this->tenhanghk= $value;
	}
}