<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_osis");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Ambil data gambar dari database
$query = "SELECT * FROM tb_images";
$result = mysqli_query($koneksi, $query);
?>
<div class="container mt-4 mb-5">
    <div class="row">
        <?php
        // Loop through the database results
        while ($row = mysqli_fetch_assoc($result)):
        ?>
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="uploads/<?php echo $row['dataimage']; ?>" class="card-img-top" alt="<?php echo $row['judul']; ?>" width="500">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['judul']; ?></h5>
                    <p class="card-text font text-muted"><?php echo $row['deskripsi']; ?></p>
                </div>
            </div>
        </div>
        <?php
        endwhile;
        ?>
    </div>
</div>


<style>
  .font{
    font-size: 16px;
  }
</style>


