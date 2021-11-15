<?php 
	$idSD = $_GET['SD'];
	$idsp = $_GET['idsp'];
	// echo $idsp $idSD;
	$sql = "SELECT * FROM chitietdathang c JOIN dathang d
			on c.SoDonDH = d.SoDonDH
		    JOIN hanghoa h on c.MSHH = h.MSHH
		    WHERE c.SoDonDH = $idSD and c.MSHH =$idsp";
	$query = mysqli_query($connect,$sql);
	$result = mysqli_fetch_array($query);
	$SoLuongHang = $result['SoLuongHang'];
	$SoLuong = $result['SoLuong'];
	$tenHH = $result['TenHH'];
	$hinh = $result['Hinh'];
?>

<div class="col-sm-9" id="content" >
	<div id="list_sp" class="row">
		<div class="col-sm-12">
			Kiểm tra số lượng
		</div>
	</div>
	<h6 style="padding: 10px 0px 10px 0px;">Tình trạng: 
		<strong style="color: red">
			<?php  
				if($SoLuongHang>=$SoLuong) echo "Còn hàng";
				else echo "Hết hàng";
			?>
		</strong>
	</h6>	
	<table class="table table-bordered" id="table_List_SP">
		<thead style="text-align: center;" class="thead-dark">
			<tr>
				<th>Sản phẩm</th>
				<th>Hình ảnh</th>
				<th>Số lượng</th>
				<th>Số lượng còn</th>
			</tr>
		</thead>
		<tbody id="chitietdathang">
			<tr>
				<td> <?=$tenHH ?></td>
				<td> <img src="http://localhost:8080/B1706838/images/SanPham/<?php echo $hinh ?>" height="85px"></td>
				<td> <?= $SoLuong?></td>
				<td> <?= $SoLuongHang?></td>
			</tr>
		</tbody>
	</table>
	<div id="back">
		<a href="http://localhost:8080/B1706838/admin/trang_admin.php?view=ChiTietDonHang&SoDonDH=<?=$idSD?>">
		<button type="button" class="btn btn-warning">Trở về</button>
	</a>
	</div>
</div>
<style>
	#chitietdathang{
		text-align: center;
	}
	.table .thead-dark th {
		vertical-align: middle;
	}
	#back{
		margin-bottom: 15px;
		position: relative;
    	left: 750px;
	}
	#back a:hover button{
		color: blue;
	}
</style>