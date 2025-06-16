document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector("form");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const fileInput = document.getElementById("foto");
    const file = fileInput.files[0];

    if (file) {
      const reader = new FileReader();

      reader.onloadend = function () {
        const data = {
          nama: document.getElementById("nama").value,
          alamat: document.getElementById("alamat").value,
          tgl_lahir: document.getElementById("tgl_lahir").value,
          kelamin: document.getElementById("kelamin").value,
          agama: document.getElementById("agama").value,
          nama_ayah: document.getElementById("nama_ayah").value,
          nama_ibu: document.getElementById("nama_ibu").value,
          telp: document.getElementById("telp").value,
          foto: reader.result,
        };

        localStorage.setItem("pendaftaran", JSON.stringify(data));
        window.location.href = "konfirmasi_data.php";
      };

      reader.readAsDataURL(file);
    } else {
      alert("Silakan pilih foto terlebih dahulu.");
    }
  });
});
