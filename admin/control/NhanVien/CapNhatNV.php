<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style_ad.css">
	<link
	rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
	/>
</head>
<body>
	<div class="col-sm-9" id="content" >
	<div id="list_sp" class="row">
		<div class="col-sm-12">
			Danh sách nhân viên
		</div>
	</div>
	<div class="row" id="add_SP">
	</div>
<!-- form -->
<div class="container">
	<?php 
		$MSNV = $_GET['MSNV'];
		// echo $MSNV;
		$sql = "SELECT * from nhanvien where MSNV = $MSNV";
		$query = mysqli_query($connect,$sql);
		$row = mysqli_fetch_array($query);
	 ?>
		<div id="them">			
				<form method="POST">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputHoTen">Họ tên</label>
							<input type="text" class="form-control" name="HoTen" id="inputHoTen" value="<?php echo $row['HoTenNV'] ?>">
						</div>
						<div class="form-group col-md-6">
							<label for="inputChucVu">Chức vụ</label>
							<input type="text" name="ChucVu" class="form-control" id="inputChucVu" value="<?php echo $row['ChucVu'] ?>" >
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputSDT">Số điện thoại</label>
							<input type="text" class="form-control" name="SDT" id="inputSDT" value="<?php echo $row['SoDienThoai'] ?>" >
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label >Địa chỉ</label>
						</div>	
						<textarea style="width: 500px; height: 200px; margin-bottom: 10px" name="DiaChi">
							<?php echo $row['DiaChi']; ?>
						</textarea>
					</div>
					<button type="submit" name="CapNhat" class="btn btn-primary">Cập nhật</button>
				</form>
			</div>
	</div>
<!-- form -->
</div>




</body>
<style type="text/css">
	#them{
	margin: 5px;
    padding: 10px;
    border: 1px solid #c7c5c5;
    border-radius: 10px;
    width: 80%;
    margin: 10px auto;
	}
	label{
		font-weight: bold;
	}
</style>

<?php
if (isset($_POST['CapNhat'])) {
	 	# code...
		$msnv = $_GET['MSNV'];
		// echo $msnv;
		$hoten = $_POST['HoTen'];
		$chucvu = $_POST['ChucVu'];
		$sdt = $_POST['SDT'];
		$diachi = $_POST['DiaChi'];
		$sql = "UPDATE nhanvien Set HoTenNV='$hoten', ChucVu ='$chucvu',DiaChi ='$diachi',SoDienThoai='$sdt'
				where MSNV=$msnv";
		mysqli_query($connect,$sql);
		header("location:http://localhost:8080/B1706838/admin/trang_admin.php?view=NhanVien&action=list");	
	}
?>