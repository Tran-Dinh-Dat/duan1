<form action="index.php" method="POST"  enctype="multipart/form-data">
	<legend class="alert-info alert">Quản lý tour</legend>
<div class="col-md-6">
	<div class="form-group">
		<label for="">Mã tour</label>
		<input type="text" class="form-control" id="" name="ma_tour" placeholder="Auto number" readonly="">
	</div>
	<div class="form-group">
		<label for="">Tên tour</label>
		<input type="text" class="form-control" id="" name="ten_tour" placeholder="Nhập tên khu vực">
	</div>
	<div class="form-group">
		<label>Hình</label>
		<input name="hinh" type="file" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Mã khu vực</label>
		<input type="text" class="form-control" id="" name="ma_kvt" placeholder="Nhập mã khu vực">
	</div>
	<div class="form-group">
		<label for="">Giá</label>
		<input type="text" class="form-control" id="" name="gia" placeholder="Nhập giá">
	</div>
</div>
<div class="col-md-6">
	<div class="form-group">
		<label for="">Số ngày</label>
		<input type="text" class="form-control" id="" name="so_ngay" placeholder="">
	</div>
	<div class="form-group">
		<label for="">Số lượt xem</label>
		<input type="text" class="form-control" id="" name="so_luot_xem" readonly="" placeholder="">
	</div>
	<div class="form-group">
		<label for="">Số lượt yêu thích</label>
		<input type="text" class="form-control" id="" name="so_luot_yt" readonly="" placeholder="">
	</div>
	<div class="form-group">
		<label for="">Ngày khởi hành</label>
		<input type="date" class="form-control" id="" name="ngay_khoi_hanh" placeholder="">
	</div>
	<div class="form-group">
		<label for="">Chi tiết</label>
		<input type="text" class="form-control" id="" name="chi_tiet" placeholder="">
	</div>
</div>
	<button name="them" class="btn btn-success">Thêm mới</button>
	<a href="index.php?view" class="btn btn-info">Danh sách KVT</a>
</form>
<!-- <button type="button" class="btn btn-default view">Danh sách khu vực</button>
<button type="button" class="btn btn-default">Sửa khu vực</button> -->




