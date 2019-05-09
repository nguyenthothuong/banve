<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<style type="text/css">
			form{
				width: 50%;
				margin: 0 auto;
			}
		</style>
	</head>
	<body>
		<h1 class="text-center">Sửa nhân viên</h1>
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<div class="form-group">
				<input type="hidden" name="manv" class="form-control" id="" placeholder="Họ và tên" value="<?php echo $nhanvien_edit->getmanv()?>">
				<br>
				<label for="">Họ tên</label>
				<input type="text" name="hotennv" class="form-control" id="" placeholder="Họ và tên" value="<?php echo $nhanvien_edit->gethotennv()?>"><br>
				<label for="">Ngày sinh</label>
				<input type="text" name="ngaysinh" class="form-control" id="" placeholder="Ngày sinh" value="<?php echo $nhanvien_edit->get_vi_format_date() ?>">
				<br>
				<label for="">CMND</label>
				<input type="text" name="cmnd" class="form-control" id="" placeholder="cmnd" value="<?php echo $nhanvien_edit->getcmnd()?>">
				<br>
				<label for="">Email</label>
				<input type="text" name="email" class="form-control" id="" placeholder="email" value="<?php echo $nhanvien_edit->getemail()?>">
				<br>
				<label for="">Giới tính</label>
				<input type="text" name="gioitinh" class="form-control" id="" placeholder="Giới tính" value="<?php echo $nhanvien_edit->getgioitinh()?>">
				<br>
				<label for="">Địa chỉ</label>
				<input type="text" name="diachi" class="form-control" id="" placeholder="Địa chỉ" value="<?php echo $nhanvien_edit->getdiachi()?>">
				<br>
				<label for="">Mật khẩu</label>
				<input type="text" name="pass" class="form-control" id="" placeholder="Password" value="<?php echo $nhanvien_edit->getpass()?>">
				<br>
				<label for="">SDT</label>
				<input type="text" name="sdt" class="form-control" id="" placeholder="Số điện thoại" value="<?php echo $nhanvien_edit->getsdt()?>">
			</div>		
			<button type="submit" name="action" value="update_nhanvien" class="btn btn-primary">Submit</button>
		</form>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>