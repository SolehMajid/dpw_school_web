<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/form_pendaftaran.css" />
  <script src="../assets/js/mengisi_data.js" defer></script>
</head>

<body>
  <nav>
    <div class="logosmk">
      <img src="../assets/images/pendaftaran/images-removebg-preview.png" alt="" />
      <p>SMK 1 KRIAN</p>
    </div>
    <div class="beranda">
      <p><a href="../index.php">BERANDA</a></p>
      <p><a href="../visi-misi/index.php">VISI&MISI</a></p>
    </div>
  </nav>

  <form action="konfirmasi_data.php">
    <main>
      <div class="mainright">
        <h1>PENDAFTARAN</h1>

        <div class="inputdata">
          <div class="nama">
            <p><label for="nama">NAMA LENGKAP</label></p>
            <input type="text" id="nama" name="nama" />
          </div>

          <div class="alamat">
            <p><label for="alamat">ALAMAT</label></p>
            <input type="text" id="alamat" name="alamat" />
          </div>

          <div class="lahir">
            <p><label for="tgl_lahir">TANGGAL LAHIR</label></p>
            <input type="date" id="tgl_lahir" name="tgl_lahir" />
          </div>

          <div class="kelamin">
            <p><label for="kelamin">JENIS KELAMIN</label></p>
            <select name="kelamin" id="kelamin">
              <option value="">-- JENIS KELAMIN --</option>
              <option value="LAKI-LAKI">LAKI-LAKI</option>
              <option value="PEREMPUAN">PEREMPUAN</option>
            </select>
          </div>

          <div class="agama">
            <p><label for="agama">AGAMA</label></p>
            <select name="agama" id="agama">
              <option value="">-- AGAMA --</option>
              <option value="ISLAM">ISLAM</option>
              <option value="KRISTEN">KRISTEN</option>
              <option value="KATOLIK">KATOLIK</option>
              <option value="HINDU">HINDU</option>
            </select>
          </div>

          <div class="ayah">
            <p><label for="nama_ayah">NAMA AYAH</label></p>
            <input type="text" id="nama_ayah" name="nama_ayah" />
          </div>

          <div class="ibu">
            <p><label for="nama_ibu">NAMA IBU</label></p>
            <input type="text" id="nama_ibu" name="nama_ibu" />
          </div>

          <div class="telp">
            <p><label for="telp">NO TELP/HP</label></p>
            <input type="tel" id="telp" name="telp" />
          </div>

          <div class="foto">
            <p><label for="foto">FOTO 3X3</label></p>
            <img src="../assets/images/pendaftaran/profil.jpg" alt="Foto profil" />
            <input type="file" id="foto" name="foto" required />
          </div>
        </div>
      </div>

      <div class="gambar">
        <img src="../assets/images/pendaftaran/pendaftaran/manusia.jpg" alt="" />
      </div>
    </main>

    <div class="warning">
      <p>PASTIKAN DATA SESUAI SEBELUM KONFIRMASI !!</p>
    </div>

    <div class="buttons">
      <h2><button type="submit">KONFIRMASI</button></h2>
    </div>
  </form>
</body>

</html>