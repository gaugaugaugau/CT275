<?php 
	$MaDM = $_GET['MaDanhMuc'];
	$qr = mysqli_query($connect, "SELECT * FROM danhmuc WHERE MaDanhMuc = $MaDM");
	$kq = mysqli_fetch_array($qr);
?>
<div class="col-sm-9" id="content" >
	<div id="list_sp" class="row">
		<div class="col-sm-12">
			Danh mục <strong><?= $kq['TenDanhMuc']?></strong>
		</div>
	</div>
	<div class="row" id="add_danhmuc">
		<div class="col-sm-12">
			<form action="" method="post" style="display: inline-block;">
				<input class="btn" name="TenHang" style="border: 1px solid; cursor: none;" type="text" placeholder="Tên hãng cần thêm...">
				<button type="submit" name="addHang" class="btn btn-primary">Thêm</button>
			</form>
			
		</div>
	</div>
	<table class="table table-bordered" id="table_List_SP">
		<thead style="text-align: center;" class="thead-dark">
			<tr>
				<th>Mã Nhóm</th>
				<th>Tên Nhóm</th>
				<th>Chỉnh sửa</th>
			</tr>
		</thead>
		<tbody >
			<?php  
				$sql = "SELECT * FROM danhmuc d JOIN nhomhanghoa n on d.MaDanhMuc = n.MaDanhMuc WHERE d.MaDanhMuc = $MaDM";
				$query = mysqli_query($connect, $sql);

				while ( $row = mysqli_fetch_array($query)) {
					# code...
			?>	<tr>
					<td> <?= $row['MaNhom']?> </td>
					<td> <?= $row['TenNhom']?></td>
					<td style="text-align: center"> 
						<a style="margin-right: 15px;" href="http://localhost/B1706838/admin/trang_admin.php?view=DanhMuc&action=capnhatNhom&MaNhom=<?= $row['MaNhom']?>">Sua</a>
						<a style="color: red; font-weight: bold;" href="http://localhost/B1706838/admin/trang_admin.php?view=DanhMuc&action=xoaNhom&MaNhom=<?= $row['MaNhom']?>">Xoa</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>

	</table>
	<a href="http://localhost/B1706838/admin/trang_admin.php?view=DanhMuc&action=list">
		<button type="button" class="btn btn-warning" style="float: right;margin-bottom: 10px">Trở về</button>
	</a>
</div>

<?php 
	if(isset($_POST['addHang'])){
		$tenHang = $_POST['TenHang'];
		if($_POST['TenHang']!=""){
			$sql = "INSERT into NhomHangHoa(TenNhom,MaDanhMuc) 
				values('$tenHang','$MaDM')";
			mysqli_query($connect,$sql);
			header("location:http://localhost/B1706838/admin/trang_admin.php?view=DanhMuc&action=list");
		}
	}
?>