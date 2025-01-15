<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Things To Do in Viet Nam</title>
    <link rel="stylesheet" href="../city-list.css">
</head>
<body>
    <?php include '../component/header.php'; ?>

    <main>
        <div class="page-header">
            <h1>Things To Do In Viet Nam</h1>
            <div class="sort-container">
                <span>Sort by:</span>
                <select>
                    <option>Popularity</option>
                </select>
            </div>
        </div>

        <div class="main-content">
            <section class="filters">
             
                <div class="filter-section">
                    <h3>Availability</h3>
                    <div class="date-range">
                        <div class="date-input">
                            <label>From</label>
                            <input type="date">
                        </div>
                        <div class="date-input">
                            <label>To</label>
                            <input type="date">
                        </div>
                        <button class="check-availability">Check availability</button>
                    </div>
                </div>
                <div class="filter-section">
                    <h3>Target</h3>
                    <label><input type="checkbox"> Less 5m</label>
                    <label><input type="checkbox"> 5m-10m</label>
                    <label><input type="checkbox"> 10-20m</label>
                    <label><input type="checkbox"> More 20m</label>

                </div>
           
                <div class="filter-section">
                    <h3>Desparture</h3>
                    <select >
                    <option>All</option>

                        <option>Ha Long Bay</option>
                        <option>Hoi An Ancient Town</option>
                        <option>Da Lat</option>
                        <option>Sapa</option>
                        <option>Ha Giang</option>
                        <option>Phu Quoc Island</option>
                        <option>Ho Chi Minh City</option>
                    </select>
                </div>

                <div class="filter-section">
                    <h3>Destination</h3>
                    <select >
                    <option>All</option>
                        <option>Ha Long Bay</option>
                        <option>Hoi An Ancient Town</option>
                        <option>Da Lat</option>
                        <option>Sapa</option>
                        <option>Ha Giang</option>
                        <option>Phu Quoc Island</option>
                        <option>Ho Chi Minh City</option>
                    </select>
                </div>
                <div class="filter-section">
                <h3>Tour Categories</h3>

                    <div class="tour-categories">
                    <button>Luxury</button>
                    <button>Standard</button>
                    <button>Budget</button>
                    <button>Best Price</button>
                    </div>
                   
                </div>


               
            </section>

            <section class="tours-list">
                <div class="tour-card">
                    <img src="../img/HaGiang/haGiangBG.jpg" alt="HG">
                    <div class="tour-info">
                        <div class="tour-info-content">
                            <span class="tag">Most Popular</span>
                            <div class="rating">★★★★★ <span>(245 reviews)</span></div>
                            <h3>Westminster to Greenwich River Thames</h3>
                            <div class="tour-details">
                                <span>○ 2.5 hours</span>
                                <span>○ Transport freely</span>
                                <span>○ Family Plan</span>
                            </div>
                        </div>
                        
                        <div class="price">$35.00</div>
                    </div>
                </div>
                <!-- Additional tour cards -->
                <div class="tour-card">
                    <img src="../img/HaGiang/haGiangBG.jpg" alt="HG">
                    <div class="tour-info">
                        <div class="tour-info-content">
                            <span class="tag">Most Popular</span>
                            <div class="rating">★★★★★ <span>(245 reviews)</span></div>
                            <h3>Westminster to Greenwich River Thames</h3>
                            <div class="tour-details">
                                <span>○ 2.5 hours</span>
                                <span>○ Transport freely</span>
                                <span>○ Family Plan</span>
                            </div>
                        </div>
                        
                        <div class="price">$35.00</div>
                    </div>
                </div>
                <div class="tour-card">
                    <img src="../img/HaGiang/haGiangBG.jpg" alt="HG">
                    <div class="tour-info">
                        <div class="tour-info-content">
                            <span class="tag">Most Popular</span>
                            <div class="rating">★★★★★ <span>(245 reviews)</span></div>
                            <h3>Westminster to Greenwich River Thames</h3>
                            <div class="tour-details">
                                <span>○ 2.5 hours</span>
                                <span>○ Transport freely</span>
                                <span>○ Family Plan</span>
                            </div>
                        </div>
                        
                        <div class="price">$35.00</div>
                    </div>
                </div>
                <div class="tour-card">
                    <img src="../img/HaGiang/haGiangBG.jpg" alt="HG">
                    <div class="tour-info">
                        <div class="tour-info-content">
                            <span class="tag">Most Popular</span>
                            <div class="rating">★★★★★ <span>(245 reviews)</span></div>
                            <h3>Westminster to Greenwich River Thames</h3>
                            <div class="tour-details">
                                <span>○ 2.5 hours</span>
                                <span>○ Transport freely</span>
                                <span>○ Family Plan</span>
                            </div>
                        </div>
                        
                        <div class="price">$35.00</div>
                    </div>
                </div>
                <div class="tour-card">
                    <img src="../img/HaGiang/haGiangBG.jpg" alt="HG">
                    <div class="tour-info">
                        <div class="tour-info-content">
                            <span class="tag">Most Popular</span>
                            <div class="rating">★★★★★ <span>(245 reviews)</span></div>
                            <h3>Westminster to Greenwich River Thames</h3>
                            <div class="tour-details">
                                <span>○ 2.5 hours</span>
                                <span>○ Transport freely</span>
                                <span>○ Family Plan</span>
                            </div>
                        </div>
                        
                        <div class="price">$35.00</div>
                    </div>
                </div>
                <div class="tour-card">
                    <img src="../img/HaGiang/haGiangBG.jpg" alt="HG">
                    <div class="tour-info">
                        <div class="tour-info-content">
                            <span class="tag">Most Popular</span>
                            <div class="rating">★★★★★ <span>(245 reviews)</span></div>
                            <h3>Westminster to Greenwich River Thames</h3>
                            <div class="tour-details">
                                <span>○ 2.5 hours</span>
                                <span>○ Transport freely</span>
                                <span>○ Family Plan</span>
                            </div>
                        </div>
                        
                        <div class="price">$35.00</div>
                    </div>
                </div>
                <div class="tour-card">
                    <img src="../img/HaGiang/haGiangBG.jpg" alt="HG">
                    <div class="tour-info">
                        <div class="tour-info-content">
                            <span class="tag">Most Popular</span>
                            <div class="rating">★★★★★ <span>(245 reviews)</span></div>
                            <h3>Westminster to Greenwich River Thames</h3>
                            <div class="tour-details">
                                <span>○ 2.5 hours</span>
                                <span>○ Transport freely</span>
                                <span>○ Family Plan</span>
                            </div>
                        </div>
                        
                        <div class="price">$35.00</div>
                    </div>
                </div>
            </section>
        </div>

        <!-- <section class="outside-city">
            <h2>Outside The City Specials</h2>
            <div class="carousel">
                <button class="prev">❮</button>
                <div class="carousel-items">
                     Carousel items
                </div>
                <button class="next">❯</button>
            </div>
        </section> -->

       
    </main>

    <?php include '../component/footer.php'; ?>
    
    <script src="../js/city-list.js"></script>
</body>
</html>