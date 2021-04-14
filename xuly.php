<?php
	$loai = $_POST["loaisp"];
	$ten = $_POST["tensp"];
	$gia = $_POST["dongia"];
	$sluong = $_POST["soluong"];
	include("connect.php");
	if(!isset($_POST["sua"])){	
		$hinhanh = $_FILES["hinhanh"]["name"];
		$chitiet = $_POST["chitiet"];

		$query = "INSERT INTO sanpham (Tensp,Dongia,Soluong,Maloai,Hinhanh,Chitiet) 
		VALUES (N'$ten','$gia','$sluong','$loai',N'$hinhanh',N'$chitiet')";
		if(mysqli_query($con, $query))
			echo "them thanh cong";
		else
			echo "them khong thanh cong";
	}
	else{
		$idsp = $_POST["idsp"];
		$query = "UPDATE sanpham set Tensp='$ten', Dongia=$gia, Soluong=$sluong, Maloai='$loai' where IDsp=$idsp";
		if(mysqli_query($con, $query))
			echo "sua thanh cong";
		else
			echo "sua khong thanh cong";
	}
	mysqli_close($con);
	
?>