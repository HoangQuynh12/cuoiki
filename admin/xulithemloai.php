<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý thêm thể loại</title>
</head>

<body>
    <h1>Xử lý thêm thể loại</h1>
    <?php
    if (isset($_GET['tentl'])) {
        $tentl = $_GET['tentl'];
        include('conn.php');

        $sql = "INSERT INTO loai(TenLoai) VALUES ('$tentl')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "Thêm thể loại thành công.";
        } else {
            echo "Thêm thể loại thất bại.";
        }

        header('Location: loai.php');
        exit(); // Make sure to exit after header to prevent further execution
    } else {
        echo "Tên thể loại không được trống.";
    }
    ?>
</body>

</html>
