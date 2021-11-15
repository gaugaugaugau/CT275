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
	<!-- ckeditor -->
	<script src="http://localhost/B1706838/admin/control/ckeditor/ckeditor.js"></script>
</head>

<body>
	<div class="col-sm-9" id="content" >
	<div id="list_sp" class="row">
		<div class="col-sm-12">
			Thêm sản phẩm
		</div>
	</div>
	<div class="row" id="add_SP">
	</div>
<!-- form -->
	<div class="container">
		<div id="them">			
				<form method="POST" id="get-data-form" enctype="multipart/form-data">
					<div class="form-row">
						<div class="form-group col-md-4">
							<label >Mã Nhóm</label>
							<select id="inputState" name="TenNhom" class="form-control">
								<?php 
								$sql = "SELECT * from nhomhanghoa";
								$query = mysqli_query($connect,$sql);
								while($row = mysqli_fetch_array($query)):
									?>
									<option>
										<?php
										echo $row['MaNhom'];
										
										echo "_";
										 echo $row['TenNhom'];
										 ?>

									</option>
								<?php endwhile; ?>
							</select>
						</div>
						<div class="form-group col-md-8">
							<label for="inputTenHH">Tên Hàng hoá</label>
							<input type="text" name="TenHang" class="form-control" id="inputTenHH" placeholder="Nhập tên hàng hoá...">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputGia">Giá</label>
							<input type="text" name="Gia" class="form-control" id="inputGia" placeholder="Nhập giá sản phẩm">
						</div>
						<div class="form-group col-md-6">
							<label for="inputSoLuong">Số lượng hàng</label>
							<input type="text" name="SoLuong" class="form-control" id="inputSoLuong" placeholder="Nhập số lượng hàng">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputHinh">Hình ảnh</label>
							<div class="custom-file">
								<input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
								<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
								<div class="invalid-feedback">Example invalid custom file feedback</div>
							</div>
						</div>
					
					</div>

					<div class="form-row">
						<div class="form-group col-md-4">
							<label >Đặc biệt (1)</label>
							<select id="inputState" name="DacBiet" class="form-control">
								<option selected>0</option>
								<option>1</option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<label >Khuyến mãi </label>
							<select id="inputState" name="KhuyenMai" class="form-control">
								<?php 
									$i =1;
									$qr = mysqli_query($connect , "SELECT * from danhmuc");
									while ($row = mysqli_fetch_array($qr)) {
								 ?>
								<option selected><?= $i++?> <?= $row['TenDanhMuc']?></option>
							<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label >Mô tả sản phẩm</label>
						</div>	
						<textarea class="tinymce" id="mota" style="width: 500px; height: 200px; margin-bottom: 10px" name="MoTa"></textarea>
					</div>
					<button type="submit" name="add" class="btn btn-primary">Thêm</button>
				</form>
				<div id="data-container">
		</div>
			</div>
	</div>
<!-- form -->
<script>
	CKEDITOR.replace('mota');
</script>
</div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/jquery.tinymce.min.js" referrerpolicy="origin"></script>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



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
   if(isset($_FILES['image'])){
     		$file_name = $_FILES['image']['name'];
			$file_tmp = $_FILES['image']['tmp_name'];
			$save_file = "C:/xampp/htdocs/B1706838/images/SanPham/";
			$movefile = move_uploaded_file($file_tmp, $save_file.$file_name); 
   }
?>
<?php
if (isset($_POST['add'])) {
		$TenNhom = $_POST['TenNhom'];
		// echo $TenNhom;
		$TenHang = $_POST['TenHang'];
		$Gia = $_POST['Gia'];
		$SoLuong = $_POST['SoLuong'];
		$image = $_POST['image'];
		$DacBiet= $_POST['DacBiet'];
		$KhuyenMai = $_POST['KhuyenMai'];
		$MoTa = $_POST['MoTa'];
		// Lay MaNhom tu Ten Nhom
		$MaNhom=substr($TenNhom,0,2);
		// echo $MaNhom;
		$sql = "INSERT into hanghoa(MaNhom,TenHH,Gia,SoLuongHang,Hinh,MoTaHH,DacBiet,idKhuyenMai) 
				values('$MaNhom','$TenHang','$Gia','$SoLuong','$file_name','$MoTa','$DacBiet','$KhuyenMai')";
		mysqli_query($connect,$sql);
		header("location:http://localhost/B1706838/admin/trang_admin.php?view=SanPham&action=list");
	}
?>
