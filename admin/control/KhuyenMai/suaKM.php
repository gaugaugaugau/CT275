<?php 
 	$km = $_GET['idKM'];
	$sql = "SELECT * from KhuyenMai where idKhuyenMai = $km ";
	$qr = mysqli_query($connect, $sql);
	$kq = mysqli_fetch_array($qr);
?>
<div class="col-sm-9" id="content" >
	<div id="list_sp" class="row">
		<div class="col-sm-12">
			Thêm khuyến mãi
		</div>
	</div>
	<form class="form-them-khuyenmai" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputTenHH">Thông tin Khuyến mãi</label>
				<input type="text" name="TenKhuyenMai" class="form-control" id="inputTenHH" value="<?= $kq['TenKhuyenMai']?>" >
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputGia">Sản phẩm đi kèm</label>
				<input type="text" name="DiKem" class="form-control" id="inputGia" value="<?= $kq['DiKem']?>">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label >Khuyến mãi </label>
				<select id="inputState" name="MaDanhMuc" class="form-control">
					<?php 
					$i =1;
					$qr = mysqli_query($connect , "SELECT * from danhmuc");
					while ($row = mysqli_fetch_array($qr)) {
						?>
						<option selected><?= $row['MaDanhMuc']?> <?= $row['TenDanhMuc']?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<button style="margin-bottom: 15px" type="submit" name="sua" class="btn btn-primary">Cập nhật</button>
	</form>
	
</div>
<style>
	.form-them-khuyenmai{
		margin-bottom: 10px;
		margin-top: 10px;
		padding: 15px;
		border-radius: 5px;
		border: 1px solid black;
	}
</style>

<?php 
	if (isset($_POST['sua'])) {
		$TenKM = $_POST['TenKhuyenMai'];
		// echo $TenNhom;
		$TenDiKem = $_POST['DiKem'];
		$DM = $_POST['MaDanhMuc'];
		// Lay MaNhom tu Ten Nhom
		$maDM = substr($DM,0,2);
		// echo $MaNhom;
		$sql = "UPDATE khuyenmai set TenKhuyenMai = '$TenKM', DiKem ='$TenDiKem' where idKhuyenMai = '$km'";
		mysqli_query($connect,$sql);
		header("location:http://localhost:8080/B1706838/admin/trang_admin.php?view=KhuyenMai&action=list");
	}
?>

