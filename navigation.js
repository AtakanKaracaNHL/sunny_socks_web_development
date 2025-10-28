document.addEventListener("DOMContentLoaded", () => {
  const hamburger = document.querySelector(".hamburger");
  const lower = document.querySelector(".lower");

  hamburger.addEventListener("click", function() {
    lower.classList.toggle("active");
  });
});
