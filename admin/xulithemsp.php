<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử Lí Thêm Sản Phẩm</title>
</head>

<body>
    <h1>Xử lí thêm sản phẩm</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $tensp = $_POST['tensp'];
        $gia = $_POST['gia'];
        $soluong = $_POST['soluong'];
        $loaisp = $_POST['idtl'];
        $mota = $_POST['mota'];

        if (isset($_FILES['image'])) {
            $file = $_FILES['image'];
            $file_name = $file['name'];
            $upload_dir = "uploads/";

            if ($file['error'] === UPLOAD_ERR_OK) {
                move_uploaded_file($file['tmp_name'], $upload_dir . $file_name);

                $conn = new mysqli("localhost", "root", "", "cuoiki");
                $sql = "INSERT INTO phukien (TenSP, SoLuong, Image, Mota, Gia, idLoai) VALUES ('$tensp','$soluong','$file_name', '$mota', '$gia', '$loaisp')";
                $query = mysqli_query($conn, $sql);

                if ($query) {
                    echo "Thêm sản phẩm thành công.";
                    header('Location: loai.php');
                    exit(); // Make sure to exit after header to prevent further execution
                } else {
                    echo "Thêm sản phẩm thất bại: " . mysqli_error($conn);
                }
            } else {
                echo "File upload error: " . $file['error'];
            }
        }
    }
    ?>
</body>

</html>
