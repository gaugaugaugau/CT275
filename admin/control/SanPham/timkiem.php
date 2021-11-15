<?php 
	$key = $_POST['keyword']; 
?>
<div class="col-sm-9" id="content" >
	<div id="list_sp" class="row">
		<div class="col-sm-12">
			Danh sách sản phẩm
		</div>
	</div>
	<div class="row" id="add_SP">
		<div class="col-sm-7" style="float: left;">
			<div class="timkiem">
				<form action="trang_admin.php" name="timKiemSP" method="post">
						<input type="text" class="input" name="keyword" placeholder="Nhập sản phẩm cần tìm.... " title="Nhập sản phẩm cần tìm...">
						<button type="submit" class="tim" name="submit"> 
							<a href=""><i class="fa fa-search" aria-hidden="true"></i> </a> 
						</button>
				</form>
			</div>
		</div>
		<div class="col-sm-5">
			<a style="float: right" href="trang_admin.php?view=SanPham&action=add" class="btn btn-primary" role="button">Thêm sản phẩm</a>
		</div>
	</div>
	<table class="table table-bordered" id="table_List_SP">
		<thead style="text-align: center; vertical-align: middle;" class="thead-dark">
			<tr>
				<th>STT</th>
				<th>Ảnh</th>
				<th>Tên sản phẩm</th>
				<th>Hãng </th>
				<th>Số lượng tồn</th>
				<th>Sửa</th>
				<th>Xoá</th>
			</tr>
		</thead>
		<?php 
			
			$sql = "SELECT * FROM hanghoa h JOIN nhomhanghoa n 
					on h.MaNhom = n.MaNhom
					JOIN danhmuc d on
					n.MaDanhMuc = d.MaDanhMuc where h.TenHH Like '%$key%'
					";
			$query = mysqli_query($connect, $sql);
			$i = 1;		
		 ?>
		 <?php while ($row = mysqli_fetch_array($query)) :?>
			<tbody>
				<tr>
					<td style="text-align: center;"><?php echo $i ?></td>
					<td style="width: 180px"><img style="width: 50%;margin-left: auto;margin-right: auto;display: block;" src="../images/SanPham/<?php echo $row['Hinh'] ?>" alt="a"></td>
					<td><?php echo $row['TenHH'] ?></td>
					<td style="text-align: center;"> <?php echo $row['TenNhom'] ?></td>
					<td style="text-align: center;"><?php echo $row['SoLuongHang']?></td>
					<td><a href="trang_admin.php?view=SanPham&action=update&MSHH=<?php echo $row['MSHH'] ?>">

						<i style="margin-left: 20px;font-size: 20px; color: black" class="fa fa-wrench" aria-hidden="true"></i></a>
					</td>
					<td><a href="trang_admin.php?view=SanPham&action=delete&MSHH=<?php echo $row['MSHH'] ?>">
						<i style="margin-left: 20px;font-size: 20px;color: black" class="fa fa-trash-o" aria-hidden="true"></i></a>
					</td>
				</tr>
			</tbody>
			<?php ++$i; ?>
		<?php endwhile;
		if($i==1) echo "Không tìm thấy sản phẩm cần tìm";
		?>
	</table>
</div>
<style>
	.timkiem{
		width: 312px;
	    height: 35px;
	    background: #cec6c6;
	    float: left;
	    border-radius: 10px;
	}	
	.input{
		width: 270px;
	    height: 35px;
	    border: 0px;
	    outline: none;
	    border-radius: 5px;
	    background: #cec6c6;
	    padding: 10px;
	}
	.tim{
		background: #cec6c6;
	    border: none;
	    height: 35px;
	    width: 35px;
	    position: relative;
	    top: -1px;
	    left: -10px;
	}
</style>