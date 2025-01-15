
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Explorer</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Volkhov&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../home.css" />
  </head>
  <body>
  <div class="header-home">
  <?php include('../component/header.php'); ?>

</div>
<img class="bg" src="../img/bgGT.jpg" alt="bg">
    <div class="search-container">
      <form class="search-form">
        <input type="text" placeholder="Location" />
        <input type="date" placeholder="Date" />
        <select>
          <option value="">Select Category</option>
          <option value="adventure">Adventure</option>
          <option value="culture">Culture</option>
          <option value="nature">Nature</option>
        </select>
        <button type="submit">Search</button>
      </form>
    </div>

    <!-- <section class="explore section">
      <div class="explore-section-container">
        <h2 class="section-title">Explore Popular Cities</h2>
        <p class="slogan">
          Travel is not just about the destination, it's about the journey.
        </p>
        <div class="cities-filter">
          <button class="filter-btn">Moc Chau</button>
          <button class="filter-btn active">Ha Giang</button>
          <button class="filter-btn">Hue</button>
          <button class="filter-btn">Da Nang</button>
          <button class="filter-btn">Hoi An</button>
          <button class="filter-btn">Da Lat</button>
          <button class="filter-btn">Phu Quoc</button>
        </div> -->
        <!-- Explore Section with AOS -->
    <section class="explore section" data-aos="fade-up">
      <div class="explore-section-container">
        <h2 class="section-title">Explore Popular Cities</h2>
        <p class="slogan">Travel is not just about the destination, it's about the journey.</p>
        
        <!-- Swiper for City Filters -->
        <div class="swiper citiesSwiper">
          <div class="swiper-wrapper cities-filter">
            <div class="swiper-slide"><button class="filter-btn">Moc Chau</button></div>
            <div class="swiper-slide"><button class="filter-btn active">Ha Giang</button></div>
            <div class="swiper-slide"><button class="filter-btn">Hue</button></div>
            <div class="swiper-slide"><button class="filter-btn">Da Nang</button></div>
            <div class="swiper-slide"><button class="filter-btn">Hoi An</button></div>
            <div class="swiper-slide"><button class="filter-btn">Da Lat</button></div>
            <div class="swiper-slide"><button class="filter-btn">Phu Quoc</button></div>
          </div>
        </div>

        <div class="HG-BG" data-aos="zoom-in">
          <div class="HG-container">
            <div class="HG-container-text">
              <h2 style="font-size: 50px">Ha Giang</h2>
              <p>
                Ha Giang is famous for the Dong Van stone plateau, a unique
                geological heritage. This place not only has spectacular nature
                but also preserves the unique traditional cultural features of
                ethnic minorities.
              </p>
            </div>
            <div class="HG-container-btn">
              <button>Public Transportations</button>
              <button>Nature & Adventure</button>
              <button>Local Visit</button>
              <button>Business Tours</button>
              <button>Private Transportations</button>
            </div>
          </div>
        </div>
      </div>

      <div class="city-cards">
        <!-- City cards will be populated by JavaScript -->
      </div>
    </section>

    <section class="trending section">
      <div class="trending-container">
        <span class="trending-tag">TRENDING NOW</span>
        <h2>Wilderlife of Ha Giang</h2>
        <div class="location">
          <span>Ha Giang, Viet Nam</span>
          <span>|</span>
          <span class="rating">
            ★★★★★
            <span class="rating-value">4.9</span>
          </span>
          <span class="reviews">(300 reviews)</span>
        </div>
        <p>
          Ha Giang is famous for the Dong Van stone plateau, a unique geological
          heritage. This place not only has spectacular nature but also
          preserves the unique traditional cultural features of ethnic
          minorities.
        </p>
        <div class="action-buttons">
          <button class="book-now">Book Now</button>
          <button class="action-btn">
            <img src="../img/like.png" alt="like" />
          </button>
          <button class="action-btn">
            <img src="../img/share.png" alt="share" />
          </button>
        </div>
      </div>
    </section>
    <section class="featured-destination section">
      <div class="featured-container">
        <h2>featured destination</h2>
        <p>
          The blue sea, the mountains, and the stars in the sky are the language
          of freedom.
        </p>
      </div>

      <div class="city-cards">
        <!-- City cards will be populated by JavaScript -->
      </div>
    </section>
    <section class="app section">
      <div class="app-image">
        <img class="img1" src="../img/Mask Group.png" alt="Mobile App" />
        <img class="img2" src="../img/Mask Group.png" alt="Mobile App" />
      </div>
      <div class="app-content">
        <h2>Smart City Tour Mobile App</h2>
        <p>Download our app for a better experience and exclusive deals.</p>
        <div class="app-buttons">
          <a href="#" class="app-btn">Download for iOS</a>
          <a href="#" class="app-btn">Download for Android</a>
        </div>
      </div>
    </section>

    <section class="gallerys section">
      <h2 class="section-title">From The Gallery</h2>
      <div class="gallery">
        <!-- Gallery images will be populated by JavaScript -->
      </div>
      <button class="view-all-btn">View all</button>
    </section>
    <section class="stories section">
      <h2>Lasted Stories</h2>
      <div class="story-cards">
        <!-- Story cards will be populated by JavaScript -->
      </div>
      <button class="view-all-btn">View all post</button>
    </section>

   <?php include('../component/footer.php'); ?>

   <!-- <script src="../home.js" defer></script> -->
    <!-- Scripts -->
    <!-- jQuery (required for Bootstrap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="../home.js" defer></script>
    
    <!-- Initialize Libraries -->
    <script>
      // Initialize AOS
      AOS.init({
        duration: 1000,
        once: true
      });
      
      // Initialize Swiper
      const citiesSwiper = new Swiper('.citiesSwiper', {
        slidesPerView: 'auto',
        spaceBetween: 15,
        freeMode: true
      });
    </script>

  </body>
</html>
