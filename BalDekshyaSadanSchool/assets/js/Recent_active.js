let currentIndex = 0;
const visibleCards = 4; // Number of cards visible at once

function moveSlide(direction) {
  const slider = document.querySelector(".slider");
  const cards = document.querySelectorAll(".card");
  const totalCards = cards.length;

  // Calculate the new index
  currentIndex += direction;

  // Loop back to the beginning   or end if needed
  if (currentIndex < 0) {
    currentIndex = totalCards - visibleCards; // Show last cards
  } else if (currentIndex > totalCards - visibleCards) {
    currentIndex = 0; // Show first cards
  }

  // Calculate the offset for the slider
  const offset = -currentIndex * (100 / visibleCards);
  slider.style.transform = `translateX(${offset}%)`;
}

// Automatically rotate cards every few seconds
setInterval(() => {
  moveSlide(1); // Move to the next card
}, 5000); // Change interval as desired

document.addEventListener("DOMContentLoaded", function () {
  const headings = document.querySelectorAll(".intro-animate");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible"); // Add 'visible' class when in view
          observer.unobserve(entry.target); // Stop observing after animation
        }
      });
    },
    { threshold: 0.1 }
  ); // Trigger when 10% of the heading is visible

  headings.forEach((heading) => observer.observe(heading));

  // Observer for cards to trigger animation on scroll
  const cardObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1 }
  );

  document.querySelectorAll(".card").forEach((card) => {
    cardObserver.observe(card);
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const headings = document.querySelectorAll(".intro-animate");
  const cards = document.querySelectorAll(".card");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible"); // Add 'visible' class when in view
          observer.unobserve(entry.target); // Stop observing after animation
        }
      });
    },
    { threshold: 0.1 }
  ); // Trigger when 10% of the heading is visible

  headings.forEach((heading) => observer.observe(heading)); // Observe each heading
  cards.forEach((card) => observer.observe(card)); // Observe each card
});
