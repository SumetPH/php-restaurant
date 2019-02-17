<?php
	include "connect.php";

	$menu_ID = $_POST[menu_ID];

	// check empty values
	if(empty($menu_ID)){
		echo 
		"<script> 
			alert('ไม่มีข้อมูลในระบบที่จะลบ') 
			window.location = 'edit_form.php'	
		</script>
		";
		exit();
	}

	$sql = "DELETE from menu where menu_ID = '$menu_ID'";

	$result = mysqli_query($conn, $sql);
	if($result){
		echo 
		"<script> 
			alert('ลบรายการอาหารสำเร็จ') 
			window.location = 'index.php'	
		</script>
		";
	} else {
		echo 
		"<script> 
			alert('ลบรายการอาหารไม่สำเร็จ') 
			window.location = 'edit_form.php'	
		</script>
		";
	}
