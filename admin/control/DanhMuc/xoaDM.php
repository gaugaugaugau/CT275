<?php 
	$maDM = $_GET['MaDanhMuc'];
	$sql = "SELECT * from DanhMuc where MaDanhMuc = $maDM";
	$qr = mysqli_query($connect, $sql);
	$row = mysqli_fetch_array($qr);
?>
<form class="xoaDM" method="post" accept-charset="utf-8">
	<h4>Bạn có chắc muốn xoá danh mục: <span style="color:red"><?= $row['TenDanhMuc']?></span></h4>
	<button type="submit" name="xoaDM" style="margin-right: 50px;margin-left: 150px;" class="btn btn-danger">Có</button>
	<button type="submit" name="khong" class="btn btn-warning">Không</button>
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
if(isset($_POST['xoaDM'])){
	if(isset($_GET['MaDanhMuc'])){
		$xoa = $_GET['MaDanhMuc'];
		$sql = "DELETE from DanhMuc where MaDanhMuc='$xoa'";
		mysqli_query($connect,$sql);
		$sql1 = "ALTER TABLE danhmuc AUTO_INCREMENT= $xoa ";
		mysqli_query($connect,$sql1);
		$sql2 = "ALTER TABLE khuyenmai AUTO_INCREMENT= $xoa ";
		mysqli_query($connect,$sql2);
		header("location:http://localhost/B1706838/admin/trang_admin.php?view=DanhMuc&action=list");	
	}
	else {
		$temp = '';
	}
}
if(isset($_POST['khong'])){
	header("location:http://localhost/B1706838/admin/trang_admin.php?view=DanhMuc&action=list");	
}
// 
?>