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
			  <a class="link-1" href="#">Sản phầm</a>
			  <a class="link-1" href="#">Phụ kiện</a>
			  <a class="link-1" href="#">Khuyến mãi</a>
			  <a class="link-1" href="#">Hỗ trợ</a>
			  <a class="link-1" href="#">Đăng ký</a>
			  <a class="link-1" href="#">Đăng nhập</a>
		</nav>

<!----------------------------------Content------------------------------------------->

<?php 
	include("connect.php");
	$idsp=$_GET['idsp'];
	mysqli_set_charset($con, "UTF8");
	$rows = mysqli_query($con, "SELECT * FROM  sanpham  WHERE IDsp=$idsp");
	while ($row=mysqli_fetch_array($rows))
	{
?>
<div class="row chitietsp">
	<div class="col-5 anh">
		<a href='img/uploads/<?php echo $row['Hinhanh'] ?>' width="300" height="300">
			<img src="img/uploads/<?php echo $row['Hinhanh'] ?>" width="400" height="400"  alt='' />
		</a>
	</div>
	<div class="col-7 content">
		<h1> <?php echo $row['Tensp'] ?></h1>
		<ul class="pl-5">
			<li>
				<span>
					<b>Giá: <font color="red"><?php echo number_format(($row['Dongia']),0,",",".");?></font>
					</b>
				</span>
			</li>
			<li>
				<b class="mr-2">CPU:</b>  <?php echo $row['CPU'] ?>
			</li>
			<li>
				<b class="mr-2">RAM:</b>  <?php echo $row['RAM'] ?>
			</li>
			<li>
				<b class="mr-2">Ổ cứng:</b>  <?php echo $row['O_cung'] ?>
			</li>
			<li>
				<b class="mr-2">Màn hình:</b>  <?php echo $row['Manhinh'] ?>
			</li>
			<li>
				<b class="mr-2">Card màn hình:</b>  <?php echo $row['Card_manhinh'] ?>
			</li>
			<li>
				<b class="mr-2">Cỗng kết nối:</b>  <?php echo $row['Congketnoi'] ?>
			</li>
			<li>
				<b class="mr-2">Hệ điều hành:</b>  <?php echo $row['Hedieuhanh'] ?>
			</li>
			<li>
				<b class="mr-2">Thiết kế:</b>  <?php echo $row['Thietke'] ?>
			</li>
			<li>
				<b class="mr-2">Kích thước:</b>  <?php echo $row['Kichthuoc'] ?>
			</li>
			<form action="" method="POST">
			<li>Số lượng mua : <input type="number" size="1" class="input-text qty text" value="1" name="soluongmua" min="1" step="1" /></li>

			<li>
				<button>Cho vào giỏ</button>
			</li>
			</form>
		</ul>
	</div>
</div>	
<?php } ?>




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