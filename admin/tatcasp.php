<?php
        $conn = mysqli_connect("localhost", "root", "", "cuoiki");
        $sql = "SELECT * FROM phukien";
        $result = mysqli_query($conn, $sql);
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Tất Cả Sản Phẩm</title>
<link rel = "stylesheet" href = "menu.css">
</head>
<style>
    h2{
        text-align: center;
        color: blue;
        margin: 15px;
    }
</style>
<body>
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
    text-align: center;
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

    </style>
    
    <div id="header">
    <h2>REALGIRL STORE</h2>
    <p>Quản Lý</p>
</div>
<div class="menu" id="Menu">	
    
    <a class="links" href="menu.php"  >Trang Chủ</a>
    <a class="links" href="theloai.php" >Quản Lý Sản Phẩm</a>
    <a class="links" href="javascript:void(0)">Quản Lý Đơn Hàng</a>
    <a class="links" href="javascript:void(0)">Thống Kê</a>
    <a class="links" href="Login.php">Đăng Xuất</a>
</div>
<p id="demo"></p>
<div class="content">
    <table border ="1" align = "center" cellspacing ="0" >
    <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Tên Sản Phẩm</th>
      <th scope="col">Số Lượng</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Giá</th>
      <th scope="col">Mô Tả Sản Phẩm</th>
      <th scope="col">idLoai</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa </th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    while($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td>'.$row['idSP'].'</td>';
        echo '<td>'. $row['TenSP'].'</td>';
        echo '<td>'. $row['SoLuong'].'</td>';  
        echo '<td><img src="uploads/' . $row['Image'] . '" width="100"></td>';    
        echo '<td>'. number_format($row['Gia'], 0, '.', ',') .' VNĐ</td>';
        echo '<td>'. $row['Mota'].'</td>';
        echo '<td>'.$row['idLoai'].'</td>';
        echo '<td><a href="suasp.php?ids='.$row['idSP'].'">Sửa</a></td>';
        echo '<td><a href="xoasp.php?ids=' .$row['idSP'].'">Xóa</a></td>';
        echo '</tr>';  
 }
    ?>

      </tbody>
          <tr>
            <td colspan ="9" align ="center"> <button type ="button" onclick = "myFunction()"> Thêm Mới</button></td>
            <td colspan ="1" align ="center"> <button type ="button" onclick = "myFunction1()"> Thoát</button></td>
          </tr>  
        
    </table>
    <script>
// Add sự kiện cuộn trang trong đối tượng window
window.onscroll = function() {stickyMenu()};

// Định nghĩa hàm khi sự kiện cuộn trang được kích hoạt
var menu, sticky;
menu = document.getElementById('Menu');
sticky = menu.offsetTop;

function stickyMenu() {
if(window.pageYOffset >= sticky) {
menu.classList.add("sticky");
}else{
menu.classList.remove("sticky");
}
}

// Định nghĩa hàm add và remove lớp active
function addActive(x) {

// Khai báo các biến
var i, links;

// Xóa các lớp active
links = document.getElementsByClassName('links');
for(i = 0; i < links.length; i++) {
links[i].classList.remove("active");
}
x.currentTarget.className += " active";
}

// Gán sự kiện onclick vào các liên kết
var i, links;
links = document.getElementsByClassName('links');
for(i = 0; i < links.length; i++) {
links[i].onclick = addActive;
}

</script>


</body>
</html>

<script>
    function myFunction(){
        location.replace("themsp.php")
    }
    function myFunction1(){
        location.replace("loai.php")
    }
</script>