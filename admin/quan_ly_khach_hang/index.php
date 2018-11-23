<?php 
	require '../../global.php';
	require '../../pdo.php';
	require '../../dao/khach_hang.php';
 extract($_REQUEST);
	$khach_hang = khach_hang();
 if (exist_param('new')) {
 	$VIEW_NAME='new.php';
 }elseif (exist_param("them")) {
		try {
			kh_insert($ten_kh, $ten_dn, $mat_khau, $email, $vai_tro);
            unset( $ten_kh, $ten_dn, $mat_khau, $email, $vai_tro);
        	echo '<script type="text/javascript">alert("ok")</script>';
		} catch (Exception $exc) {
			echo '<script type="text/javascript">alert("Sai")</script>';
		}
		$VIEW_NAME = "new.php";
	}
elseif (exist_param("edit")) {
		$khach_hang=kh_byid($ma_kh);
		extract($khach_hang);
		$VIEW_NAME = "edit.php";
}elseif(exist_param("edit_kh")) {
		try {
			kh_update($ten_kh, $ten_dn, $mat_khau, $email, $vai_tro);
			echo '<script type="text/javascript"> alert("Cập nhật thành công")</script>';
		}catch (Exception $exc) {
			echo '<script type="text/javascript"> alert("Cập nhật thất bại")</script>';
		}
		$VIEW_NAME = "edit.php";
}
elseif(exist_param('delete')){
		try {
			delete_kh($ma_kh);
			$khach_hang = khach_hang();
			echo '<script type="text/javascript"> alert("Xoá thành công")</script>';
		} catch (Exception $exc) {
			echo '<script type="text/javascript"> alert("Xoá thất bại")</script>';
		}
		$VIEW_NAME='view.php';
	}
else {

	$VIEW_NAME="view.php";
}
require '../layout.php';

 ?>

 