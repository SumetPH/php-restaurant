<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ค้นหารายการอาหาร</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h3>ค้นหารายการอาหาร</h3>
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
						<hr>
						<div class="row justify-content-center">
							<div class="col-md-6">
								<form action="search_form.php" method="get">
									<div class="form-group">
										<label>รหัส/ชื่อเมนูอาหาร</label>
										<div class="row">
											<div class="col-md-10">
												<input class="form-control" name="menu_search" type="text">
											</div>
											<div class="col-md-2">
												<button class="btn btn-primary" type="submit">ค้นหา</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="row mt-3">
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

											if($_GET[menu_search]){
												$sql_id = "SELECT * from menu where menu_ID like '%$_GET[menu_search]%'";
												$result_id = mysqli_query($conn, $sql_id);
												while($row_id = mysqli_fetch_array($result_id)){
													echo "
														<tr>
															<td>$row_id[menu_ID]</td>
															<td>$row_id[menu_Name]</td>
														";

													if($row_id[menu_Type] == 1){
														echo "<td>อาหารคาว</td>";
													}
													if($row_id[menu_Type] == 2){
														echo "<td>อาหารหวาน</td>";
													}
													if($row_id[menu_Type] == 3){
														echo "<td>อาหารว่าง</td>";
													}

													echo
														"
															<td>$row_id[menu_price]</td>
														</tr>
														";
												}
	
												$sql_Name = "SELECT * from menu where menu_Name like '%$_GET[menu_search]%'";
												$result_Name = mysqli_query($conn, $sql_Name);
												while($row_Name = mysqli_fetch_array($result_Name)){
													echo "
														<tr>
															<td>$row_Name[menu_ID]</td>
															<td>$row_Name[menu_Name]</td>
														";

													if($row_Name[menu_Type] == 1){
														echo "<td>อาหารคาว</td>";
													}
													if($row_Name[menu_Type] == 2){
														echo "<td>อาหารหวาน</td>";
													}
													if($row_Name[menu_Type] == 3){
														echo "<td>อาหารว่าง</td>";
													}

													echo
														"
															<td>$row_Name[menu_price]</td>
														</tr>
														";
												}
											}
											
											if($_GET[menu_search] === ''){
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