<?php 
	include "connect.php";

	if($_GET[menu_ID]){
		$menu_ID = $_GET[menu_ID];
		$sql = "SELECT * from menu where menu_ID = '$menu_ID'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>แก้ไขรายการอาหาร</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h3>แก้ไขรายการอาหาร</h3>
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
								<form action="edit_form.php" method="get">
									<div class="form-group">
										<label>รหัสเมนู</label>
										<div class="row">
											<div class="col-md-10">
												<input class="form-control" name="menu_ID" type="text">
											</div>
											<div class="col-md-2">
												<button class="btn btn-primary" type="submit">ค้นหา</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<?php if($_GET[menu_ID]){ ?>
							<hr>
							<div class="row justify-content-center">
								<div class="col-md-6">
									<form action="edit.php" method="post">
										<div class="form-group">
											<label>รหัสเมนู</label>
											<input 
												class="form-control" 
												type="text" 
												disabled 
												value="<?php echo $row[menu_ID]; ?>">
											<input 
												class="form-control" 
												name="menu_ID" 
												type="hidden" 
												maxlength="5"  
												value="<?php echo $row[menu_ID]; ?>">
										</div>
										<div class="form-group">
											<label>ชื่อเมนูอาหาร</label>
											<input 
												class="form-control" 
												name="menu_Name" 
												type="text" 
												maxlength="50" 
												required
												value="<?php echo $row[menu_Name]; ?>">
										</div>
										<div class="form-group">
											<label>ประเภทอาหาร</label>	
											<select class="form-control" name="menu_Type">
												<option 
													value="1" 
													<?php if($row[menu_Type] == 1) echo 'selected' ?>>
													อาหารคาว
												</option>
												<option 
													value="2"
													<?php if($row[menu_Type] == 2) echo 'selected' ?>>
													อาหารหวาน
												</option>
												<option value="3"
													<?php if($row[menu_Type] == 3) echo 'selected' ?>>
													อาหารว่าง
												</option>
											</select>
										</div>
										<div class="form-group">
											<label>ราคา</label>
											<input 
												class="form-control" 
												name="menu_price" 
												type="number" 
												max="9999"
												value="<?php echo $row[menu_price]; ?>">
										</div>
										<div class="row justify-content-center">
											<button class="btn btn-warning" type="submit">แก้ไขข้อมูล</button>
										</div>
									</form>
								</div>
							</div>
						<?php } ?>
						<?php if($_GET[menu_ID] === ''){ ?>
							<hr>
							<div class="row justify-content-center">
								<div class="col-md-6">
									<form action="edit.php" method="post">
										<div class="form-group">
											<label>รหัสเมนู</label>
											<input 
												class="form-control" 
												type="text" 
												disabled 
												value="">
											<input 
												class="form-control" 
												name="menu_ID" 
												type="hidden" 
												maxlength="5"  
												value="">
										</div>
										<div class="form-group">
											<label>ชื่อเมนูอาหาร</label>
											<input 
												class="form-control" 
												name="menu_Name" 
												type="text" 
												maxlength="50" 
												required
												value="">
										</div>
										<div class="form-group">
											<label>ประเภทอาหาร</label>	
											<select class="form-control" name="menu_Type" disabled>
												<option></option>
											</select>
										</div>
										<div class="form-group">
											<label>ราคา</label>
											<input 
												class="form-control" 
												name="menu_price" 
												type="number" 
												max="9999">
										</div>
										<div class="row justify-content-center">
											<button class="btn btn-warning" type="submit">แก้ไขข้อมูล</button>
										</div>
									</form>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>