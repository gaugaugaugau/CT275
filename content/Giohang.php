



<!-- Thanh toan dat hang -->
<?//php echo $_SESSION ;?>
		<?php	
		if(isset($_POST['thanhtoan'])){
			$sdt = $_POST['SoDienThoai'];
		if (preg_match( '/^[0]+[0-9]{9}+$/', $sdt,  $matches)) {
			$HoTenKH=$_POST['HoTenKH'];
			$DiaChi=$_POST['DiaChi'];
			$SoDienThoai=$_POST['SoDienThoai'];	

		//them dữ liệu vào bảng khachang và dathang

			$sql="insert into khachhang (HoTenKH, DiaChi, SoDienThoai) values ('$HoTenKH','$DiaChi','$SoDienThoai')";
			mysqli_query($connect,$sql);


		//Them Dl vào bảng Đặt hàng
			$sql_khachhang = "SELECT * FROM `khachhang` order by MSKH desc limit 1 ";
			$dh=mysqli_query($connect,$sql_khachhang);
			$show_dh = mysqli_fetch_array($dh);
			$mh = $show_dh['MSKH'];
			$trangthai = 1;
			$msnv = 1;

			$sql="insert into dathang (MSKH, NgayDH, idTrangThai, MSNV) values ('$mh',NOW(),'$trangthai','$msnv')";
			mysqli_query($connect,$sql);
			//echo $HoTenKH;
			//echo $SoDienThoai;
		}
		else $mesages="Số điện thoại không đúng dạng";	
		}
?>
<!--_________________________________________-->

<!--  -->
<?php 
	// ADD hang hoa
	if(isset($_GET['add']) && !empty($_GET['add'])){
		$MSHH = $_GET['add'];
		@$_SESSION['cart_'.$MSHH]+=1;
		header("location:index.php?xem=giohang");
	}
	// echo "<pre/>";
	// var_dump($_SESSION);
	// Nut cong
	if(isset($_GET['them']) && !empty($_GET['them'])){
		$MSHH = $_GET['them'];
		@$_SESSION['cart_'.$MSHH]+=1;
		header("location:index.php?xem=giohang");
	}
	// Nut tru
	if(isset($_GET['tru']) && !empty($_GET['tru'])){
		$MSHH = $_GET['tru'];
		@$_SESSION['cart_'.$MSHH]--;
		header("location:index.php?xem=giohang");
	}
	//Nut xoa
	if(isset($_GET['xoa']) && !empty($_GET['xoa'])){
		$MSHH = $_GET['xoa'];
		unset($_SESSION['cart_'.$MSHH]);
		header("location:index.php?xem=giohang");
	}
?>

<!--_________________________________________-->
<div class="wrap_giohang">
	<h2>Giỏ hàng của bạn</h2>
	<table>
		<tr>
			<th>Sản phẩm</th>
			<th>Hình ảnh</th>
			<th>Đơn giá</th>
			<th class="Soluong">Số lượng</th>
			<th>Thành tiền</th>
			<th>Xoá</th>
		</tr>
		<?php $sum = 0; 
		$i=0;
		use PHPMailer\PHPMailer\PHPMailer;
			$content ="Don hang cua ban la";
			$content.= "<table>
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên sản phẩm:</th>
							<th>Hình ảnh</th>
							<th>Đơn giá</th>
							<th>Số lượng</th>
							<th>Thành tiền</th>
						</tr>
					</thead>";
			foreach ($_SESSION as $id => $val):
			$ms = substr($id,5,10);
			// echo $ms;
			// echo $val;
			if($val==0) unset($_SESSION['cart_'.$MSHH]); //Xoa session
			$sql = "SELECT *from HangHoa where MSHH = $ms";
			$query = mysqli_query($connect,$sql);
			if($query):

				while ($row = mysqli_fetch_array($query)) {
					++$i;
					$name = $row['TenHH'];
					$hinh = $row['Hinh'];
					$gia = $row['Gia'];
					$thanhtien = $gia * $val;
					$content.="<tbody>
						<tr>
							<td> $i </td>
							<td> $name </td>
							<td> $hinh </td>
							<td> $gia </td>
							<td> $val </td>
							<td> $thanhtien </td>
						</tr>
					</tbody>";
					
				?>

					<!-- Lay Gia tri trong Session -->			
							<tr>
								<td class="TenHH"> <?= $name ?> </td>
								<td class="images_SP"> <img src="images/SanPham/<?=$hinh?> "></td>
								<td> 
									<?= number_format($gia,0,",",".")?>đ
								</td>
								<td>
									<form action="">
										<a href="index.php?xem=giohang&them=<?=$ms?> "><i class="fa fa-plus" aria-hidden="true"></i></a>
										<input type="text"  name="Soluong" value=<?= $val?>> 
										<a href="index.php?xem=giohang&tru=<?= $ms ?>"><i class="fa fa-minus" aria-hidden="true"></i></a>	
									</form>
								</td>
								<td><?= number_format($thanhtien,0,",",".") ?>đ</td>
								<td> 
									<a href="index.php?xem=giohang&xoa=<?=$ms?>">
										<i class="fa fa-times" aria-hidden="true"></i>
									</a> 
								</td>
							</tr>
							<?php $sum=$sum + $thanhtien;

						if(isset($_POST['thanhtoan'])){
							

							if (preg_match( '/^[0]+[0-9]{9}+$/', $sdt,  $matches)) {
				
							$sql_ct = "SELECT * from dathang order by SoDonDH desc";
							$sql_qr = mysqli_query($connect,$sql_ct);
							$sql_ct_ht = mysqli_fetch_array($sql_qr);
							$SoDonDH = $sql_ct_ht['SoDonDH'];

							$sql_chitiet = "INSERT into chitietdathang (SoDonDH,MSHH,SoLuong,Gia) 
								values ('$SoDonDH','$ms','$val','$gia')"; 
							$sql_qr_chitiet = mysqli_query($connect,$sql_chitiet);	

						
							//Lay Gia tri so luong trong bang hanghoa
							$sql_SL = "SELECT * from hanghoa where MSHH = $ms";
							$query_SL = mysqli_query($connect,$sql_SL);
							$row_SL = mysqli_fetch_array($query_SL);
							$SL = $row_SL['SoLuongHang'] - $val;
							//echo "SLuong". $SL;	
							//Cập nhật lại số lượng hàng tồn kho
							$sql_update = "UPDATE hanghoa Set SoluongHang = '$SL' where MSHH = '$ms' ";
							mysqli_query($connect,$sql_update);	
							}
						else $mesages="Số điện thoại không đúng dạng";
							
							
						};
					?>
			 	<?php
			 	} ?>
			 	
			 <?php endif; ?>
		<?php endforeach; ?>
		
	</table>
	<?php 
	$mesages = "";
	if(isset($_POST['thanhtoan'])){
		$sdt = $_POST['SoDienThoai'];
		if (preg_match( '/^[0]+[0-9]{9}+$/', $sdt,  $matches)) {
			if(isset($_SESSION)){
				foreach ($_SESSION as $id => $value) {
					# code...
					$ms = substr($id,5,10);
					unset($_SESSION['cart_'.$ms]);
				}
			}
			header("location:index.php?xem=giohang");
		}
		else $mesages="Số điện thoại không đúng dạng";
		
	} ?>
	<table>
		<tr>
			<td style="border-right: none " colspan="2"> 
				<a id="muathem" href="http://localhost:8080/B1706838/index.php"> <button type="text">Tiếp tục mua hàng</button> </a>
			</td>
			<td style="text-align: right; border-left: none ;font-size: 16px;font-weight: 600;"  colspan="4">
				Tổng thanh toán: <strong style="color: red;margin-right: 70px;"> 
				<?= number_format($sum,0,",",".") ?>đ </strong>
			</td>
		</tr>
	</table>
	<p style="text-align: center;color: red;background: #7af3ff;font-size: 25px;margin-bottom: -20px">
    	<strong><?php echo $mesages ?></strong>
	</p>
	<?php include('thongtin_dathang.php'); ?>
</div>
	
<style>
	.banner{
		display: none;
	}	
	.wrap_giohang{
		width: 1180px;
		margin: auto;
		background: white;
		overflow: hidden;
	}
	.wrap_giohang h2{
		text-align: center;
	}
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 90%;
		margin: auto;
	}
	td, th {
		border: 1px solid #dddddd;
		padding: 8px;
		text-align: center;

	}
	td.TenHH{
		text-align: left;
	}
	td.images_SP img{
		width: 100px;
		/*margin-left: auto;
		margin-right: auto;
		display: block;*/
	}
	th{
		background: #5a229c;
		color: white;
	}
	th.Soluong{
		width: 150px;
	}
	td{
		background: 
	}
	td form{
		width: 90px;
		margin: auto;
	}
	td form input{
		width: 40%;
		text-align: center;
		outline: none;
		border: none;
	}
	td form .update{
		width: 80px;
		border-radius: 5px;
		background: #000;
		color: white
	}
	td a{
		text-decoration: none;
		color: blue;
	}
	td a:hover{
		color: red;
		text-decoration: none;
	}
	#muathem{

	}
	#muathem button{
		width: 200px;
		background: #20ffea;
		color: black;
		border-radius: 5px;
		font-weight: 700;
	}
	#muathem button:hover{
		background: black;
		color: white;

	}
</style>
