const modal = document.getElementById("modal");
const modalImagesContainer = document.querySelector(".modal-images");
const closeButton = document.querySelector(".close-btn");
const modalEventTitle = document.querySelector(".modal-event-title");
const lightbox = document.getElementById("lightbox");
const lightboxImg = lightbox.querySelector("img");

let currentLightboxIndex;
let currentEventKey;
let currentAlbumTitle;

// Open modal and display photos
document.querySelectorAll(".card").forEach((card) => {
  card.addEventListener("click", () => {
    const eventKey = card.dataset.event;
    currentAlbumTitle = card.dataset.albumTitle; // Get album title from data attribute
    openModal(eventKey);
  });
});

closeButton.addEventListener("click", closeModal);

function openModal(eventKey) {
  currentEventKey = eventKey; 
  modalEventTitle.textContent = currentAlbumTitle; // Set the album title in the modal
  
  const photos = eventPhotos[eventKey] || [];
  modalImagesContainer.innerHTML = "";

  photos.forEach((photo, index) => {
    const img = document.createElement("img");
    img.src = photo.filename;
    img.alt = photo.caption;
    img.setAttribute("loading", "lazy"); // Lazy load for modal images
    img.addEventListener("click", () => openLightbox(index, eventKey));
    modalImagesContainer.appendChild(img);
  });

  modal.style.display = "flex";
}

function closeModal() {
  modal.style.display = "none";
}

// Lightbox functionality
function openLightbox(index, eventKey) {
  currentLightboxIndex = index;
  lightboxImg.src = eventPhotos[eventKey][index].filename; 
  lightbox.style.display = "flex";
}

function closeLightbox() {
  lightbox.style.display = "none";
}

function changeImage(direction) {
  const photos = eventPhotos[currentEventKey];
  currentLightboxIndex += direction; // Increment index based on direction
  if (currentLightboxIndex < 0) {
    currentLightboxIndex = photos.length - 1; // Wrap around to last photo
  } else if (currentLightboxIndex >= photos.length) {
    currentLightboxIndex = 0; // Wrap around to first photo
  }
  lightboxImg.src = photos[currentLightboxIndex].filename; 
}

// Close lightbox when clicking outside the image
lightbox.addEventListener("click", (event) => {
  if (event.target === lightbox) {
    closeLightbox();
  }
});
