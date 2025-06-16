<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Formulir Pendaftaran</title>
  <script src="../assets/js/mengisi_data.js" defer></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #6dd5fa, #2980b9);
      color: #333;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #0077b6;
      color: white;
      padding: 1rem 2rem;
    }

    nav .logosmk {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    nav .logosmk img {
      width: 40px;
      height: 40px;
    }

    nav .beranda {
      display: flex;
      gap: 1rem;
    }

    nav .beranda a {
      text-decoration: none;
      color: white;
      font-weight: bold;
    }

    form {
      max-width: 600px;
      margin: 2rem auto;
      background-color: white;
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    main h1 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #0077b6;
    }

    .inputdata > div {
      margin-bottom: 1rem;
    }

    .inputdata label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .inputdata input,
    .inputdata select {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 1rem;
    }

    .warning {
      margin-top: 1rem;
      text-align: center;
      font-weight: bold;
      color: red;
    }

    .buttons {
      display: flex;
      justify-content: center;
      margin-top: 1.5rem;
    }

    .buttons button {
      background-color: #0077b6;
      color: white;
      border: none;
      padding: 12px 24px;
      border-radius: 30px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .buttons button:hover {
      background-color: #005f87;
    }
  </style>
</head>
<body>

  <nav>
    <div class="logosmk">
      <img src="../assets/images/pendaftaran/images-removebg-preview.png" alt="Logo SMK" />
      <p>SMK 1 KRIAN</p>
    </div>
    <div class="beranda">
      <p><a href="../index.php">BERANDA</a></p>
      <p><a href="../visi-misi/index.php">VISI & MISI</a></p>
    </div>
  </nav>

  <form action="konfirmasi_data.php">
    <main>
      <h1>PENDAFTARAN</h1>
      <div class="inputdata">
        <div class="nama">
          <label for="nama">NAMA LENGKAP</label>
          <input type="text" id="nama" name="nama" />
        </div>

        <div class="alamat">
          <label for="alamat">ALAMAT</label>
          <input type="text" id="alamat" name="alamat" />
        </div>

        <div class="lahir">
          <label for="tgl_lahir">TANGGAL LAHIR</label>
          <input type="date" id="tgl_lahir" name="tgl_lahir" />
        </div>

        <div class="kelamin">
          <label for="kelamin">JENIS KELAMIN</label>
          <select name="kelamin" id="kelamin">
            <option value="">-- JENIS KELAMIN --</option>
            <option value="LAKI-LAKI">LAKI-LAKI</option>
            <option value="PEREMPUAN">PEREMPUAN</option>
          </select>
        </div>

        <div class="agama">
          <label for="agama">AGAMA</label>
          <select name="agama" id="agama">
            <option value="">-- AGAMA --</option>
            <option value="ISLAM">ISLAM</option>
            <option value="KRISTEN">KRISTEN</option>
            <option value="KATOLIK">KATOLIK</option>
            <option value="HINDU">HINDU</option>
          </select>
        </div>

        <div class="ayah">
          <label for="nama_ayah">NAMA AYAH</label>
          <input type="text" id="nama_ayah" name="nama_ayah" />
        </div>

        <div class="ibu">
          <label for="nama_ibu">NAMA IBU</label>
          <input type="text" id="nama_ibu" name="nama_ibu" />
        </div>

        <div class="telp">
          <label for="telp">NO TELP/HP</label>
          <input type="tel" id="telp" name="telp" />
        </div>

        <div class="foto">
          <label for="foto">FOTO 3X3</label>
          <input type="file" id="foto" name="foto" required />
        </div>
      </div>
    </main>

    <div class="warning">
      <p>PASTIKAN DATA SESUAI SEBELUM KONFIRMASI !!</p>
    </div>

    <div class="buttons">
      <button type="submit">KONFIRMASI</button>
    </div>
  </form>

</body>
</html>
