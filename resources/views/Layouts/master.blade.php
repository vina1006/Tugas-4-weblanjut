<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Modern Gradient Theme */
        :root {
            --primary-color: #4158D0;
            --secondary-color: #C850C0;
            --accent-color: #FFCC70;
            --text-color: #333333;
            --light-text: #ffffff;
            --background: #f8f9fa;
            --card-bg: #ffffff;
            --navbar-height: 70px;
        }

        body {
            background: var(--background);
            color: var(--text-color);
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            padding-top: var(--navbar-height);
        }

        /* Stylish Navbar */
        .navbar {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            padding: 15px 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            height: var(--navbar-height);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .navbar-scrolled {
            padding: 10px 0;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
        }

        .navbar-brand {
            color: var(--light-text) !important;
            font-weight: 700;
            font-size: 1.8rem;
            letter-spacing: 1px;
            position: relative;
            display: inline-block;
        }

        .navbar-brand::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent-color);
            transition: width 0.3s ease;
        }

        .navbar-brand:hover::after {
            width: 100%;
        }

        .nav-link {
            color: var(--light-text) !important;
            font-weight: 500;
            margin: 0 10px;
            padding: 8px 15px !important;
            border-radius: 25px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 25px;
            z-index: -1;
            transition: all 0.3s ease;
        }

        .nav-link:hover::before {
            width: 100%;
        }

        .navbar-toggler {
            border: none;
            padding: 0.5rem;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* Impressive Content Section */
        .content-wrapper {
            padding: 50px 0;
        }

        .content {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin: 30px auto;
            max-width: 1200px;
            position: relative;
            overflow: hidden;
            transform: translateY(30px);
            opacity: 0;
            transition: all 0.5s cubic-bezier(0.5, 0, 0, 1);
        }

        .content::before {
            content: '';
            position: absolute;
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border-radius: 50%;
            top: -50px;
            right: -50px;
            opacity: 0.1;
        }

        .content::after {
            content: '';
            position: absolute;
            width: 150px;
            height: 150px;
            background: linear-gradient(135deg, var(--secondary-color) 0%, var(--accent-color) 100%);
            border-radius: 50%;
            bottom: -75px;
            left: -75px;
            opacity: 0.1;
        }

        .fade-in {
            opacity: 1;
            transform: translateY(0);
        }

        /* Animated Heading */
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 60%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            bottom: -10px;
            left: 0;
            border-radius: 5px;
        }

        /* Fancy Footer */
        .footer {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: var(--light-text);
            padding: 60px 0 30px;
            position: relative;
            margin-top: 50px;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: -50px;
            left: 0;
            width: 100%;
            height: 50px;
            background: var(--background);
            clip-path: polygon(0 0, 100% 100%, 100% 100%, 0% 100%);
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        .footer-section {
            flex: 1;
            min-width: 250px;
            margin: 20px;
        }

        .footer-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background-color: var(--accent-color);
            bottom: -10px;
            left: 0;
            border-radius: 5px;
        }

        .footer ul {
            list-style: none;
            padding: 0;
        }

        .footer ul li {
            margin-bottom: 15px;
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .footer-link:hover {
            color: var(--light-text);
            transform: translateX(5px);
        }

        .social-links {
            display: flex;
            margin-top: 20px;
        }

        .social-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 10px;
            color: var(--light-text);
            font-size: 18px;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background-color: var(--accent-color);
            transform: translateY(-5px);
            color: var(--text-color);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Button Styles */
        .custom-btn {
            padding: 12px 30px;
            border-radius: 30px;
            border: none;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: var(--light-text);
        }

        .custom-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            z-index: -1;
        }

        .custom-btn:hover::before {
            width: 100%;
        }

        /* Card Styles */
        .feature-card {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(0, 0, 0, 0.03);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: var(--light-text);
            font-size: 28px;
            border-radius: 20px;
            margin-bottom: 25px;
            transition: all 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            border-radius: 50%;
            background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%);
        }

        /* Additional Animations */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-15px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
            }
            .footer-section {
                margin: 10px 0;
            }
            .content {
                padding: 25px;
            }
            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home me-1"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}"><i class="fas fa-info-circle me-1"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}"><i class="fas fa-envelope me-1"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content-wrapper">
        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3 class="footer-title">About Us</h3>
                    <p>We are dedicated to providing exceptional services and innovative solutions to meet your needs. Our team of experts is committed to excellence in every project.</p>
                    <div class="social-links">
                        <a href="https://www.instagram.com/jjehaee__?igsh=MTZ0Z2lza2kxeHVtZw==" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul>
                        <li><a href="{{ url('/') }}" class="footer-link"><i class="fas fa-chevron-right me-1"></i> Home</a></li>
                        <li><a href="{{ url('/about') }}" class="footer-link"><i class="fas fa-chevron-right me-1"></i> About</a></li>
                        <li><a href="{{ url('/contact') }}" class="footer-link"><i class="fas fa-chevron-right me-1"></i> Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3 class="footer-title">Contact Us</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt me-2"></i> Majalengka </li>
                        <li><i class="fas fa-phone-alt me-2"></i> 088222854534</li>
                        <li><i class="fas fa-envelope me-2"></i> vinafitriya2@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Vina Pikria Aenun. All rights reserved.</p>
                <p>
                    <a href="{{ url('/privacy') }}" class="footer-link">Privacy Policy</a> | 
                    <a href="{{ url('/terms') }}" class="footer-link">Terms of Service</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Fade in content
            const content = document.querySelector('.content');
            setTimeout(() => {
                content.classList.add('fade-in');
            }, 300);

            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            });

            // Add smooth scrolling to all links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>
</html>