<?php if(isset($_GET['action'])){
	$temp = $_GET['action'];
	}
	else {
		$temp = '';
	}
	if($temp=='list'){
		include('listKM.php');
	}
	if($temp=='them'){
		include('them.php');
	}
	if($temp=='xoa'){
		include('xoa.php');
	}
	if($temp=='sua'){
		include('suaKM.php');
	}
?>