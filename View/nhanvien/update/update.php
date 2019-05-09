<h1 class="text-center">Sửa nhân viên</h1>
<form action="" method="POST" role="form">
<div class="form-group" style="padding-left: 300px">
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
<!-- <button type="submit" name="action" value="update_nhanvien" class="btn btn-primary">Submit</button> -->
</form>