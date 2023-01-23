@extends('layouts.app')

@section('content')
    <div>
      <a class="btn-book-a-table" href="/login">Login</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h2>
          <p data-aos="fade-up" data-aos-delay="100">Freshen up with our new milktea taste and partner it with our delicious takoyaki!</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
            <a href="https://youtu.be/dQw4w9WgXcQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets-homepage/assets/img/logo.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div> 
  </section><!-- End Hero Section -->

  <main id="main">

<!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Announcnements</h2>
          <p>Share <span>Your Moments</span> In Our Restaurant</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets-homepage/assets/img/events-1.jpg)">
              <h3>Custom Parties</h3>
              <div class="price align-self-start">$99</div>
              <p class="description">
                Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere. Enim facilis veritatis id est rem repudiandae nulla expedita quas.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets-homepage/assets/img/events-2.jpg)">
              <h3>Private Parties</h3>
              <div class="price align-self-start">$289</div>
              <p class="description">
                In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets-homepage/assets/img/events-3.jpg)">
              <h3>Birthday Parties</h3>
              <div class="price align-self-start">$499</div>
              <p class="description">
                Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam. Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets-homepage/assets/img/interior.png) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Book a Table</h4>
              <p>+63 947 101 2323</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                The Cruz family started TakoyaTea  as a home-based-business selling take-away food online in the vicinity of Manila and Quezon City. “TakoyaTea” was  coined word from Takoyaki & Milk Tea. The brand color is turquoise green, the combination of hot color yellow and cool color blue. 
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Takoyaki is a famous Japanese street food that started in Osaka, Japan in the 1930s. “Tako” in Japanese means octopus, and “Yaki” means grilled.</li>
                <li><i class="bi bi-check2-all"></i> Milk Tea is a popular Taiwanese drink that started in the 80s in Taiwan and is the rage now all over the world. Milk Tea is a combination of tea with milk and “Pearls” or “Boba” (tapioca or “sago”).</li>
                <li><i class="bi bi-check2-all"></i> Takoyaki and milk tea are favorites of Joel Cruz and he never misses a bite or a sip  whenever he travels to their countries of origin, Japan and Taiwan.</li>
              </ul>
              <p>
                He wanted to bring the authentic tastes of this  perfect combo meal for local customers to fully enjoy. And so, in spite of the pandemic, he totally involved himself
                from the business concept, to its implementation and finally the launch of TakoyaTea. 
              </p>

              <div class="position-relative mt-4">
                <img src="assets-homepage/assets/img/food.png" class="img-fluid" alt="">
                <a href="https://youtu.be/dQw4w9WgXcQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Menu</h2>
          <p>Check Our <span>Yummy Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-wholemenu">
              <h4>Whole Menu</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-milktea">
              <h4>Milk Tea</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Main Dish</h4>
            </a>
          </li><!-- End tab nav item -->


        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-wholemenu">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Whole Menu</h3>
            </div>

            <div class="row gy-5 justify-content-center">

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu1.png" class="glightbox"><img src="assets-homepage/assets/img/menu1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Menu 1</h4>
                <p class="ingredients">
                  
                </p>
                <p class="price">
                  
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu2.png" class="glightbox"><img src="assets-homepage/assets/img/menu2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Menu 2</h4>
              </div><!-- Menu Item -->

              
            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-milktea">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Milktea</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu2/cookies&cream.png" class="glightbox"><img src="assets-homepage/assets/img/menu2/cookies&cream.png" class="menu2-img img-fluid" alt=""></a>
                <h4>Cookies & Cream</h4>
                <!-- <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p> -->
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu2/darkchoco.png" class="glightbox"><img src="assets-homepage/assets/img/menu2/darkchoco.png" class="menu2-img img-fluid" alt=""></a>
                <h4>Dark Choco</h4>
                <p class="price">
                  $14.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu2/matcha.png" class="glightbox"><img src="assets-homepage/assets/img/menu2/matcha.png" class="menu2-img img-fluid" alt=""></a>
                <h4>Matcha</h4>
                <p class="price">
                  $8.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu2/sakura.png" class="glightbox"><img src="assets-homepage/assets/img/menu2/sakura.png" class="menu2-img img-fluid" alt=""></a>
                <h4>Sakura</h4>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu2/strawberry.png" class="glightbox"><img src="assets-homepage/assets/img/menu2/strawberry.png" class="menu2-img img-fluid" alt=""></a>
                <h4>Strawberry</h4>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu2/wintermelon.png" class="glightbox"><img src="assets-homepage/assets/img/menu2/wintermelon.png" class="menu2-img img-fluid" alt=""></a>
                <h4>Wintermelon</h4>
                <p class="price">
                  $9.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu2/redvelvet.png" class="glightbox"><img src="assets-homepage/assets/img/menu2/redvelvet.png" class="menu2-img img-fluid" alt=""></a>
                <h4>RedVelvet</h4>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu2/whiterabbit.png" class="glightbox"><img src="assets-homepage/assets/img/menu2/whiterabbit.png" class="menu2-img img-fluid" alt=""></a>
                <h4>Okinawa</h4>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu2/coffe.png" class="glightbox"><img src="assets-homepage/assets/img/menu2/coffe.png" class="menu2-img img-fluid" alt=""></a>
                <h4>Coffee Jelly</h4>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Main Dish</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu/gyoza.png" class="glightbox"><img src="assets-homepage/assets/img/menu/gyoza.png" class="menu-img img-fluid" alt=""></a>
                <h4>Gyoza</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu/takoyaki.png" class="glightbox"><img src="assets-homepage/assets/img/menu/takoyaki.png" class="menu-img img-fluid" alt=""></a>
                <h4>Takoyaki</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu/okonomiyaki.png" class="glightbox"><img src="assets-homepage/assets/img/menu/okonomiyaki.png" class="menu-img img-fluid" alt=""></a>
                <h4>Okonomiyaki</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu/ramen.png" class="glightbox"><img src="assets-homepage/assets/img/menu/ramen.png" class="menu-img img-fluid" alt=""></a>
                <h4>Ramen</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu/katsudon.png" class="glightbox"><img src="assets-homepage/assets/img/menu/katsudon.png" class="menu-img img-fluid" alt=""></a>
                <h4>Katsudon</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu/gyudon.png" class="glightbox"><img src="assets-homepage/assets/img/menu/gyudon.png" class="menu-img img-fluid" alt=""></a>
                <h4>Gyudon</h4>
              </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu/chickenkaraage.png" class="glightbox"><img src="assets-homepage/assets/img/menu/chickenkaraage.png" class="menu-img img-fluid" alt=""></a>
                <h4>Chicken Karaage</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu/chickenteriyaki.png" class="glightbox"><img src="assets-homepage/assets/img/menu/chickenteriyaki.png" class="menu-img img-fluid" alt=""></a>
                <h4>Chicken Teriyaki</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets-homepage/assets/img/menu/oyakodon.png" class="glightbox"><img src="assets-homepage/assets/img/menu/oyakodon.png" class="menu-img img-fluid" alt=""></a>
                <h4>Oyakodon</h4>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>What Are They <span>Saying About Us</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets-homepage/assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets-homepage/assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets-homepage/assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets-homepage/assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Branch Owner</h2>
          <p>Our <span>Beautiful</span> Branch Owner</p>
        </div>

        <div class="row gy-4 justify-content-center">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch " data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member" >
              <div class="member-img" style="display: grid; place-items: center;">
                <img src="assets-homepage/assets/img/Owner.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/profile.php?id=100072251077702"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/takoyatea.ph/?hl=en"><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>MICHELLE C. GUZMAN</h4>
                <span>Branch Owner</span>
              </div>
            </div>
          </div><!-- End Chefs Member -->

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Book A Table</h2>
          <p>Book <span>Your Stay</span> With Us</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url(assets-homepage/assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Book a Table</button></div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>gallery</h2>
          <p>Check <span>Our Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets-homepage/assets/img/gallery/gallery.png"><img src="assets-homepage/assets/img/gallery/gallery.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets-homepage/assets/img/gallery/gallery2.png"><img src="assets-homepage/assets/img/gallery/gallery2.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets-homepage/assets/img/gallery/lobby2.png"><img src="assets-homepage/assets/img/gallery/lobby2.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets-homepage/assets/img/gallery/pic1.png"><img src="assets-homepage/assets/img/gallery/pic1.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets-homepage/assets/img/gallery/pic.png"><img src="assets-homepage/assets/img/gallery/pic.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets-homepage/assets/img/gallery/gallery6.png"><img src="assets-homepage/assets/img/gallery/gallery6.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets-homepage/assets/img/gallery/gallery7.png"><img src="assets-homepage/assets/img/gallery/gallery7.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets-homepage/assets/img/gallery/lobby3.png"><img src="assets-homepage/assets/img/gallery/lobby3.png" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4720.795161680892!2d125.60065629637495!3d8.959187163330254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301eb994527622f%3A0xc1a3ba6c370bf694!2sTAKOYATEA%20by%20JOEL%20CRUZ!5e0!3m2!1sen!2sph!4v1673103790639!5m2!1sen!2sph" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>Purok 3, Ampayon, Butuan City, Philippines</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+63 947 101 2323</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sun:</strong> 10AM - 8PM
                  
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Purok 3, Ampayon, <br>
              Butuan City, 8600 - Philippines<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +63 947 101 2323<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sun: 10AM</strong> - 8PM<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/people/Takoyatea-Bxu-Ampayon/100072251077702/" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->
@endsection