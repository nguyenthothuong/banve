<?php
class VeChiTiet{
	private $macb,$mahangve,$soghedat,$sogheconlai;
	public function __construct($macb,$mahangve,$soghedat,$sogheconlai){
		$this->macb= $macb;
		$this->mahangve = $mahangve;
		$this->soghedat = $soghedat;
		$this->sogheconlai = $sogheconlai;
	public function getmahangve(){
		return $this->mahangve;
	}
	public function setmahangve($value){
		$this->mahangve= $value;
	}
	public function getsoghedat(){
		return $this->soghedat;
	}
	public function setsoghedat($value){
		$this->soghedat= $value;
	}
	public function getsogheconlai(){
		return $this->sogheconlai;
	}
	public function setsogheconlai($value){
		$this->sogheconlai= $value;
	}
	public function getmacb(){
		return $this->macb;
	}
	public function setmacb($value){
		$this->macb= $value;
	}
}