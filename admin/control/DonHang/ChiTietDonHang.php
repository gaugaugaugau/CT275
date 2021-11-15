<div class="col-sm-9" id="content" >
	<div id="list_sp" class="row">
		<div class="col-sm-12">
			Chi tiết đơn hàng
		</div>
	</div>
	<?php 
			$sum = 0;
			$SD = $_GET['SoDonDH'];
			$sql = "SELECT * FROM dathang d JOIN khachhang k
					on d.MSKH=k.MSKH
					WHERE SoDonDH=$SD
				    ";
			$query = mysqli_query($connect,$sql);
			$row = mysqli_fetch_array($query);
			$idtt = $row['idTrangThai'];
		 ?>
		 <br>
		 <h6> Họ tên KH: <?php echo $row['HoTenKH']; ?> </h6>
		 <h6> Số điện thoại: <?php echo $row['SoDienThoai']; ?> </h6>
		 <h6> SoDonDH: <?php echo $row['SoDonDH']; ?> </h6>
		 <h6> MSKH: <?php echo $row['MSKH']; ?> </h6>
		 <h6> Thời gian ĐH: <?php echo $row['NgayDH']; ?> </h6>
		<!--  <h6> <?= $idtt?></h6>  -->
		
	<table class="table table-bordered" id="table_List_SP">
		<thead style="text-align: center;" class="thead-dark">
			<tr>
				<th>Sản phẩm</th>
				<th>Hình ảnh</th>
				<th>Số lượng</th>
				<th>Đơn giá</th>
				<th>Thành tiền</th>
				<th>Kiểm tra</th>
			</tr>
		</thead>
		<?php 
			$sql = "SELECT * from chitietdathang c JOIN dathang d 
					on c.SoDonDH = d.SoDonDH JOIN khachhang k
				    on d.MSKH = k.MSKH join hanghoa h
				    on c.MSHH = h.MSHH WHERE c.SoDonDH=$SD";
			$query = mysqli_query($connect,$sql);
			while($row = mysqli_fetch_array($query)):
				$Don = $row['SoDonDH'];
		 ?>
		<tbody id="chitietdathang">
			<tr>
				<?php $tt = $row['SoLuong']*$row['Gia'] ?>
				<td style="text-align: left;"><?php echo $row['TenHH'] ?></td>
				<td><img style="width: 25%;" src="http://localhost:8080/B1706838/images/SanPham/<?php echo $row['Hinh'] ?>" ></td>
				<td><?php echo $row['SoLuong'] ?></td>
				<td><?php echo number_format($row['Gia']) ?>đ</td>
				<td><?php echo number_format($tt) ?>đ</td>
				<?php $sum= $sum+$tt ?>
				<td>
					<a href="http://localhost:8080/B1706838/admin/trang_admin.php?view=kiemtra&SD=<?= $Don?>&idsp=<?= $row['MSHH']?>">Xem</a>
				</td>
			</tr>
		</tbody>
		<?php endwhile; ?>
		<tr>
				<td>Tổng tiền</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center; font-weight: 600;"><?php echo number_format($sum) ?>đ</td>
			</tr>
	</table>
	<?php// echo $Don;?>
	<a href="trang_admin.php?view=DonHang&action=update&SoDonDH=<?php echo $Don ?>">
	<button style="float: right;
    margin-bottom: 10px;" name="" class="btn btn-secondary">
    	<?php if($idtt==2) {
    		echo "Đã xác nhận";
    	} else echo "Xác nhận đơn hàng"?>
    </button>
	</a>
	<a href="http://localhost:8080/B1706838/admin/trang_admin.php?view=DonHang">
		<button type="button" class="btn btn-warning btn-back">Trở về</button>
	</a>
	
</div>
<style>
	#chitietdathang{
		text-align: center;
	}
	.table .thead-dark th {
		vertical-align: middle;
	}
	.btn-back{
		float: right;
    margin-right: 15px;
	}
</style>

