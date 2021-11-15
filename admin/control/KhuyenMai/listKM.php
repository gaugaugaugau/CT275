<div class="col-sm-9" id="content" >
	<div id="list_sp" class="row">
		<div class="col-sm-12">
			Danh sách khuyến mãi
		</div>
	</div>
	<div class="row" id="add_danhmuc">
		<div class="col-sm-12">
			<a href="http://localhost/B1706838/admin/trang_admin.php?view=KhuyenMai&action=them">
				<button type="submit" name="addDM" class="btn btn-primary">Thêm Khuyến mãi</button>
			</a>
			
		</div>
	</div>
	<table class="table table-bordered" id="table_List_SP">
		<thead style="text-align: center;" class="thead-dark">
			<tr>
				<th style="vertical-align: middle;">ID </th>
				<th>Tên danh mục</th>
				<th style="vertical-align: middle;">Tên khuyến mãi</th>
				<th style="vertical-align: middle;">Đi kèm</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody id="dathang">
			<?php
				$sql = "SELECT * FROM khuyenmai k JOIN danhmuc d on k.MaDanhMuc = d.MaDanhMuc ORDER BY idKhuyenMai";
				$qr = mysqli_query($connect, $sql);
				while ($row = mysqli_fetch_array($qr)) {
			?>
			<tr>
				<td> <?= $row['idKhuyenMai']?></td>
				<td> <?= $row['TenDanhMuc']?></td>
				<td> <?= $row['TenKhuyenMai']?></td>
				<td> <?= $row['DiKem']?></td>
				<td style="text-align: center"> 
					<a href="http://localhost/B1706838/admin/trang_admin.php?view=KhuyenMai&action=sua&idKM=<?= $row['idKhuyenMai']?>">
					Sửa</a>
					<a href="http://localhost/B1706838/admin/trang_admin.php?view=KhuyenMai&action=xoa&idKM=<?= $row['idKhuyenMai']?>" style="color: red; font-weight: bold;">Xoa</a> <br>	
				</td>
				
			</tr>
		<?php } ?>
		</tbody>

	</table>
</div>

<?php 
	if(isset($_POST['addDM'])){
		$ten =  $_POST['TenDM'];
		if($ten !=""){
			$sql = "INSERT into DanhMuc(TenDanhMuc) 
				values('$ten')";
		mysqli_query($connect,$sql);
		header("location:http://localhost/B1706838/admin/trang_admin.php?view=DanhMuc&action=list");	
		}
	}
?>