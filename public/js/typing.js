document.addEventListener("DOMContentLoaded", () => {
    const homeSection = document.querySelector("#home");
    const h2Element = homeSection.querySelector("h2");
    const observerOptions = {
      root: null,
      rootMargin: "0px",
      threshold: 0.5, // Trigger when 50% of the section is in view
    };
  
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // Reset typing animation by re-adding the class
          h2Element.classList.remove("typing-effect");
          void h2Element.offsetWidth; // Trigger reflow
          h2Element.classList.add("typing-effect");
        }
      });
    }, observerOptions);
  
    observer.observe(homeSection);
  });
  