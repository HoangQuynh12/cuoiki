<?php
    include('conn.php');
    $sql = "DELETE FROM loai WHERE idLoai = " . $_GET['idtl'];
    $query = mysqli_query($conn, $sql);
    header('Location: loai.php');
?>