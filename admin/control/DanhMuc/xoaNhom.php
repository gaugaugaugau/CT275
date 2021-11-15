<?php 
	$maNhom = $_GET['MaNhom'];
	$sql = "SELECT * from NhomHangHoa where MaNhom = $maNhom";
	$qr = mysqli_query($connect, $sql);
	$row = mysqli_fetch_array($qr);
?>
<form class="xoaDM" method="post" accept-charset="utf-8">
	<h4>Bạn có chắc muốn xoá nhóm: <span style="color:red"><?= $row['TenNhom']?></span></h4>
	<button type="submit" name="xoaNhom" style="margin-right: 50px;margin-left: 150px;" class="btn btn-danger">Có</button>
	<button type="submit" name="khongXoa" class="btn btn-warning">Không</button>
</form>
<style>
	.xoaDM{
		border: 1px solid #02020238;
		padding: 10px;
		margin: 10px auto;
		height: 100px;
		border-radius: 10px;
	}
</style>
<?php 
if(isset($_POST['xoaNhom'])){
	if(isset($_GET['MaNhom'])){
		$sql = "DELETE from NhomHangHoa where MaNhom=$maNhom ";
		mysqli_query($connect,$sql);
		$sql1 = "ALTER TABLE NhomHangHoa AUTO_INCREMENT= $maNhom ";
		mysqli_query($connect,$sql1);
		header("location:http://localhost/B1706838/admin/trang_admin.php?view=DanhMuc&action=list");	
	}
	else {
		$temp = '';
	}
}
if(isset($_POST['khongXoa'])){
	header("location:http://localhost/B1706838/admin/trang_admin.php?view=DanhMuc&action=list");	
}
// 
?>