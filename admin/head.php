<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang quảng trị website bán hàng</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style_ad.css">
	<link
	rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
	/>
</head>
<body>
	<div style="margin: 0px" class="row">
	  <div class="col-sm-12 " id="ad_head">
	  	<div class="row">
	  		<div class="col-sm-7" id="ad_head_left">
	  			<span style="margin: 15px 15px 15px 50px;color: white;" >Xin chào</span>
	  			<a href="trang_admin.php"><strong style="color: yellow">
	  				<?php if(isset($_SESSION["login"])){
	  					echo strtoupper($_SESSION["login"][1]) ;
	  				} ?>
	  			</strong></a>
	  		</div>

	  		<div class="col-sm-4" id="ad_head_right">
	  			<div class="navbar">
	  				<a class="nav-link" href="trang_admin.php?view=DonHang">
	  					<div class="index">
	  						<?php 
	  						$sql = "SELECT COUNT(*) from dathang WHERE idTrangThai =1 ";
	  						$query = mysqli_query($connect,$sql);
	  						$row = mysqli_fetch_array($query);
	  						$kq = $row[0];
	  						  						
	  						 ?>
	  						<strong><?php echo $kq; ?></strong>
	  					</div>
	  					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  						<path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
	  					</svg>
	  				</a>
	  				<a class="nav-link" href="trang_admin.php">
	  					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  						<path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
	  						<path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
	  					</svg> Trang chủ 
	  				</a>
	  				<a class="nav-link" href="logout.php">Đăng xuất</a>
	  			</div>
	  		</div>
	  	</div>
	  </div>
	</div>
</body>
</html>
<style type="text/css">
	.index{
	position: absolute;
    background: red;
    width: 17px;
    border-radius: 50%;
    height: 17px;
    margin-left: 10px;
    margin-top: -5px;
	}
	.index strong{
	position: absolute;
    margin-top: -3.5px;
    margin-left: 3px;
	}
	a:hover .index{
		background: white;
	}
</style>