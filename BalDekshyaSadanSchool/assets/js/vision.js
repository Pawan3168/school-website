document.addEventListener("DOMContentLoaded", function () {
  // Animation for the vision section elements
  const visionElements = document.querySelectorAll(".vision-animate");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible"); // Add 'visible' class when in view
          observer.unobserve(entry.target); // Stop observing after animation
        }
      });
    },
    { threshold: 0.1 } // Trigger when 10% of the element is visible
  );

  visionElements.forEach((element) => observer.observe(element));
});
