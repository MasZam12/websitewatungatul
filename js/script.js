document.addEventListener("DOMContentLoaded", () => {
  const seeMoreBtn = document.getElementById("seeMoreBtn");
  const hiddenCards = document.querySelectorAll(".menu-card-hidden");

  seeMoreBtn.addEventListener("click", () => {
    const isExpanded = seeMoreBtn.textContent === "See Less";

    if (isExpanded) {
      // Sembunyikan kartu dan ubah teks tombol kembali ke "See More"
      hiddenCards.forEach((card) => {
        card.style.display = "none";
      });
      seeMoreBtn.textContent = "See More";
    } else {
      // Tampilkan kartu dan ubah teks tombol menjadi "See Less"
      hiddenCards.forEach((card) => {
        card.style.display = "block";
      });
      seeMoreBtn.textContent = "See Less";
    }
  });
});

const ratingValue = 4.8; // Jumlah rating
const stars = document.querySelectorAll(".star");
const ratingDisplay = document.querySelector(".rating-value");

// Update teks jumlah rating
ratingDisplay.textContent = ratingValue;

// Tentukan bintang penuh berdasarkan rating
const fullStars = Math.floor(ratingValue); // Jumlah bintang penuh
const halfStar = ratingValue % 1 !== 0; // Jika ada setengah bintang

stars.forEach((star, index) => {
  if (index < fullStars) {
    star.classList.add("filled"); // Tambahkan warna untuk bintang penuh
  } else if (index === fullStars && halfStar) {
    star.style.background = `linear-gradient(to right, gold 50%, #ccc 50%)`; // Setengah bintang
    star.style.webkitBackgroundClip = "text";
    star.style.webkitTextFillColor = "transparent";
  }
});