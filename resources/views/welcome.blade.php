<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="/">Free Lance Find</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>Freelancer <span> Matching </span> Platform</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          {{-- <li><a class="nav-link" href="#services">Services</a></li> --}}
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
          @guest
          <li><a class="nav-link" href="{{route('login')}}">Login</a></li>
          <li><a class="nav-link" href="{{route('register')}}">Register</a></li>
          @else
          <li><a class="nav-link" href="{{route('dashboard')}}">Dashboard</a></li>
          <li><a class="nav-link" href="{{route('logout')}}">Logout</a></li>
          @endguest
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      {{-- <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div> --}}

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about us</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/448190746_430513889900819_6231961730748862105_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFly4Kpy1CWBAxO4CB-a_usTHufNO6VA3xMe5807pUDfCAmKEdLoQzLFaVn98PXY6ZctCZhkSOMi0DaUTrCP-uN&_nc_ohc=K-f2vEulh8IQ7kNvgEcjCl9&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_Q7cD1QFxfkG9ciZQyRKEbosfUTLJ3x8BD_UsggZGBLTcYqQn9w&oe=66921612" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Free Lance Find</h3>
          <p class="fst-italic">
            Offering a personalized matchmaking service that connects freelancers with suitable projects based on their skills, experience, and preferences.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Founded:</strong> <span>1 May 2019</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.Freelancefind.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>09107673155</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>Mankilam, Tagum City</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                {{-- <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li> --}}
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>contact@gmail.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
              </ul>
            </div>
          </div>
          <p>
            Quality Control: The platform could implement measures to ensure the quality of freelancers and projects on the platform, 
            such as verifying freelancer credentials, screening job postings for legitimacy, and providing dispute resolution services in case of conflicts.
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Happy Clients</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
            <p>Awards</p>
          </div>
        </div>

      </div>

    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">WordPress/CMS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Photoshop <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    {{-- <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #ffbb2c;"></i>
            <h3>Lorem Ipsum</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3>Dolor Sitema</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <h3>Sed perspiciatis</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
            <h3>Magni Dolores</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #47aeff;"></i>
            <h3>Nemo Enim</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
            <h3>Eiusmod Tempor</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
            <h3>Midela Teren</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
            <h3>Pira Neve</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-anchor-line" style="color: #b2904f;"></i>
            <h3>Dirada Pack</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-disc-line" style="color: #b20969;"></i>
            <h3>Moton Ideal</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-base-station-line" style="color: #ff5828;"></i>
            <h3>Verdo Park</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
            <h3>Flavor Nivelanda</h3>
          </div>
        </div>
      </div>

    </div><!-- End Interests --> --}}

    <!-- ======= Testimonials ======= -->
    <div class="testimonials container">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                A seasoned executive with 5 years of experience in Freelance, Eugene Yntig has consistently demonstrated an
                 unwavering commitment to driving organizational growth, fostering a culture of innovation, and delivering unparalleled 
                 value to customers and stakeholders alike.  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="https://ca.slack-edge.com/TE4H99YHX-U06CTK4DEAW-9e0adf5fa1f8-512" class="testimonial-img" alt="">
              <h3>Eugene Yntig</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Effective Communicator: Stephany is an effective communicator who excels at conveying ideas, concepts, and feedback with clarity
                 and precision. Whether interacting with clients, colleagues, or stakeholders, she communicates with 
                confidence and professionalism, fostering strong relationships and ensuring alignment throughout the project lifecycle.  
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="https://ca.slack-edge.com/TE4H99YHX-U06CD379X4P-0add378919fd-512" class="testimonial-img" alt="">
              <h3>Stephany Pacumbaba</h3>
              <h4>Designer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Nathaniel possesses a strategic mindset that allows him to analyze complex situations 
                and devise effective solutions. He has a knack for seeing the bigger picture and identifying opportunities
                 for innovation and improvement. 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="https://ca.slack-edge.com/TE4H99YHX-U06CW2ZU8JG-4ab06ff5d774-48" class="testimonial-img" alt="">
              <h3>Nathaniel Alcazar</h3>
              <h4>Store Owner</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Nathaniel possesses a strategic mindset that allows him to analyze complex situations
                 and devise effective solutions. He has a knack for seeing the bigger picture and identifying
                  opportunities for innovation and improvement.  
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="https://ca.slack-edge.com/TE4H99YHX-U06CD379X4P-0add378919fd-512" class="testimonial-img" alt="">
              <h3>Stephany Pacumbaba</h3>
              <h4>Freelancer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Germany has endured his fair share of challenges and hardships, but he possesses 
                a resilient spirit that enables him to overcome adversity. He views obstacles as 
                opportunities for growth and is always ready to face whatever life throws his way. 
                 <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="data:image/jpeg;base64,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" 
              class="testimonial-img" alt="">
              <h3>Germany Lungay</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div><!-- End Testimonials  -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Website</h2>
        <p>Check Our Website</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Sumary</h3>
          <div class="resume-item pb-0">
            <h4>Free Lance Find</h4>
            <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>
            <p>
            <ul>
              <li>Mankilam, Tagum City</li>
              <li>09107673155</li>
              <li>contact@gmail.com</li>
            </ul>
            </p>
          </div>

          <h3 class="resume-title">Lorem Ipsum</h3>
          <div class="resume-item">
            <h4>Lorem Ipsum &amp; is simply dummy text</h4>
            <h5>Lorem Ipsum</h5>
            <p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</em></p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
          </div>
          <div class="resume-item">
            <h4>Lorem Ipsum &amp; Lorem Ipsum</h4>
            <h5>Lorem Ipsum</h5>
            <p><em>RLorem Ipsum is simply dummy text of the printing and typesetting industry.</em></p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">RLorem Ipsum is simply </h3>
          <div class="resume-item">
            <h4>RLorem Ipsum is simply dummy text of the</h4>
            <h5>RLorem Ipsum</h5>
            <p><em>RLorem Ipsum is simply dummy </em></p>
            <p>
            <ul>
              <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</li>
              <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the </li>
              <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</li>
              <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Lorem Ipsum is simply dummy</h4>
            <h5>Lorem Ipsum is</h5>
            <p><em>Lorem Ipsum is simply dummy text of the</em></p>
            <p>
            <ul>
              <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</li>
              <li>Lorem Ipsum is simply dummy text of the printing and typesetting indu</li>
              <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
              <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  {{-- <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>Our Services</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">Lorem Ipsum</a></h4>
            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">Sed ut perspiciatis</a></h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="">Magni Dolores</a></h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4><a href="">Nemo Enim</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-slideshow"></i></div>
            <h4><a href="">Dele cardo</a></h4>
            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-arch"></i></div>
            <h4><a href="">Divera don</a></h4>
            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section --> --}}

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>contact@example.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+1 5589 55488 55</p>
          </div>
        </div>
      </div>

      <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>