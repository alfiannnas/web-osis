<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $koneksi = mysqli_connect("localhost", "resq1481_osis", "kodokjakarta123@", "resq1481_osis");
    $sql = "DELETE FROM tb_images WHERE id=$id";
    if (mysqli_query($koneksi, $sql)) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
} else {
    header("Location: admin.php");
    exit();
}
?>
