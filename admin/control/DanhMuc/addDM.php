<div class="col-sm-9" id="content" >
	<div id="list_sp" class="row">
		<div class="col-sm-12">
			Thêm danh mục
		</div>
	</div>
	<div class="container">
		<div>			
				<form method="POST" id="addDanhMuc">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputHoTen">Họ tên</label>
							<input type="text" name="HoTen" class="form-control" id="inputHoTen" placeholder="Nhập họ tên nhân viên..." required>
						</div>
						<div class="form-group col-md-6">
							<label for="inputChucVu">Chức vụ</label>
							<input type="text" name="ChucVu" class="form-control" id="inputChucVu" placeholder="Nhập chức vụ nhân viên..." required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputSDT">Số điện thoại</label>
							<input type="text" name="SDT" class="form-control" id="inputSDT" placeholder="Nhập số điện thoại nhân viên..." required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label >Địa chỉ</label>
						</div>	
						<textarea name="DiaChi" style="width: 500px; height: 200px; margin-bottom: 10px"></textarea>
					</div>
					<button type="submit" name="ThemNV" class="btn btn-primary">Thêm</button>
				</form>
		</div>
	</div>
</div>
<style>
	#addDanhMuc{
		border: 1px solid #00000030;
	    border-radius: 10px;
	    padding: 20px;
	    margin: 10px 0 10px 0px;
	}
	
</style>