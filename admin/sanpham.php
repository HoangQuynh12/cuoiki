<?php
  include('conn.php');
  $sql = "SELECT * FROM phukien WHERE idLoai = " . $_GET['idtl'];
  $query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Sản Phẩm</title>
    <style>
        h2 {
            text-align: center;
            color: blue;
            margin: 15px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: black;
            outline: none;
        }

        a {
            text-decoration: none;
            text-align: center;
        }

        ul {
            list-style: none;
        }

        header {
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

        .admin-content-left {
            background-color: #e6e6e6ee;
            padding: 30px 0 0 12px;
        }

        .admin-content-left ul li a {
            font-size: 19px;
            color: black;
            font-weight: 500;
            margin: 3px 0;
        }

        .admin-content-left ul li {
            margin: 6px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>REALGIRL STORE</h1>
    </header>
    <section class="admin-content">
        <div class="admin-content-left col-md-3 mt-4">
            <h2 style="text-align:center;">REALGIRL STORE</h2>
            <ul>
                <li><a href="theloai.php">Quản Lý Đơn Hàng</a></li>
                <li><a href="theloai.php">Thống Kê</a></li>
                <li><a href="theloai.php">Quản Lý Sản Phẩm</a>
                    <ul>
                        <li><a href="themtl.php">Thêm Loại Sản Phẩm</a></li>
                        <li><a href="allsach.php">Sản Phẩm</a>
                            <ul>
                                <li><a href="themsach.php">Thêm Sản Phẩm</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="Login.php">Đăng xuất</a></li>
            </ul>
        </div>
        <div class="admin-content-right col-md-9">
            <h2>Sách</h2>
            <table class="table">
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
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                        echo '<tr>';
                        echo '<td>' . $row['idSP'] . '</td>';
                        echo '<td>' . $row['TenSP'] . '</td>';
                        echo '<td>' . $row['SoLuong'] . '</td>';
                        echo '<td><img src="uploads/' . $row['Image'] . '" width="100"></td>';
                        echo '<td>' . number_format($row['Gia'], 0, '.', ',') . ' VNĐ</td>';
                        echo '<td>' . $row['Mota'] . '</td>';
                        echo '<td>' . $row['idLoai'] . '</td>';
                        echo '<td><a href="suasp.php?ids=' . $row['idSP'] . '">Sửa</a></td>';
                        echo '<td><a href="xoasp.php?ids=' . $row['idSP'] . '">Xóa</a></td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>
