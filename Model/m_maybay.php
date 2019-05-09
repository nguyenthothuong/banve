<?php
class MayBay{
	private $mamb,$soghe,$loaimb,$soluongve;
	public function __construct($mamb,$soghe,$loaimb,$soluongve){
		$this->mamb= $mamb;
		$this->soghe = $soghe;
		$this->loaimb = $loaimb;
		$this->soluongve = $soluongve;
	}
	public function getmamb(){
		return $this->mamb;
	}
	public function setmamb($value){
		$this->mamb = $value;
	}
	public function getsoghe(){
		return $this->soghe;
	}
	public function setsoghe($value){
		$this->soghe = $value;
	}
	public function getloaimb(){
		return $this->loaimb;
	}
	public function setloaimb($value){
		$this->loaimb = $value;
	}
	public function getsoluongve(){
		return $this->soluongve;
	}
	public function setsoluongve($value){
		$this->soluongve = $value;
	}
}