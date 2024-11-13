// Wait for the DOM to load before executing the script
document.addEventListener("DOMContentLoaded", function () {
  const navbar = document.querySelector(".navbar");
  const logo = document.querySelector(".logo");

  window.addEventListener("scroll", function () {
    // Scroll detection: when the scroll position is greater than 100px, change navbar style
    if (window.scrollY > 100) {
      navbar.classList.add("solid");
      navbar.classList.remove("transparent");
      logo.src = "assets/images/Main_Logo_Col.png"; // Change to the colored logo
    } else {
      navbar.classList.add("transparent");
      navbar.classList.remove("solid");
      logo.src = "assets/images/Main_Logo.png"; // Change back to the original logo
    }
  });
});
