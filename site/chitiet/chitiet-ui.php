
<!-- script link tab -->
	<script type="text/javascript">
		$(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});
	</script>

<div class="container">
	<div class="col-md-12 chi-tiet-tour">
		<h3 class="alert-info alert tieu-de-top"><a href="#"><?=$ten_tour?></a></h3>
		<div class="col-md-4 img-tour">
			<img width="100%" class="img-responsive img-thumbnail" src="<?=$ROOT_URL?>/css/images/<?=$hinh?>" alt="">
			<div class="tools">
				<a class="yeu-thich" href="chitiet.php?like&ma_tour=<?=$ma_tour?>">
					<span class="fas fa-heart text-danger "></span>
					<span class="so-luot-yt"><?=$so_luot_yeu_thich?></span>
				</a>
				<a class="luot-xem" href="">
					<span class="far fa-eye"></span>
					<span class="so-luot-xem"><?=$so_luot_xem?></span>
				</a>
			</div>
		</div>
		<div class="col-md-7">
			<table class="table table-hover" border="0">
				
				<tbody>
					<tr>
						<th class="bold">Mã tour</th>
						<td><?=$ma_tour?></td>
					</tr>
					<tr>
						<th class="bold">Khởi hành</th>
						<td><?=$ngay_khoi_hanh?></td>
					
					</tr>
					<tr>
						<th class="bold">Nơi khởi hành</th>
						<td><?=$noi_khoi_hanh?></td>
					
					</tr>
					<tr>
						<th class="bold">Số ngày</th>
						<td><?=$so_ngay?></td>
						
					</tr>
					<tr>
						<th class="bold">Yêu thích</th>
						<td><?=$so_luot_yeu_thich?></td>	
					</tr>
				</tbody>
			</table>
			
			<div class="col-md-6"><h4 class="gia-tour"> <?=number_format($gia) ?> đ</h4></div>
	
			<div class="col-md-6 "><a href="../dattour/dattour.php?ma_tour=<?=$ma_tour?>"><button type="button" class="btn-info btn btn-dat-tour">Đặt ngay</button></a></div>
			 
		</div>
	</div>
	<div class="container">
		<!-- <div class="col-md-12">
			<h3 class="alert alert-info">Chi tiết</h3>
			<p><?=$chi_tiet?></p>
		</div> -->
	<div class="col-md-6">
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Chi tiết</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Liên Hệ</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Bình luận</div>
            </button>
        </div>
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <p><?=$chi_tiet?></p>
        </div>
        <div class="tab-pane fade in" id="tab2">
          <h3><?php echo $a; ?></h3>
        </div>
        <div class="tab-pane fade in" id="tab3">
        	<?php foreach ($binh_luan as $key => $value) :
        		extract($value);
        	 ?>
        	<div class="panel panel-success">
        		<div class="panel-heading">
        			<h3 class="panel-title"><?=$ten_kh?></h3>
        		</div>
        		<div class="panel-body">
        			<?=$noi_dung?>
        		</div>
        		<div class="panel-footer">
        			<?=$ngay_bl?>
        		</div>
        	</div>
          	<?php endforeach; ?>
          	<?php if (isset($_SESSION['user'])) :
          	 ?>
          	<div class="panel panel-primary">
          		<div class="panel-heading">
          			<h3 class="panel-title">Gửi bình luận</h3>
          		</div>
          		<div class="panel-body">
          			<form action="" method="POST" role="form">
          			
          			
          				<div class="form-group">
          					<textarea rows="5" name="noi_dung"></textarea>
          				</div>
          				<button type="submit" name="gui_bl" class="btn btn-primary">Gửi</button>
          			</form>
          		</div>
          	</div>
         
          <?php else: ?>
          	<h3 class="panel-title">Đăng nhập hoặc đang kí để gửi bình luận</h3>
          	 <?php endif; ?>
        </div>
      </div>
    </div>
	</div>
</div>
</div>