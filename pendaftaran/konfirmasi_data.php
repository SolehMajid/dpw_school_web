<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/konfirmasi_data.css" />
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

  <main>
    <div class="namekonf">
      <h1>KONFIRMASI DATA</h1>
    </div>

    <div class="img-main">
      <img id="foto" src="" alt="Foto Profil" />
    </div>

    <div class="last-data">
      <table>
        <tr>
          <th>NAMA LENGKAP</th>
          <td id="namal"></td>
        </tr>
        <tr>
          <th>ALAMAT</th>
          <td id="alamat"></td>
        </tr>
        <tr>
          <th>TANGGAL LAHIR</th>
          <td id="tgl_lahir"></td>
        </tr>
        <tr>
          <th>JENIS KELAMIN</th>
          <td id="kelamin"></td>
        </tr>
        <tr>
          <th>AGAMA</th>
          <td id="agama"></td>
        </tr>
        <tr>
          <th>NAMA AYAH</th>
          <td id="nama_ayah"></td>
        </tr>
        <tr>
          <th>NAMA IBU</th>
          <td id="nama_ibu"></td>
        </tr>
        <tr>
          <th>NO TELP</th>
          <td id="telp"></td>
        </tr>
      </table>
    </div>
  </main>

  <div class="footer">
    <div class="buttons">
      <button onclick="window.location.href='2.Mengisi Data.html'">
        EDIT
      </button>
      <a href="selamat.php"><button>KONFIRMASI</button></a>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const data = JSON.parse(localStorage.getItem("pendaftaran"));

      if (data) {
        document.getElementById("namal").textContent = data.nama || "-";
        document.getElementById("alamat").textContent = data.alamat || "-";
        document.getElementById("tgl_lahir").textContent =
          data.tgl_lahir || "-";
        document.getElementById("kelamin").textContent = data.kelamin || "-";
        document.getElementById("agama").textContent = data.agama || "-";
        document.getElementById("nama_ayah").textContent =
          data.nama_ayah || "-";
        document.getElementById("nama_ibu").textContent =
          data.nama_ibu || "-";
        document.getElementById("telp").textContent = data.telp || "-";
        document.getElementById("foto").src =
          data.foto || "assets/images/profil.jpg";
      } else {
        alert("Data tidak ditemukan. Silakan isi formulir terlebih dahulu.");
      }
    });
  </script>

</body>

</html>

</html>