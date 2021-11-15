<?php 
	for ($i=$sum_trang; $i >=1 ; $i--) {?>
		<?php if($i==$nb_trang){ ?>
			<a href="?per_page=<?=$nb_sanpham?>&&page=<?=$i?>" class="badge red badge-secondary"><?=$i?></a>
		<?php } else{ ?>
			<a href="?per_page=<?=$nb_sanpham?>&&page=<?=$i?>" class="badge badge-secondary"><?=$i?></a>
		<?php } ?>
<?php } ?>


<style>
	.badge{
		font-size: 100%;
		margin-bottom: 10px;
		margin-left: 5px;
		float: right;
	}
	.red{
		background-color: red;
		color: black;
	}
</style>