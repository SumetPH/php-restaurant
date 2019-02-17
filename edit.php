<?php
	include "connect.php";

	$menu_ID = $_POST[menu_ID];
	$menu_Name = $_POST[menu_Name];
	$menu_Type = $_POST[menu_Type];
	$menu_price = $_POST[menu_price];

	// check empty values
	if(empty($menu_ID)){
		echo 
		"<script> 
			alert('ไม่มีข้อมูลในระบบที่จะแก้ไข') 
			window.location = 'edit_form.php'	
		</script>
		";
		exit();
	}

	if(empty($menu_Name) || empty($menu_Type) ){
		echo 
		"<script> 
			alert('กรุณาใส่ข้อมูลให้ครบถ้วน') 
			window.location = 'edit_form.php'	
		</script>
		";
		exit();
	}

	// insert to database
	if(empty($menu_price)){
		$sql = "UPDATE menu set 
			menu_Name = '$menu_Name', 
			menu_Type = '$menu_Type', 
			menu_price = null 
			where menu_ID = '$menu_ID'";

		$result = mysqli_query($conn, $sql);
		if($result){
			echo 
			"<script> 
				alert('แก้ไขรายการอาหารสำเร็จ') 
				window.location = 'index.php'	
			</script>
			";
		} else {
			echo 
			"<script> 
				alert('แก้ไขรายการอาหารไม่สำเร็จ') 
				window.location = 'edit_form.php'	
			</script>
			";
		}
	} else {
		$sql = "UPDATE menu	 set menu_Name = '$menu_Name', menu_Type = '$menu_Type', menu_price = '$menu_price' where menu_ID = '$menu_ID'";
		$result = mysqli_query($conn, $sql);
		if($result){
			echo 
			"<script> 
				alert('แก้ไขรายการอาหารสำเร็จ') 
				window.location = 'index.php'	
			</script>
			";
		} else {
			echo 
			"<script> 
				alert('แก้ไขรายการอาหารไม่สำเร็จ') 
				window.location = 'edit_form.php'	
			</script>
			";
		}
	}