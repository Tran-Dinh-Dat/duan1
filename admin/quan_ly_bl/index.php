


<?php 
require "../../global.php";
require "../../pdo.php";
require "../../dao/binhluan.php";
extract($_REQUEST);
if(exist_param('delete')){
		try {
			delete_binh_luan($ma_bl);
			$select_binh_luan=select_binh_luan();
			echo '<script type="text/javascript"> alert("Xoá thành công")</script>';
		} catch (Exception $exc) {
			echo '<script type="text/javascript"> alert("Xoá thất bại")</script>';
		}
		$VIEW_NAME='view_bl.php';
	}


	else{
	 	$select_binh_luan=select_binh_luan();
		$VIEW_NAME='quan_ly_bl/view_bl.php';
	}
require '../layout.php';
?>
