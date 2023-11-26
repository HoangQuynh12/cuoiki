<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Thêm Loại Sản Phẩm</title>
</head>
<style>
   *{
    margin: 0;
    margin: 0;
    box-sizing: border-box;
    color: black;
    outline: none;
}
a{
    text-decoration: none;
}
ul{
    list-style: none;
}
header{
    height: 50px;
    width: 100vw;
    border-bottom: 2px solid #dddd;
    text-align: center;
    background-color: #a0ff00;
}
.admin-content {
    padding-top: 30px;
    display: flex;
}
.admin-content-left{
    background-color: #e6e6e6ee;
    padding: 30px 0 0 12px;
}
.admin-content-left ul li a{
       font-size: 19px;
       color: black;
       font-weight: 500;
       margin: 3px 0;
}
.admin-content-left ul li{
    margin: 6px 0;
}
    h2{
        text-align: center;
        color: blue;
        margin: 15px;
    }
</style>
<body>
<header>
    <h1 >REALGIRL STORE</h1>
</header>
  <section class="admin-content">
    <div class="admin-content-left col-md-3 mt-4">
    <h2 style="text-align:center;">REALGIRL STORE</h2>
          <ul>
            <li><a href="loai.php">Quản Lý Đơn Hàng</a>
            <li><a href="theloai.php">Thống Kê</a>
            <li><a href="tatcasp.php">Quản Lý Sản Phẩm</a>
                <ul>
                  <li><a href="themloai.php">Thêm Loại Sản Phẩm</a></li>
                  <li><a href="tatcasp.php">Sản Phẩm</a>
                <ul>
                  <li><a href="themsp.php">Thêm Sản Phẩm</a></li>
                 </ul>
            </li>
                 </ul>
            </li>
           
         
            <li><a href="/../Doan2/account/login.php">Đăng xuất</a></li>
          </ul>
    </div>
    <div class="admin-content-right col-md-9">
    <h2>Thêm Loại Sản Phẩm Mới</h2>
    <form action="xulithemloai.php" method="GET">
  <div class="mb-3">
    <label for="tentl" class="form-label m-3">Tên Loại Sản Phẩm</label>
    <input type="text" class="form-control" name="tentl" id="tentl" aria-describedby="Name">
  </div>    
  <button type="submit" class="btn btn-primary m-3">Thêm</button>
</form>
</div>
</body>
</html>