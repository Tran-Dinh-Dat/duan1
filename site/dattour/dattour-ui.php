<?php 

 ; ?>
 <div class="container">
    <main class="all-tour">
        <h2 class="alert alert-info tieu-de-top">Kiểm tra thông tin</h2>
        <div class="col-md-12 box-tour-dl">
		<?php 
			extract($tour);
		 ?>
                <div class="col-md-4 tour-img">
                    <img style="max-height: 220px" class="img-thumbnail img-responsive tour-img" src="<?=$ROOT_URL?>/css/images/<?=$hinh?>" alt="" >
                    <!-- <img class="img-thumbnail img-responsive tour-img" src="https://travel.com.vn/Images/LastMinute/lm_181112043753_539561.jpg" alt="" > -->
                    <div class="xem-chi-tiet">
                       <a class="chi-tiet-tour" href="chitiet/chitiet.php?ma_tour=<?=$ma_tour?>">Chi Tiết</a>
                    </div>    
                </div>
                <div class="col-md-8 tour-content">      
                    <h4><a href="chitiet/chitiet.php?ma_tour=<?=$ma_tour?>"><?=$ten_tour; ?></a></h4>
                    <div class="col-md-6 tour-content-left">
                        <p>Ngày khởi hành: <span><?=$ngay_khoi_hanh ?></span></p>
                        <p>Số ngày: <span> <?=$so_ngay ?></span></p>
                        
                    </div>
                    <div class="col-md-6 tour-content-right">
                        <p>Nơi khởi hành: <br><span><?=$noi_khoi_hanh?></span></p>
                        <p>Số chỗ còn nhận: <?=($tong_so_ve-$so_ve_da_dat)?></p>
                    </div>
                    <div class="tour-content-bot col-md-12">
                        <div class="col-md-6">
                            <h4 class="gia-tour"><?=number_format($gia)?> đ</h4>
                        </div>
                    </div>
                </div>
                <hr class="hr-end-tour">
            </div>
    </main>
                <form action="dattour.php?ma_tour=<?=$ma_tour?>" method="POST" role="form">
            	<h3>Thông tin liên lạc</h3>

            <div class="col-md-6">
                <div class="form-group" style="display: none;" >
                    <label for="">Mã kh::</label>
                    <input type="text" readonly="" class="form-control" name="ma_kh" value="<?=$_SESSION['ma_kh']?>"  >
                </div>
            	<div class="form-group">
            		<label for="">Họ tên:</label>
            		<input type="text" readonly="" class="form-control" name="ten_kh" value="<?=$_SESSION['user']?>"  >
            	</div>
            	<div class="form-group">
            		<label for="">Di động:</label>
            		<input type="text" class="form-control" name="dien_thoai" placeholder="Nhập só điện thoại..." required="">
            	</div>
            	<div class="form-group">
            		<label for="">Email:</label>
            		<input type="text" class="form-control" name="email" placeholder="Nhập eamil..." required="">
            	</div>
            		<div class="form-group">
            		<label for="">Ghi chú</label>
            		<textarea name="ghi_chu" id="input" class="form-control" rows="3" required="required"></textarea>
            	</div>
            </div>
            <div class="col-md-6">
            	<div class="form-group">
            		<label for="">Địa chỉ:</label>
            		<input type="text" class="form-control" name="dia_chi" placeholder="Nhập địa chỉ..." required="">
            	</div>
            	<div class="form-group">
            		<label for="">Số vé</label>
            		<input type="number"  min="1" class="form-control" name="so_ve" placeholder="Nhập số vé" required="">
            	</div>
            	<div class="form-group">
            		<label for="">Chọn hệ thống khách sạn</label>
            	<select name="ma_ks">
                    <?php foreach ($khach_san as $key => $value) :
                        extract($value);
                     ?>
            		<option value="<?=$ma_ks?>"><?=$ten_ks?></option>
            		<?php endforeach; ?>
            	</select>
            	</div>
            </div>
            <div class="col-md-12">
            	<div class="form-group">
            		<input type="checkbox" name="" required=""> Tôi đòng ý với <a href="">điều khoản</a>  của TravelAce
            	</div>
            	<button type="submit" class="btn btn-lg btn-danger" name="thanh_toan">Thanh toán</button>
            </div>
            </form>
</div>