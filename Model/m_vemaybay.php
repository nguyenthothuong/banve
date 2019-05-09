<?php
class VeMayBay{
	private $mav,$makh,$ngaydat,$hieuluc,$soghedat,$soghe,$hanhly,$vat,$giave,$tongtt,$macb;
	public function __construct($mav,$makh,$ngaydat,$hieuluc,$soghedat,$soghe,$hanhly,$vat,$giave,$tongtt,$macb){
		$this->mav= $mav;
		$this->makh = $makh;
		$this->ngaydat = $ngaydat;
		$this->hieuluc = $hieuluc;
		$this->soghedat = $soghedat;
		$this->soghe = $soghe;
		$this->hanhly= $hanhly;
		$this->vat = $vat;
		$this->giave = $giave;
		$this->tongtt = $tongtt;
		$this->macb= $macb;
	}
	public function getmav(){
		return $this->mav;
	}
	public function setmav($value){
		$this->mav = $value;
	}
	public function getmakh(){
		return $this->makh;
	}
	public function setmakh($value){
		$this->makh = $value;
	}
	public function getngaydat(){
		return $this->ngaydat;
	}
	public function setngaydat($value){
		$this->ngaydat= $value;
	}
	public function gethieuluc(){
		return $this->hieuluc;
	}
	public function sethieuluc($value){
		$this->hieuluc = $value;
	}
	public function getsoghedat(){
		return $this->soghedat;
	}
	public function setsoghedat($value){
		$this->soghedat = $value;
	}
	public function getsoghe(){
		return $this->soghe;
	}
	public function setsoghe($value){
		$this->soghe = $value;
	}
	public function gethanhly(){
		return $this->hanhly;
	}
	public function sethanhly($value){
		$this->hanhly= $value;
	}
	public function getvat(){
		return $this->vat;
	}
	public function setvat($value){
		$this->vat= $value;
	}
	public function getgiave(){
		return $this->giave;
	}
	public function setgiave($value){
		$this->giave= $value;
	}
	public function gettongtt(){
		return $this->tongtt;
	}
	public function settongtt($value){
		$this->tongtt= $value;
	}
	public function getmacb(){
		return $this->macb;
	}
	public function setmacb($value){
		$this->macb= $value;
	}
}