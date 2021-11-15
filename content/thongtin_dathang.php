	<form id="info" action="" method="post" enctype="multipart/form-data">
		<h2>Thông tin người nhận</h2>
		<div class="tt">
			
			Họ tên(*) <input type="text" name="HoTenKH" id="hoten" required /> <br><br>
			SĐT(*) <input type="text" name="SoDienThoai" id="sdt" required /> <br><br>
			Địa chỉ(*) <textarea name="DiaChi" id="diachi" required > </textarea><br><br>
			<input style="    margin-left: auto;
			margin-right: auto;
			display: block;
			background: green;
			color: white;
			font-weight: 600;
			;" 
			type="submit" value="Đặt hàng" name="thanhtoan">
		</div>
	</form>
	<style>
		form#info{
			width: 850px;
			margin: 50px auto;
			border: 1px solid black;
			padding: 10px;
		}
		form#info .tt{
			padding: 10px;
			width: 50%;
			margin: auto;
			border: 1px solid #dcd7d77a;
			border-radius: 5px;
		}
		form#info .tt input{
			padding: 10px;
			width: 300px;
			border: none;
			border: 1px solid #dcd7d77a;
			outline: none;
			border-radius: 5px;
		}
		form#info .tt input#sdt{
			margin-left: 20px;
		}
		form#info .tt #diachi{
			width: 300px;
			padding: 10px;
			height: 100px;
			border: 1px solid #dcd7d77a;
			outline: none;
		}
	</style>