<?php 
require_once "../../global.php";
require_once "../../pdo.php"; 
require_once "../../dao/chitiet.php";
require_once "../../dao/khach_san.php";
$ma_tour=$_GET['ma_tour'];
$tour=tour_by_ma_tour($ma_tour);
$khach_san=khach_san();
if (exist_param('thanh_toan')) {
	$_SESSION['thanh_toan']=$_REQUEST;
	var_dump ($_SESSION['thanh_toan']);
}
$VIEW_NAME="dattour-ui.php";
require "../../layout.php";
?>