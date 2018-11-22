<?php 
	require '../../global.php';
	require '../../pdo.php';
	require '../../dao/khach_san.php';
 extract($_REQUEST);

 if (exist_param('new')) {
 	$VIEW_NAME='new.php';
 }elseif (exist_param("them")) {
		$up_hinh = save_file("hinh", "$IMAGE_DIR/products/");
    	$hinh = strlen($up_hinh) > 0 ? $up_hinh : "abc.jpg";
		try {
			ks_insert($ten_ks, $hinh, $gia, $chi_tiet);
            unset($ten_ks, $hinh, $gia, $chi_tiet);
        	echo '<script type="text/javascript">alert("ok")</script>';
		} catch (Exception $exc) {
			echo '<script type="text/javascript">alert("Sai")</script>';
		}
		$VIEW_NAME = "new.php";
	}
elseif (exist_param("edit")) {
		$khach_san=ks_byid($ma_ks);
		extract($khach_san);
		$VIEW_NAME = "edit.php";
}elseif(exist_param("edit_ks")) {
		$up_hinh = save_file("up_hinh", "$IMAGE_DIR/products/");
    	$hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
		try {
			ks_update($ma_ks,$ten_ks,$hinh,$gia, $chi_tiet );
			echo '<script type="text/javascript"> alert("Cập nhật thành công")</script>';
		}catch (Exception $exc) {
			echo '<script type="text/javascript"> alert("Cập nhật thất bại")</script>';
		}
		$VIEW_NAME = "edit.php";
	}
elseif(exist_param('delete')){
		try {
			delete_ks($ma_ks);
			$khach_san=khach_san();
			echo '<script type="text/javascript"> alert("Xoá thành công")</script>';
		} catch (Exception $exc) {
			echo '<script type="text/javascript"> alert("Xoá thất bại")</script>';
		}
		$VIEW_NAME='view.php';
	}
else {
	$khach_san = khach_san();
	$VIEW_NAME="view.php";
}
require '../layout.php';

 ?>

 