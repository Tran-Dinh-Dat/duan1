<?php 
	require "../pdo.php";
	require "../global.php";
	function user(){
		$sql="SELECT * from user";
		return pdo_query($sql);
	};
	function dangki($ma_kh,$ten_dn,$ten_kh,$mat_khau,$email,$vai_tro){
		$sql="INSERT into user(ma_kh,ten_dn,ten_kh,mat_khau,email,vai_tro) values(?,?,?,?,?,?)";
		pdo_execute($sql,$ma_kh,$ten_dn,$ten_kh,$mat_khau,$email,$vai_tro==0);
	}
	function capnhat($ma_kh,$ten_dn,$ten_kh,$email){
		$sql="UPDATE user set ma_kh=?,ten_dn=?,ten_kh=?,email=? where ma_kh=$ma_kh";
		pdo_execute($sql,$ma_kh,$ten_dn,$ten_kh,$email);
	}
	function doimatkhau($ma_kh,$matkhaumoi) {
		$sql = "UPDATE user set mat_khau =? where ma_kh=$ma_kh";
		pdo_execute($sql,$matkhaumoi);
	}
?>