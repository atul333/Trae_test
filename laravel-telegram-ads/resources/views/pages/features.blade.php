<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Features - Telegram Ads Platform</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 0;
            color: #1a1a1a;
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
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 6rem 2rem 2rem;
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        .feature-card {
            background: #ffffff;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .feature-icon {
            font-size: 2rem;
            color: #4299e1;
            margin-bottom: 1rem;
        }
        .feature-card h3 {
            color: #2d3748;
            margin-bottom: 1rem;
        }
        .feature-card p {
            color: #4a5568;
            line-height: 1.6;
        }
        @media (max-width: 768px) {
            .nav-menu, .auth-buttons {
                display: none;
            }
            .container {
                padding: 4rem 1rem 1rem;
            }
        }
    </style>
</head>
<body>
    <nav class="nav-header">
        <div class="nav-container">
            <a href="/" class="logo">Telegram Ads</a>
            <ul class="nav-menu">
                <li><a href="/features" class="active">Features</a></li>
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

    <div class="container">
        <h1>Platform Features</h1>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Advanced Analytics</h3>
                <p>Get detailed insights into your campaign performance with real-time analytics and reporting tools.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3>Targeted Advertising</h3>
                <p>Reach your ideal audience with precise targeting options based on demographics, interests, and behavior.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-robot"></i>
                </div>
                <h3>Automated Campaigns</h3>
                <p>Save time with automated campaign management and optimization features.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <h3>Engagement Tools</h3>
                <p>Boost engagement with interactive ad formats and messaging features.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Security & Privacy</h3>
                <p>Keep your data safe with advanced security features and privacy controls.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>24/7 Support</h3>
                <p>Get help whenever you need it with our round-the-clock customer support team.</p>
            </div>
        </div>
    </div>
</body>
</html>