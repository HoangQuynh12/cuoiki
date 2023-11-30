<!DOCTYPE html>
<html lang="en">
<head>
<title>Đăng kí</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="HQ Store Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/single_styles.css">
<link rel="stylesheet" type="text/css" href="styles/single_responsive.css">
</head>
  <style>

/* style signup */
.signup {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: #f5f5f5;
}
.signup__container {
  width: 100%;
  max-width: 430px;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  margin-top: 200px;
}
.signup__container h1 {
  margin-bottom: 20px;
  font-size: 2rem;
  text-align: center;
}
.signup__container form {
  display: flex;
  flex-direction: column;
}
.signup__container form label {
  margin-bottom: 10px;
  font-size: 1.2rem;
}
.signup__container form input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
}
.signup__container form button {
  padding: 10px;
  border: none;
  border-radius: 5px;
  background: #333;
  color: #fff;
  font-size: 1.2rem;
  cursor: pointer;
}
.signup__container form button:hover {
  background: #555;
}
.signup__container form a {
  text-align: center;
  font-size: 1.2rem;
  text-decoration: none;
  color: #333;
}
.signup__container form a:hover {
  color: #555;
}
.signup__registerButton {
  margin-top: 20px;
  padding: 10px;
  border: none;
  border-radius: 5px;
  color: black;
  font-size: 1.2rem;
  cursor: pointer;
  display: block;
}
.nav-itemm a{
  color: black;
}
  </style>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">Miễn phí vận chuyển cho các đơn hàng trên 500.000 đ</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

								<li class="currency">
									<a href="#">
										VNĐ
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="currency_selection">
										<li><a href="#">USD</a></li>
										<li><a href="#">eur</a></li>
										<li><a href="#">gbp</a></li>
									</ul>
								</li>
								<li class="language">
									<a href="#">
										Tiếng việt
                               <i class="fa fa-angle-down"></i>
									</a>
									<ul class="language_selection">
										<li><a href="#">English</a></li>
										<li><a href="#">Italian</a></li>
										<li><a href="#">German</a></li>
										<li><a href="#">Spanish</a></li>
									</ul>
								</li>
								<li class="account">
									<a href="#">
										Tài khoản của tôi
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="Login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng nhập</a></li>
										<li><a href="Register.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Đăng kí</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">HQ<span>shop</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="index.html">Trang chủ</a></li>
								<li><a href="categories.html">Shop</a></li>
								<!-- <li><a href="#">Khuyến mãi</a></li>
								<li><a href="#">pages</a></li>
								<li><a href="#">Blog</a></li> -->
								<li><a href="contact.html">Liên hệ</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">2</span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>

	<!-- Hamburger Menu -->

	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav text-center">
				<li class="menu_item has-children">
					<a href="#">
						Tài khoản của tôi
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="Login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng nhập</a></li>
						<li><a href="Register.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Đăng kí</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="index.php">Trang chủ</a></li>
				<li class="menu_item"><a href="categories.php">Shop</a></li>
				<!-- <li class="menu_item"><a href="#">Khuyến mãi</a></li>
				<li class="menu_item"><a href="#">Pages</a></li>
				<li class="menu_item"><a href="#">Blog</a></li> -->
<li class="menu_item"><a href="contact.html">Liên hệ</a></li>
			</ul>
		</div>
	</div>
    <section class="sign">
    <!-- form signup -->
    <div class="signup">
        <div class="signup__container">
          <h1>Đăng Ký</h1>
          	<form id="register-form" action="" method="post">
			<label for="username">Tên đăng nhập:</label>
			<input type="text" id="username" name="username" class="input-signup">
	
			<label for="password">Mật khẩu:</label>
			<input type="password" id="password" name="password" class="input-signup">
	
			<label for="confirm-password">Xác nhận mật khẩu:</label>
			<input type="password" id="confirm-password" name="confirm-password" class="input-signup">
	
			<button type="submit" name="btdk">Đăng Ký</button>
		</form>
          
        </div>
      </div>
	</section> 
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.html">Liên hệ</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="credits">
							Thực hiện bởi ...
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>
<?php
  require_once('database/config.php');
  require_once('database/dbhelper.php');
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['btdk']) && $_POST['username'] != '' && $_POST['password'] != '' && $_POST['confirm-password']!='' ){
      $username = $_POST['username'];
      $pass = $_POST['password'];
      $repass = $_POST['confirm-password'];
	  
      //kiểm tra trùng paswword không
      if ($pass != $repass) {
        echo '<script language="javascript">
                    alert("Nhập không trùng mật khẩu, vui lòng đăng ký lại!");
                    window.location = "Register.php";
              </script>';
        die();
      }	  
      //kiểm tra username
      $sql = "SELECT * FROM user where tendangnhap = '$username'";
      $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        echo '<script language="javascript">
                 alert("Tài khoản đã tồn tại!");
                 window.location = "Register.php";
             </script>';
        die();
      }
      $sql = "INSERT INTO user (tendangnhap,matkhau) values ('$username', '$pass')";
      execute($sql);
      echo '<script language="javascript">
                alert("Bạn đăng ký thành công!");
                window.location = "Login.php";
             </script>';
    } else {
      echo '<script language="javascript">
    alert("hãy nhập đủ thông tin!");
    window.location = "Register.php";
    </script>';
    }
  }
  ?>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/single_custom.js"></script>

</body>

</html>
