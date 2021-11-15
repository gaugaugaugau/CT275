<div class="col-sm-9" id="content" >
	<div id="list_sp" class="row">
		<div class="col-sm-12">
			Danh sách nhân viên
		</div>
	</div>
	<div class="row" id="add_SP">
		<div class="col-sm-12">
			<a href="trang_admin.php?view=NhanVien&action=them" class="btn btn-primary" role="button">Thêm nhân viên</a>
		</div>
	</div>
	<table class="table table-bordered" id="table_List_SP">
		<thead style="text-align: center;" class="thead-dark">
			<tr>
				<th>STT</th>
				<th>Họ tên</th>
				<th>Chức vụ</th>
				<th>Địa chỉ</th>
				<th>Số điện thoại</th>
				<th>Sửa</th>
				<th>Xoá</th>
			</tr>
		</thead>
		<?php 	
			$sql = "SELECT * from nhanvien";
			$query = mysqli_query($connect,$sql);
			$i=1;
		 ?>
		 <?php while($row = mysqli_fetch_array($query)): ?>
			<tbody>
				<tr>
					<form action="listNV_submit" method="get" accept-charset="utf-8">
						<input hidden="" type="text" name="MSNV" value="<?php echo $row['MSNV'] ?>">
					</form>
					<td style="text-align: center;"><?php echo $i ?></td>
					<td><?php echo $row['HoTenNV'] ?></td>
					<td><?php echo $row['ChucVu'] ?></td>
					<td><?php echo $row['DiaChi'] ?></td>
					<td><?php echo $row['SoDienThoai'] ?></td>
					<td><a href="trang_admin.php?view=NhanVien&action=capnhat&MSNV=<?php echo $row['MSNV']?>" ><i style="margin-left: 20px;font-size: 20px; color: black" class="fa fa-wrench" aria-hidden="true"></i></a></td>
					<td><a href="trang_admin.php?view=NhanVien&action=xoa&MSNV=<?php echo $row['MSNV']?>"><i style="margin-left: 20px;font-size: 20px;color: black" class="fa fa-trash-o" aria-hidden="true"></i></a></td>
				</tr>
			</tbody>
			<?php ++$i; ?>
		<?php endwhile; ?>
	</table>
</div>

<!-- Xoá nhân viên có get=MSHH -->
<?php if(isset($_GET['xoa'])){
	$xoa = $_GET['xoa'];
	$sql = "DELETE from nhanvien where MSNV='$xoa'";
	mysqli_query($connect,$sql);
} ?>