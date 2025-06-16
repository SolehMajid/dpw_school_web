document.getElementById("formData").addEventListener("submit", function (e) {
  e.preventDefault();

  const nama = document.getElementById("nama").value;
  const telepon = document.getElementById("telepon").value;
  const alamat = document.getElementById("alamat").value;
  const awalTahun = document.getElementById("awal-tahun").value;
  const akhirTahun = document.getElementById("akhir-tahun").value;
  const email = document.getElementById("email").value;
  const jurusan = document.querySelector('input[name="jurusan"]:checked')?.value;
  const kegiatan = document.querySelector('input[name="kegiatan"]:checked')?.value;
  const foto = document.getElementById("foto").files[0];

  const reader = new FileReader();
  reader.onload = function () {
    const alumni = {
      nama,
      telepon,
      alamat,
      awalTahun,
      akhirTahun,
      email,
      jurusan,
      kegiatan,
      foto: reader.result,
    };

    const existing = JSON.parse(localStorage.getItem("alumniData") || "[]");
    existing.push(alumni);
    localStorage.setItem("alumniData", JSON.stringify(existing));

    alert("Data alumni berhasil disimpan!");
    window.location.href = "index.html";
  };

  if (foto) {
    reader.readAsDataURL(foto);
  } else {
    alert("Mohon unggah foto terlebih dahulu.");
  }
});
