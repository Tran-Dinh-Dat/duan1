<div class="container">
	
<form action="index.php" method="POST" role="form">
	<legend>Cập nhật tài khoản</legend>

	<div class="form-group">
		<label for="">Tên đăng nhập</label>
		<input type="text" class="form-control" id="" name="ten_dn" value="<?=$ten_dn?>" required="" readonly>
	</div>
	<div class="form-group">
		<label for="">Họ tên</label>
		<input type="text" class="form-control" id="" name="ten_kh" value="<?=$ten_kh?>" required="">
	</div>
	<div class="form-group">
		<label for="">Email</label>
		<input type="text" class="form-control" id="" name="email" value="<?=$email?>" required="">
	</div>
	<input type="submit" class="btn btn-primary" name="btn-capnhat" value="Cập nhật">
</form>
</div>