<?php
require_once("../config.php");

if (isset($_GET["id"])) {
  $id = $_GET["id"];
  $jurusan_query = "SELECT * FROM jurusan WHERE id = ?";
  $stmt = $db->prepare($jurusan_query);

  $stmt->bind_param("i", $id);
  $stmt->execute();

  $data_jurusan = $stmt->get_result()->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Jurusan</title>

  <link rel="stylesheet" href="../assets/css/daftar_jurusan.css">

  <style>
    body,
    h1,
    h2,
    h3,
    p,
    .p,
    .kotak p {
      font-family: Arial, sans-serif !important;
      text-transform: none !important;
      font-variant: normal !important;
      color: black !important;
    }

    main {
      margin: 0 10rem;
      padding: 1rem 0;
    }

    #content {
      display: grid;
      gap: 1rem;
      justify-items: center;
    }

    #content img {
      object-fit: cover;
      width: 30%;
      border: gray;
      border-radius: 5px;
    }

    hr {
      border-bottom: 1px black solid;
      width: 100%;
    }

    h3 {
      text-transform: capitalize;
    }
  </style>
</head>

<body>
  <header class="header">
    <div class="header-kiri">
      <h1>SMK Krian 1</h1>
    </div>
    <div class="header-kanan">
      <ul>
        <li><a href="../index.php">Beranda</a></li>
        <li><a href="../visi-misi/index.php">Visi & Misi</a></li>
      </ul>
    </div>
  </header>

  <main>
    <section id="content">
      <img src="<?= $data_jurusan["foto_jurusan"] ?>" alt="">

      <hr />

      <h3>
        <?= str_replace("_", " ", $data_jurusan["nama_jurusan"]) ?>
      </h3>

      <p class="description">
        <?= $data_jurusan["deskripsi_jurusan"] ?>
      </p>
    </section>
  </main>

  <footer class="footer">
    <h1>SMK Krian 1</h1>
    <p>Copyright 2025 SMK Krian 1</p>
    <div class="sosmed">

      <a href="https://www.youtube.com/@SkarisaEntertainment"><i class="youtube">Youtube</i></a>
      <a href="https://www.instagram.com/smkkrian1/"><i class="instagram">Instagram</i></a>
    </div>
  </footer>
</body>

</html>