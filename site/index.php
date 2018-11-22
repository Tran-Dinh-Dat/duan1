<?php 
	require_once'../dao/kvt.php';
	require_once'../dao/tour.php';
	require_once'../dao/user.php';
	require_once'../dao/chitiet.php';
	require_once'../dao/khach_san.php';
	$tour=tour();
	$kvt= kvt();
	$user=user();
	// code tim tu khoa
	if(exist_param("keywords")){
		extract($_REQUEST);
    $tour = tour_select_keyword($keywords);
	};
	foreach ($user as $key => $value) {
		extract($value);
	}
	if (isset($_POST['dangnhap'])) {
		$u=$_POST['ten'];
		$p=$_POST['mk'];
		if ($u==$value['ten_dn']&$p==$value['mat_khau']) {
			$_SESSION['user']=$value['ten_kh'];
			$_SESSION['vaitro']=$value['vai_tro'];
			$_SESSION['ma_kh']=$value['ma_kh'];
			echo '<script type="text/javascript">window.location.href="index.php"</script>';
		}
		else{
			echo '<script type="text/javascript">alert("Sai tên đăng nhập hoặc mật khẩu")</script>';
		}
	}
	if (isset($_POST['dangki'])){
		$ma_kh=$_POST['tendn'];
		$ten_dn=$_POST['ten'];
		$ten_kh=$_POST['mk'];
		$mat_khau=$_POST['mkcf'];
		$email=$_POST['email'];
		if ($ma_kh==$value['ten_dn']) {
			echo '<script type="text/javascript">alert("Tên đăng nhập đã được sử dụng")</script>';
		}
		elseif($mat_khau!=$value['mat_khau']){
			echo '<script type="text/javascript">alert("Xác nhập mật khẩu chưa chính xác")</script>';
		}
		elseif($email==$value['email']){
			echo '<script type="text/javascript">alert("Email đã là thành viên")</script>';
		}else{
			try{
			dangki($ma_kh,$ten_dn,$ten_kh,$mat_khau,$email,$vai_tro);
			echo '<script type="text/javascript">alert("Đăng kí thành công")</script>';
			}
			catch (Exception $exc) {
				echo '<script type="text/javascript">alert("Có lỗi xảy ra, vui lòng thử lại sau")</script>';
			}
		}
	}
	if (exist_param('quanli')) {
		echo '<script type="text/javascript">window.location.href="../admin/index.php"</script>';
	}
	elseif (exist_param('dangxuat')) {
		unset($_SESSION['user']);
		echo '<script type="text/javascript">window.location.href="index.php"</script>';
	}
	if (exist_param('capnhat')){

    $VIEW_NAME="capnhat.php";
	}else{$VIEW_NAME="trangchu.php";}
	if (exist_param('btn-capnhat')) {
		extract($_REQUEST);
		try{
			capnhat($ma_kh,$ten_dn,$ten_kh,$email);
			echo '<script type="text/javascript">alert("Cập nhật thành công"); window.location.href="index.php"</script>';
			unset($_SESSION['user']);
			$_SESSION['user']=$ten_kh;
			}
			catch (Exception $exc) {
				echo '<script type="text/javascript">alert("Có lỗi xảy ra, vui lòng thử lại sau")</script>';
			}
	}elseif (exist_param("doimk")) {
		$VIEW_NAME = "doimk.php";
	}elseif (isset($_POST["doimatkhau"])) {
			$matkhaucu =$_POST["matkhaucu"];
			$matkhaumoi =$_POST["matkhaumoi"];
			$matkhaumoi2 =$_POST["matkhaumoi2"];
			$ma_kh=$value['ma_kh'];
			if ($matkhaucu != $value["mat_khau"]) {
				echo '<script type="text/javascript">alert("Sai mật khẩu")</script>';
			}
			elseif ($matkhaumoi != $matkhaumoi2) {
				echo '<script type="text/javascript">alert("Xác nhận mật khẩu không chính xác")</script>';
			}
			else {
				try {
					doimatkhau($ma_kh,$matkhaumoi);
					echo '<script type="text/javascript">alert("Đổi mật khẩu thành công !")</script>';
				} catch (Exception $e) {
					echo '<script type="text/javascript">alert("Có lỗi xảy ra")</script>';
				}
			}
		}
	elseif (exist_param('dsyt')) {
		$l=kh_yeu_thich($ma_kh);
		$VIEW_NAME="yeu_thich.php";
		}
	elseif (exist_param('delete_yt')) {
		$ma_yt=$_GET['ma_yt'];
		try {
			xoa_yeu_thich($ma_yt);
			$ma_tour=$_GET['ma_tour'];
			$tour=tour_by_ma_tour($ma_tour);
			extract($tour);
			unlike($ma_tour,$so_luot_yeu_thich);
			echo '<script type="text/javascript">alert("ok")</script>';
			header("location:index.php?dsyt");
		} catch (Exception $e) {
			echo '<script type="text/javascript">alert("Có lỗi xảy ra")</script>';
		}
	}
	elseif (exist_param('theo_KV')) {
		$ma_kvt=$_GET['ma_kvt'];
			$tour= tour_by_KV($ma_kvt);
		}	
	elseif (exist_param('khach_san')) {
		$khach_san=khach_san();
		$VIEW_NAME="khach_san.php";
	}
	require '../layout.php';
?>