<?php
include 'koneksi.php';
$query_testimoni=mysqli_query($koneksi, "SELECT * FROM testimoni ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>beautyup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">beautyup</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#profil">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#kursus">Kursus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#galeri">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#testimoni">Testimoni</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!-- home -->
   <div class="container mt-5" id="#home">
    <h2>Pilihan Kursus</h2>
    <div class="row justify-content-center">
  <div class="row align-item-center">
    <div class="col-md-6">
      <h1>Beautyup Class</h1>
      <p class="lead">Belajar makeup wit me</p>
      <a href="#kursus" class="btn btn-primary">Lihat Kursus</a>
    </div>
    <div class="col-md-6">
      <img src="img/makeup.jpg"
      class="img-fluid rounded"
      alt="BeautyUp">
    </div>
  </div>
</div>
 <!-- profil -->
  <div class="container mt-5" id="profil">
  <div class="row align-item-center">
    <div class="col-md-6">
      <img src="img/makeup.jpg"
      class="img-fluid rounded"
      alt="beautyup">
    </div>
    <div class="col-md-7">
      <h2>Class BeautyUp </h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam possimus molestias cum incidunt molestiae velit sint, quod iste architecto distinctio magnam mollitia ea. Cupiditate nesciunt eveniet dolorum sunt harum eos!</p>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum, sed, dicta deleniti reiciendis velit dolores ducimus, ipsam corrupti at non soluta. Odit iste amet, doloremque id non consequuntur optio veritatis.</p>
      <a href="#profil" class="btn btn-primary">Lihat Pilihan Kursus</a>
    </div>
  </div>
</div>
  <!-- kursus -->
   <div class="container mt-5" id="kursus">
          <h2 class="text-center mb-4">Lihat Kursus</h2>
    <div class="row">
   <!-- card1 --> 
   <div class="col-md-4">
   <div class="card" style="width: 18rem;">
  <img src="img/basic.jpg" class="card-img-top" alt="basic makeup">
  <div class="card-body">
    <h5 class="card-title">Basic Makeuo</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
  </div>
</div>
</div>
  <!-- card2 -->
<div class="col-md-4">
   <div class="card" style="width: 18rem;">
  <img src="img/wedding.jpg" class="card-img-top" alt="Wedding Makeup">
  <div class="card-body">
    <h5 class="card-title">Wedding Makeup</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
  </div>
</div>
</div>
  <!-- card3 -->
<div class="col-md-4">
   <div class="card" style="width: 18rem;">
  <img src="img/wisuda" class="card-img-top" alt="Makeup Wisuda">
  <div class="card-body">
    <h5 class="card-title">Wisuda MakeUp</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
  </div>
</div>
</div>
</div>
</div>
 <!-- galeri -->
  <div class="container mb-4" id="galeri">
    <h2 class="text-center mb-4">Galeri Makeup</h2> 
    <div class="row">
      <!-- gambar1 -->
       <div class="col-md-4">
       <img src="img/basic.jpg"
       class="img-flued raunded"
       alt="basic makeup">
        </div>
        <!-- gambar2 -->
         <div class="col-md-4">
         <img src="img/wedding.jpg"
         class="img-flued raunded"
         alt="Wedding Makeup">
        </div>
        <!-- gambar3 -->
         <div class="col-md-4">
          <img src="img/wisuda.jpg"
          class="text-flued rounded"
          alt="wisuda makeup">
        </div>
</div>
</div>

  <!-- testimoni -->
   <div class="container md-4" id="testimoni">
    <h2 class="text-center mb-4">Testimoni</h2>
    <div class="row justify-content-center">
      <div class="col-md-6">

        <form action="tambah_testimoni.php" method="POST">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text"  name="nama" class="form-control" id="nama" placeholder="Masukkan Nama" required>
  </div>
  <div class="mb-3">
    <label for="komentar" class="form-label">Komentar</label>
    <textarea name="komentar" class="form-control" id="komentar" rows="4" placeholder="Masukkan Testimoni" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Kirim Testimoni</button>
</form>
<?php
while($data =mysqli_fetch_assoc($query_testimoni)) {
?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['nama']; ?></h5>
    <p class="card-text"><?= $data['komentar'];?></p>
    <a href="edit_testimoni.php?id=<?= $data['id'];?>" class="btn btn-warning">Edit</a>
    <a href="hapus_testimoni.php?id=<?= $data['id'];?>" class="btn btn-danger">Hapus</a>
  </div>
</div>
  <?php
}
?>
</div>
</div>
</div>
</body>
</html>