<?php
	$con = mysqli_connect("localhost","root","");
	if(!$con){
		echo "Lỗi không thể kết nối";
	}else{
		$db = mysqli_select_db($con, "qlbh");
		if(!$db){
			echo "Không chọn được db";
		}
	}
?>