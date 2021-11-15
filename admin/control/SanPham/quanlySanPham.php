<?php if(isset($_GET['action'])){
	$temp = $_GET['action'];
	}
	else {
		$temp = '';
	}
	if($temp=='list'){
		include('list_sp.php');
	}
	if($temp=='add'){
		include('ThemSP.php');
	}
	if($temp=='update'){
		include('update.php');
	}
	if($temp=='delete'){
		$xoa = $_GET['MSHH'];
			$sql = "DELETE from hanghoa where MSHH='$xoa'";
			mysqli_query($connect,$sql);
			header("location:http://localhost/B1706838/admin/trang_admin.php?view=SanPham&action=list");		
	}
?>