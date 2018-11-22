<?php
	function kvt(){
		$sql="SELECT * from khu_vuc";
		return pdo_query($sql);
	}
	function kvt_insert($ten_kvt, $hinh){
		$sql = "INSERT INTO khu_vuc(ten_kvt,hinh) VALUES(?,?)";
		pdo_execute($sql, $ten_kvt, $hinh); 
	}
	function kvt_byid($ma_kvt){
		$sql="SELECT * from khu_vuc where ma_kvt=?";
		return pdo_query_one($sql,$ma_kvt);
	}
	function kvt_update($ma_kvt, $ten_kvt, $hinh) {
		$sql = "UPDATE khu_vuc SET ten_kvt=?, hinh=? WHERE ma_kvt=? ";
		pdo_execute($sql, $ten_kvt, $hinh, $ma_kvt);
	}	

	function delete($ma_kvt){
    $sql = "DELETE FROM khu_vuc WHERE ma_kvt=?";
    if(is_array($ma_kvt)){
        foreach ($ma_kvt as $ma) {
            pdo_execute($sql, $id);
        }
    }
    else{
        pdo_execute($sql, $ma_kvt);
    }
}
?>