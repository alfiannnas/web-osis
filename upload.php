<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "resq1481_osis", "kodokjakarta123@", "resq1481_osis");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Ambil data yang dikirim dari form
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$namaFile = $_FILES['gambar']['name'];
$ukuranFile = $_FILES['gambar']['size'];
$tmpName = $_FILES['gambar']['tmp_name'];

// Tentukan direktori penyimpanan file
$dirUpload = "uploads/";
$namaFileBaru = uniqid() . '-' . $namaFile;

// Pindahkan file yang diupload ke direktori yang ditentukan
if (move_uploaded_file($tmpName, $dirUpload . $namaFileBaru)) {
    // Simpan data ke database
    $query = "INSERT INTO tb_images (tipeimage, dataimage, judul, deskripsi) VALUES ('$namaFile', '$namaFileBaru', '$judul', '$deskripsi')";
    mysqli_query($koneksi, $query);
    
    echo "File berhasil diupload.";
} else {
    echo "File gagal diupload.";
}
?>
