<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBS Formwork Systems | Premium Formwork Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #1a3a6c; /* Dark Blue from logo */
            --secondary: #e63946; /* Red accent */
            --accent: #f4a261; /* Orange accent */
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            line-height: 1.6;
            color: var(--dark);
            background-color: #fff;
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section {
            padding: 100px 0;
            position: relative;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.8rem;
            color: var(--primary);
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: var(--secondary);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .section-title p {
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.1rem;
        }

        .btn {
            display: inline-block;
            padding: 16px 36px;
            background: var(--secondary);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
            box-shadow: 0 5px 15px rgba(230, 57, 70, 0.3);
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.7s;
            z-index: -1;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:hover {
            background: #c1121f;
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(230, 57, 70, 0.4);
        }

        .btn-primary {
            background: var(--primary);
            box-shadow: 0 5px 15px rgba(26, 58, 108, 0.3);
        }

        .btn-primary:hover {
            background: #0d2b52;
            box-shadow: 0 10px 25px rgba(26, 58, 108, 0.4);
        }

        /* Header Styles */
        header {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: var(--transition);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo-icon {
            width: 60px;
            height: 60px;
            background: var(--primary);
            color: white;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: 700;
            margin-right: 15px;
            box-shadow: 0 5px 15px rgba(26, 58, 108, 0.3);
            transition: var(--transition);
        }

        .logo:hover .logo-icon {
            transform: rotate(5deg) scale(1.05);
        }

        .logo-text h1 {
            font-size: 1.9rem;
            color: var(--primary);
            line-height: 1.2;
        }

        .logo-text span {
            color: var(--secondary);
            font-weight: 700;
        }

        .logo-text p {
            font-size: 0.9rem;
            color: var(--gray);
            letter-spacing: 1.5px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-menu li {
            margin-left: 30px;
            position: relative;
        }

        .nav-menu a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 600;
            font-size: 1.05rem;
            transition: var(--transition);
            padding: 8px 0;
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            background: var(--secondary);
            bottom: 0;
            left: 0;
            transition: var(--transition);
            border-radius: 2px;
        }

        .nav-menu a:hover::after,
        .nav-menu a.active::after {
            width: 100%;
        }

        .nav-menu a:hover {
            color: var(--secondary);
        }

        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--primary);
            transition: var(--transition);
        }

        .mobile-toggle:hover {
            color: var(--secondary);
        }

        /* Hero Section with Sliding Banner */
        .hero {
            height: 100vh;
            position: relative;
            overflow: hidden;
        }

        .hero-slider {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
        }

        .slide.active {
            opacity: 1;
        }

        .slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(26, 58, 108, 0.8) 0%, rgba(26, 58, 108, 0.6) 100%);
        }

        .slide-1 {
            background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
        }

        .slide-2 {
            background-image: url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
        }

        .slide-3 {
            background-image: url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
        }

        .hero-content {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
            padding: 0 20px;
            transform: translateY(30px);
            opacity: 0;
            transition: all 0.8s ease 0.3s;
        }

        .slide.active .hero-content {
            transform: translateY(0);
            opacity: 1;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 25px;
            line-height: 1.2;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }

        .hero p {
            font-size: 1.4rem;
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-btns {
            display: flex;
            justify-content: center;
            gap: 25px;
        }

        .slider-controls {
            position: absolute;
            bottom: 40px;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10;
        }

        .slider-dots {
            display: flex;
            gap: 15px;
        }

        .slider-dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: var(--transition);
        }

        .slider-dot.active {
            background: white;
            transform: scale(1.3);
        }

        .slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            transition: var(--transition);
            z-index: 10;
        }

        .slider-arrow:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .slider-arrow.prev {
            left: 30px;
        }

        .slider-arrow.next {
            right: 30px;
        }

        /* About Section */
        .about-content {
            display: flex;
            align-items: center;
            gap: 70px;
        }

        .about-text {
            flex: 1;
        }

        .about-text h3 {
            font-size: 2.2rem;
            color: var(--primary);
            margin-bottom: 30px;
        }

        .about-text p {
            margin-bottom: 25px;
            color: var(--gray);
            font-size: 1.1rem;
        }

        .about-features {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 40px;
        }

        .feature {
            flex: 1 1 250px;
            display: flex;
            align-items: flex-start;
            gap: 20px;
            padding: 25px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
        }

        .feature:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        .feature i {
            color: var(--secondary);
            font-size: 2.2rem;
            margin-top: 5px;
            transition: var(--transition);
        }

        .feature:hover i {
            transform: scale(1.2) rotate(5deg);
        }

        .about-image {
            flex: 1;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
            transition: var(--transition);
        }

        .about-image:hover {
            transform: scale(1.03);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: var(--transition);
        }

        .about-image:hover img {
            transform: scale(1.05);
        }

        /* Services Section */
        .services {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }

        .service-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
            position: relative;
        }

        .service-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .service-img {
            height: 240px;
            overflow: hidden;
            position: relative;
        }

        .service-img::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent, rgba(26, 58, 108, 0.8));
            opacity: 0;
            transition: var(--transition);
        }

        .service-card:hover .service-img::after {
            opacity: 1;
        }

        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .service-card:hover .service-img img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 35px 30px;
        }

        .service-content h3 {
            font-size: 1.6rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .service-content p {
            color: var(--gray);
            margin-bottom: 25px;
        }

        /* Products Section */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.12);
        }

        .product-img {
            height: 240px;
            overflow: hidden;
        }

        .product-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .product-card:hover .product-img img {
            transform: scale(1.1);
        }

        .product-content {
            padding: 30px;
            text-align: center;
        }

        .product-content h3 {
            font-size: 1.5rem;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .product-content p {
            color: var(--gray);
        }

        /* Projects Section */
        .projects {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }

        .project-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            position: relative;
            transition: var(--transition);
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .project-img {
            height: 300px;
            overflow: hidden;
        }

        .project-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .project-card:hover .project-img img {
            transform: scale(1.1);
        }

        .project-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(26, 58, 108, 0.95), transparent);
            color: white;
            padding: 40px 30px 30px;
            transform: translateY(100%);
            transition: var(--transition);
        }

        .project-card:hover .project-overlay {
            transform: translateY(0);
        }

        .project-overlay h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        /* Why Choose Us Section */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .feature-card {
            text-align: center;
            padding: 50px 30px;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            background: white;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--secondary);
            transform: scaleX(0);
            transition: var(--transition);
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.12);
        }

        .feature-icon {
            width: 90px;
            height: 90px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            font-size: 2.2rem;
            transition: var(--transition);
        }

        .feature-card:hover .feature-icon {
            background: var(--secondary);
            transform: scale(1.1) rotate(5deg);
        }

        .feature-card h3 {
            font-size: 1.6rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        /* Contact Section */
        .contact {
            background: linear-gradient(135deg, rgba(26, 58, 108, 0.95) 0%, rgba(26, 58, 108, 0.85) 100%), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }

        .contact .section-title h2 {
            color: white;
        }

        .contact .section-title h2::after {
            background: var(--accent);
        }

        .contact-content {
            display: flex;
            gap: 70px;
        }

        .contact-info {
            flex: 1;
        }

        .contact-info h3 {
            font-size: 2rem;
            margin-bottom: 25px;
        }

        .contact-details {
            margin-top: 40px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 35px;
            transition: var(--transition);
        }

        .contact-item:hover {
            transform: translateX(10px);
        }

        .contact-icon {
            width: 70px;
            height: 70px;
            background: var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 25px;
            font-size: 1.6rem;
            flex-shrink: 0;
            transition: var(--transition);
        }

        .contact-item:hover .contact-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .contact-text h4 {
            font-size: 1.4rem;
            margin-bottom: 10px;
        }

        .contact-form {
            flex: 1;
            background: white;
            padding: 50px 40px;
            border-radius: 15px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-group label {
            display: block;
            margin-bottom: 12px;
            color: var(--dark);
            font-weight: 600;
        }

        .form-control {
            width: 100%;
            padding: 16px 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1.05rem;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(26, 58, 108, 0.2);
        }

        textarea.form-control {
            min-height: 180px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 100px 0 40px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 60px;
            margin-bottom: 60px;
        }

        .footer-col h3 {
            font-size: 1.5rem;
            margin-bottom: 35px;
            position: relative;
            padding-bottom: 15px;
        }

        .footer-col h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 60px;
            height: 3px;
            background: var(--secondary);
        }

        .footer-col p {
            margin-bottom: 30px;
            color: #adb5bd;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 18px;
        }

        .footer-links a {
            color: #adb5bd;
            text-decoration: none;
            transition: var(--transition);
            display: inline-block;
        }

        .footer-links a:hover {
            color: var(--secondary);
            transform: translateX(8px);
        }

        .social-links {
            display: flex;
            gap: 18px;
            margin-top: 30px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--secondary);
            transform: translateY(-8px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 40px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #adb5bd;
            font-size: 1rem;
        }

        /* Animations */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        /* Responsive Styles */
        @media (max-width: 1100px) {
            .hero h1 {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 992px) {
            .about-content,
            .contact-content {
                flex-direction: column;
            }

            .about-image {
                margin-top: 50px;
            }

            .hero h1 {
                font-size: 3rem;
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                position: fixed;
                top: 80px;
                left: -100%;
                flex-direction: column;
                background-color: white;
                width: 100%;
                text-align: center;
                transition: var(--transition);
                box-shadow: 0 10px 27px rgba(0, 0, 0, 0.05);
                padding: 40px 0;
            }

            .nav-menu.active {
                left: 0;
            }

            .nav-menu li {
                margin: 20px 0;
            }

            .mobile-toggle {
                display: block;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .hero-btns {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 300px;
                margin-bottom: 20px;
            }

            .section {
                padding: 80px 0;
            }

            .slider-arrow {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .section {
                padding: 70px 0;
            }

            .section-title h2 {
                font-size: 2.2rem;
            }

            .hero h1 {
                font-size: 2.2rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .contact-form {
                padding: 35px 25px;
            }

            .services-grid,
            .products-grid,
            .projects-grid,
            .features-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="header">
        <div class="container header-container">
            <div class="logo">
                <div class="logo-icon floating">GBS</div>
                <div class="logo-text">
                    <h1>GBS <span>Formwork</span> Systems</h1>
                    <p>BUILDING EXCELLENCE</p>
                </div>
            </div>
            <div class="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="nav-menu">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>

    <!-- Hero Section with Sliding Banner -->
    <section class="hero" id="home">
        <div class="hero-slider">
            <div class="slide slide-1 active">
                <div class="container">
                    <div class="hero-content">
                        <h1>Innovative Formwork Solutions</h1>
                        <p>GBS Formwork Systems delivers cutting-edge formwork technology for construction projects of any scale and complexity.</p>
                        <div class="hero-btns">
                            <a href="#contact" class="btn">Get Free Quote</a>
                            <a href="#about" class="btn btn-primary">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide slide-2">
                <div class="container">
                    <div class="hero-content">
                        <h1>Precision Engineering Excellence</h1>
                        <p>Our advanced formwork systems ensure perfect concrete structures with maximum efficiency and safety.</p>
                        <div class="hero-btns">
                            <a href="#contact" class="btn">Get Free Quote</a>
                            <a href="#services" class="btn btn-primary">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide slide-3">
                <div class="container">
                    <div class="hero-content">
                        <h1>Global Construction Partner</h1>
                        <p>Trusted by construction firms worldwide for reliable, durable, and innovative formwork solutions.</p>
                        <div class="hero-btns">
                            <a href="#contact" class="btn">Get Free Quote</a>
                            <a href="#projects" class="btn btn-primary">Our Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="slider-arrow prev">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="slider-arrow next">
            <i class="fas fa-chevron-right"></i>
        </div>
        
        <div class="slider-controls">
            <div class="slider-dots">
                <div class="slider-dot active" data-slide="0"></div>
                <div class="slider-dot" data-slide="1"></div>
                <div class="slider-dot" data-slide="2"></div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="section-title">
                <h2>About GBS Formwork</h2>
                <p>With decades of experience in the construction industry, we are committed to delivering superior formwork solutions that exceed expectations.</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Leading Innovation in Formwork Systems</h3>
                    <p>GBS Formwork Systems is a trusted industry leader specializing in high-quality formwork systems for residential, commercial, and industrial projects worldwide.</p>
                    <p>Our team of experienced engineers and technicians is dedicated to providing innovative solutions that meet the highest standards of safety, efficiency, and durability while reducing construction time and costs.</p>
                    <div class="about-features">
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Quality Assurance</h4>
                                <p>All our products undergo rigorous quality control checks</p>
                            </div>
                        </div>
                        <div class="feature">
                            <i class="fas fa-users"></i>
                            <div>
                                <h4>Expert Team</h4>
                                <p>Skilled professionals with decades of combined experience</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="GBS Construction Site">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
                <p>We offer a comprehensive range of formwork services tailored to meet your specific project requirements and challenges.</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Wall Formwork">
                    </div>
                    <div class="service-content">
                        <h3>Wall Formwork Systems</h3>
                        <p>Customized wall formwork solutions for all types of construction projects with precision engineering and efficiency.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1541976590-713941681591?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80" alt="Slab Formwork">
                    </div>
                    <div class="service-content">
                        <h3>Slab Formwork Solutions</h3>
                        <p>Advanced slab formwork systems designed for speed, safety, and superior concrete finish quality.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Column Formwork">
                    </div>
                    <div class="service-content">
                        <h3>Column Formwork Technology</h3>
                        <p>Specialized column formwork solutions for perfect vertical structures with minimal effort and maximum efficiency.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="section" id="products">
        <div class="container">
            <div class="section-title">
                <h2>Our Products</h2>
                <p>Explore our wide range of high-quality formwork products designed for durability, efficiency, and exceptional performance.</p>
            </div>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Modular Formwork">
                    </div>
                    <div class="product-content">
                        <h3>Modular Formwork Systems</h3>
                        <p>Versatile and reusable systems for various applications with quick assembly and disassembly.</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1541976590-713941681591?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80" alt="Aluminum Formwork">
                    </div>
                    <div class="product-content">
                        <h3>Aluminum Formwork</h3>
                        <p>Lightweight yet strong solutions for fast construction cycles and reduced labor costs.</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Plastic Formwork">
                    </div>
                    <div class="product-content">
                        <h3>Plastic Formwork</h3>
                        <p>Cost-effective and durable systems for repetitive use with easy handling and maintenance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="section projects" id="projects">
        <div class="container">
            <div class="section-title">
                <h2>Our Projects</h2>
                <p>Take a look at some of our successful projects showcasing our expertise and innovation in formwork solutions worldwide.</p>
            </div>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://images.unsplash.com/photo-1541976590-713941681591?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80" alt="Commercial Building">
                    </div>
                    <div class="project-overlay">
                        <h3>Skyline Commercial Complex</h3>
                        <p>Complete formwork solution for a 35-story commercial building with challenging architectural features.</p>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Residential Tower">
                    </div>
                    <div class="project-overlay">
                        <h3>Azure Residential Towers</h3>
                        <p>Aluminum formwork system for twin 40-story high-rise residential projects with accelerated timeline.</p>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Industrial Project">
                    </div>
                    <div class="project-overlay">
                        <h3>Global Industrial Facility</h3>
                        <p>Custom formwork solutions for a large industrial complex with specialized structural requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose GBS</h2>
                <p>Discover what makes GBS Formwork Systems the preferred choice for construction professionals worldwide.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safety First Approach</h3>
                    <p>Our formwork systems are engineered with the highest safety standards to protect workers and ensure project integrity.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Innovative Solutions</h3>
                    <p>We continuously develop and implement cutting-edge formwork technologies to improve efficiency and results.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Timely Project Delivery</h3>
                    <p>We understand the importance of deadlines and ensure all our projects are completed on schedule, every time.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Technical Support</h3>
                    <p>Our dedicated support team is available round the clock to address any concerns or emergencies on your site.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
                <p>Get in touch with our team to discuss your formwork requirements and get a customized solution for your project.</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Let's Build Something Great Together</h3>
                    <p>Reach out to us for high-quality formwork solutions that meet your specific needs, budget, and timeline requirements.</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Our Location</h4>
                                <p>123 Construction Avenue, Industrial Area, Mumbai - 400001</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Phone Number</h4>
                                <p>+91 98765 43210</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Email Address</h4>
                                <p>info@gbsformwork.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" class="form-control" placeholder="Enter your email address" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" class="form-control" placeholder="Enter your phone number">
                        </div>
                        <div class="form-group">
                            <label for="message">Project Details</label>
                            <textarea id="message" class="form-control" placeholder="Tell us about your project requirements, timeline, and specifications" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <h3>GBS Formwork Systems</h3>
                    <p>Leading global provider of innovative, high-quality formwork solutions for construction projects of all sizes and complexities.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Our Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">Wall Formwork</a></li>
                        <li><a href="#">Slab Formwork</a></li>
                        <li><a href="#">Column Formwork</a></li>
                        <li><a href="#">Beam Formwork</a></li>
                        <li><a href="#">Custom Solutions</a></li>
                        <li><a href="#">Technical Consultation</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact Info</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> 123 Construction Avenue, Mumbai</li>
                        <li><i class="fas fa-phone"></i> +91 98765 43210</li>
                        <li><i class="fas fa-envelope"></i> info@gbsformwork.com</li>
                        <li><i class="fas fa-clock"></i> Mon - Sat: 9:00 - 18:00</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 GBS Formwork Systems. All Rights Reserved. | Designed with <i class="fas fa-heart" style="color: var(--secondary);"></i> for Construction Excellence</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        document.querySelector('.mobile-toggle').addEventListener('click', function() {
            document.querySelector('.nav-menu').classList.toggle('active');
            this.querySelector('i').classList.toggle('fa-bars');
            this.querySelector('i').classList.toggle('fa-times');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.querySelector('.nav-menu').classList.remove('active');
                document.querySelector('.mobile-toggle i').classList.add('fa-bars');
                document.querySelector('.mobile-toggle i').classList.remove('fa-times');
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Header background on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if(window.scrollY > 100) {
                header.style.backgroundColor = 'rgba(255, 255, 255, 0.98)';
                header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.1)';
                header.style.padding = '10px 0';
            } else {
                header.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
                header.style.padding = '15px 0';
            }
        });

        // Hero Slider Functionality
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.slider-dot');
        const prevBtn = document.querySelector('.slider-arrow.prev');
        const nextBtn = document.querySelector('.slider-arrow.next');
        let currentSlide = 0;
        let slideInterval;

        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            currentSlide = (n + slides.length) % slides.length;
            
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }

        function startSlideShow() {
            slideInterval = setInterval(nextSlide, 5000);
        }

        function resetSlideShow() {
            clearInterval(slideInterval);
            startSlideShow();
        }

        // Event Listeners for Slider
        nextBtn.addEventListener('click', () => {
            nextSlide();
            resetSlideShow();
        });

        prevBtn.addEventListener('click', () => {
            prevSlide();
            resetSlideShow();
        });

        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                const slideIndex = parseInt(this.getAttribute('data-slide'));
                showSlide(slideIndex);
                resetSlideShow();
            });
        });

        // Start the slideshow
        startSlideShow();

        // Animation on scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.section-title, .about-content, .about-image, .feature, .service-card, .product-card, .project-card, .feature-card, .contact-content, .contact-item, .form-group');
            
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                    element.style.transition = 'all 0.8s ease';
                }
            });
        }

        // Initial animation for hero
        window.addEventListener('load', function() {
            document.querySelector('.hero-content').style.opacity = '1';
            document.querySelector('.hero-content').style.transform = 'translateY(0)';
        });

        // Scroll event listener for animations
        window.addEventListener('scroll', animateOnScroll);
        
        // Initial check on page load
        animateOnScroll();

        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });

        // Active navigation highlighting
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-menu a');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if(scrollY >= (sectionTop - 100)) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if(link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>