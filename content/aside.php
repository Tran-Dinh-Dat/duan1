<div class="panel panel-default">
		<div class="container-seach">
		<form action="">
			<div class="email-box">
				<i class="fas fa-search"></i>
				<input class="tbox" type="text" value="" name="keywords" placeholder="Từ khóa tìm kiếm ...">
				<button class="btn-seach btn" type="submit" >Tìm Kiếm</button>
			</div>
		</form>
		<!-- .\====================== -->
		
    <!-- ================== -->
	</div>

</div>
<div class="panel panel-default panel-khu-vuc-tour">
	<h3 class="alert alert-info">Khu vực tour</h3>
	<div class="panel-body">	
		<ul class="list-group">	
		<?php foreach ($kvt as $key => $value) : ?>
	
	
			<div class="row">
                <div class="col-md-4">
                    <img class="img-thumbnail img-responsive" src="../css/images/<?=$value["hinh"] ?>">
                </div>
                <div class="col-md-8">
                    <a href="<?=$SITE_URL?>/index.php?ma_kvt=<?=$value['ma_kvt']?>&theo_KV"><?=$value['ten_kvt']?></a>
                </div>
            </div>

       	<?php endforeach; ?>	
		</ul>
	</div>
</div>
