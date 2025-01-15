// Sample data for city cards
const cities = [
    {
      name: "Ha Giang",
      image: "../img/VN/hagiang.jpg",
      price: "$150",
      rating: 4.5,
      duration: "3 Days",
    },
    {
      name: "Northern Lights",
      image: "../img/VN/hagiang.jpg",
      price: "$350",
      rating: 4.8,
      duration: "5 Days",
    },
    {
      name: "Mountain Trek",
      image: "../img/VN/hagiang.jpg",
      price: "$250",
      rating: 4.6,
      duration: "4 Days",
    },
    {
      name: "Beach Paradise",
      image: "../img/VN/hagiang.jpg",
      price: "$200",
      rating: 4.7,
      duration: "3 Days",
    },
  ];
  // Sample data for stories
  const stories = [
    {
      name: "HaGiang",
      title: "Trốn phố về Hà Giang chạm tay vào mùa đẹp nhất trong năm",
      img: "../img/HaGiang/daCau.jpg",
      author: "Quan",
      content:
        'Aki Lan, cô gái trẻ người Hà Nội chia sẻ rằng, cứ "sơ hở" là cô lại lên Hà Giang để tận hưởng không khí trong lành và khám phá vẻ đẹp hùng vĩ nơi đây. Đầu tháng 12, Lan vừa hoàn thành chuyến đi 4 ngày, 3 đêm đáng nhớ tại vùng đất địa đầu Tổ quốc.',
    },
    {
      name: "HaGiang",

      title: "Trốn phố về Hà Giang chạm tay vào mùa đẹp nhất trong năm",
      img: "../img/HaGiang/daCau.jpg",

      author: "Quan",
      content:
        'Aki Lan, cô gái trẻ người Hà Nội chia sẻ rằng, cứ "sơ hở" là cô lại lên Hà Giang để tận hưởng không khí trong lành và khám phá vẻ đẹp hùng vĩ nơi đây. Đầu tháng 12, Lan vừa hoàn thành chuyến đi 4 ngày, 3 đêm đáng nhớ tại vùng đất địa đầu Tổ quốc.',
    },
    {
      name: "HaGiang",

      title: "Trốn phố về Hà Giang chạm tay vào mùa đẹp nhất trong năm",
      img: "../img/HaGiang/daCau.jpg",

      author: "Quan",
      content:
        'Aki Lan, cô gái trẻ người Hà Nội chia sẻ rằng, cứ "sơ hở" là cô lại lên Hà Giang để tận hưởng không khí trong lành và khám phá vẻ đẹp hùng vĩ nơi đây. Đầu tháng 12, Lan vừa hoàn thành chuyến đi 4 ngày, 3 đêm đáng nhớ tại vùng đất địa đầu Tổ quốc.',
    },
    {
      name: "HaGiang",

      title: "Trốn phố về Hà Giang chạm tay vào mùa đẹp nhất trong năm",
      img: "../img/HaGiang/daCau.jpg",

      author: "Quan",
      content:
        'Aki Lan, cô gái trẻ người Hà Nội chia sẻ rằng, cứ "sơ hở" là cô lại lên Hà Giang để tận hưởng không khí trong lành và khám phá vẻ đẹp hùng vĩ nơi đây. Đầu tháng 12, Lan vừa hoàn thành chuyến đi 4 ngày, 3 đêm đáng nhớ tại vùng đất địa đầu Tổ quốc.',
    },
  ];
  function createStories() {
    const storiesContainer = document.querySelector(".story-cards");
    stories.forEach((story) => {
      const card = document.createElement("div");
      card.className = "story-card";
      card.innerHTML = `<img src='${story.img}' alt='${story.name}'>
<div class='story-card-container'> 
  <span>${story.author}</span>
  <h3>${story.title}</h3>
</div>
`;
      storiesContainer.appendChild(card);
    });
  }

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

  // Function to create gallery
  function createGallery() {
    const gallery = document.querySelector(".gallery");
    for (let i = 0; i < 8; i++) {
      const img = document.createElement("img");
      img.src = `../img/VN/pic${i + 1}.jpg`;
      img.alt = `Gallery Image ${i + 1}`;
      gallery.appendChild(img);
    }
  }

  // Initialize the page
  document.addEventListener("DOMContentLoaded", () => {
    createCityCards(".explore.section .city-cards");
    createCityCards(".featured-destination.section .city-cards");
    createGallery();
    createStories();

    // Add filter button functionality
    const filterButtons = document.querySelectorAll(".filter-btn");
    filterButtons.forEach((button) => {
      button.addEventListener("click", () => {
        filterButtons.forEach((btn) => btn.classList.remove("active"));
        button.classList.add("active");
        // Add filtering logic here
      });
    });
  });