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
			body{
				width: 50%;
				margin:0 auto;
			}
		</style>
	</head>
	<body>
		<h1 class="text-center">THÊM NHÂN VIÊN</h1>
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<legend>THÊM NHÂN VIÊN MỚI</legend>
			<div class="form-group">
				<label for="">Họ và Tên</label>
				<input type="text" name="hotennv" class="form-control" id="" placeholder="Họ và tên">
				<label for="">Ngày sinh</label>
				<input type="text" name="ngaysinh" class="form-control" id="" placeholder="Ngày sinh">
				<label for="">CMND</label>
				<input type="text" name="cmnd" class="form-control" id="" placeholder="Chứng minh nhân dân">
				<label for="">Email</label>
				<input type="text" name="email" class="form-control" id="email" placeholder="Email">
				<label for="">Giới tính</label>
				<input type="gioitinh" name="gioitinh" class="form-control" id="" placeholder="Giới tính">
				<label for="">Địa chỉ</label>
				<input type="text" name="diachi" class="form-control" id="" placeholder="Địa chỉ">
				<label for="">Pass</label>
				<input type="Password" name="pass" class="form-control" id="pass" placeholder="Password">
				<label for="">SDT</label>
				<input type="text" name="sdt" class="form-control" id="sdt" placeholder="Số điện thoại">
			</div> 
			<button type="submit" name="action" value="save_nhanvien" class="btn btn-primary">Thêm nhân viên</button>
		</form>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>