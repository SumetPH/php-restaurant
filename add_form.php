<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>เพิ่มรายการอาหาร</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h3>เพิ่มรายการอาหาร</h3>
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
								<form action="add.php" method="post">
									<div class="form-group">
										<label>รหัสเมนู</label>
										<input class="form-control" name="menu_ID" type="text" maxlength="5" required>
									</div>
									<div class="form-group">
										<label>ชื่อเมนูอาหาร</label>
										<input class="form-control" name="menu_Name" type="text" maxlength="50" required>
									</div>
									<div class="form-group">
										<label>ประเภทอาหาร</label>	
										<select class="form-control" name="menu_Type">
											<option value="1">อาหารคาว</option>
											<option value="2">อาหารหวาน</option>
											<option value="3">อาหารว่าง</option>
										</select>
									</div>
									<div class="form-group">
										<label>ราคา</label>
										<input class="form-control" name="menu_price" type="number" max="9999">
									</div>
									<div class="row justify-content-center">
										<button class="btn btn-primary" type="submit">เพิ่มข้อมูล</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>