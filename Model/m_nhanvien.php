	<?php
	class NhanVien{
		private $manv,$hotennv,$ngaysinh,$cmnd,$email,$gioitinh,$diachi,$pass,$sdt;

		public function __construct($manv, $hotennv, $ngaysinh, $cmnd, $email, $gioitinh, $diachi, $pass, $sdt){
			$this->manv = $manv;
			$this->hotennv = $hotennv;
			$this->ngaysinh = $ngaysinh;
			$this->cmnd = $cmnd;
			$this->email = $email;
			$this->gioitinh = $gioitinh;
			$this->diachi = $diachi;
			$this->pass = $pass;
			$this->sdt = $sdt;
		}

		public function isAdmin() {
			return ($this->cmnd == "187741798") ? true : false;
		}

		public function get_vi_format_date() {
			$date = explode("-", $this->ngaysinh);
			$vi_date = $date[2] . "-" . $date[1] . "-" . $date[0];

			return $vi_date;
		}

		public function getmanv(){
			return $this->manv;
		}

		public function setmanv($value){
			$this->manv = $value;
		}

		public function gethotennv(){
			return $this->hotennv;
		}

		public function sethotennv($value){
			$this->hotennv = $value;
		}
		public function getngaysinh(){
			return $this->ngaysinh;
		}

		public function setngaysinh($value){
			$this->ngaysinh = $value;
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

		public function getpass(){
			return $this->pass;
		}

		public function setpass($value){
			$this->pass = $value;
		}

		public function getsdt(){
			return $this->sdt;
		}

		public function setsdt($value){
			$this->sdt= $value;
		}

	}
	class nhanvienDB{
		/*public static function getnhanvien(){
			$db=Database::getDB();
			$query ='SELECT * FROM nhanvien';
			try {
				$statement = $db->prepare($query);
				$statement->execute();
				$rows = $statement->fetchAll();
				$statement->closeCursor();
				$result = array();
				foreach ($rows as $key => $value) {
					$u = new NhanVien($value['hotennv'],$value['cmnd'],$value['cmnd'],$value['email'],$value['gioitinh'],$value['diachi'],$value['pass'],$value['sdt']);
					$u->setmanv($value['manv']);

					$result[] = $u;
				}
				return $result;
				
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo "Error database :$error_message";
				exit();
			}
		}*/
		public static function getnhanvien(){
			$db=Database::getDB();
			$query='SELECT * FROM nhanvien';
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
		static function login($cmnd, $pass) {
			$db=Database::getDB();
			$query ='SELECT * FROM nhanvien WHERE cmnd = ?';
			try {
				$statement = $db->prepare($query);
				$statement->execute(array(
					$cmnd
				));
				$rows = $statement->fetch();
				$statement->closeCursor();

				if ($pass == $rows['pass']) {
					$NhanVien = new NhanVien($rows['manv'], $rows['hotennv'], $rows['ngaysinh'], $rows['cmnd'], $rows['email'], $rows['gioitinh'], $rows['diachi'], $rows['pass'], $rows['sdt']);

					return $NhanVien;
				} else {
					return false;
				}
				
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo "Error database :$error_message";
				// exit();
			}
		}

		public static function add_nhanvien($hotennv,$ngaysinh,$cmnd,$email,$gioitinh,$diachi,$pass,$sdt){
			$db=Database::getDB();
			$query ='INSERT INTO nhanvien(hotennv,ngaysinh,cmnd,email,gioitinh,diachi,pass,sdt)
					VALUES(:hotennv,:ngaysinh,:cmnd,:email,:gioitinh,:diachi,:pass,:sdt)';
			try {
				$statement = $db->prepare($query);
				$statement->bindValue(':hotennv',$hotennv);
				$statement->bindValue(':ngaysinh',$ngaysinh);
				$statement->bindValue(':cmnd',$cmnd);
				$statement->bindValue(':email',$email);
				$statement->bindValue(':gioitinh',$gioitinh);
				$statement->bindValue(':diachi',$diachi);
				$statement->bindValue(':pass',$pass);
				$statement->bindValue(':sdt',$sdt);
				$statement->execute();
				$statement->closeCursor();			
				
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo "Error database :$error_message";
				exit();
			}
		}

		public static function get_nhanvien_manv($manv){
			$db=Database::getDB();
			$query = "SELECT * FROM nhanvien
					 WHERE manv=:manv";
			try{
				$statement=$db->prepare($query);
				$statement->bindValue(':manv',$manv);
				$statement->execute();
				$row = $statement->fetch();
				$statement->closeCursor();
				$result = new nhanvien($row['manv'],$row['hotennv'],$row['ngaysinh'],$row['cmnd'],$row['email'],$row['gioitinh'],$row['diachi'],$row['pass'],$row['sdt']);
				/*$manv, $hotennv, $ngaysinh, $cmnd, $email, $gioitinh, $diachi, $pass, $sdt*/
				$result ->setmanv($row['manv']);
				return $result;
			}catch(PDOException $e){
				$error_message = $e->getMessage();
				echo "Error database :$error_message";
				exit();
			}
		}

		public static function delete_nhanvien($manv){
			$db=Database::getDB();
			$query = "DELETE FROM nhanvien
					  WHERE manv=?";
			try {
				$statement=$db->prepare($query);
				$statement->bindParam(1,$manv);
				$statement->execute();
				$statement->closeCursor();
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo "Error database :$error_message";
				exit();
			}
		}

		public static function update_nhanvien($manv,$hotennv,$ngaysinh,$cmnd,$email,$gioitinh,$diachi,$pass,$sdt){
			$db=Database::getDB();
			$query ="UPDATE nhanvien
					 SET hotennv=?, ngaysinh=?, cmnd=?,email=?
					 , gioitinh=?,diachi=?
					 , pass=?,sdt=?
					 WHERE manv=?";
			try {
				$statement=$db->prepare($query);			
				$statement->execute(array(
					$hotennv,
					$ngaysinh,
					$cmnd,
					$email,
					$gioitinh,
					$diachi,
					$pass,
					$sdt,
					$manv
				));
				$statement->closeCursor();
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo "Error database :$error_message";
				exit();
			}
		}

		public static function search_value($value){
		$db=Database::getDB();
		$value='%'.$value.'%';
		$query = "SELECT * FROM nhanvien
				 WHERE manv LIKE :value OR cmnd LIKE :value 
				 			OR hotennv LIKE :value";
		try{
			$statement=$db->prepare($query);
			$statement->bindValue(':value',$value);
			$statement->execute();
			$rows = $statement->fetchAll();
			$statement->closeCursor();
			$result = array();
			foreach ($rows as $key => $value) {
				$row = new NhanVien($row['manv'],$row['hotennv'],$row['ngaysinh'],$row['cmnd'],$row['email'],$row['gioitinh'],$row['diachi'],$row['pass'],$row['sdt']);	
				$result[] = $row;
			}
			return $result;
		}catch(PDOException $e){
			$error_message = $e->getMessage();
			echo "Error database :$error_message";
			exit();
		}


	} 


	}