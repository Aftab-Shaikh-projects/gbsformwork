<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GBS Formwork Systems | Modern Construction Solutions</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    /* --- Base Setup & Variables --- */
    :root {
      --primary-blue: #0d2440;
      /* Deep Navy from Logo */
      --accent-orange: #f36523;
      /* Vibrant Orange from Logo */
      --light-grey-bg: #f3f5f7;
      --white: #ffffff;
      --dark-blue-text: #0d2440;
      --light-text: #5a6a7a;
      --border-radius: 12px;
    }

    html,
    body {
      height: 100%;
    }

    body {
      font-family: 'Open Sans', sans-serif;
      scroll-behavior: smooth;
      background-color: var(--white);
      color: var(--dark-blue-text);
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Montserrat', sans-serif;
      color: var(--dark-blue-text);
    }

    /* --- Navbar --- */
    .navbar {
      transition: all 0.4s ease-in-out;
      z-index: 1030;
      padding: 0.75rem 1rem;
    }

    .navbar-scrolled {
      background-color: rgba(255, 255, 255, 0.98);
      backdrop-filter: blur(8px);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.06);
    }

    .navbar .navbar-brand img {
      height: 40px;
      transition: all 0.3s ease;
    }

    .navbar:not(.navbar-scrolled) .navbar-brand img {
      filter: brightness(0) invert(1);
      /* Makes logo white on hero */
    }

    .navbar .nav-link {
      font-weight: 600;
      color: var(--dark-blue-text);
      transition: all 0.3s ease;
      position: relative;
      padding: 0.5rem 1rem;
      border-radius: 50px;
    }

    .navbar-scrolled .nav-link:hover {
      color: var(--accent-orange);
    }

    .navbar:not(.navbar-scrolled) {
      background: transparent;
    }

    .navbar:not(.navbar-scrolled) .nav-link {
      color: var(--white);
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.45);
    }

    .navbar:not(.navbar-scrolled) .nav-link:hover {
      background-color: rgba(255, 255, 255, 0.1);
      color: var(--white);
    }

    .navbar:not(.navbar-scrolled) .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .btn-nav-quote {
      background: var(--accent-orange);
      color: var(--white);
      border: none;
      font-weight: 600;
      padding: 0.6rem 1.5rem;
      border-radius: 50px;
      transition: all 0.4s ease;
      box-shadow: 0 5px 15px rgba(243, 101, 35, 0.2);
      font-family: 'Montserrat', sans-serif;
      font-size: 0.9rem;
    }

    .btn-nav-quote:hover {
      background: #e15b20;
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(243, 101, 35, 0.3);
      color: var(--white);
    }


    /* --- Hero Section --- */
    #home {
      height: 100vh;
      position: relative;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: left;
      background: var(--dark-blue-text) url('https://images.unsplash.com/photo-1581092448348-a73740094a40?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center;
      background-size: cover;
    }

    #home::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, rgba(13, 36, 64, 0.95), rgba(13, 36, 64, 0.6));
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      color: var(--white);
    }

    .hero-content .welcome-text {
      display: inline-block;
      padding: 0.25rem 1rem;
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 50px;
      text-transform: uppercase;
      font-size: 0.9rem;
      letter-spacing: 1px;
      margin-bottom: 1rem;
    }

    .hero-title {
      font-size: clamp(2.5rem, 6vw, 4.5rem);
      font-weight: 800;
      color: var(--white);
      text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.5);
      margin-bottom: 1.5rem;
      line-height: 1.1;
    }

    .hero-subtitle {
      font-size: clamp(1rem, 2.2vw, 1.2rem);
      margin-bottom: 2rem;
      text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.3);
      max-width: 550px;
    }

    .btn-hero {
      font-weight: 700;
      padding: 14px 34px;
      border-radius: 8px;
      transition: all 0.3s ease;
      font-family: 'Montserrat', sans-serif;
    }

    .btn-hero-primary {
      background-color: var(--accent-orange);
      color: var(--white);
      border: 2px solid var(--accent-orange);
    }

    .btn-hero-primary:hover {
      background-color: #e15b20;
      border-color: #e15b20;
      transform: translateY(-3px);
    }

    .btn-hero-secondary {
      background-color: transparent;
      color: var(--white);
      border: 2px solid var(--white);
    }

    .btn-hero-secondary:hover {
      background-color: var(--white);
      color: var(--primary-blue);
      transform: translateY(-3px);
    }

    /* --- Section Styling --- */
    .section {
      padding: 100px 0;
      position: relative;
      overflow: hidden;
    }

    .section-title {
      margin-bottom: 60px;
      font-weight: 800;
      font-size: 2.2rem;
      position: relative;
      text-align: center;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: -18px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 5px;
      background: var(--accent-orange);
      border-radius: 5px;
    }

    .section-title.text-start {
      text-align: left;
    }

    .section-title.text-start::after {
      left: 0;
      transform: translateX(0);
    }

    /* --- About Section --- */
    .about-graphics {
      position: relative;
    }

    .about-graphics img {
      border-radius: var(--border-radius);
      display: block;
      width: 100%;
      height: auto;
    }

    /* --- Stats Section --- */
    #stats {
      background: var(--primary-blue);
      color: var(--white);
      padding: 60px 0;
    }

    .stat-item i {
      font-size: 2.2rem;
      margin-bottom: 10px;
      display: block;
      color: var(--accent-orange);
    }

    .stat-item span {
      font-size: 2.2rem;
      font-weight: 700;
      font-family: 'Montserrat', sans-serif;
      display: block;
    }

    .stat-item p {
      font-size: 0.95rem;
      color: rgba(255, 255, 255, 0.85);
      margin: 0;
    }

    /* --- Cards (Services, Products) --- */
    .card-item {
      background-color: var(--white);
      border: 1px solid #eaf2ff;
      border-radius: var(--border-radius);
      padding: 30px;
      text-align: center;
      box-shadow: 0 20px 50px rgba(220, 228, 249, 0.6);
      transition: all 0.35s ease;
      height: 100%;
      position: relative;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .card-item::before {
      content: '';
      position: absolute;
      top: -50px;
      right: -50px;
      width: 150px;
      height: 150px;
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23f3f5f7' d='M48.2,-68.6C62,-57.4,72.4,-42.1,76.4,-25.9C80.4,-9.7,78.1,7.5,71.7,22.3C65.3,37.1,54.8,49.5,42.8,59.3C30.8,69.1,17.2,76.3,1.9,77.9C-13.3,79.5,-26.6,75.6,-40.4,68.5C-54.2,61.4,-68.5,51.1,-75.4,37.8C-82.3,24.5,-81.8,8.2,-78.2,-7.1C-74.6,-22.4,-67.9,-36.8,-57.6,-49.2C-47.3,-61.6,-33.4,-72,-18.7,-76.8C-4,-81.6,11.6,-81.1,26,-78.1C40.4,-75.2,48.2,-68.6,48.2,-68.6Z' transform='translate(100 100)' /%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-size: contain;
      opacity: 0;
      transform: scale(0.8);
      transition: all 0.4s ease;
      z-index: 0;
    }

    .card-item .card-icon,
    .card-item h5,
    .card-item p,
    .card-item img {
      position: relative;
      z-index: 1;
    }

    .card-item .card-icon {
      font-size: 2.4rem;
      margin-bottom: 18px;
      color: var(--primary-blue);
    }

    .card-item:hover {
      transform: translateY(-8px);
      box-shadow: 0 25px 60px rgba(13, 36, 64, 0.12);
    }

    .card-item:hover::before {
      opacity: 1;
      transform: scale(1);
    }

    /* --- Why Choose Us --- */
    #why-us {
      background-color: var(--light-grey-bg);
      position: relative;
    }

    .feature-item {
      display: flex;
      align-items: flex-start;
      gap: 20px;
    }

    .feature-icon-wrapper {
      flex-shrink: 0;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: var(--primary-blue);
      display: grid;
      place-items: center;
      color: var(--white);
      font-size: 1.2rem;
      box-shadow: 0 10px 20px rgba(13, 36, 64, 0.16);
    }

    /* --- Projects & Products --- */
    #products,
    #projects {
      background-color: var(--light-grey-bg);
    }

    .project-card {
      position: relative;
      border-radius: var(--border-radius);
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      transition: transform 0.35s ease, box-shadow 0.35s ease;
      height: 100%;
      display: flex;
      align-items: stretch;
    }

    .project-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .project-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 22px;
      background: linear-gradient(to top, rgba(13, 36, 64, 0.85), rgba(13, 36, 64, 0.18));
      color: var(--white);
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      transition: background 0.35s ease, transform 0.35s ease;
    }

    .project-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 22px 40px rgba(0, 0, 0, 0.12);
    }

    .project-card:hover .project-overlay {
      background: linear-gradient(to top, rgba(13, 36, 64, 0.95), rgba(243, 101, 35, 0.25));
    }

    /* --- Testimonials --- */
    #testimonials {
      background-color: var(--dark-blue-text);
      color: var(--white);
    }

    #testimonials .section-title {
      color: var(--white);
    }

    #testimonials .section-title::after {
      background: var(--white);
    }

    .testimonial-card {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.08), rgba(255, 255, 255, 0.03));
      backdrop-filter: blur(10px);
      border-radius: var(--border-radius);
      border: 1px solid rgba(255, 255, 255, 0.12);
    }

    /* --- Contact --- */
    #contact {
      background-color: var(--white);
    }

    .form-control {
      border-radius: 8px;
      padding: 15px;
      border: 1px solid #ced4da;
      box-shadow: none;
    }

    .form-control:focus {
      box-shadow: 0 0 0 0.25rem rgba(13, 36, 64, 0.14);
      border-color: var(--primary-blue);
      outline: none;
    }

    /* --- Footer --- */
    footer {
      background-color: var(--dark-blue-text);
      color: rgba(255, 255, 255, 0.72);
      position: relative;
    }

    .footer-content {
      padding: 60px 0;
    }

    .footer-social a {
      color: rgba(255, 255, 255, 0.75);
      margin: 0 10px;
      font-size: 1.5rem;
      transition: color 0.25s;
    }

    .footer-social a:hover {
      color: var(--accent-orange);
    }

    /* Responsive tweaks */
    @media (max-width: 991px) {
      #home {
        text-align: center;
      }

      .hero-subtitle {
        margin-left: auto;
        margin-right: auto;
      }
    }

    @media (max-width: 767px) {
      .section {
        padding: 60px 0;
      }

      .card-item {
        padding: 22px;
      }

      .project-card {
        min-height: 260px;
      }

      .hero-content {
        text-align: center;
      }
    }
  </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-main">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top py-3" id="navbar-main">
    <div class="container">
      <a class="navbar-brand" href="#home">
        <img src="data:image/png;base64,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" alt="GBS Logo" class="navbar-brand-img">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
          <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
            <a href="#contact" class="btn btn-nav-quote">Get a Quote</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section id="home">
    <div class="container hero-content">
      <div class="row align-items-center">
        <div class="col-lg-10" data-aos="fade-up" data-aos-duration="1000">
          <div class="welcome-text">Welcome</div>
          <h1 class="hero-title">GBS Formwork Systems</h1>
          <p class="hero-subtitle">Revolutionizing Construction with Aluminum Excellence. High-quality, reusable systems for rapid project completion.</p>
          <a href="#contact" class="btn btn-hero btn-hero-primary me-2">Contact Us</a>
          <a href="#about" class="btn btn-hero btn-hero-secondary">About Us</a>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section id="about" class="section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
          <div class="about-graphics">
            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid shadow-lg" alt="Construction site meeting">
          </div>
        </div>
        <div class="col-lg-6 ps-lg-5" data-aos="fade-left" data-aos-duration="1000">
          <h2 class="section-title text-start">Pioneering Formwork Solutions</h2>
          <p class="lead" style="color: var(--light-text);">At GBS Formwork Systems, we specialize in cutting-edge aluminium formwork systems that redefine construction efficiency. Our technology enables faster project completion, superior structural integrity, and a flawless finish.</p>
          <p style="color: var(--light-text);">With years of expertise, we are committed to providing innovative solutions that are not only cost-effective but also safe and easy to implement, reducing dependency on skilled labor.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section id="stats" class="section">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-3 col-sm-6 mb-4 mb-md-0" data-aos="fade-up">
          <div class="stat-item"><i class="fas fa-building"></i><span class="counter">150+</span>
            <p>Projects Completed</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
          <div class="stat-item"><i class="fas fa-users"></i><span class="counter">99%</span>
            <p>Client Satisfaction</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
          <div class="stat-item"><i class="fas fa-hard-hat"></i><span class="counter">500+</span>
            <p>Trained Professionals</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
          <div class="stat-item"><i class="fas fa-award"></i><span class="counter">15+</span>
            <p>Years of Experience</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="section">
    <div class="container">
      <h2 class="section-title">Our Comprehensive Services</h2>
      <div class="row g-4 justify-content-center">
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
          <div class="card-item">
            <div class="card-icon"><i class="fa-solid fa-layer-group"></i></div>
            <h5 class="fw-bold">Aluminium Formwork</h5>
            <p>High-quality, reusable systems for rapid construction.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="card-icon"><i class="fa-solid fa-headset"></i></div>
            <h5 class="fw-bold">Expert Consultation</h5>
            <p>Optimizing your project plans with our advanced solutions.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="card-item">
            <div class="card-icon"><i class="fa-solid fa-helmet-safety"></i></div>
            <h5 class="fw-bold">Efficient Installation</h5>
            <p>Reliable and cost-effective support for seamless execution.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <div class="card-icon"><i class="fa-solid fa-shield-halved"></i></div>
            <h5 class="fw-bold">Maintenance (AMC)</h5>
            <p>Contracts to keep equipment in optimal condition.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
          <div class="card-item">
            <div class="card-icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <h5 class="fw-bold">Custom Design</h5>
            <p>Tailor-made formwork solutions for unique architectural needs.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="card-icon"><i class="fa-solid fa-chalkboard-teacher"></i></div>
            <h5 class="fw-bold">On-site Training</h5>
            <p>Empowering your team to use our systems effectively.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="card-item">
            <div class="card-icon"><i class="fa-solid fa-tasks"></i></div>
            <h5 class="fw-bold">Project Management</h5>
            <p>Overseeing the formwork process from start to finish.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <div class="card-icon"><i class="fa-solid fa-truck-fast"></i></div>
            <h5 class="fw-bold">Logistics & Supply</h5>
            <p>Timely delivery of all formwork components to your site.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Us -->
  <section id="why-us" class="section">
    <div class="container">
      <h2 class="section-title">The GBS Advantage</h2>
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <img src="https://images.unsplash.com/photo-1519759142831-60a11e47da06?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid rounded-3 shadow-lg" alt="Engineer inspecting formwork">
        </div>
        <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
          <div class="feature-item" data-aos="fade-left" data-aos-delay="100">
            <div class="feature-icon-wrapper"><i class="fas fa-rocket fa-fw"></i></div>
            <div>
              <h5>Unmatched Speed</h5>
              <p>Achieve floor-to-floor cycles of just 4-5 days, drastically reducing project timelines.</p>
            </div>
          </div>
          <div class="feature-item mt-4" data-aos="fade-left" data-aos-delay="200">
            <div class="feature-icon-wrapper"><i class="fas fa-gem fa-fw"></i></div>
            <div>
              <h5>Superior Quality</h5>
              <p>Produce an extraordinarily strong structure with a high-quality, smooth surface finish.</p>
            </div>
          </div>
          <div class="feature-item mt-4" data-aos="fade-left" data-aos-delay="300">
            <div class="feature-icon-wrapper"><i class="fas fa-shield-alt fa-fw"></i></div>
            <div>
              <h5>Enhanced Safety</h5>
              <p>Our systems are designed with integrated safety features for secure assembly and operation.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Products -->
  <section id="products" class="section">
    <div class="container">
      <h2 class="section-title">Our Core Products</h2>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="0">
          <div class="card-item product-card"><img src="https://images.unsplash.com/photo-1621905252472-94222452036e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Wall Panel" class="img-fluid rounded mb-3">
            <h5 class="fw-bold">Wall Panel</h5>
            <p>Forms the main wall structures with high precision.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="100">
          <div class="card-item product-card"><img src="https://images.unsplash.com/photo-1621905251978-e9a932454612?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Beam Panel" class="img-fluid rounded mb-3">
            <h5 class="fw-bold">Beam Panel</h5>
            <p>Creates horizontal beams and supports slab panels.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="200">
          <div class="card-item product-card"><img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Slab Panel" class="img-fluid rounded mb-3">
            <h5 class="fw-bold">Slab Panel</h5>
            <p>Used to form the floor and roof slabs of the building.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="300">
          <div class="card-item product-card"><img src="https://images.unsplash.com/photo-1519759142831-60a11e47da06?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Kicker" class="img-fluid rounded mb-3">
            <h5 class="fw-bold">Kicker</h5>
            <p>Ensures accurate positioning of wall panels.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="0">
          <div class="card-item product-card"><img src="https://images.unsplash.com/photo-1606868306217-dbf5046868d2?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Internal Corner" class="img-fluid rounded mb-3">
            <h5 class="fw-bold">Internal Corner</h5>
            <p>Connects wall panels at inside corners seamlessly.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="100">
          <div class="card-item product-card"><img src="https://images.unsplash.com/photo-1518457607833-31d624ed4335?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="External Corner" class="img-fluid rounded mb-3">
            <h5 class="fw-bold">External Corner</h5>
            <p>Forms sharp and durable outside corners.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="200">
          <div class="card-item product-card"><img src="https://images.unsplash.com/photo-1618221195720-9de938b814e8?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Prop Head" class="img-fluid rounded mb-3">
            <h5 class="fw-bold">Prop Head</h5>
            <p>Supports slab formwork and allows early striking.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="300">
          <div class="card-item product-card"><img src="https://images.unsplash.com/photo-1593348530835-5282a50a1e35?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Pins and Wedges" class="img-fluid rounded mb-3">
            <h5 class="fw-bold">Pins and Wedges</h5>
            <p>Securely locks all formwork components together.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="section">
    <div class="container">
      <h2 class="section-title">Featured Projects</h2>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="0">
          <div class="project-card"><img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Project 1">
            <div class="project-overlay">
              <h5>Residential High-Rise</h5>
              <p>30 floors completed in record time.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="100">
          <div class="project-card"><img src="https://images.unsplash.com/photo-1600585154340-be6164a83639?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Project 2">
            <div class="project-overlay">
              <h5>Commercial Complex</h5>
              <p>500,000 sq. ft. commercial space.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="200">
          <div class="project-card"><img src="https://images.unsplash.com/photo-1570129477492-45c003edd2e7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Project 3">
            <div class="project-overlay">
              <h5>Institutional Building</h5>
              <p>Modern university campus.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="300">
          <div class="project-card"><img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Project 4">
            <div class="project-overlay">
              <h5>Affordable Housing</h5>
              <p>Rapid construction for mass housing.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="0">
          <div class="project-card"><img src="https://images.unsplash.com/photo-1560518883-ce09059ee445?q=80&w=1934&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Project 5">
            <div class="project-overlay">
              <h5>Luxury Villas</h5>
              <p>Complex designs with a premium finish.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="100">
          <div class="project-card"><img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?q=80&w=1998&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Project 6">
            <div class="project-overlay">
              <h5>Metro Station</h5>
              <p>Infrastructure project with high precision.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="200">
          <div class="project-card"><img src="https://images.unsplash.com/photo-1481253127864-63cce383928e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Project 7">
            <div class="project-overlay">
              <h5>Industrial Warehouse</h5>
              <p>Large-scale industrial construction.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="300">
          <div class="project-card"><img src="https://images.unsplash.com/photo-1592595896616-c37162298647?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="Project 8">
            <div class="project-overlay">
              <h5>Mixed-Use Development</h5>
              <p>Retail and residential complex.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section id="testimonials" class="section">
    <div class="container" data-aos="fade-up">
      <h2 class="section-title">What Our Clients Say</h2>
      <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner py-5">
          <div class="carousel-item active">
            <div class="testimonial-card col-lg-8 mx-auto text-center p-5">
              <p>"GBS Formwork transformed our project timeline. What used to take weeks now takes days, all while maintaining exceptional quality. A game-changer!"</p>
              <h6 class="testimonial-author mt-3">- Saurabh, Project Manager</h6>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial-card col-lg-8 mx-auto text-center p-5">
              <p>"Precision and strength go hand in hand with their system. Our structures not only look incredible but also withstand the test of time. A reliable partner."</p>
              <h6 class="testimonial-author mt-3">- Diksha, Lead Architect</h6>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial-card col-lg-8 mx-auto text-center p-5">
              <p>"Efficiency at its finest! The aluminum formwork technology has not only boosted our productivity but has also elevated the aesthetics of our projects. Highly recommended."</p>
              <h6 class="testimonial-author mt-3">- Suman, Construction Head</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="section">
    <div class="container">
      <h2 class="section-title">Let's Build Together</h2>
      <div class="row justify-content-center">
        <div class="col-lg-8" data-aos="fade-up">
          <div class="contact-form">
            <form>
              <div class="row">
                <div class="col-md-6 mb-4"><input type="text" class="form-control" placeholder="Your Name" required aria-label="Your Name"></div>
                <div class="col-md-6 mb-4"><input type="email" class="form-control" placeholder="Your Email" required aria-label="Your Email"></div>
                <div class="col-12 mb-4"><input type="text" class="form-control" placeholder="Subject" required aria-label="Subject"></div>
                <div class="col-12 mb-4"><textarea class="form-control" rows="5" placeholder="Your Message" required aria-label="Your Message"></textarea></div>
                <div class="col-12 text-center"><button type="submit" class="btn btn-fancy btn-hero-primary">Send Message</button></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="section pb-0 pt-0">
    <div class="container text-center footer-content">
      <h3 class="text-white mb-3">GBS Formwork Systems</h3>
      <div class="footer-social mb-4">
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      </div>
      <p>&copy; 2024 GBS Formwork Systems. All Rights Reserved.</p>
    </div>
  </footer>

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    $(function() {
      AOS.init({
        duration: 800,
        once: true,
        offset: 100
      });

      let counterAnimated = false;

      function tryAnimateCounters() {
        const statsSection = $('#stats');
        if (!statsSection.length || counterAnimated) return;
        const top_of_element = statsSection.offset().top;
        const bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
        if (bottom_of_screen > top_of_element + 80) {
          counterAnimated = true;
          $('.counter').each(function() {
            const $el = $(this);
            const text = $el.text().trim();
            const match = text.match(/^([\d,]+)([+%]*)$/);
            let num = 0;
            let suffix = '';
            if (match) {
              num = parseInt(match[1].replace(/,/g, ''), 10) || 0;
              suffix = match[2] || '';
            }
            $({
              countNum: 0
            }).animate({
              countNum: num
            }, {
              duration: 2000,
              easing: 'swing',
              step: function(now) {
                $el.text(Math.floor(now).toLocaleString() + suffix);
              },
              complete: function() {
                $el.text(num.toLocaleString() + suffix);
              }
            });
          });
        }
      }

      function onScrollHandler() {
        $('#navbar-main').toggleClass('navbar-scrolled', $(window).scrollTop() > 50);
        tryAnimateCounters();
      }

      $(window).on('scroll resize load', onScrollHandler);
      onScrollHandler();
    });
  </script>
</body>

</html>