<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <title>Sửa Sản Phẩm</title>
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
        color: blue;
        margin: 15px;
    }
    select{
        width: 330px;
        height: 40px;
    }
    .ck-editor_editable_inline {
      min-height: 400px;
    }
</style>
<body>
<header>
      <h1>REALGIRL STORE</h1>
  </header>
  <section class="admin-content">
    <div class="admin-content-left col-md-3 mt-4">
      <h2 style="text-align:center;">GW</h2>
          <ul>
            <li><a href="loai.php">Quản Lý Đơn Hàng</a>
            <li><a href="loai.php">Thống Kê</a>
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
      <h2>Sửa Sản Phẩm</h2>
    <?php
    include('conn.php');

    // Kiểm tra xem tham số 'idsp' có được đặt trong URL không
    if(isset($_GET['ids'])) {
        $id = $_GET['ids'];

        // Truy vấn để lấy thông tin sản phẩm dựa trên 'idsp'
        $sql = "SELECT * FROM phukien WHERE idSP = $id";
        $query = mysqli_query($conn, $sql);

        // Kiểm tra xem có kết quả hợp lệ không
        if(mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);
        } else {
            // Xử lý trường hợp không tìm thấy sản phẩm
            echo "Sản phẩm không được tìm thấy.";
            exit; // Dừng việc thực thi mã
        }
    } else {
        // Xử lý trường hợp không có tham số 'idsp' trong URL
        echo "Thiếu ID sản phẩm.";
        exit; // Dừng việc thực thi mã
    }
    ?>
    <form action="xulisuasp.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="idsp" value="<?php echo $row['idSP']; ?>">
      <div class="mb-3 w-50 m-3">
        <label for="" class="form-label m-3">Tên Sản Phẩm <span style="color: red;">*</span></label>
        <input type="text" class="form-control" name="tensp" id="tenSp" aria-describedby="Name" value="<?php echo $row['TenSP']; ?>">
      </div>
      <div class="mb-3 w-50 m-3">
        <label for="soLuong" class="form-label m-3">Số lượng<span style="color: red;">*</span></label>
        <input type="text" class="form-control" name="soluong" id="soLuong" value="<?php echo $row['SoLuong']; ?>">
      </div>
      <div class="mb-3 w-50 m-3">
        <label for="image" class="form-label m-3">Ảnh sản phẩm<span style="color: red;">*</span></label>
        <input type="file" class="form-control" name="image" id="image">
        <img src="uploads/<?php echo $row['Image']; ?>" width="100">
      </div>
      
      <div class="mb-3 w-50 m-3">
        <label for="donGia" class="form-label m-3">Giá sản phẩm<span style="color: red;">*</span></label>
        <input type="text" class="form-control" name="gia" id="gia" value="<?php echo $row['Gia']; ?>">
      </div>
      <div class="m-3">
        <label for="">Mô tả sản phẩm<span style="color: red;">*</span></label> <br>
        <textarea name="mota" id="editor" cols="30" rows="10"><?php echo $row['Mota']; ?></textarea>
      </div>
      <div class="mb-3 w-50 m-3">
        <label for="disabledTextInput" class="form-label m-3">Chọn danh mục<span style="color: red;">*</span></label> <br>
          <select name="idtl" id="disabledSelect" class="form-select"> <br>
            <?php
            $sql = "SELECT * FROM loai";
            $query = mysqli_query($conn, $sql);
            while($cat_row = mysqli_fetch_array($query)) {
                $selected = ($cat_row['idLoai'] == $row['TenLoai']) ? 'selected' : '';
                echo '<option value ="' . $cat_row['idLoai'] . '" ' . $selected . '>' . $cat_row['TenLoai'] . '</option>';
            }
            ?>
          </select>
          <br>
      </div>
      <button type="submit" class="btn btn-primary m-3">Cập nhật sản phẩm</button>
      
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
