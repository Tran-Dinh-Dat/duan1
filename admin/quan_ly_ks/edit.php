

<form action="index.php" method="POST"  enctype="multipart/form-data">
	<h3 class="alert-info alert">Cập nhật khách sạn</h3>

	<div class="form-group">
		<label for="">Mã khách sạn</label>
		<input type="text" class="form-control" id="" name="ma_ks" value="<?=$ma_ks?>" readonly="" >
	</div>
	<div class="form-group">
		<label for="">Tên khách sạn</label>
		<input type="text" required="" class="form-control" id="" name="ten_ks" value="<?=$ten_ks?>">
	</div>
	<div class="form-group">
		<label>Hình</label>
		<input name="hinh" type="file" class="form-control" value="<?=$hinh?>">
	</div>
	<div class="form-group">
		<label for="">Giá</label>
		<input required pattern=[0-9] type="text" class="form-control" id="" name="gia" value="<?=$gia?>" >
	</div>
	<div class="form-group">
		<label for="">Chi tiết</label>
		<input required="" type="text" class="form-control" id="" name="chi_tiet" value="<?=$chi_tiet?>">
	</div>
	<button name="edit_ks" class="btn btn-success">Cập nhật</button>
	<a href="index.php?view" class="btn btn-info">Danh sách KVT</a>
</form>
<!-- <button type="button" class="btn btn-default view">Danh sách khu vực</button>
<button type="button" class="btn btn-default">Sửa khu vực</button> -->