const storageKey = "dataPeminjaman";

const getData = () => {
  const data = localStorage.getItem(storageKey);
  return data ? JSON.parse(data) : [];
};

const saveData = (data) => {
  localStorage.setItem(storageKey, JSON.stringify(data));
};

// elemen DOM
const judulBukuInput = document.getElementById("judulBuku");
const peminjamInput = document.getElementById("peminjam");
const tanggalInput = document.getElementById("tanggal");
const historiTableBody = document
  .getElementById("histori-peminjaman")
  .getElementsByTagName("tbody")[0];

// Render Table
const renderTable = () => {
  const data = getData();
  historiTableBody.innerHTML = ""; // membersihkan table rendering

  data.forEach((item, index) => {
    const row = historiTableBody.insertRow();
    row.setAttribute("data-tanggal", item.tanggal);

    row.insertCell(0).innerText = item.judul;
    row.insertCell(1).innerText = item.peminjam;
    row.insertCell(2).innerText = item.tanggal;
    row.insertCell(3).innerText = "Rp 0"; // setting nilai dengan 0

    const deleteButton = document.createElement("button");
    deleteButton.textContent = "Hapus";
    deleteButton.className = "hapus-button";
    deleteButton.onclick = () => deleteRow(index); // untuk menghapus
    row.insertCell(4).appendChild(deleteButton);
  });
};

// Add Loan
function pinjamBuku() {
  const judul = judulBukuInput.value.trim(); // Use .trim() to remove whitespace
  const peminjam = peminjamInput.value.trim();
  const tanggalPinjam = tanggalInput.value;

  if (!judul || !peminjam || !tanggalPinjam) {
    alert("Harap isi semua kolom.");
    return;
  }

  const newLoan = { judul, peminjam, tanggal: tanggalPinjam };
  const data = getData();
  data.push(newLoan);
  saveData(data);

  renderTable();
  clearInputs();
}

// menghapus baris
function deleteRow(index) {
  if (confirm("Yakin ingin menghapus data ini?")) {
    const data = getData();
    data.splice(index, 1);
    saveData(data);
    renderTable();
  }
}

// membersihkan inputan setelah di submit
const clearInputs = () => {
  judulBukuInput.value = "";
  peminjamInput.value = "";
  tanggalInput.value = "";
};

// perhitungan untuk menghitung denda
setInterval(() => {
  const today = new Date();
  Array.from(historiTableBody.rows).forEach((row) => {
    const loanDateStr = row.getAttribute("data-tanggal");
    const loanDate = new Date(loanDateStr);
    const diffDays = Math.floor((today - loanDate) / (1000 * 60 * 60 * 24));
    const fine = Math.max(0, Math.floor(diffDays / 7) * 1000);
    row.cells[3].innerText = `Rp ${fine}`;
  });
}, 1000);

document.addEventListener("DOMContentLoaded", renderTable);
