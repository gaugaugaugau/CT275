<?php
session_start();  //Session có thể sử dụng sau khi chèn đoạn này
ob_start();  //Sử dụng được hàm header();
//session_destroy();
?>
<?php 
include('config/config.php');
include('inc/header.php');
?>
<div class="wrap">
	<div class="clear_all"></div>
<?php 
     include('inc/banner.php');
     include('content/content.php');?>
</div>
<?php include('inc/footer.php') ?>