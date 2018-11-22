		<form action="" method="POST" role="form">
			<h3 class="alert alert-info">Quản trị khách sạn</h3>
			<table class="table table-hover table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Mã khách sạn</th>
						<th>Tên khách sạn</th>
						<th>Hình</th>
						<th>Giá</th>
						<th>Chi tiết</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($khach_san as $key => $value):
						extract($value); ?>
					<tr>
						<td style="font-weight: bold; "><?php echo $value["ma_ks"] ?></td> 
						<td><?php echo $value["ten_ks"] ?></td> 
						<td><img class="img-responsive img-thumbnail" style="height: 70px" class="img-responsive" src="<?=$ROOT_URL?>/css/images/products/<?=$hinh?>"></td>
						<td><?php echo $value["gia"] ?></td> 
						<td class="chitiet_ks"><p ><?php echo $value["chi_tiet"] ?></p></td> 
						<td>
							<a class="btn btn-danger" href="index.php?delete&ma_ks=<?=$value['ma_ks']?>">Delete</a>
							<a class="btn btn-info" href="index.php?edit&ma_ks=<?=$value['ma_ks']?>">Edit</a>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>	
		</form>
		<a class="btn-success btn" href="index.php?new" class="btn btn-default"> Thêm mới</a>

		
			
		
