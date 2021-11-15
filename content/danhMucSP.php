	<?php 
	$select_danhmuc = 
		"SELECT * FROM danhmuc d JOIN nhomhanghoa n
		ON d.MaDanhMuc =n.MaDanhMuc
		WHERE n.MaDanhMuc = '$_GET[MaDanhMuc]' ";
	$query_danhmuc = mysqli_query($connect,$select_danhmuc);
	$hienthi_danhmuc = mysqli_fetch_array($query_danhmuc);
	$a = $hienthi_danhmuc['MaDanhMuc'];
?>
<div class="product"> 
	<div class="top_product">
		<div class="left">
			<a href=""> 
				<?php 
				echo $hienthi_danhmuc['TenDanhMuc']
				?></a>
		</div>    
		<div class="right">
				<?php 
				$select_nhomhanghoa = "SELECT * FROM nhomhanghoa n JOIN danhmuc d
					ON d.MaDanhMuc =n.MaDanhMuc
					WHERE n.MaDanhMuc = $a ";
				$query_nhomhanghoa = mysqli_query($connect,$select_nhomhanghoa);
				while($hienthi_nhomhanghoa = mysqli_fetch_array($query_nhomhanghoa)) {
					?>
					<a href="index.php?xem=Nhomhanghoa&Manhom=<?php echo $hienthi_nhomhanghoa['MaNhom'] ?>">
						<?php echo $hienthi_nhomhanghoa ['TenNhom'] ?></a>

				<?php } ?>            
		</div>

	</div>


		<div class="main_product">
			<?php 
			$select_hanghoa = "SELECT * FROM hanghoa h 
					JOIN nhomhanghoa n
					ON h.MaNhom =n.MaNhom
					JOIN danhmuc d
					ON d.MaDanhMuc =n.MaDanhMuc
					WHERE d.MaDanhMuc = '$_GET[MaDanhMuc]'";	
			$query_hanghoa = mysqli_query($connect,$select_hanghoa);
			while($hienthi_SPtheoDM = mysqli_fetch_array($query_hanghoa)){
				?>
				<?php if($hienthi_SPtheoDM['SoLuongHang']>0){ ?>
					<div class="sp" id="active">
						<a href="index.php?xem=chitietsp&MSHH=<?php echo $hienthi_SPtheoDM['MSHH'] ?>">
							<img src="images/SanPham/<?php echo $hienthi_SPtheoDM ['Hinh'] ?>" >
							<h3 style="text-align:center;font-size: 24px"><?php echo $hienthi_SPtheoDM['TenHH'] ?></h3>

							<h4 style="text-align:center;color:red;font-size:18px;padding-top:5px;bottom:0px">
								<?php echo number_format($hienthi_SPtheoDM['Gia'],0,",",".")?>đ</h4>
						</a>
						<div class="action">
							<a href="index.php?xem=chitietsp&MSHH=<?php echo $hienthi_SPtheoDM['MSHH'] ?>">
								<input type="submit" id="view" value="Xem">
							</a>
							<a href="index.php?xem=giohang&add=<?php echo $hienthi_SPtheoDM['MSHH'] ?>">
								<input type="submit" id="add_cart" name="Add_cart" value="Thêm">
							</a>
						</div>

					</div>
				<?php } ?>
				<?php } ?>
		</div>
	</div>

<style>
	.product .main_product .sp .action{
	width: 51%;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.product .main_product .sp .action a input{
	width: 50px;
    background: #57e257;
    color: white;
    font-weight: 500;
    border: none;
    border-radius: 5px;
}
.product .main_product .sp .action a input#add_cart{
	width: 80px;
    background: #57e257;
    color: white;
    font-weight: 500;
    border: none;
    border-radius: 5px;
}
.product .main_product .sp .action a input:hover{
	color: blue;
}
.product .main_product .sp .action a input#add_cart:hover{
	color: blue;
}
</style>