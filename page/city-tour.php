<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vintage Double Decker Bus Tour & Thames River Cruise</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        html {
  scroll-behavior: smooth;
}

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: #333;
            padding-top: 70px;
        }
        .container {
            margin-top: 200px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
            padding-top:50px;
        }
        nav{
            background-color: #fff;
            position: fixed;
            display: flex;
            gap: 20px;
            margin: 20px 0 30px 0;
            z-index: 1000;
            height: 30px;
            width: 100%;
        }

        nav a {
            color:rgb(0, 0, 0);
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
         nav a:hover {
            color: #00b894;
        }
        nav a::after {
  content: "/";
  margin-left: 10px;
}

nav a:last-child::after {
  content: ""; /* Xóa dấu / sau link cuối cùng */
}
nav a.active {
    color: #00b894; /* Highlight active menu item */
}

        h1 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: #2d3436;
        }

        /* Image Gallery */
        .gallery {
            position: relative;
            margin-bottom: 30px;
            max-height: 400px;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .main-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }

        .main-image:hover {
            transform: scale(1.02);
        }

        .thumbnail-container {
            position: absolute;
            bottom: 20px;
            left: 20px;
            display: flex;
            gap: 10px;
            z-index: 2;
        }

        .thumbnail {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid rgba(255,255,255,0.8);
        }

        .thumbnail:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        /* Content Grid with Sticky Booking */
        .add-info{
            margin: 30px 0;
        }
        .content-grid {
            display: grid;
            grid-template-columns: calc(73% - 15px) calc(27% - 15px);
            gap: 30px;
            position: relative;
            margin-top: -80px;
        }

        /* Booking Card - Sticky */
        .booking-card {
            background: white;
            padding: 25px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
            position: sticky;
            height: fit-content;
            max-height: calc(100vh - 40px);
            overflow-y: auto;
            transition: transform 0.3s ease;
            z-index: 10;
            top: calc(70px + 50px);
        }

        .booking-card:hover {
            transform: translateY(-5px);
        }

        .price {
            font-size: 32px;
            font-weight: bold;
            color: #2d3436;
            margin-bottom: 25px;
            display: flex;
            align-items: baseline;
        }

       
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #636e72;
            font-weight: 500;
            font-size: 0.95rem;
        }

        .form-group input, 
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 2px solid #dfe6e9;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input:focus, 
        .form-group select:focus {
            border-color: #00b894;
            outline: none;
            box-shadow: 0 0 0 3px rgba(0,184,148,0.1);
        }

        .book-button {
            width: 100%;
            padding: 14px;
            background-color: #00b894;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 12px;
            transition: all 0.3s ease;
        }

        .book-button:hover {
            background-color: #00a382;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,184,148,0.2);
        }

        .book-button.secondary {
            background-color: #fff;
            color: #00b894;
            border: 2px solid #00b894;
        }

        .book-button.secondary:hover {
            background-color: #f0fff9;
        }

        /* Tour Details div */
        .tour-details {
            background: white;
            padding: 25px;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 12px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .feature-icon {
            color: #00b894;
            font-size: 1.5rem;
        }
        .fa-stack{
            font-size: 1rem;

        }
        .feature-item div {
            flex: 1;
        }

        .feature-item small {
            color: #636e72;
            font-size: 0.85rem;
        }

        .feature-item p {
            color: #2d3436;
            font-weight: 500;
            margin-top: 4px;
        }

        @media (max-width: 768px) {
            .content-grid {
                grid-template-columns: 1fr;
                margin-top: 0;
            }
            
            .booking-card {
                position: relative;
                top: 0;
                margin-bottom: 20px;
            }
            
            .gallery {
                max-height: 300px;
            }
            
            .main-image {
                height: 300px;
            }
            
            .thumbnail-container {
                display: none;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }
        }
        .related-div {
    margin-top: 40px;
    padding: 30px;
    background: white;
    border-radius: 16px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

.related-div h2 {
    margin-bottom: 20px;
    color: #2d3436;
}

.related-tours {
    display: flex;
    gap: 20px;
    overflow-x: auto;
    padding: 10px 0;
    scrollbar-width: thin;
    scrollbar-color: #00b894 #f8f9fa;
}

.related-tours::-webkit-scrollbar {
    height: 8px;
}

.related-tours::-webkit-scrollbar-track {
    background: #f8f9fa;
    border-radius: 4px;
}

.related-tours::-webkit-scrollbar-thumb {
    background: #00b894;
    border-radius: 4px;
}

.tour-card {
    flex: 0 0 300px;
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: transform 0.3s ease;
}

.tour-card:hover {
    transform: translateY(-5px);
}

.tour-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.tour-card-content {
    padding: 20px;
}

.tour-card-content h3 {
    margin-bottom: 10px;
    color: #2d3436;
    font-size: 1.1rem;
}

.stars {
    color: #ffd700;
    margin-bottom: 10px;
}

.tour-card-content p {
    color: #00b894;
    font-weight: 600;
}
/* Reviews div Styling */

.review-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.review-card {
    background: #f8f9fa;
    padding: 25px;
    border-radius: 12px;
    transition: transform 0.3s ease;
    position: relative;
}

.review-card:hover {
    transform: translateY(-5px);
}

.review-card::before {
    content: '"';
    position: absolute;
    top: 10px;
    left: 15px;
    font-size: 4em;
    color:#00b894;
    opacity: 0.1;
    font-family: Georgia, serif;
}

.review-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
}

.review-avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: #e0e0e0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5em;
    color: #fff;
    background: linear-gradient(45deg, #00b894, #00cec9);
}

.review-info {
    flex: 1;
}

.reviewer-name {
    font-weight: 600;
    color: #2d3436;
    margin-bottom: 4px;
}

.review-date {
    font-size: 0.9em;
    color: #636e72;
}

.stars {
    display: flex;
    gap: 2px;
    margin: 12px 0;
}

.star {
    color: #ffd700;
    font-size: 1.1em;
}

.star.empty {
    color: #dfe6e9;
}

.review-text {
    color: #2d3436;
    line-height: 1.6;
    margin-top: 15px;
}

.review-stats {
    display: flex;
    gap: 20px;
    padding: 20px;
    border-radius: 12px;
    margin-bottom: 25px;
}

.stat-item {
    background-color: rgb(254, 228, 76);
    flex: 1;
    text-align: center;
   
    border-radius: 50%;
    padding: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}



.stat-value {
    font-size: 1.8em;
    font-weight: bold;
    color: #2d3436;
    margin-bottom: 5px;
}

.stat-label {
    color: #636e72;
    font-size: 0.9em;
}

.review-filters {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.filter-tag {
    padding: 8px 16px;
    background: #fff;
    border: 2px solid #00b894;
    border-radius: 20px;
    color: #00b894;
    font-size: 0.9em;
    cursor: pointer;
    transition: all 0.3s ease;
}

.filter-tag:hover,
.filter-tag.active {
    background: #00b894;
    color: white;
}
  /* Tổng thể khung mô tả */
.tour-description {
    background-color: #ffffff;
    border: 1px solid #e0e0e0;
    border-radius: 12px;
    padding: 30px 40px;
    max-width: 800px;
    margin: 40px auto;
    font-family: 'Inter', sans-serif;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

/* Tiêu đề */
.tour-title {
    font-size: 28px;
    color: #333333;
    margin-bottom: 20px;
    text-align: left;
    position: relative;
    font-weight: 600;
    border-bottom: 2px solid #ff6b6b;
}

/* Nội dung đoạn văn */
.tour-description p {
    font-size: 16px;
    line-height: 1.7;
    color: #555555;
    margin-bottom: 18px;
}

/* Hiệu ứng hover nhẹ */
.tour-description p:hover {
    background-color: #fafafa;
    padding-left: 10px;
    border-left: 3px solid #ff6b6b;
    transition: all 0.3s ease;
}


/* Responsive */
@media (max-width: 768px) {
    .tour-description {
        padding: 20px;
    }

    .tour-title {
        font-size: 24px;
    }

    .tour-description p {
        font-size: 15px;
    }
}

#about-services img{
    width: 100%;
    height: 100%;
    border-radius: 12px;
    margin-top: 20px;
}

/* lịch trình */

        

        .day {
            padding: 15px;
            border: 1px solid #ddd;
            margin-bottom: 15px;
            cursor: pointer;
            border-radius: 8px;
            background-color: #f9f9f9;
            transition: background-color 0.3s, transform 0.3s ease;
        }
       

.day i {
    float: right;
    font-size: 18px;
    color: #555;    
    transition: transform 0.3s ease;
}

.day.active i {
    transform: rotate(180deg);
}


        .day:hover {
            background-color: #eef2f7;
            transform: translateY(-3px);
        }

        .day strong {
            font-size: 18px;
            color:rgb(0, 0, 0);
        }

        .details {
            display: none;
            padding: 15px;
            margin-top: 10px;
            background-color: #f1f1f1;
            border-left: 4px solid #ff6b6b;
            border-radius: 5px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .details p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }

        .day::before {
            content: "📅 ";
            font-size: 22px;
            margin-right: 10px;
        }
     
        .add-info {
    margin: 50px 0;
    font-size: 48px;  
    color: #333333;  
    text-align: center;
    position: relative;
    font-weight: 700;  
    font-family: 'Roboto', sans-serif; 
    letter-spacing: 1.5px;  
}


/* Optional: Add an underline with a soft gradient effect */
.add-info:before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 50%;
    height: 5px;
    background: linear-gradient(135deg,rgb(253, 120, 97),rgb(247, 219, 61));
    border-radius: 2px;
}

    </style>
</head>
<body>
<?php include '../component/header.php'; ?>

<nav>
    <a href="#overview">Overviews</a>
    <a href="#itinerary-container">Schedule</a>
    <a href="#tour-description">Tour Description</a>
    <a href="#about-services">About Services</a>
    <a href="#reviews">Reviews</a>
</nav>
    <div id="overview" class="container">
    
        <h1>Vintage Double Decker Bus Tour & Thames River Cruise</h1>
        
        <!-- Image Gallery -->
        <div class="gallery">
            <img src="../img/HaGiang/haGiangBG.jpg" alt="Tour" class="main-image">
            <div class="thumbnail-container">
                <img src="../img/HaGiang/haGiangBG.jpg" alt="Thumbnail 1" class="thumbnail">
                <img src="../img/HaGiang/haGiangBG.jpg" alt="Thumbnail 2" class="thumbnail">
                <img src="../img/HaGiang/haGiangBG.jpg" alt="Thumbnail 3" class="thumbnail">
                <img src="../img/HaGiang/haGiangBG.jpg" alt="Thumbnail 4" class="thumbnail">
            </div>
        </div>

        <div class="content-grid">
            <!-- Left Column -->
            <div class="tour-details">
                <h2 class="add-info ">Tour details</h2>

                <div class="features-grid">
                    <div class="feature-item">
                        <i class="fa-regular fa-clock feature-icon"></i>
                        <div>
                            <small>Tour Duration</small>
                            <p>3 hours</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-users feature-icon"></i>
                        <div>
                            <small>Group Size</small>
                            <p>Up to 20 people</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-map feature-icon"></i>
                        <div>
                            <small>Destination</small>
                            <p>Lũng Cú, Đồng Văn...</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-utensils feature-icon"></i>
                        <div>
                            <small>Foods</small>
                            <p>All food</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-car feature-icon"></i>
                        <div>
                            <small>Transport</small>
                            <p>Double Decker Bus</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <span class="fa-stack fa-lg feature-icon">
                            <i class="fa fa-ticket fa-stack-2x"></i>
                            <i class="fa fa-percent fa-stack-1x fa-inverse"></i>
                        </span>

                        <div>
                            <small>Discounts</small>
                            <p>10%</p>
                        </div>
                    </div>
                </div>
                <section id="itinerary-container" class=" tour-description">
                    <h2 class="tour-title">Schedule</h2>
                    <div class="day" onclick="toggleDetails('day1')">
                        <strong>Day 1: Hà Nội - Tuyên Quang - Hà Giang</strong>
                        <i class="fa fa-arrow-down"></i>

                        <div class="details" id="day1">
                            <p>06h30 Xe và hướng dẫn viên đón quý khách tại Vietravel Hanoi - Số 3 Hai Bà Trưng, Hoàn Kiếm, Hà Nội khởi hành đi Hà Giang, trên đường dừng tham quan:</p>
                            <p>Đền Thác Cái - Được xây dựng từ thế kỷ XV, ngôi đền cổ kính... Quý khách dùng cơm tối và nhận phòng khách sạn nghỉ ngơi.</p>
                            <p>Ngủ đêm tại TP. Hà Giang</p>
                        </div>
                    </div>

                    <div class="day" onclick="toggleDetails('day2')">
                        <strong>Day 2: Hà Giang - Lũng Cú - Đồng Văn</strong>
                        <i class="fa fa-arrow-down"></i>

                        <div class="details" id="day2">
                            <p>Quý khách trả phòng, ăn sáng. Xe và hướng dẫn viên đưa Quý khách đi thị trấn Đồng Văn tham quan:</p>
                            <p>Cổng trời Quản Bạ, Phố Cáo, Làng văn hóa Lũng Cẩm... Quý khách có thể dừng chân chụp hình những dãy núi đá chập trùng.</p>
                            <p>Ngủ đêm tại Đồng Văn</p>
                        </div>
                    </div>

                    <div class="day" onclick="toggleDetails('day3')">
                        <strong>Day 3: Đồng Văn - Mã Pí Lèng - Nho Quế - Hà Giang</strong>
                        <i class="fa fa-arrow-down"></i>

                        <div class="details" id="day3">
                            <p>Khám phá Mã Pí Lèng, Nho Quế, các cảnh quan đặc sắc của vùng cao nguyên núi đá.</p>
                            <p>Ngủ đêm tại Hà Giang</p>
                        </div>
                    </div>

                    <div class="day" onclick="toggleDetails('day4')">
                        <strong>Day 4: Hà Giang - Hà Nội</strong>
                        <i class="fa fa-arrow-down"></i>

                        <div class="details" id="day4">
                            <p>Khởi hành về Hà Nội, kết thúc hành trình.</p>
                        </div>
                    </div>
                </section>
                <section id="tour-description" class="tour-description">
                        <h2 class="tour-title">Tour Description</h2>
                        <p>See the highlights of London via 2 classic modes of transport on this half-day adventure. First, enjoy great views of Westminster Abbey, the Houses of Parliament, and the London Eye on a vintage double-decker bus.</p>

                        <p>Visit St. Paul’s Cathedral, Sir Christopher Wren’s masterpiece, and explore the historic Tower of London, home to the Crown Jewels and the famous Beefeaters.</p>

                        <p>Cruise along the River Thames, passing Shakespeare’s Globe and London Bridge, before heading to Buckingham Palace to witness the iconic Changing of the Guard ceremony.</p>
                </section>         
                <section id="about-services" class="tour-description">
                    <h2 class="tour-title">About Services</h2>
                    <p>Nếu bạn đang tìm kiếm một chuyến đi khám phá hết những hòn đảo xinh đẹp tại Quy Nhơn, tham khảo ngay tour Quy Nhơn vi vu Kỳ Co - Eo Gió, Hòn Khô và nhiều nơi khác nhé!

                    Tour khởi hành từ Quy Nhơn sẽ đưa bạn đến với những địa điểm nức tiếng:

                    Bãi Biển Kỳ Co: nơi được mệnh danh là thiên đường Maldives của Việt Nam với vẻ đẹp hoang sơ, hữu tình của những mỏm đá hay làn nước trong xanh, bãi cát trắng xoá
                    Ghềnh đá Eo Gió: nơi ngắm hoàng hôn đẹp nhất Việt Nam. Đặc biệt, bạn có thể thu hết những cảnh đẹp của biển đảo vào tầm mắt tại Eo Gió
                    Hòn Khô, làng chài Nhơn Hải: tận hưởng cảm giác yên bình với mùi gió biển thấp thoáng trong từng hơi thở tại Làng Chài Nhơn Hải và thưởng thức các món ăn hải sản tươi ngon. Check-in con đường xuyên biển độc đáo tại Hòn Khô</p>
                    <img src="../img/HaGiang/haGiangBG.jpg" alt="">
                </section>
                <section id="reviews" class="tour-description">
                    <h2 class="tour-title">Customer Reviews</h2>
                    <div class="review-stats">
                        <div class="stat-item">
                            <div class="stat-value">4.8</div>
                            <div class="stat-label">Average Rating</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">127</div>
                            <div class="stat-label">Total Reviews</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">92%</div>
                            <div class="stat-label">Would Recommend</div>
                        </div>
                    </div>

                    <div class="review-filters">
                        <div class="filter-tag active">All Reviews</div>
                        <div class="filter-tag">5 Star</div>
                        <div class="filter-tag">4 Star</div>
                        <div class="filter-tag">3 Star</div>
                        <div class="filter-tag">With Photos</div>
                    </div>

                    <div class="review-grid">
                        <div class="review-card">
                            <div class="review-header">
                                <div class="review-avatar">J</div>
                                <div class="review-info">
                                    <div class="reviewer-name">John Doe</div>
                                    <div class="review-date">2 days ago</div>
                                </div>
                            </div>
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="review-text">"Amazing experience! The tour guide was very knowledgeable and engaging. The double-decker bus gave us a unique perspective of London's landmarks."</p>
                        </div>

                        <div class="review-card">
                            <div class="review-header">
                                <div class="review-avatar">S</div>
                                <div class="review-info">
                                    <div class="reviewer-name">Sarah Smith</div>
                                    <div class="review-date">1 week ago</div>
                                </div>
                            </div>
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star empty">★</span>
                            </div>
                            <p class="review-text">"Great tour overall! The Thames cruise was a highlight. Would have loved more time at each stop, but still highly recommend."</p>
                        </div>
                    </div>
                </section >
                
                
            </div>
     
        
            <!-- Right Column - Booking -->
       
            <div class="booking-card">
                    <div class="price">$780.90</div>
                    <form id="booking-form">
                        <div class="form-group">
                            <label>Select Date</label>
                            <input type="date" required>
                        </div>
                        <div class="form-group">
                            <label>Number of People</label>
                            <select required>
                                <option value="1">1 Person</option>
                                <option value="2">2 People</option>
                                <option value="3">3 People</option>
                                <option value="4">4 People</option>
                            </select>
                        </div>
                        <button type="submit" class="book-button">Book Now</button>
                        <button type="button" class="book-button" style="background-color: #fff; color: #00b894; border: 1px solid #00b894;">
                            Save for later
                        </button>
                    </form>
            </div>
        </div>
        <!-- Related Tours -->
        <div class="related-div">
                <h2>Related Tours in London</h2>
                <div class="related-tours">
                    <div class="tour-card">
                        <img src="../img/HaGiang/haGiangBG.jpg" alt="Related Tour 1">
                        <div class="tour-card-content">
                            <h3>London City Tour</h3>
                            <div class="stars">★★★★☆</div>
                            <p>From $69.90</p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <img src="../img/HaGiang/haGiangBG.jpg" alt="Related Tour 2">
                        <div class="tour-card-content">
                            <h3>Thames Night Cruise</h3>
                            <div class="stars">★★★★★</div>
                            <p>From $89.90</p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <img src="../img/HaGiang/haGiangBG.jpg" alt="Related Tour 3">
                        <div class="tour-card-content">
                            <h3>Historical Walking Tour</h3>
                            <div class="stars">★★★★★</div>
                            <p>From $49.90</p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <img src="../img/HaGiang/haGiangBG.jpg" alt="Related Tour 4">
                        <div class="tour-card-content">
                            <h3>Royal Palace Tour</h3>
                            <div class="stars">★★★★☆</div>
                            <p>From $79.90</p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <img src="../img/HaGiang/haGiangBG.jpg" alt="Related Tour 3">
                        <div class="tour-card-content">
                            <h3>Historical Walking Tour</h3>
                            <div class="stars">★★★★★</div>
                            <p>From $49.90</p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <img src="../img/HaGiang/haGiangBG.jpg" alt="Related Tour 3">
                        <div class="tour-card-content">
                            <h3>Historical Walking Tour</h3>
                            <div class="stars">★★★★★</div>
                            <p>From $49.90</p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <img src="../img/HaGiang/haGiangBG.jpg" alt="Related Tour 3">
                        <div class="tour-card-content">
                            <h3>Historical Walking Tour</h3>
                            <div class="stars">★★★★★</div>
                            <p>From $49.90</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php include '../component/footer.php'; ?>

    <script>
        document.querySelectorAll('nav a').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

    function toggleDetails(dayId) {
        var details = document.getElementById(dayId);
        if (details.style.display === "block") {
            details.style.display = "none";
        } else {
            details.style.display = "block";
        }
    }
    // Image Gallery functionality
    const mainImage = document.querySelector('.main-image');
        const thumbnails = document.querySelectorAll('.thumbnail');

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', () => {
                const newSrc = thumbnail.src;
                const oldSrc = mainImage.src;
                mainImage.src = newSrc;
                thumbnail.src = oldSrc;
            });
        });

        // Booking form submission
        const bookingForm = document.getElementById('booking-form');
        bookingForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Booking submitted! This is a demo alert.');
        });

        // Initialize current date as minimum date for booking
        const dateInput = document.querySelector('input[type="date"]');
        const today = new Date().toISOString().split('T')[0];
        dateInput.min = today;
//rotate icon 
        function toggleDetails(dayId) {
    const details = document.getElementById(dayId);
    const day = details.parentElement;

    details.style.display = details.style.display === 'block' ? 'none' : 'block';
    day.classList.toggle('active');
}

document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('nav ul li a');

    window.addEventListener('scroll', function() {
        let current = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            if (pageYOffset >= sectionTop - 60) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').includes(current)) {
                link.classList.add('active');
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('nav a');

    window.addEventListener('scroll', function() {
        let current = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            if (pageYOffset >= sectionTop - 60) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').includes(current)) {
                link.classList.add('active');
            }
        });
    });
});
   </script>

</body>
</html>
