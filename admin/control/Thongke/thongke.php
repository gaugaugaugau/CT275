<!-- Tong tien ban duoc trong ngay -->
<?php 
	$sql = "SELECT * from chitietdathang c JOIN dathang d
			on c.SoDonDH = d.SoDonDH
    		WHERE DATE(d.NgayDH) = CURRENT_DATE()
            and d.idTrangThai = 2";
	$query = mysqli_query($connect,$sql);
	$sum = 0;
	$sp = 0;
	if ($query) {
        while ( $row = mysqli_fetch_array($query)) {
        	$tt = $row["Gia"]*$row["SoLuong"];
        	$sum+=$tt;
        	$sp+=$row["SoLuong"];
        }
    }
	else {
    // Code xử lý lỗi
    //echo "Xảy ra lỗi khi truy vấn dữ liệu";
}
 ?>
 <!--Đếm số đơn đh-->
<?php 
	$sql1 = "SELECT * from  dathang 
    		WHERE DATE(NgayDH) = CURRENT_DATE()
            and idTrangThai = 2";
	$query1 = mysqli_query($connect,$sql1);
	$dem = 0;
	if ($query1) {
        while ( $row1 = mysqli_fetch_array($query1)) {
        	++$dem;
     	}
    }
	else {
    // Code xử lý lỗi
    //echo "Xảy ra lỗi khi truy vấn dữ liệu";
}
 ?>
<div class="col-sm-9" id="content" >
	<div id="list_sp" class="row">
		<div class="col-sm-12">
			Hoạt động hôm nay
		</div>
	</div>
	<ul class="tk">
		<li class="thongke" style="margin-left: 20px">
			<div class="khung" style="background-color: #0000ff94">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-back" viewBox="0 0 16 16">
				  <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z"/>
				  <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z"/>
				</svg>  Tiền bán hàng: <br>&ensp;&ensp;&ensp;
						<strong>
							<?php echo number_format($sum,0,",","."); ?>đ
						</strong>
			</div>
		</li>
		<li class="thongke">
			<div class="khung" style="background-color: #ff9800">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi 	bi-cart3" viewBox="0 0 16 16">
			  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
			</svg>   
			Số đơn đặt hàng: <br>&ensp;&ensp;&ensp;
				<strong>
					<?php echo $dem; ?>
				</strong>
			</div>
		</li>
		<li class="thongke">
			<div class="khung" style="background-color: green">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
				  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
				</svg> 
			Số sản phẩm: <br>&ensp;&ensp;&ensp;
				<strong>
					<?php echo $sp; ?> 
				</strong>
			</div>

		</li>
	</ul>

<style>
	.tk{
		list-style: none;
		padding: 10px;
		color: white;
		margin-top: 20px;
	}
	.thongke{
		float: left;
		margin-right: 50px;
	}
	.khung{
		width: 210px;background-color:red;
		height: 70px;
		padding: 10px;
	}

</style>

