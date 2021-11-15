<?php 
	$idKM = $_GET['idKM'];
	$sql = "SELECT * from KhuyenMai k join danhmuc d on k.MaDanhMUc = d.MaDanhMuc where idKhuyenMai = $idKM";
	$qr = mysqli_query($connect, $sql);
	$row = mysqli_fetch_array($qr);
?>
<form class="xoaDM" method="post" accept-charset="utf-8">
	<h4>Bạn có chắc muốn xoá khuyến mãi: <span style="color:red"> <?= $row['TenDanhMuc']?> </span></h4>
	<button type="submit" name="xoaKM" style="margin-right: 50px;margin-left: 150px;" class="btn btn-danger">Có</button>
	<button type="submit" name="khongKM" class="btn btn-warning">Không</button>
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
if(isset($_POST['xoaKM'])){
	if(isset($_GET['idKM'])){
		$sql = "DELETE from KhuyenMai where idKhuyenMai='$idKM'";
		mysqli_query($connect,$sql);
		$sql1 = "ALTER TABLE KhuyenMai AUTO_INCREMENT= $idKM ";
		mysqli_query($connect,$sql1);
		header("location:http://localhost/B1706838/admin/trang_admin.php?view=KhuyenMai&action=list");	
	}
	else {
		$temp = '';
	}
}
if(isset($_POST['khongKM'])){
	header("location:http://localhost/B1706838/admin/trang_admin.php?view=KhuyenMai&action=list");	
}
// 
?>