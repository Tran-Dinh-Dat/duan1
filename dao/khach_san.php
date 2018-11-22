<?php 
function khach_san(){
	$sql="SELECT * from mo_hinh_khach_san";
	return pdo_query($sql);
} 
function ks_insert($ten_ks, $hinh, $gia, $chi_tiet){
		$sql = "INSERT INTO mo_hinh_khach_san(ten_ks,hinh, gia, chi_tiet) VALUES(?,?,?,?)";
		pdo_execute($sql, $ten_ks, $hinh, $gia, $chi_tiet); 
	}

	function ks_byid($ma_ks){
		$sql="SELECT * from mo_hinh_khach_san where ma_ks=?";
		return pdo_query_one($sql,$ma_ks);
	}
	function ks_update($ma_ks, $ten_ks, $hinh , $gia, $chi_tiet) {
		$sql = "UPDATE mo_hinh_khach_san SET ten_ks=?, hinh=? ma_ks=? gia=? chi_tiet=? WHERE ma_ks=? ";
		pdo_execute($sql, $ten_ks, $hinh, $ma_ks , $gia, $chi_tiet);
	}	
	function delete_ks($ma_ks){
    $sql = "DELETE FROM mo_hinh_khach_san WHERE ma_ks=?";
    if(is_array($ma_ks)){
        foreach ($ma_ks as $ma) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $ma_ks);
    }
}
?>