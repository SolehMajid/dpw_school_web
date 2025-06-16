document.addEventListener('DOMContentLoaded', () => {
  const alumniContainer = document.getElementById('alumniList');

  const alumniData = JSON.parse(localStorage.getItem('alumniData')) || [];
  const ulasanData = JSON.parse(localStorage.getItem('ulasanData')) || [];

  alumniData.forEach(alumni => {
    const ulasan = ulasanData.find(u => u.email === alumni.email) || { bintang: 0, deskripsi: 'Belum ada ulasan' };

    const card = document.createElement('div');
    card.className = 'alumni-card';

    const stars = '★'.repeat(ulasan.bintang) + '☆'.repeat(5 - ulasan.bintang);

    card.innerHTML = `
      <p><strong>Nama:</strong> ${alumni.nama}</p>
      <p><strong>Jurusan:</strong> ${alumni.jurusan}</p>
      <p><strong>Status:</strong> ${alumni.status}</p>
      <p class="stars">${stars}</p>
      <p><strong>Ulasan:</strong><br>${ulasan.deskripsi}</p>
    `;

    alumniContainer.appendChild(card);
  });
});
