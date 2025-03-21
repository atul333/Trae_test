<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Telegram Ads Platform</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 0;
            color: #1a1a1a;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .nav-header {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2d3748;
            text-decoration: none;
        }
        .nav-menu {
            display: flex;
            gap: 2rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .nav-menu a {
            color: #4a5568;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }
        .nav-menu a:hover {
            color: #2d3748;
        }
        .auth-buttons {
            display: flex;
            gap: 1rem;
        }
        .auth-button {
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s;
        }
        .login-button {
            color: #4299e1;
            border: 2px solid #4299e1;
        }
        .login-button:hover {
            background-color: #4299e1;
            color: #ffffff;
        }
        .signup-button {
            background-color: #4299e1;
            color: #ffffff;
        }
        .signup-button:hover {
            background-color: #3182ce;
        }
        .mobile-menu-button {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #4a5568;
            cursor: pointer;
        }
        .footer {
            background-color: #2d3748;
            color: #ffffff;
            padding: 3rem 0;
            margin-top: auto;
        }
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }
        .footer-section h4 {
            color: #ffffff;
            margin-bottom: 1.5rem;
        }
        .footer-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .footer-section ul li {
            margin-bottom: 0.75rem;
        }
        .footer-section a {
            color: #cbd5e0;
            text-decoration: none;
            transition: color 0.2s;
        }
        .footer-section a:hover {
            color: #ffffff;
        }
        .social-links {
            display: flex;
            gap: 1rem;
        }
        .social-links a {
            color: #cbd5e0;
            font-size: 1.5rem;
            transition: color 0.2s;
        }
        .social-links a:hover {
            color: #ffffff;
        }
        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            margin-top: 2rem;
            border-top: 1px solid #4a5568;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        .header {
            text-align: center;
            padding: 4rem 0;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header h1 {
            font-size: 2.5rem;
            color: #2d3748;
            margin-bottom: 1rem;
        }
        .header p {
            font-size: 1.25rem;
            color: #4a5568;
            max-width: 600px;
            margin: 0 auto;
        }
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 4rem 0;
        }
        .feature-card {
            background: #ffffff;
            border-radius: 8px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .feature-card h3 {
            color: #2d3748;
            margin-bottom: 1rem;
        }
        .feature-card p {
            color: #4a5568;
            line-height: 1.6;
        }
        .cta-section {
            text-align: center;
            padding: 4rem 0;
            background-color: #2d3748;
            color: #ffffff;
        }
        .cta-button {
            display: inline-block;
            background-color: #4299e1;
            color: #ffffff;
            padding: 1rem 2rem;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.2s;
        }
        .cta-button:hover {
            background-color: #3182ce;
        }
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }
            .header {
                padding: 2rem 0;
            }
            .header h1 {
                font-size: 2rem;
            }
            .features {
                grid-template-columns: 1fr;
            }
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: #ffffff;
                padding: 1rem;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }
            .nav-menu.active {
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }
            .mobile-menu-button {
                display: block;
            }
            .auth-buttons {
                display: none;
            }
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .social-links {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <nav class="nav-header">
        <div class="nav-container">
            <a href="/" class="logo">Telegram Ads</a>
            <button class="mobile-menu-button">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-menu">
                <li><a href="/features">Features</a></li>
                <li><a href="/pricing">Pricing</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            <div class="auth-buttons">
                <a href="/login" class="auth-button login-button">Login</a>
                <a href="/register" class="auth-button signup-button">Sign Up</a>
            </div>
        </div>
    </nav>

    <div class="header" style="margin-top: 70px;">
        <div class="container">
            <h1>Welcome to Telegram Ads Platform</h1>
            <p>Your one-stop solution for managing and optimizing Telegram advertising campaigns</p>
        </div>
    </div>

    <div class="container">
        <div class="features">
            <div class="feature-card">
                <h3>Campaign Management</h3>
                <p>Create, manage, and track your Telegram advertising campaigns with ease</p>
            </div>
            <div class="feature-card">
                <h3>Analytics & Insights</h3>
                <p>Get detailed analytics and insights to optimize your advertising performance</p>
            </div>
            <div class="feature-card">
                <h3>Targeting Options</h3>
                <p>Reach your desired audience with advanced targeting capabilities</p>
            </div>
        </div>
    </div>

    <div class="cta-section">
        <div class="container">
            <h2>Ready to Start Advertising?</h2>
            <p>Join thousands of successful advertisers on Telegram</p>
            <a href="/register" class="cta-button">Get Started Now</a>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Company</h4>
                <ul>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/careers">Careers</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/press">Press</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Product</h4>
                <ul>
                    <li><a href="/features">Features</a></li>
                    <li><a href="/pricing">Pricing</a></li>
                    <li><a href="/security">Security</a></li>
                    <li><a href="/roadmap">Roadmap</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Resources</h4>
                <ul>
                    <li><a href="/docs">Documentation</a></li>
                    <li><a href="/api">API</a></li>
                    <li><a href="/guides">Guides</a></li>
                    <li><a href="/support">Support</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Connect</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Telegram Ads Platform. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            document.querySelector('.nav-menu').classList.toggle('active');
        });
    </script>
</body>
</html>
