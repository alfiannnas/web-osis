<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $koneksi = mysqli_connect("localhost", "root", "", "db_osis");
    $sql = "SELECT * FROM tb_images WHERE id=$id";
    $result = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $judul = $row['judul'];
        $deskripsi = $row['deskripsi'];
    } else {
        echo "Data tidak ditemukan.";
    }
    mysqli_close($koneksi);
} else {
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gambar</title>
</head>
<body>
    <h1>Edit Gambar</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="judul">Judul:</label><br>
        <input type="text" id="judul" name="judul" value="<?php echo $judul; ?>"><br>
        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi"><?php echo $deskripsi; ?></textarea><br><br>
        <input type="submit" value="Update" name="submit">
    </form>
</body>
</html>
