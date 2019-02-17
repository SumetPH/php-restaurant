<?php
	$conn = mysqli_connect("localhost","root","12345678","restaurant");
	mysqli_set_charset('utf8');
	if(!$conn){
		echo "การเชื่อมต่อผิดผลาด";
	}