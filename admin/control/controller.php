<?php if(isset($_GET['view'])){
	$temp = $_GET['view'];
	}
	else {
		$temp = '';
	}
	if($temp=='NhanVien'){
		include('NhanVien/quanly.php');
	}
	
	else if($temp=='DonHang'){
		include('DonHang/DonHang.php');
	}
	else if($temp=='ChiTietDonHang'){
		include('DonHang/ChiTietDonHang.php');
	}
	else if($temp=='kiemtra'){
		include('DonHang/KiemTraSoLuong.php');
	}
	else if($temp=='SanPham'){
		include('SanPham/quanlySanPham.php');
	}
	else if($temp=='thongke'){
		include('Thongke/thongke.php');
	}
	else if($temp=='DanhMuc'){
		include('DanhMuc/DanhMuc.php');
	}
	else if($temp=='KhuyenMai'){
		include('KhuyenMai/KhuyenMai.php');
	}
	else if(isset($_POST['submit'])){
        include('SanPham/timKiem.php');
    }
	else{
		include('SanPham/list_sp.php');
	} 
		
?>