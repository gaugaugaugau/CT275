<div class="col-sm-9" id="content" >
	<div id="list_sp" class="row">
		<div class="col-sm-12">
			Danh sách đơn hàng
		</div>
	</div>
	<table class="table table-bordered" id="table_List_SP">
		<thead style="text-align: center;" class="thead-dark">
			<tr>
				<th>STT</th>
				<th>Tên khách hàng</th>
				<th>Ngày đặt hàng</th>
				<th>Chi tiết</th>
				<th>Trạng thái đơn hàng</th>
			</tr>
		</thead>
		<?php 
			$sql = "SELECT * from dathang d join trangthai t
				on d.idTrangThai = t.idTrangThai join khachhang k
				on d.MSKH = k.MSKH order by d.SoDonDH desc";
			$query = mysqli_query($connect,$sql);
			$i=0;
			while($row = mysqli_fetch_array($query)):
		 ?>
		<tbody id="dathang">
			<tr>
				<td><?php echo ++$i; ?></td>
				<td style="text-align: left;"><?php echo $row['HoTenKH'] ?></td>
				<td><?php echo  $row['NgayDH'] ?></td>
				<td><a href="http://localhost:8080/B1706838/admin/trang_admin.php?view=ChiTietDonHang&SoDonDH=<?php echo $row['SoDonDH']?>">Xem</a></td>
				<td><?php echo $row['TenTrangThai'] ?>
					<a href="trang_admin.php?view=DonHang&action=update&SoDonDH=<?php echo $row['SoDonDH'] ?>">
						<i class="fa fa-check" aria-hidden="true"></i>
					</a>
				</td>
			</tr>
		</tbody>
		<?php endwhile; ?>
	</table>
</div>
<style>
	#dathang{
		text-align: center;
	}
</style>
<!-- Cap nhat lai trang thai thanh Da Xem -->
<?php if(isset($_GET['action'])=='update'&& isset($_GET['SoDonDH'])){
	$SoDonDH = $_GET['SoDonDH'];
	$sql_update = "UPDATE dathang set idTrangThai=2 where SoDonDH=$SoDonDH";
	mysqli_query($connect,$sql_update);
	header("location:http://localhost:8080/B1706838/admin/trang_admin.php?view=DonHang");
} ?>