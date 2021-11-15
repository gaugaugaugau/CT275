<?php  $select_chitietSP="SELECT * FROM hanghoa h JOIN nhomhanghoa n
		ON h.MaNhom = n.MaNhom 
	    JOIN KhuyenMai K
	    on n.MaDanhMuc = k.MaDanhMuc 
	    where MSHH='$_GET[MSHH]'";
$query_chitietSP = mysqli_query($connect, $select_chitietSP);
?>
<?php 
while ($hienthi_chitietSP=mysqli_fetch_array($query_chitietSP) ){
	$i=$hienthi_chitietSP['MaNhom'];
	?>
	<div class="wrap_chitiet">
		<h4><?php echo $hienthi_chitietSP['TenHH']; ?></h4>
		<hr>
		<div class="images">
			<img src="images/SanPham/<?php echo $hienthi_chitietSP['Hinh'] ?>">
		</div>
		<div class="khuyenmai">
			<p id="gia"><?php echo number_format($hienthi_chitietSP['Gia'],0,"",".") ; ?>₫</p>
			<div class="thongtin">	
				<div class="km_top">
					<h6>KHUYẾN MÃI TRỊ GIÁ 200.000₫</h6>
					<i>Giá và khuyến mãi dự kiến áp dụng đến 15/11</i>
				</div>
				<div class="km_mid">
					<span>
						<img src="images/checkicon.png"> 
						Balo Laptop PMStore
					</span> <br>
					<span>
						<img src="images/checkicon.png"> 
						<?php echo $hienthi_chitietSP['TenKhuyenMai']; ?>
					</span> <br>
					<span>
						<img src="images/checkicon.png"> 
						Loa bluetooth giảm 30% khi mua kèm
					</span>	
				</div>
				<div class="km_bot">
					<strong>
						<i>Quà khuyến mãi</i>
					</strong> <br>
					<img src="images/balo.png" id="km_qua"> <i>Balo lap top PMStore</i>
				</div>
				<div class="km_end">
					<span>
						<strong>
							<img src="images/gift.png">	
							Tặng 100.000₫ 
						</strong>
						khi mua tại cửa hàng 94/03 đường Nguyễn Văn Linh, An Khánh, Ninh Kiều, TP.Cần Thơ
					</span>
				</div>
			</div>
		</div>
		<div class="dikem">
			<p>Sản phẩm gồm có:</p>
			<div class="dk_mid">
				<span>
					<img src="images/checkicon.png"> 
					Bộ sản phẩm gồm: <i><?php echo $hienthi_chitietSP['DiKem']; ?></i>
				</span> <br>
				<hr>
				<span>
					<img src="images/checkicon.png"> 
					Bảo hành chính hãng 12 tháng.
				</span> <br>
				<hr>
				<span>
					<img src="images/checkicon.png"> 
					Lỗi đổi trả trong vòng 15 ngày.
				</span>	
			</div>

		</div>
		
	</div>
	<div style="margin: auto; text-align: center; margin-top: -65px"><strong style="color: red; font-size: 18px">Còn lại: <?php echo $hienthi_chitietSP['SoLuongHang']?> sản phẩm</strong></div>
	<!-- Thêm giỏ hàng -->
	<div class="clear"></div>
	<div class="submit" style="margin-top: 10px">
		<div class="input">
			<a href="index.php?xem=giohang&add=<?php echo $hienthi_chitietSP['MSHH']  ?>"> 
				<input type="button" name="" value="Thêm vào giỏ hàng"> </a>
		</div>
	</div>
	<div class="motaSP">
		<p>&emsp;&emsp;
			<?php echo $hienthi_chitietSP['MoTaHH'] ; ?>
		</p>
	</div>
	<!-- SP tuong tu -->
	<?php 
	$select_spTuongTu="SELECT * FROM hanghoa where not MSHH='$_GET[MSHH]' 
	and MaNhom= $i order by rand() LIMIT 4";  
	$query_spTuongTu = mysqli_query($connect, $select_spTuongTu);
	?>
	<div class="spTuongTu">
		<h3 style="margin-left: 10px">Các sản phẩm tương tự</h3>
		<?php 
		while ($hienthi_spTuongTu=mysqli_fetch_array($query_spTuongTu) ){
		?>		
			<div class="sp" id="active">
				<a href="index.php?xem=chitietsp&MSHH=<?php echo $hienthi_spTuongTu['MSHH'] ?>">
					<img src="images/SanPham/<?php echo $hienthi_spTuongTu['Hinh'] ?> " >
					<h3 style="text-align:center;font-size: 24px"><?php echo $hienthi_spTuongTu['TenHH'] ; ?></h3>
					<h4 style="text-align:center;color:red;font-size:18px;padding-top:5px;bottom:0px">
						<?php echo number_format($hienthi_spTuongTu['Gia'],0,"",".") ?>₫</h4>
					</a>
				</div>
			<?php } ?>
		</div>
		<?php } ?>

<style >
	.banner{
		display: none;
	}
</style>
