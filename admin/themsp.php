<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
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
    <title>Thêm Sản Phẩm</title>
</head>

<body>
    <header>
        <h1>REALGIRL STORE</h1>
    </header>
    <section class="admin-content">
        <div class="admin-content-left col-md-3 mt-4">
            <h2 style="text-align:center;">REALGIRL STORE</h2>
            <ul>
                <li><a href="loai.php">Quản Lý Đơn Hàng</a></li>
                <li><a href="loai.php">Thống Kê</a></li>
                <li><a href="loai.php">Quản Lý Sản Phẩm</a>
                    <ul>
                        <li><a href="themloai.php">Thêm Loại Sản Phẩm</a></li>
                        <li><a href="tatcasp.php">Sản Phẩm</a>
                            <ul>
                                <li><a href="themsp.php">Thêm Sản Phẩm</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="Login.php">Đăng xuất</a></li>
            </ul>
        </div>
        <div class="admin-content-right col-md-9">
            <h2>Thêm Sản Phẩm Mới</h2>
            <form action="xulithemsp.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3 w-50 m-3">
                    <label for="tenSp" class="form-label m-3">Nhập tên sản phẩm <span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="tensp" id="tenSp" aria-describedby="Name">
                </div>
                <div class="mb-3 w-50 m-3">
                    <label for="soLuong" class="form-label m-3">Số lượng<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="soluong" id="soLuong">
                </div>
                <div class="mb-3 w-50 m-3">
                    <label for="donGia" class="form-label m-3">Giá <span style="color: red;">*</span></label>
                    <input type="text" class="form-control" name="gia" id="donGia">
                </div>
                <div class="m-3">
                    <label for="">Mô tả sản phẩm<span style="color: red;">*</span></label> <br>
                    <textarea name="mota" id="editor" cols="30" rows="10"></textarea>
                </div>
                <div class="mb-3 w-50 m-3">
                    <label for="image" class="form-label m-3">Ảnh sản phẩm<span style="color: red;">*</span></label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="mb-3 w-50 m-3">
                    <label for="disabledTextInput" class="form-label m-3">Chọn thể loại<span style="color: red;">*</span></label> <br>
                    <select name="idtl" id="disabledSelect" class="form-select"> <br>
                        <?php
                        include('conn.php');
                        $sql = "SELECT * FROM loai";
                        $query = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                            echo '<option value ="' . $row['idLoai'] . '">' . $row['TenLoai'] . '</option>';
                        }
                        ?>
                    </select>
                    <br>
                </div>
                <button type="submit" class="btn btn-primary m-3">Thêm Sản Phẩm</button>
            </form>
        </div>
    </section>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>
