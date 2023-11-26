<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>REALGIRL STORE</title>
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
    
<body>
    
<div id="header">

 <h2>REALGIRL STORE</h2>
 <p>Quản Lý</p>

</div>
<div class="menu" id="Menu">
<a class="links" href="javascript:void(0)" >Trang Chủ</a>
<a class="links" href="tatcasp.php">Quản Lý Sản Phẩm</a>
<a class="links" href="javascript:void(0)">Quản Lý Đơn Hàng</a>
<a class="links" href="javascript:void(0)">Quản Lý Tài Khoản</a>
<a class="links" href="javascript:void(0)">Thống Kê</a>
<a class="links" href="javascript:void(0)">Đăng Xuất</a>
    
</div>
<div class="content">
       <p>REALGIRL STORE</p>
</div>
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