<?php
include('conn.php');

if(isset($_POST['idsp'], $_POST['tensp'], $_POST['soluong'], $_POST['gia'], $_POST['mota'], $_POST['idtl'])) {
    $id = $_POST['idsp'];
    $tensp = $_POST['tensp'];
    $soluong = $_POST['soluong'];
    $gia = $_POST['gia'];
    $mota = $_POST['mota'];
    $idtl = $_POST['idtl'];

    // Kiểm tra xem có tệp hình ảnh mới được tải lên không
    if(isset($_FILES['image'])) {
        $file = $_FILES['image'];
        if ($file['error'] === UPLOAD_ERR_OK) {
            $file_name = $file['name'];
            $upload_dir = 'uploads/';
            move_uploaded_file($file['tmp_name'], $upload_dir . $file_name);
        } else {
            echo "Lỗi khi tải lên hình ảnh: " . $file['error'];
            exit;
        }
    } else {
        // Nếu không có tệp hình ảnh mới được tải lên, giữ nguyên tên ảnh cũ
        $file_name = $_POST['old_image'];
    }

    // Sử dụng Prepared Statement để tránh tấn công SQL Injection
    $sql = "UPDATE sanpham SET TenSP=?, idLoai=?, SoLuong=?, Gia=?, Mota=?, Image=? WHERE idSP=?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Gán các giá trị và kiểu dữ liệu cho các tham số
        mysqli_stmt_bind_param($stmt, 'ssidssi', $tensp, $idtl, $soluong, $gia, $mota, $file_name, $id);
        
        if (mysqli_stmt_execute($stmt)) {
            echo "Cập nhật sản phẩm thành công!";
            header('Location: tatcasp.php');
        } else {
            echo "Có lỗi xảy ra khi cập nhật sản phẩm: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Lỗi SQL: " . mysqli_error($conn);
    }
} else {
    echo "Thiếu thông tin cần thiết.";
}
?>