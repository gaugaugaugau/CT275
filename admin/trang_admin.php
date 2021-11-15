<?php 
ob_start();
session_start();
if(!isset($_SESSION["login"])){
	header("location:login.php");
}
else {
	include('../config/config.php');
	include('head.php') 
	?>
		<div class="container">
			<div class="row">
				<?php include("sidebar.php"); ?>
				<?php include("control/controller.php"); ?>
			</div>
		</div>
<?php } ?>