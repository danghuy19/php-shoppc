<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="row" style="background-color: #f0f0f0; height: 40px;">
		<div class="container">
		<div class="nav-top">
			<ul>
				<li><a href=""><i class="fa fa-user"></i>Hồ sơ</a></li>
				<li><a href=""><i class="fa fa-user"></i>Ưa thích</a></li>
				<li><a href=""><i class="fa fa-user"></i>Giỏ hàng</a></li>
				<li><a href=""><i class="fa fa-user"></i>Thanh toán</a></li>
			</ul>
		</div>
		</div>
	</div>
<!-------------------------------Banner------------------------------------------------>

<div class="container">
	<div class="row">
		<div class="logo">
           <h1><a href=""><img src="img/logo-headerr.jpg"></a></h1>
        </div>
	</div>
</div>


<!----------------------------------Promo------------------------------------------->

  <div class="promo-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fas fa-sync-alt"></i>
                        <p class="p-color">30 Ngày Đổi Trả</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p class="p-color">Giao Hàng Miễn Phí</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p class="p-color">Bảo Mật An Toàn</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p class="p-color">Khuyến Mãi</p>
                    </div>
                </div>
            </div>
        </div>
 </div>       

 <!----------------------------------Menu-------------------------------------------->

         <nav id="nav-1">
			  <a class="link-1" href="index.php">Trang chủ</a>
			  <a class="link-1" href="index.php">List sản phẩm</a>
			  <a class="link-1" href="insert.php">Thêm sản phầm</a>
		</nav>

<!----------------------------------Content------------------------------------------->


<div class="insert" style="border: none">
	<h3 style="width: 450px;">Sửa sản phẩm</h3>
	<?php
			include("connect.php");
			$query = "SELECT * FROM sanpham";
			$result = mysqli_query($con, $query);
			if(mysqli_num_rows($result)>0){
				echo "<table border='1'>";
				echo "<tr><th>Tên sản phẩm</th><th>Giá</th><th>Số lượng</th><th></th></tr>";
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>".$row["Tensp"]."</td>";
					echo "<td>".$row["Dongia"]."</td>";
					echo "<td>".$row["Soluong"]."</td>";
					echo "<td><a href='edit.php?idsp=".$row["IDsp"]."'>Sửa</a> - <a href=''>Xóa</a></td>";
					echo "<tr/>";
				}
				echo "</table>";
			}
	?>
</div>



<!----------------------------------Footer------------------------------------------->


	<div class="row" style="background-color:#363636">
		<div class="container">
			<div class="row footer-top">
			<div class="col-3">
				<h3>u<span style="color: #b6affa">ABCD</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni</p>
			</div>
			<div class="col-3">
				<h2>Cá nhân</h2>
				<ul class="list-footer">
					<li><a href="">Tài khoản</a></li>
					<li><a href="">Lịch sử Order</a></li>
					<li><a href="">Yêu thích</a></li>
					<li><a href="">Thanh toán</a></li>
					<li><a href="">Kiểm tra đon hàng</a></li>
				</ul>
			</div>
			<div class="col-3">
				<h2>Sản phẩm</h2>
				<ul class="list-footer">
                     <li><a href="#">Macbook</a></li>
                     <li><a href="#">HP</a></li>
                     <li><a href="#">DELL</a></li>
                     <li><a href="#">ACER</a></li>
                     <li><a href="#">ASUS</a></li>
                </ul> 
			</div>
			<div class="col-3">
				<h2 class="mb-4">Nhận tin mới</h2>
				<p> Đăng ký email để nhận được những khuyến mãi đặc biết mà bạn sẽ không tìm thấy ở bất cứ đâu!</p>
				<form action="">
					<input type="Email" placeholder="Email">
					<input type="submit" value="Đăng ký" class="btn btn-light">
				</form>
			</div>
			</div>
		</div>		
	</div>
<!----------------------------------------------------------------------->


		<div class="contaier" style="background-color: black">
			<div class="row" style="padding: 1rem 0;">
				<span style="margin-left: 8rem; color: white">© 2019 LCDH - All Rights Reserved.</span>
			</div>
		</div>


</body>
</html>