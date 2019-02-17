<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>หน้าหลักโปรแกรม</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row m-5">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-10">
								<h3>หน้าหลักโปรแกรม</h3>
							</div>
							<div class="col-md-2 d-flex justify-content-center align-items-center">
								<a href="index.php">หน้าหลัก</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="row justify-content-center m-3">
							<div class="col-md-2">
								<a href="add_form.php">เพิ่มข้อมูล</a>
							</div>
							<div class="col-md-2">
								<a href="search_form.php">ค้นหาข้อมูล</a>
							</div>
							<div class="col-md-2">
								<a href="edit_form.php">แก้ไขข้อมูล</a>
							</div>
							<div class="col-md-2">
								<a href="del_form.php">ลบข้อมูล</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<table class="table">
									<thead>
										<tr>
											<th>รหัสเมนู</th>
											<th>ชื่อเมนูอาหาร</th>
											<th>ประเภทอาหาร</th>
											<th>ราคา</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											include "connect.php";

											$sql = "SELECT * from menu";
											$result = mysqli_query($conn, $sql);
											while($row = mysqli_fetch_array($result)){
												echo "
													<tr>
														<td>$row[menu_ID]</td>
														<td>$row[menu_Name]</td>
													";

												if($row[menu_Type] == 1){
													echo "<td>อาหารคาว</td>";
												}
												if($row[menu_Type] == 2){
													echo "<td>อาหารหวาน</td>";
												}
												if($row[menu_Type] == 3){
													echo "<td>อาหารว่าง</td>";
												}

												echo
													"
														<td>$row[menu_price]</td>
													</tr>
													";
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>