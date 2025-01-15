// Sample data
const tours = [
  {
    id: 1,
    title: "Westminster to Greenwich River Thames",
    duration: "2.5 hours",
    transport: "Transport freely",
    group: "Family Plan",
    rating: 4.5,
    reviews: 245,
    price: 35.0,
    image: "/api/placeholder/400/300",
  },
  // Add more tour data as needed
];

// Initialize page
document.addEventListener("DOMContentLoaded", () => {
  renderTours();
  initializeFilters();
});

// Function to create city cards
function createCityCards(containerSelector) {
  const cityCardsContainer = document.querySelector(containerSelector);
  cities.forEach((city) => {
    const card = document.createElement("div");
    card.className = "city-card";
    card.innerHTML = `
                        <img src="${city.image}" alt="${city.name}">
                        <div class="city-card-content">
                            <h3>${city.name}</h3>
                            <p>⭐ ${city.rating} | ${city.duration}</p>
                            <p class="price">From ${city.price}</p>
                        </div>
                    `;
    cityCardsContainer.appendChild(card);
  });
}
// Render tour cards
function renderTours() {
  const toursList = document.querySelector(".tours-list");
  toursList.innerHTML = tours
    .map(
      (tour) => `
        <div class="tour-card">
            <img src="${tour.image}" alt="${tour.title}" class="tour-image">
            <div class="tour-info">
                <h3 class="tour-title">${tour.title}</h3>
                <div class="tour-rating">
                    ${"★".repeat(Math.floor(tour.rating))}${
        tour.rating % 1 ? "½" : ""
      }
                    <span class="review-count">(${tour.reviews} reviews)</span>
                </div>
                <div class="tour-details">
                    <span>○ ${tour.duration}</span>
                    <span>○ ${tour.transport}</span>
                    <span>○ ${tour.group}</span>
                </div>
                <div class="tour-price">$${tour.price.toFixed(2)}</div>
            </div>
        </div>
    `
    )
    .join("");
}

// Initialize filters
function initializeFilters() {
  const filters = document.querySelectorAll('input[type="checkbox"]');
  filters.forEach((filter) => {
    filter.addEventListener("change", () => {
      // Implement filtering logic
      console.log("Filter changed:", filter.parentElement.textContent.trim());
    });
  });

  const sortSelect = document.querySelector(".sort-by select");
  sortSelect.addEventListener("change", () => {
    // Implement sorting logic
    console.log("Sort by:", sortSelect.value);
  });
}

// Handle date changes
const dateInputs = document.querySelectorAll('input[type="date"]');
dateInputs.forEach((input) => {
  input.addEventListener("change", () => {
    // Implement date filtering logic
    console.log("Date changed:", input.value);
  });
});

// Initialize carousel functionality
function initializeCarousel() {
  // Implement carousel logic here
}

// Initialize lazy loading for gallery images
function initializeLazyLoading() {
  const images = document.querySelectorAll("img[data-src]");
  const imageObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const img = entry.target;
        img.src = img.dataset.src;
        img.removeAttribute("data-src");
        observer.unobserve(img);
      }
    });
  });

  images.forEach((img) => imageObserver.observe(img));
}
