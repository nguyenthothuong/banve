<?php
class LichBay{
	private $malb,$matbhk,$giocatcanh,$giohacanh,$thulichbay;
	public function __construct($malb,$matbhk,$giocatcanh,$giohacanh,$thulichbay){
		$this->malb= $malb;
		$this->matbhk = $matbhk;
		$this->giocatcanh = $giocatcanh;
		$this->giohacanh = $giohacanh;
		$this->thulichbay = $thulichbay;
	}
	public function getmalb(){
		return $this->malb;
	}
	public function setmalb($value){
		$this->malb = $value;
	}
	public function getmatbhk(){
		return $this->matbhk;
	}
	public function setmatbhk($value){
		$this->matbhk = $value;
	}
	public function getgiocatcanh(){
		return $this->giocatcanh;
	}
	public function setgiocatcanh($value){
		$this->giocatcanh = $value;
	}
	public function getgiohacanh(){
		return $this->giohacanh;
	}
	public function setgiohacanh($value){
		$this->giohacanh = $value;
	}
	public function getthulichbay(){
		return $this->thulichbay;
	}
	public function setthulichbay($value){
		$this->thulichbay = $value;
	}

}