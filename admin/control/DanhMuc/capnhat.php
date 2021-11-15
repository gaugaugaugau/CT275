<div class="col-sm-9" id="content" >
	<div id="list_sp" class="row">
		<div class="col-sm-12">
			Chỉnh sửa tên danh mục
		</div>
	</div>
	<div class="row" id="add_danhmuc">
		<div class="col-sm-12">
			<form action="" method="post" style="display: inline-block;">
				<input class="btn" name="TenDanhMuc" style="border: 1px solid; cursor: none;" type="text" placeholder="Tên danh mục cần sửa...">
				<button type="submit" name="CapNhatDanhMuc" class="btn btn-primary">Cập nhật</button>
			</form>
			
		</div>
	</div>
	<table class="table table-bordered" id="table_List_SP">
		<thead style="text-align: center;" class="thead-dark">
			<tr>
				<th>Mã Danh Mục</th>
				<th>Tên Danh Mục cũ</th>
			</tr>
		</thead>
		<tbody id="dathang">
			<?php 
			    $ma = $_GET['MaDanhMuc'];
				$sql = "SELECT * from DanhMuc where MaDanhMuc=$ma";
				$query = mysqli_query($connect, $sql);
				$row = mysqli_fetch_array($query);
					# code...
			?>
			<tr>
				<td style="text-align: center"> <?= $row['MaDanhMuc'] ?></td>
				<td style="text-align: center"> <?= $row['TenDanhMuc']?></td>
			</tr>
		</tbody>

	</table>
</div>

<?php 
	if(isset($_POST['CapNhatDanhMuc'])){
		$ten =  $_POST['TenDanhMuc'];
		if($ten !=""){
			$sql = "UPDATE DanhMuc set TenDanhMuc = '$ten' where MaDanhMuc = '$ma'";
			mysqli_query($connect,$sql);
			header("location:http://localhost/B1706838/admin/trang_admin.php?view=DanhMuc&action=list");	
		}
	}
?>