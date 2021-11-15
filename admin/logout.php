<?php
	ob_start();
	session_start();
	session_destroy();
	header("location:trang_admin.php");
?>