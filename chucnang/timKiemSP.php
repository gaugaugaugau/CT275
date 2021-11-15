<?php 
if(isset($_POST['submit'])){
	$tam = $_POST['keyword'];
	$timKiem = "SELECT * FROM hanghoa WHERE TenHH LIKE '%$tam%'";
	$query_timKiem = mysqli_query($connect,$timKiem);
?>
	<div class="product"> 
		<div class="main_product">
			<?php $SPtimKiem = "SELECT * FROM hanghoa
			WHERE TenHH LIKE '%$tam%'";
			$query_SPtimKiem = mysqli_query($connect,$SPtimKiem);
			?>
			<?php while($hienthi_SPtimKiem = mysqli_fetch_array($query_SPtimKiem)) {?>
				<div class="sp" id="active">
					<a href="index.php?xem=chitietsp&MSHH=<?php echo $hienthi_SPtimKiem['MSHH']?>">
						<img src="images/SanPham/<?php echo $hienthi_SPtimKiem ['Hinh'] ?>" >
						<h3 style="text-align:center;font-size: 24px"><?php echo $hienthi_SPtimKiem['TenHH'] ?></h3>
						<h4 style="text-align:center;color:red;font-size:18px;padding-top:5px;bottom:0px">
							<?php echo number_format($hienthi_SPtimKiem['Gia'],0,",",".")?>đ</h4>
					</a>
					<div class="action">
						<a href="index.php?xem=chitietsp&MSHH=<?php echo $hienthi_SPtimKiem['MSHH']?>">
							<input type="submit" id="view" value="View">
						</a>
						<a href="index.php?xem=giohang&add=<?php echo $hienthi_SPtimKiem['MSHH'] ?>">
							<input type="submit" id="add_cart" name="Add_cart" value="Add cart">
						</a>
              		</div>
				</div>
				<?php } ?>
		</div>	
	</div>
<?php } ?>
<!-- Tim kiem theo loai danh muc -->
<?php 
	if(isset($_POST['submit'])){
		$tam = strtolower($_POST['keyword']);
		if($tam=="laptop"){
		$select_danhmuc = 
				"SELECT * FROM danhmuc d JOIN nhomhanghoa n
				ON d.MaDanhMuc =n.MaDanhMuc
				WHERE n.MaDanhMuc = 1 ";
		$query_danhmuc = mysqli_query($connect,$select_danhmuc);
		$hienthi_danhmuc = mysqli_fetch_array($query_danhmuc);
		$a = $hienthi_danhmuc['MaDanhMuc'];
		//echo $tam;
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
					WHERE d.MaDanhMuc = 1";	
			$query_hanghoa = mysqli_query($connect,$select_hanghoa);
			while($hienthi_SPtheoDM = mysqli_fetch_array($query_hanghoa)){
				?>
				<div class="sp" id="active">
					<a href="index.php?xem=chitietsp&MSHH=<?php echo $hienthi_SPtheoDM['MSHH'] ?>">
						<img src="images/SanPham/<?php echo $hienthi_SPtheoDM ['Hinh'] ?>" >
						<h3 style="text-align:center;font-size: 24px"><?php echo $hienthi_SPtheoDM['TenHH'] ?></h3>

						<h4 style="text-align:center;color:red;font-size:18px;padding-top:5px;bottom:0px">
							<?php echo number_format($hienthi_SPtheoDM['Gia'],0,",",".")?>đ</h4>
					</a>
					<div class="action">
						<a href="index.php?xem=chitietsp&MSHH=<?php echo $hienthi_SPtheoDM['MSHH'] ?>">
							<input type="submit" id="view" value="View">
						</a>
						<a href="index.php?xem=giohang&add=<?php echo $hienthi_SPtheoDM['MSHH'] ?>">
							<input type="submit" id="add_cart" name="Add_cart" value="Add cart">
						</a>
					</div>
				</div>
				<?php } ?>
		</div>
	</div>
<?php } 
}?>


<!-- Tim kiem theo loai danh muc dien thoai -->
<?php 
	if(isset($_POST['submit'])){
		$tam = strtolower($_POST['keyword']);
		if($tam=="dienthoai" || $tam=="dien thoai" ||$tam == "điện thoại"){
		$select_danhmuc = 
				"SELECT * FROM danhmuc d JOIN nhomhanghoa n
				ON d.MaDanhMuc =n.MaDanhMuc
				WHERE n.MaDanhMuc = 2 ";
		$query_danhmuc = mysqli_query($connect,$select_danhmuc);
		$hienthi_danhmuc = mysqli_fetch_array($query_danhmuc);
		$a = $hienthi_danhmuc['MaDanhMuc'];
		//echo $tam;
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
					WHERE d.MaDanhMuc = 2";	
			$query_hanghoa = mysqli_query($connect,$select_hanghoa);
			while($hienthi_SPtheoDM = mysqli_fetch_array($query_hanghoa)){
				?>
				<div class="sp" id="active">
					<a href="index.php?xem=chitietsp&MSHH=<?php echo $hienthi_SPtheoDM['MSHH'] ?>">
						<img src="images/SanPham/<?php echo $hienthi_SPtheoDM ['Hinh'] ?>" >
						<h3 style="text-align:center;font-size: 24px"><?php echo $hienthi_SPtheoDM['TenHH'] ?></h3>

						<h4 style="text-align:center;color:red;font-size:18px;padding-top:5px;bottom:0px">
							<?php echo number_format($hienthi_SPtheoDM['Gia'],0,",",".")?>đ</h4>
					</a>
					<div class="action">
						<a href="index.php?xem=chitietsp&MSHH=<?php echo $hienthi_SPtheoDM['MSHH'] ?>">
							<input type="submit" id="view" value="View">
						</a>
						<a href="index.php?xem=giohang&add=<?php echo $hienthi_SPtheoDM['MSHH'] ?>">
							<input type="submit" id="add_cart" name="Add_cart" value="Add cart">
						</a>
					</div>
				</div>
				<?php } ?>
		</div>
	</div>
<?php } 
}?>


<!-- Tim theo PC -->
<!-- Tim kiem theo loai danh muc dien thoai -->
<?php 
	if(isset($_POST['submit'])){
		$tam = strtolower($_POST['keyword']);
		if($tam=="pc"){
		$select_danhmuc = 
				"SELECT * FROM danhmuc d JOIN nhomhanghoa n
				ON d.MaDanhMuc =n.MaDanhMuc
				WHERE n.MaDanhMuc = 3 ";
		$query_danhmuc = mysqli_query($connect,$select_danhmuc);
		$hienthi_danhmuc = mysqli_fetch_array($query_danhmuc);
		$a = $hienthi_danhmuc['MaDanhMuc'];
		//echo $tam;
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
					WHERE d.MaDanhMuc = 3";	
			$query_hanghoa = mysqli_query($connect,$select_hanghoa);
			while($hienthi_SPtheoDM = mysqli_fetch_array($query_hanghoa)){
				?>
				<div class="sp" id="active">
					<a href="index.php?xem=chitietsp&MSHH=<?php echo $hienthi_SPtheoDM['MSHH'] ?>">
						<img src="images/SanPham/<?php echo $hienthi_SPtheoDM ['Hinh'] ?>" >
						<h3 style="text-align:center;font-size: 24px"><?php echo $hienthi_SPtheoDM['TenHH'] ?></h3>

						<h4 style="text-align:center;color:red;font-size:18px;padding-top:5px;bottom:0px">
							<?php echo number_format($hienthi_SPtheoDM['Gia'],0,",",".")?>đ</h4>
					</a>
					<div class="action">
						<a href="index.php?xem=chitietsp&MSHH=<?php echo $hienthi_SPtheoDM['MSHH'] ?>">
							<input type="submit" id="view" value="View">
						</a>
						<a href="index.php?xem=giohang&add=<?php echo $hienthi_SPtheoDM['MSHH'] ?>">
							<input type="submit" id="add_cart" name="Add_cart" value="Add cart">
						</a>
					</div>
				</div>
				<?php } ?>
		</div>
	</div>
<?php } 
}?>
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