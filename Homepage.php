<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Booking</title>
    <link rel="shortcut icon" href="../asset/logo/logo.webp" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="Home.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">
                <img src="image/logo.png" alt="RentCars Logo">
                <h4>RENTCARS</h4>
            </div>
            <ul class="menu">
                <li><a href="#Home">Home</a></li>
                <li><a href="#CarService">Car & Service</a></li>
                <li><a href="#WhyChooseUs">Why choose us</a></li>
                <li><a href="https://t.me/+Jrdh_IYd0H02NDll"
                    target="_blank"
                    title="Goes to telegram account">Contact Us</a></li>
            </ul>
            <div class="buttons">
                <button class="sign-in"><a href="SignIn.html">Sign in</a></button>
                <a href="SignUp.html"><button class="sign-up" >Sign up</button></a>
            </div>
        </div>
        <div class="phone-menu">
            <li><button>Menu</button></li>
            <div class="dropdown-menu">
                <li><a href="#Home">Home</a></li>
                <li><a href="#CarService">Car & Service</a></li>
                <li><a href="#WhyChooseUs">Why choose us</a></li>
                <li><a href="">Contract Us</a></li>
                <li><a href="SignIn.html">Sign in</a></li>
                <li><a href="si">sign up</a></li>
            </div>
            <div class="drop-buttons">
                <button class="sign-in"  onclick="document.location='http://127.0.0.1:5500/SignIn.html'">Sign in</button>
                <button class="sign-up" onclick="document.location='http://127.0.0.1:5500/SignIn.html'">Sign up</button>
            </div>
        </div>
    </header>

<div class="container">
    <div id="Home">
        <div class="main-content">
            <div class="text-content">
                <h3>Find, book you <br>car now <span class="color">Easy</span></h3>
            
                <p>Get a car wherever and whenever you <br> need it with your devices.</p>
            </div>
            <div class="image-section">
                <img src="image/home.jpg" alt="" class="car-image" width="100%">
            </div>
            
            
        </div>
        
        <!-- Search bar -->
        <div class="search-bar">
            <div class="form">
                <div class="search-field">
                    <i class="fa-solid fa-location-dot"></i>
                    <div class="field-text">
                        <p>Location</p>
                        <select name="choose location" id="input">
                            <option value="">Phnom Penh International Airport</option>
                            <option value="">Phnom Penh</option>
                        </select>
                    </div>
                    
                </div>
                <div class="search-field">
                    <i class="fa-regular fa-calendar-days"></i>
                    <div class="field-text">
                        <p>Pickup date</p>
                        <input type="datetime-local" placeholder="Choose time">
                    </div>
                </div>
                <div class="search-field">
                    <i class="fa-regular fa-calendar-days"></i>
                    <div class="field-text">
                        <p>Return date</p>
                        <input type="datetime-local" placeholder="Choose time">
                    </div>
                </div>
                <button class="search-button"><a href="car_services.html">Search</a></button>
            </div>
        </div> 
    </div>
    
        <!-- page2 -->
        
        <h1>Rent with following 4 working steps</h1>
        <center>
        <div class="container-card">
            <div class="card">
                <div class="icon">
                    <div class="logo">
                        <svg width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M38.6626 16.1958C36.6938 7.34082 29.1376 3.35416 22.5001 3.35416C22.5001 3.35416 22.5001 3.35416 22.4813 3.35416C15.8626 3.35416 8.28756 7.32166 6.31881 16.1767C4.12506 26.0667 10.0501 34.4425 15.4126 39.7133C17.4001 41.6683 19.9501 42.6458 22.5001 42.6458C25.0501 42.6458 27.6001 41.6683 29.5688 39.7133C34.9313 34.4425 40.8563 26.0858 38.6626 16.1958ZM22.5001 25.7983C19.2376 25.7983 16.5938 23.0958 16.5938 19.7608C16.5938 16.4258 19.2376 13.7233 22.5001 13.7233C25.7626 13.7233 28.4063 16.4258 28.4063 19.7608C28.4063 23.0958 25.7626 25.7983 22.5001 25.7983Z" fill="#1572D3"/>
                            </svg>
                    </div>
                </div>
                <div class="text">
                    <h5>Choose location</h5>
                    <p>Choose your location and find
                     your best car </p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <div class="logo">
                        <svg width="48" height="51" viewBox="0 0 48 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 33.3625V33.5963C24 34.1913 23.56 34.6587 23 34.6587H5C4.44 34.6587 4 34.1913 4 33.5963V33.3625C4 29.6225 4.88 28.6875 8.44 28.6875H19.56C23.12 28.6875 24 29.6225 24 33.3625Z" fill="#1572D3"/>
                            <path d="M5 36.7838C4.44 36.7838 4 37.2513 4 37.8463V39.9713V42.075C4 45.815 4.88 46.75 8.44 46.75H19.56C23.12 46.75 24 45.815 24 42.075V39.9713V37.8463C24 37.2513 23.56 36.7838 23 36.7838H5V36.7838Z" fill="#1572D3"/>
                            <path d="M44 31.875C44 40.0987 37.74 46.75 30 46.75L32.1 43.0312" stroke="#1572D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4 19.125C4 10.9013 10.26 4.25 18 4.25L15.9 7.96875" stroke="#1572D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M37 23.375C41.9706 23.375 46 19.0937 46 13.8125C46 8.53128 41.9706 4.25 37 4.25C32.0294 4.25 28 8.53128 28 13.8125C28 19.0937 32.0294 23.375 37 23.375Z" fill="#1572D3"/>
                            </svg>
                            

                    </div>
                </div>
                <div class="text">
                    <h5>Conformation and Payment</h5>
                    <p>Confirm your booking details </p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                        <div class="logo">
                            <svg width="48" height="51" viewBox="0 0 48 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 33.3625V33.5963C24 34.1913 23.56 34.6587 23 34.6587H5C4.44 34.6587 4 34.1913 4 33.5963V33.3625C4 29.6225 4.88 28.6875 8.44 28.6875H19.56C23.12 28.6875 24 29.6225 24 33.3625Z" fill="#1572D3"/>
                                <path d="M5 36.7838C4.44 36.7838 4 37.2513 4 37.8463V39.9713V42.075C4 45.815 4.88 46.75 8.44 46.75H19.56C23.12 46.75 24 45.815 24 42.075V39.9713V37.8463C24 37.2513 23.56 36.7838 23 36.7838H5V36.7838Z" fill="#1572D3"/>
                                <path d="M44 31.875C44 40.0987 37.74 46.75 30 46.75L32.1 43.0312" stroke="#1572D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4 19.125C4 10.9013 10.26 4.25 18 4.25L15.9 7.96875" stroke="#1572D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M37 23.375C41.9706 23.375 46 19.0937 46 13.8125C46 8.53128 41.9706 4.25 37 4.25C32.0294 4.25 28 8.53128 28 13.8125C28 19.0937 32.0294 23.375 37 23.375Z" fill="#1572D3"/>
                                </svg>

                    </div>
                </div>
                <div class="text">
                    <h5>Pick-up date</h5>
                    <p>Select your pick up date and
                        time to book your car</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <div class="logo">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M43.5 16C43.5 16.82 42.82 17.5 42 17.5H6C5.18 17.5 4.5 16.82 4.5 16C4.5 15.18 5.18 14.5 6 14.5H8.04L8.8 10.88C9.52 7.38003 11.02 4.16003 16.98 4.16003H31.02C36.98 4.16003 38.48 7.38003 39.2 10.88L39.96 14.5H42C42.82 14.5 43.5 15.18 43.5 16Z" fill="#1572D3"/>
                            <path d="M44.3602 27.32C44.0602 24.02 43.1802 20.5 36.7602 20.5H11.2402C4.82017 20.5 3.96017 24.02 3.64017 27.32L2.52017 39.5C2.38017 41.02 2.88017 42.54 3.92017 43.68C4.98017 44.84 6.48017 45.5 8.08017 45.5H11.8402C15.0802 45.5 15.7002 43.64 16.1002 42.42L16.5002 41.22C16.9602 39.84 17.0802 39.5 18.8802 39.5H29.1202C30.9202 39.5 30.9802 39.7 31.5002 41.22L31.9002 42.42C32.3002 43.64 32.9202 45.5 36.1602 45.5H39.9202C41.5002 45.5 43.0202 44.84 44.0802 43.68C45.1202 42.54 45.6202 41.02 45.4802 39.5L44.3602 27.32ZM18.0002 31.5H12.0002C11.1802 31.5 10.5002 30.82 10.5002 30C10.5002 29.18 11.1802 28.5 12.0002 28.5H18.0002C18.8202 28.5 19.5002 29.18 19.5002 30C19.5002 30.82 18.8202 31.5 18.0002 31.5ZM36.0002 31.5H30.0002C29.1802 31.5 28.5002 30.82 28.5002 30C28.5002 29.18 29.1802 28.5 30.0002 28.5H36.0002C36.8202 28.5 37.5002 29.18 37.5002 30C37.5002 30.82 36.8202 31.5 36.0002 31.5Z" fill="#1572D3"/>
                            </svg>                            

                    </div>
                </div>
                <div class="text">
                    <h5>Book your car</h5>
                    <p>Book your car and we will deliver
                        it directly to you
                    </p>
                </div>
            </div>  
        </div> 
    </center>

        <div class="Model-car">
            <div class="model">
                <img src="image/brand1.jpg" alt="">
               
            </div>
            <div class="model">
                <img src="image/brand2.jpg" alt="">
                
             </div>
             <div class="model">
                <img src="image/brand3.jpg" alt="">
                
             </div>
             <div class="model">
                <img src="image/brand4.jpg" alt="">
                
             </div>
             <div class="model">
                <img src="image/brand5.jpg" alt="">
                
             </div>
        </div>

         <!--page3 why choose us -->
         <div id="WhyChooseUs">
         <div class="container">
            <div class="choose-content">
                <div class="picture-car">
                    <img class="car" src="image/review.jpg" alt="Car Image">
                </div>
                <div class="card-check">
                    <h1>We offer the best experience 
                        <br>with our rental deals</h1>
                    <div class="card">
                        <div class="icon">
                            <img src="image/wallet.png" alt="Icon">
                        </div>
                        <div class="text-card">
                            <p>Best price guaranteed</p>
                            <span class="text">Find a lower price? We’ll refund you 100% of the difference.</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img src="image/user-tick.png" alt="Icon">
                        </div>
                        <div class="text-card">
                            <p>Experience driver</p>
                            <span class="text">Don’t worry, we have many experienced drivers for you.</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img src="image/24-support.png" alt="Icon">
                        </div>
                        <div class="text-card">
                            <p>24 hour car delivery</p>
                            <span class="text">Book your car anytime and we will deliver it directly to you.</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img src="image/messages-2.png" alt="Icon">
                        </div>
                        <div class="text-card">
                            <p>24/7 technical support</p>
                            <span class="text">Contact Rentcars support anytime when you have a problem.</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <i class="bi bi-coin" style="color: #007bff;"></i>
                        </div>
                        <div class="text-card">
                            <p>Loyalty Program</p>
                            <span class="text">Earn points on every booking for exclusive discounts and perks.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- Car & Services -->
         <div class="search-car">
            <input type="text" placeholder="Search..." id="searchInput" onkeyup="searchCars()">
            <i class="fa-solid fa-magnifying-glass"></i>
         </div>
        <div id="CarService">
            <section class=" car & services" id="car & services">
            <div class="heading">
                <span>Best Services</span>
                <h1>Explore Out Top Deals <br> From Top Rated Dealers</h1>
            </div>
            <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="image/car1.jpg" alt="">
                    </div>
                    <h3>Lamborghini Harican 2019</h3>
                    <h2>$58500 | $358 <span>/month</span></h2>
                    <a href="Detail-car/car1.html" class="btn">Rent Now</a>
                </div>
    
                <div class="box">
                    <div class="box-img">
                        <img src="image/car2.jpg" alt="">
                    </div>
                    <h3>Toyota Supra 2020</h3>
                    <h2>$58500 | $358 <span>/month</span></h2>
                    <a href="Detail-car/car2.html" class="btn">Rent Now</a>
                </div>
    
                <div class="box">
                    <div class="box-img">
                        <img src="image/car3.jpg" alt="">
                    </div>
                    <h3>Audi Q7 2018</h3>
                    <h2>$58500 | $358 <span>/month</span></h2>
                    <a href="Detail-car/car3.html" class="btn">Rent Now</a>
                </div>
    
                <div class="box">
                    <div class="box-img">
                        <img src="image/car4.jpg" alt="">
                    </div>
                    <h3>Toyota Prius 2018</h3>
                    <h2>$58500 | $358 <span>/month</span></h2>
                    <a href="Detail-car/car4.html" class="btn">Rent Now</a>
                </div>
    
                <div class="box">
                    <div class="box-img">
                        <img src="image/car5.jpg" alt="">
                    </div>
                    <h3>BMW M5 2023</h3>
                    <h2>$58500 | $358 <span>/month</span></h2>
                    <a href="Detail-car/car5.html" class="btn">Rent Now</a>
                </div>
    
                <div class="box">
                    <div class="box-img">
                        <img src="image/car8.jpg" alt="">
                    </div>
                    <h3>Nissan Skyline GTR-R34</h3>
                    <h2>$58500 | $358 <span>/month</span></h2>
                    <a href="Detail-car/car6.html" class="btn">Rent Now</a>
                </div>

                <div class="box">
                    <div class="box-img">
                        <img src="image/car7.jpg" alt="">
                    </div>
                    <h3>Honda Civic 2021</h3>
                    <h2>$58500 | $358 <span>/month</span></h2>
                    <a href="Detail-car/car7.html class="btn">Rent Now</a>
                </div>
    
                <div class="box">
                    <div class="box-img">
                        <img src="image/car9.jpg" alt="">
                    </div>
                    <h3>Volvo XC60</h3>
                    <h2>$58500 | $358 <span>/month</span></h2>
                    <a href="Detail-car/car8.html" class="btn">Rent Now</a>
                </div>

                <div class="box">
                    <div class="box-img">
                        <img src="image/car10.jpg" alt="">
                    </div>
                    <h3>Ford Ranger wildtrack 2024</h3>
                    <h2>$58500 | $358 <span>/month</span></h2>
                    <a href="Detail-car/car9.html" class="btn">Rent Now</a>
                </div>
    
                <div class="box">
                    <div class="box-img">
                        <img src="image/car11.jpg" alt="">
                    </div>
                    <h3>Hyundai Van 2021</h3>
                    <h2>$58500 | $358 <span>/month</span></h2>
                    <a href="Detail-car/car10.html" class="btn">Rent Now</a>
                </div>

                <div class="box">
                    <div class="box-img">
                        <img src="image/car12.jpg" alt="">
                    </div>
                    <h3>Jeep 2021</h3>
                    <h2>$58500 | $358 <span>/month</span></h2>
                    <a href="Detail-car/car11.html" class="btn">Rent Now</a>
                </div>

                <div class="box">
                    <div class="box-img">
                        <img src="image/car7.jpg" alt="">
                    </div>
                    <h3>Honda Civic 2021</h3>
                    <h2>$58500 | $358 <span>/month</span></h2>
                    <a href="Detail-car/car12.html" class="btn">Rent Now</a>
                </div>
            </div>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
        </section>
        
            <!-- Footer Page -->
            <footer>
                <div class="footer-container">
                    <div class="footer-content">
                        <div class="footer-logo">
                            <img src="image/logo.png" alt="Logo">
                            <h3>RENTCARS</h3>
                        </div>
                        <p class="location"><i class="fa-solid fa-location-dot"></i>
                            E05, Street Emerald <br>Sangkat Tom Nop Teuk <br> Khan Chamkar Mon, Phnom Penh City, Cambodia</p>
                        <p><i class="fa-solid fa-phone"></i> + 0884217043</p>
                        <p><i class="fa-solid fa-envelope"></i> rentcar@gmail.com</p>
                    </div>
    
                    <div class="footer-content">
                        <h3>Our Product</h3>
                        <ul>
                            <li><a href="#Career">Career</a></li>
                            <li><a href="#Car">Car</a></li>
                            <li><a href="#Priceline">Priceline</a></li>
                        </ul>
                    </div>
    
                    <div class="footer-content">
                        <h3>About Rentcars</h3>
                        <ul class="product-list">
                            <li><a href="#Career">Why choose us</a></li>
                            <li><a href="#Car">Contact Us</a></li>
                        </ul>
                    </div>
    
                    <div class="footer-content">
                        <h3>Follow Us</h3>
                        <a href="#facebook"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#telegram"><i class="fa-brands fa-telegram"></i></a>
                        <a href="#instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#youtube"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </footer>
        </div>

        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="main.js"></script>
</body>
</html>