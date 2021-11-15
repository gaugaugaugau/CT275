<?php if(isset($_GET['action'])){
	$temp = $_GET['action'];
	}
	else {
		$temp = '';
	}
	if($temp=='list'){
		include('listNV.php');
	}
	if($temp=='them'){
		include('ThemNV.php');
	}

	if($temp=='capnhat'){
		include('CapNhatNV.php');
	}

		if($temp=='xoa'){
		if(isset($_GET['MSNV'])){
			$xoa = $_GET['MSNV'];
			$sql = "DELETE from nhanvien where MSNV='$xoa'";
			mysqli_query($connect,$sql);
			header("location:http://localhost:8080/B1706838/admin/trang_admin.php?view=NhanVien&action=list");	
			}
			else {
				$temp = '';
			}
	}

?>

