

<form action="index.php" method="POST"  enctype="multipart/form-data">
	<h3 class="alert-info alert">Thêm khách sạn</h3>

	<div class="form-group">
		<label for="">Mã khách sạn</label>
		<input  type="text" class="form-control" id="" name="ma_ks" placeholder="Auto number" readonly="">
	</div>
	<div class="form-group">
		<label for="">Tên khách sạn</label>
		<input required="" type="text" class="form-control" id="" name="ten_ks" placeholder="Nhập tên khu vực">
	</div>
	<div class="form-group">
		<label>Hình</label>
		<input name="hinh" type="file" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Giá</label>
		<input required="" pattern=[0-9] type="text" class="form-control" id="" name="gia" placeholder="Nhập tên khu vực">
	</div>
	<div class="form-group">
		<label for="">Chi tiết</label>
		<input required="" type="text" class="form-control" id="" name="chi_tiet" placeholder="Nhập tên khu vực">
	</div>
	<button name="them" class="btn btn-success">Thêm mới</button>
	<a href="index.php?view" class="btn btn-info">Danh sách KVT</a>
</form>
<!-- <button type="button" class="btn btn-default view">Danh sách khu vực</button>
<button type="button" class="btn btn-default">Sửa khu vực</button> -->