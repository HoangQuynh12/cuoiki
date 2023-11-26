<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REALGIRL STORE</title>
    <link rel="stylesheet" href="menu.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        header,
        nav {
            margin: 5px 10%;
        }

        nav {
            background: #484848;
            border-radius: 5px;
        }

        nav ul {
            display: flex;
        }

        nav>ul li {
            list-style: none;
            border-right: 1px solid #ccc;
            border-left: 1px solid #333;
        }

        nav>ul li a {
            display: block;
            padding: 0 25px;
            line-height: 50px;
            color: #f1f2f3;
            text-decoration: none;
        }

        nav ul li:first-child {
            border-left: none;
        }

        nav>ul li:first-child a {
            border-bottom-left-radius: 5px;
            border-top-left-radius: 5px;
        }

        nav ul li:hover>a {
            background: red;
            opacity: .7;
            color: yellow;
        }

        nav li ul {
            display: none;
            min-width: 350px;
            position: absolute;
        }

        nav li>ul li {
            width: 100%;
            border: none;
            border-bottom: 1px solid #ccc;
            background: #999;
            text-align: left;
        }

        nav li>ul li:first-child a {
            border-bottom-left-radius: 0px;
            border-top-left-radius: 0px;
        }

        nav li>ul li:last-child {
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        nav li>ul li:last-child a {
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        nav li:hover>ul {
            display: block;
        }

        nav>ul li>ul li>ul {
            margin-left: 352px;
            margin-top: -50px;
        }
    </style>
</head>
<body>
    <div id="header">
        <h2>REALGIRL STORE</h2>
        <p>Quản Lý</p>
    </div>
    <nav>
        <ul>
            <li><a href="#" title="Trang chủ">Trang chủ</a></li>
            <li><a href="#" title="Quản Lý Sản Phẩm">Quản Lý Sản Phẩm</a>
                <ul>
                    <li>
                        <a href="#" title="Loại Sản Phẩm">Loại Sản Phẩm</a>
                        <ul>
                            <li>
                                <a href="#" title="Thêm Loại Sản Phẩm">Thêm Loại Sản Phẩm</a>
                                <ul>
                                    <li><a href="#" title="...">...</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" title="Sản Phẩm">Sản Phẩm</a>
                        <ul>
                            <li>
                                <a href="#" title="Thêm Sản Phẩm Mới">Thêm Sản Phẩm Mới</a>
                                <ul>
                                    <li><a href="#" title="...">...</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" title="Xem Sản Phẩm">Xem Sản Phẩm</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#" title="Quản Lý Đơn Hàng">Quản Lý Đơn Hàng</a></li>
            <li><a href="#" title="Thống Kê">Thống Kê</a></li>
            <li><a href="#" title="Đăng Xuất">Đăng Xuất</a></li>
        </ul>
    </nav>
</body>
</html>
