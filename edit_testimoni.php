<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM testimoni WHERE id='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Testimoni</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2>Edit Testimoni</h2>

    <form action="" method="POST">

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control"
                   value="<?= $data['nama']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Komentar</label>
            <textarea name="komentar" class="form-control" required><?= $data['komentar']; ?></textarea>
        </div>

        <button type="submit" name="update" class="btn btn-primary">
            Simpan Perubahan
        </button>

        <a href="index.php#testimoni" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>

<?php

if (isset($_POST['update'])) {

    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];

    $query = mysqli_query($koneksi, 
        "UPDATE testimoni 
         SET nama='$nama', komentar='$komentar' 
         WHERE id='$id'"
    );

    if ($query) {
        header("Location: index.php#testimoni");
    } else {
        echo "Gagal mengedit testimoni";
    }
}
?>