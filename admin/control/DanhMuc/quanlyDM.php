<?php if(isset($_GET['action'])){
	$temp = $_GET['action'];
	}
	else {
		$temp = '';
	}
	if($temp=='list'){
		include('list.php');
	}
	if($temp=='xoaDM'){
		include('xoaDM.php');
	}
	if($temp=='capnhat'){
		include('capnhat.php');
	}
	if($temp=='xemchitiet'){
		include('xemchitiet.php');
	}
	if($temp=='xoaNhom'){
		include('xoaNhom.php');
	}
	if($temp=='capnhatNhom'){
		include('capnhatNhom.php');
	}
?>