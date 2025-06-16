<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peminjaman Denda</title>
  <link rel="stylesheet" href="../assets/css/peminjaman_denda.css">
</head>

<body>

  <!-- bagian header -->
  <div class="header">
    <div class="gambar">
      <img src="../assets/images/perpustakaan/gambar/logo smks krian.png" alt="logo sekolah">
    </div>
    <div class="konten-header">
      <div class="judul">
        <h1>PERPUSTAKAAN SMK KRIAN 1</h1>
      </div>
      <nav>
        <a href="index.php">Pengumuman</a>
        <a href="profil_siswa.php">Profil Siswa</a>
        <a href="profil_pengurus.php">Profil Pengurus</a>
        <a href="baca_buku.php">Baca Buku</a>
        <a href="peminjaman_denda.php">Peminjaman dan Denda</a>
      </nav>
    </div>
    <div class="gambar-kiri">
      <img src="../assets/images/perpustakaan/gambar gif/Naruto-shippuden-vs-Sasuke_5.gif" alt="gambar gif">
    </div>
  </div>

  <!-- bagian utama -->
  <div class="utama">
    <div class="judul-utama">
      <h1>PEMINJAMAN DAN DENDA BUKU</h1>

      <!-- bagian isi utama -->
      <div class="container-peminjaman">
        <div class="peminjaman">
          <fieldset>
            <legend>PEMINJAMAN BUKU</legend>
            <div class="form-group">
              <label for="judulbuku">Judul Buku:</label>
              <input type="text" id="judulBuku" />
            </div>

            <div class="form-group">
              <label for="peminjam">Peminjam:</label>
              <input type="text" id="peminjam" />
            </div>

            <div class="form-group">
              <label for="tanggal">Tanggal Pinjam:</label>
              <input type="date" id="tanggal" />
            </div>

            <button onclick="pinjamBuku()">Pinjam</button>
          </fieldset>
        </div>

        <div class="peminjaman">
          <fieldset class="histori-peminjaman">
            <legend>Riwayat Peminjaman</legend>
            <table id="histori-peminjaman">
              <thead>
                <tr>
                  <th>Judul Buku</th>
                  <th>Peminjam</th>
                  <th>Tanggal Pinjam</th>
                  <th>Denda</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </fieldset>
        </div>
      </div>
    </div>
  </div>

  <!-- bagian footer -->
  <div class="footer">
    <nav class="nav-footer">
      <a href="#">BERANDA</a>
      <a href="#">TENTANG KAMI</a>
      <div class="social">
        <span>IKUTI KAMI JUGA DI</span>
        <a
          href="https://www.youtube.com/@smkkrian1sidoarjo340"
          target="_blank"><img src="../assets/images/perpustakaan/gambar/logo youtube.png" alt="YouTube" /></a>
        <a href="https://www.instagram.com/smkkrian1/" target="_blank"><img src="../assets/images/perpustakaan/gambar/logo ig.png" alt="Instagram" /></a>
      </div>
    </nav>
  </div>

  <script src="../assets/js/peminjaman_denda.js"></script>
</body>

</html>