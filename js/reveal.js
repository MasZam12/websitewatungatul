document.addEventListener("DOMContentLoaded", function () {
    const reveals = document.querySelectorAll(".reveal");
  
    function checkVisibility() {
      reveals.forEach((reveal) => {
        const rect = reveal.getBoundingClientRect();
        // Jika elemen terlihat di layar, tambahkan kelas 'visible'
        if (rect.top < window.innerHeight && rect.bottom > 0) {
          reveal.classList.add("visible");
        } else {
          reveal.classList.remove("visible"); // Jika elemen keluar dari layar, hapus kelas 'visible'
        }
      });
    }
    
    window.addEventListener("scroll", checkVisibility);
    
    // Panggil fungsi sekali untuk memeriksa elemen yang sudah terlihat saat halaman pertama kali dimuat
    checkVisibility();
  });
  