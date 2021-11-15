<div class="col-sm-9" id="content" >
	<div id="list_sp" class="row">
		<div class="col-sm-12">
			Danh sách danh mục
		</div>
	</div>
	<div class="row" id="add_danhmuc">
		<div class="col-sm-12">
			<form action="http://localhost/B1706838/admin/trang_admin.php?view=DanhMuc&action=list" method="post" style="display: inline-block;">
				<input class="btn" name="TenDM" style="border: 1px solid; cursor: none;" type="text" placeholder="Tên danh mục cần thêm...">
				<button type="submit" name="addDM" class="btn btn-primary">Thêm danh mục</button>
			</form>
			
		</div>
	</div>
	<table class="table table-bordered" id="table_List_SP">
		<thead style="text-align: center;" class="thead-dark">
			<tr>
				<th>Mã Danh Mục</th>
				<th>Tên Danh Mục</th>
				<th>Chi tiết</th>
				<th>Chỉnh sửa</th>
			</tr>
		</thead>
		<tbody id="dathang">
			<?php 
				$sql = "SELECT * from DanhMuc";
				$query = mysqli_query($connect, $sql);
				while ($row = mysqli_fetch_array($query)) {
					# code...
			?>
			<tr>
				<td> <?= $row['MaDanhMuc'] ?></td>
				<td> <?= $row['TenDanhMuc']?></td>
				<td style="text-align: center"> <a href="http://localhost/B1706838/admin/trang_admin.php?view=DanhMuc&action=xemchitiet&MaDanhMuc=<?= $row['MaDanhMuc']?>">Xem</a></td>
				<td style="text-align: center"> 
					<a style="margin-right: 15px;" href="http://localhost/B1706838/admin/trang_admin.php?view=DanhMuc&action=capnhat&MaDanhMuc=<?= $row['MaDanhMuc']?>">Sua</a>
					<a style="color: red; font-weight: bold;" href="http://localhost/B1706838/admin/trang_admin.php?view=DanhMuc&action=xoaDM&MaDanhMuc=<?= $row['MaDanhMuc']?>">Xoa</a>
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