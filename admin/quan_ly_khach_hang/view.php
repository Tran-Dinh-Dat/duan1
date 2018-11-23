		<form action="" method="POST" role="form">
			<h3 class="alert alert-info">Quản trị khách hàng</h3>
			<table class="table table-hover table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Mã khách hàng</th>
						<th>Tên khách hàng</th>
						<th>Tên đăng nhập</th>
						<th>Mật khẩu</th>
						<th>Email</th>
						<th>Vai trò</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($khach_hang as $key => $value):
						extract($value); ?>
					<tr>
						<td style="font-weight: bold; "><?php echo $value["ma_kh"] ?></td> 
						<td><?php echo $value["ten_kh"] ?></td> 
						<td><?php echo $value["ten_dn"] ?></td> 
						<td><?php echo $value["mat_khau"] ?></td> 
						<td><?php echo $value["email"] ?></td> 
						<td><?php echo $value["vai_tro"] ?></td> 
						<td>
							<a class="btn btn-danger" href="index.php?delete&ma_kh=<?=$value['ma_kh']?>">Delete</a>
							<a class="btn btn-info" href="index.php?edit&ma_kh=<?=$value['ma_kh']?>">Edit</a>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>	
		</form>
		<a class="btn-success btn" href="index.php?new" class="btn btn-default"> Thêm mới</a>

		
			
		
