<?php
	include "connect.php";

	$menu_ID = $_POST[menu_ID];
	$menu_Name = $_POST[menu_Name];
	$menu_Type = $_POST[menu_Type];
	$menu_price = $_POST[menu_price];

	// check empty values
	if(empty($menu_ID) || empty($menu_Name) || empty($menu_Type) ){
		echo 
		"<script> 
			alert('กรุณาใส่ข้อมูลให้ครบถ้วน') 
			window.location = 'add_form.php'	
		</script>
		";
		exit();
	}

	// check menu_ID pattern
	if(!preg_match('/m[0-9]{4}/',$menu_ID)){
		echo 
		"<script> 
			alert('รูปแบบของรหัสเมนูไม่ถูกต้อง') 
			window.location = 'add_form.php'	
		</script>
		";
		exit();
	}

	// check pk
	$sql = "SELECT * from menu where menu_ID = '$menu_ID'";
	$result = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($result);

	if($num > 0){
		echo 
		"<script> 
			alert('รหัสเมนูนี้มีอยู่ในระบบแล้ว') 
			window.location = 'add_form.php'	
		</script>
		";
		exit();
	}

	// insert to database
	if(empty($menu_price)){
		$sql = "INSERT into 
			menu(menu_ID,menu_Name,menu_Type)
			values('$menu_ID','$menu_Name','$menu_Type')";

		$result = mysqli_query($conn, $sql);
		if($result){
			echo 
			"<script> 
				alert('เพิ่มรายการอาหารสำเร็จ') 
				window.location = 'index.php'	
			</script>
			";
		} else {
			echo 
			"<script> 
				alert('เพิ่มรายการอาหารไม่สำเร็จ') 
				window.location = 'add_form.php'	
			</script>
			";
		}
	} else {
		$sql = "INSERT into 
			menu(menu_ID,menu_Name,menu_Type,menu_price)
			values('$menu_ID','$menu_Name','$menu_Type','$menu_price')";

		$result = mysqli_query($conn, $sql);
		if($result){
			echo 
			"<script> 
				alert('เพิ่มรายการอาหารสำเร็จ') 
				window.location = 'index.php'	
			</script>
			";
		} else {
			echo 
			"<script> 
				alert('เพิ่มรายการอาหารไม่สำเร็จ') 
				window.location = 'add_form.php'	
			</script>
			";
		}
	}