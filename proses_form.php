<?php
// Ambil data dari form
$nama = $_POST['nama'];
$pesan = $_POST['pesan'];

// Koneksi ke database (contoh menggunakan mysqli)
$koneksi = mysqli_connect("localhost", "resq1481_osis", "kodokjakarta123@", "resq1481_osis");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk menyimpan data ke dalam tabel pesan
$sql = "INSERT INTO pesan (nama, pesan) VALUES ('$nama', '$pesan')";

// Jalankan query
if (mysqli_query($koneksi, $sql)) {
    // Pesan berhasil dikirim, tambahkan script JavaScript untuk redirect dan alert
    echo '<script>alert("Pesan berhasil dikirim.");</script>';
    echo '<script>window.location.href = "form.php";</script>';
} else {
    // Pesan gagal dikirim, tampilkan pesan error
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
