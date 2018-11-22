<?php require '../content/slidebar.php' ;
?>

<div class="container">
    <main class="all-tour">
        <h2 class="alert alert-info tieu-de-top">Các tour du lịch nổi tiếng </h2>
        <div class="col-md-8 box-tour-dl">
		<?php foreach ($tour as $key => $value) :
			extract($value)
            // echo "<pre>";
            // print_r($tour);die;
		 ?>
            
                <div class="col-md-6 tour-img">
                    <img style="max-height: 220px" class="img-thumbnail img-responsive tour-img" src="../css/images/<?=$hinh?>" alt="" >
                    <!-- <img class="img-thumbnail img-responsive tour-img" src="https://travel.com.vn/Images/LastMinute/lm_181112043753_539561.jpg" alt="" > -->
                    <div class="xem-chi-tiet">
                       <a class="chi-tiet-tour" href="chitiet/chitiet.php?ma_tour=<?=$ma_tour?>">Chi Tiết</a>
                    </div>    
                </div>
                <div class="col-md-6 tour-content">      
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
                        <div class="col-md-6">
                           <button type="button" class="btn btn-default tour-content-bot-btn">Đặt Ngay</button>
                        </div>
                        
                    </div>
                </div>
                <hr class="hr-end-tour">
        <?php endforeach; ?>
            </div>
            

    </main>
    <aside class="col-md-4">  
         <?php  require '../content/aside.php' ;?>
    </aside>
</div>
</div>
<!--  đăng nhâp modal -->
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Đăng nhập</h4>
        </div>
        <div class="container-fluid">
          <form action="index.php" method="POST" role="form">
          <div class="form-group">
            <label for="">Tên đăng nhập</label>
            <input type="text" class="form-control" id="" name='ten' placeholder="Nhập tên" required="">
          </div>
          <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="password" class="form-control" id="" name="mk" placeholder="Nhập mật khẩu" required="">
          </div>
          <button type="submit" class="btn btn-primary" name='dangnhap'>Đăng nhập</button>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default"  data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>
  <!-- đăng kí modal -->
   <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Đăng kí</h4>
        </div>
        <div class="container-fluid">
          <form action="index.php" method="POST" role="form">
          <div class="form-group">
            <label for="">Tên đăng nhập</label>
            <input type="text" class="form-control" id="" name='tendn' placeholder="Nhập tên đăng nhập" required="">
          </div>
           <div class="form-group">
            <label for="">Họ tên</label>
            <input type="text" class="form-control" id="" name='ten' placeholder="Nhập tên đăng nhập" required="">
          </div>
          <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="password" class="form-control" id="" name="mk" placeholder="Nhập mật khẩu" required="">
          </div>
          <div class="form-group">
            <label for="">Nhập lại mật khẩu</label>
            <input type="password" class="form-control" id="" name="mkcf" placeholder="Nhập lại mật khẩu" required="">
          </div>
           <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" name="email" placeholder="Nhập email" required="">
          </div>
          <div class="form-group">
            <input type="checkbox" class="" id=""  required=""> Tôi đông ý điều quản sử dụng
          </div>
          <button type="submit" class="btn btn-primary" name='dangki'>Đăng kí</button>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default"  data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>