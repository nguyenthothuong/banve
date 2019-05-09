<?php
class KhachHang{
	private $makh,$hotenkh,$cmnd,$email,$gioitinh,$diachi,$sdt;
	public function __construct($makh,$hotenkh,$cmnd,$email,$gioitinh,$diachi,$sdt){
		$this->makh= $makh;
		$this->hotenkh = $hotenkh;
		$this->gioitinh = $gioitinh;
		$this->cmnd = $cmnd;
		$this->email = $email;
		$this->diachi = $diachi;
		$this->sdt = $sdt;
	}
	public function getmakh(){
		return $this->makh;
	}
	public function setmakh($value){
		$this->makh = $value;
	}
	public function gethotenkh(){
		return $this->hotenkh;
	}
	public function sethotenkh($value){
		$this->hotenkh = $value;
	}
	public function getcmnd(){
		return $this->cmnd;
	}
	public function setcmnd($value){
		$this->cmnd = $value;
	}
	public function getemail(){
		return $this->email;
	}
	public function setemail($value){
		$this->email = $value;
	}
	public function getgioitinh(){
		return $this->gioitinh;
	}
	public function setgioitinh($value){
		$this->gioitinh = $value;
	}
	public function getdiachi(){
		return $this->diachi;
	}
	public function setdiachi($value){
		$this->diachi = $value;
	}
	public function getsdt(){
		return $this->sdt;
	}
	public function setsdt($value){
		$this->sdt= $value;
	}
}