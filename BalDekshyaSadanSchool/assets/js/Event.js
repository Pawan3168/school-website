// Get activity cards and pagination elements
const cards = document.querySelectorAll(".activity-card");
const nextBtn = document.querySelector(".next");
const prevBtn = document.querySelector(".prev");
const pageInfo = document.querySelector(".page-info");

let currentPage = 1;
const cardsPerPage = 6; // Number of cards per page
const totalPages = Math.ceil(cards.length / cardsPerPage); // Total number of pages

// Function to display the current page's cards
function showPage(page) {
  const start = (page - 1) * cardsPerPage;
  const end = start + cardsPerPage;

  // Hide all cards, then show only the ones for the current page
  cards.forEach((card, index) => {
    card.style.display = index >= start && index < end ? "flex" : "none";
  });

  // Update the page info
  pageInfo.textContent = `Page ${page} of ${totalPages}`;

  // Enable/disable buttons based on the page
  prevBtn.style.visibility = page === 1 ? "hidden" : "visible";
  nextBtn.style.visibility = page === totalPages ? "hidden" : "visible";
}

// Event listeners for next and previous buttons
nextBtn.addEventListener("click", () => {
  if (currentPage < totalPages) {
    currentPage++;
    showPage(currentPage);
  }
});

prevBtn.addEventListener("click", () => {
  if (currentPage > 1) {
    currentPage--;
    showPage(currentPage);
  }
});

// Initialize the first page view
showPage(currentPage);
