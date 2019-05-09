<?php
include('../View/layouts/partials/header.php');
include('../View/layouts/partials/navigation.php');
include('../View/layouts/partials/menu.php');
?>

<style>
	table {
	    width: 100%;
	    border-collapse: collapse;
	}

	table, td, th {
	    border: 1px solid black;
	    padding: 5px;
	}
	th {text-align: left;
	}
	input[type="text"]:focus{
	    width:500px; 
	    background-color:lightpink;
	}
</style>
<div class="app-content content">
<div id="shownv" style="margin-left:0.5em">
<h1 class="text-center" style="margin-top: 10px">DANH SÁCH NHÂN VIÊN</h1>
		<table>
			<thead>
				<div>
					<a href="?action=form_add_nhanvien" title=""><button type="button" class="btn btn-default">Thêm nhân viên</button></a>
				<form action="" method="POST">
					<input type="search" name="search_info" id="input" class="form-control" value="" title="">
						<button type="submit" name="action" value="search_value" class="btn btn-sm btn-danger">Search</button>
				</form>
				</div>
				<tr>
					<th>Mã NV</th>
					<th>Họ và Tên</th>
					<th>Ngày sinh</th>
					<th>CMND</th>
					<th>Email</th>
					<th>Giới tính</th>
					<th>địa chỉ</th>
					<th>SDT</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include_once('../Model/m_connectDB.php');
				include_once('../Model/m_nhanvien.php');
				$list_nhanvien=nhanvienDB::getnhanvien();
				foreach ($list_nhanvien as $key => $value): ?>
					<tr>
						<td><?php echo $value['manv'];?></td>
						<td><?php echo $value['hotennv'];?></td>
						<td><?php echo $value['ngaysinh'];?></td>
						<td><?php echo $value['cmnd'];?></td>
						<td><?php echo $value['email'];?></td>
						<td><?php echo $value['gioitinh'];?></td>
						<td><?php echo $value['diachi'];?></td>
						<td><?php echo $value['sdt'];?></td>
						<td><a href="?action=edit_nhanvien&manv=<?php echo $value['manv'];?>" class="btn btn-success" >Edit</a></td>
						<td><a href="?action=delete_nhanvien&manv=<?php echo $value['manv'];?>" class="btn btn-danger">Delete</a></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
</div>

<?php
include('../View/layouts/partials/footer.php');
?>