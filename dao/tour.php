<?php 
	 function tour(){
		$sql = "SELECT * FROM tour";
		return pdo_query($sql);
	}
    function tour_by_id($ma_tour){
        $sql = "SELECT * FROM tour where ma_tour=?";
        return  pdo_query_one($sql,$ma_tour);
    }
	function tour_insert($ma_tour,$ten_tour,$hinh,$ma_kvt,$gia,$so_ngay,$So_luot_xem,$so_luot_yeu_thich,$ngay_khoi_hanh,$noi_khoi_hanh,$chi_tiet){
		$sql = "INSERT INTO tour(ma_tour,ten_tour,hinh,ma_kvt,gia,so_ngay,So_luot_xem,so_luot_yeu_thich,ngay_khoi_hanh,noi_khoi_hanh,chi_tiet) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
		pdo_execute($sql,$ma_tour,$ten_tour,$hinh,$ma_kvt,$gia,$so_ngay,$So_luot_xem,$so_luot_yeu_thich,$ngay_khoi_hanh,$noi_khoi_hanh,$chi_tiet);
	}

	function tour_select_keyword($keyword){
    $sql = "SELECT * FROM tour t "
            . " JOIN khu_vuc lo ON lo.ma_kvt=t.ma_tour "
            . " WHERE ten_tour LIKE ? OR ten_kvt LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}
function xoa_yeu_thich($ma_yt){
    $sql = "DELETE FROM yeu_thich WHERE ma_yt=?";
    if(is_array($ma_yt)){
        foreach ($ma_yt as $ma) {
            pdo_execute($sql, $id);
        }
    }
else{
        pdo_execute($sql, $ma_yt);
    }
    }
    function unlike($ma_tour,$so_luot_yeu_thich){
		$sql="UPDATE tour set so_luot_yeu_thich=$so_luot_yeu_thich-1 where ma_tour=$ma_tour";
		pdo_execute($sql,$so_luot_yeu_thich,$ma_tour);
	}
    function tour_by_KV($ma_kvt){
        $sql = "SELECT * FROM tour WHERE ma_kvt=?";
        return pdo_query($sql,$ma_kvt);
    }
	function delete_tour($ma_tour){
    $sql = "DELETE FROM tour WHERE ma_tour=?";
    if(is_array($ma_tour)){
        foreach ($ma_tour as $ma_tour) {
            pdo_execute($sql, $ma_tour);
        }
    }
    else{
        pdo_execute($sql, $ma_tour);
    }
   
}
 function update_tour($ma_tour,$ten_tour,$hinh, $ma_kvt, $gia, $so_ngay, $so_luot_xem, $ngay_khoi_hanh, $noi_khoi_hanh, $noi_den,$chi_tiet,$tong_so_ve,$so_ve_da_dat){
        $sql = "UPDATE tour SET ten_tour=?, hinh=?, ma_kvt=?, gia=?, so_ngay=?, so_luot_xem=?,ngay_khoi_hanh=?,noi_khoi_hanh=?,noi_den=?,chi_tiet=?,tong_so_ve=?, so_ve_da_dat=? WHERE ma_tour=? ";
        pdo_execute($sql, $ten_tour,$hinh, $ma_kvt, $gia, $so_ngay, $so_luot_xem, $ngay_khoi_hanh, $noi_khoi_hanh, $noi_den,$chi_tiet,$tong_so_ve,$so_ve_da_dat, $ma_kvt);
    }
?>