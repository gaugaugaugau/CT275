<div class="col-sm-9" id="content" >
	<div id="list_sp" class="row">
		<div class="col-sm-12">
			Chỉnh sửa tên nhóm
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<form action="" method="post" style="display: inline-block;margin: 10px 0 10px 0">
				<input class="btn" name="TenNhom" style="border: 1px solid; cursor: none;" type="text" placeholder="Tên nhóm cần sửa...">
				<button type="submit" name="CapNhatNhom" class="btn btn-primary">Cập nhật</button>
			</form>	
		</div>
	</div>
	<table class="table table-bordered" id="table_List_SP">
		<thead style="text-align: center;" class="thead-dark">
			<tr>
				<th>Mã nhóm cũ</th>
				<th>Tên Nhóm cũ</th>
			</tr>
		</thead>
		<tbody id="dathang">
			<?php 
			    $ma = $_GET['MaNhom'];
				$sql = "SELECT * from NhomHangHoa where MaNhom=$ma";
				$query = mysqli_query($connect, $sql);
				$row = mysqli_fetch_array($query);
					# code...
			?>
			<tr>
				<td style="text-align: center"> <?= $row['MaNhom'] ?></td>
				<td style="text-align: center"> <?= $row['TenNhom']?></td>
			</tr>
		</tbody>

	</table>
</div>

<?php 
	if(isset($_POST['CapNhatNhom'])){
		$ten =  $_POST['TenNhom'];
		if($ten !=""){
			$sql = "UPDATE NhomHangHoa set TenNhom = '$ten' where MaNhom = '$ma'";
			mysqli_query($connect,$sql);
			header("location:http://localhost/B1706838/admin/trang_admin.php?view=DanhMuc&action=list");	
		}
	}
?>