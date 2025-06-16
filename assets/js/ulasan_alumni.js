const ratingStars = document.querySelectorAll(".rating span");
const ratingValue = document.getElementById("nilaiRating");

let selectedRating = 0;

ratingStars.forEach((star) => {
  star.addEventListener("click", () => {
    selectedRating = star.dataset.value;
    ratingValue.value = selectedRating;

    ratingStars.forEach((s) => {
      s.classList.toggle("selected", s.dataset.value <= selectedRating);
    });
  });
});

document.getElementById("formUlasan").addEventListener("submit", function (e) {
  e.preventDefault();

  const email = document.getElementById("email").value;
  const ulasan = document.getElementById("ulasan").value;

  alert(
    `Email: ${email}\nRating: ${selectedRating} bintang\nUlasan: ${ulasan}`
  );

  // TODO: Kirim ke server atau simpan ke daftar alumni
});
