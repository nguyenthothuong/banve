<?php
class KhachHang{
	private $mahangve,$tenhangve;
	public function __construct($mahangve,$tenhangve){
		$this->mahangve= $mahangve;
		$this->tenhangve = $tenhangve;
	}
	public function getmahangve(){
		return $this->mahangve;
	}
	public function setmahangve($value){
		$this->mahangve = $value;
	}
	public function gettenhangve(){
		return $this->tenhangve;
	}
	public function settenhangve($value){
		$this->tenhangve = $value;
	}
	
}