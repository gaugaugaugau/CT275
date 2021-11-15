<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Website ban hang truc tuyen</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/styleChiTiet.css">
	<link
	rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
	/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="		sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://nguyenvandinh.com/Content/template/ANThanhs/js/jquery-2.1.4.min.js" type="text/javascript">
	</script>
	<script src="js/slideShow.js" type="text/javascript" ></script>
	<script src="js/event.js" type="text/javascript"></script>
	<script src="jquery-3.5.1.min.js"></script>
</head>
<body>
	<div id="header">
		<div id="wrap-header">
			<div class="left">
				<div class="search">
					<form action="index.php" name="timKiemSP" method="post">
						<input type="text" id="search" name="keyword" placeholder="Nhập sản phẩm cần tìm.... " title="Nhập sản phẩm cần tìm...">
						<button type="submit" onclick="" name="submit"> 
							<a href=""><i class="fa fa-search" aria-hidden="true"></i> </a> 
						</button>
					</form>
				</div>
			</div>      
			<div class="center">
				<a href="./index.php"><img src="./images/LG.svg" alt=""></a>
			</div>
			<div class="right">
				<div class="login">
					<ul>
						<!-- <li>
							<a href="">
								<svg style="margin-top: -6px;font-size: 25px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
								</svg>
								Tài khoản
							</a>
							<ul class="sub">
								<li><a href="">Đăng nhập</a></li>
								<li><a href="">Đăng ký</a></li>
							</ul>
						</li> -->
						<li>
							<a href="index.php?xem=giohang">Giỏ hàng
								<span class="giohang">
									<svg style="margin-top: -10px;font-size: 23px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
									</svg>
									<p id="number_item" style="	background: red;
									border: 1px solid #0F1C3F;
									border-radius: 50%;
									height: 20px;
									width: 20px;
									margin-top: -45px;
									margin-left: 70px;"> 

									<b style="position: absolute;
									margin-top: -3px;
									margin-left: 4px;
									font-weight: 500"> 
									<?php 
									$dem = 0;
									if(isset($_SESSION)){
										foreach ($_SESSION as $key => $value) {
											$i = substr($key,5,10);
											if($i>0) $dem++;
											else $dem=0;
										}
									}
									else $dem = 0;
									echo $dem;
									?>
								</b> 
							</p>
						</span>
					</a>
				</li>
				
			</ul>
		</div>
	</div>
</div>	
</div>
<div class="wrap-menu">	
	<div class="menu">
		<ul class="root">
			<li><a href="./index.php">
				<svg style="font-size: 20px; margin-top: -6px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns=	"http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
					<path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
				</svg> &nbsp; 
			Trang chủ</a></li>
			<li><a href="index.php?xem=allSp">Sản phẩm</a>
				<ul class="submenu">
					<?php 
						$select_danhmuc = "SELECT * FROM danhmuc";
						$query_danhmuc = mysqli_query($connect,$select_danhmuc);
					?>
					<?php while($hienthi_danhmuc = mysqli_fetch_array($query_danhmuc)) { ?>
					<li><a href="index.php?xem=DanhMuc&MaDanhMuc=<?php echo $hienthi_danhmuc['MaDanhMuc'] ?>"><?php echo $hienthi_danhmuc['TenDanhMuc'] ?></a></li>
				<?php } ?>
				</ul>
			</li>
			<li><a target="_blank" href="http://localhost:8080/b1706838/inc/Gioithieu.html">Thông tin</a></li>
			<li><a href="http://localhost:8080/b1706838/index.php?xem=lienhe">Liên hệ</a></li>
		</ul>
	</div>
</div>
</body>
</html>