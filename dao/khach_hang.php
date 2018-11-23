<?php 
function khach_hang(){
	$sql="SELECT * from user";
	return pdo_query($sql);
} 
function kh_insert($ten_kh, $ten_dn, $mat_khau, $email, $vai_tro){
		$sql = "INSERT INTO user(ten_kh, ten_dn, mat_khau, email, vai_tro) VALUES(?,?,?,?,?)";
		pdo_execute($sql,  $ten_kh, $ten_dn, $mat_khau, $email, $vai_tro); 
	}


	function kh_byid($ma_kh){
		$sql="SELECT * from user where ma_kh=?";
		return pdo_query_one($sql,$ma_kh);
	}
	function kh_update($ten_kh, $ten_dn, $mat_khau, $email, $vai_tro) {
		$sql = "UPDATE user SET ten_kh=?, ten_dn=? mat_khau=? email=? vai_tro=? WHERE ma_kh=? ";
		pdo_execute($sql, $ten_kh, $ten_dn, $mat_khau, $email, $vai_tro);
	}	

	function delete_kh($ma_kh){
    $sql = "DELETE FROM user WHERE ma_kh=?";
    if(is_array($ma_kh)){
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $ma_kh);
    }
}
 ?>


