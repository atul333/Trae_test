<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pricing - Telegram Ads Platform</title>
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
        .pricing-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        .pricing-card {
            background: #ffffff;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.2s;
        }
        .pricing-card:hover {
            transform: translateY(-5px);
        }
        .pricing-card.popular {
            border: 2px solid #4299e1;
            position: relative;
        }
        .popular-badge {
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            background: #4299e1;
            color: white;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 0.875rem;
            font-weight: 600;
        }
        .price {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2d3748;
            margin: 1rem 0;
        }
        .price span {
            font-size: 1rem;
            color: #718096;
        }
        .features-list {
            list-style: none;
            padding: 0;
            margin: 2rem 0;
        }
        .features-list li {
            margin: 0.75rem 0;
            color: #4a5568;
        }
        .features-list i {
            color: #4299e1;
            margin-right: 0.5rem;
        }
        .cta-button {
            display: inline-block;
            background-color: #4299e1;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.2s;
        }
        .cta-button:hover {
            background-color: #3182ce;
        }
        @media (max-width: 768px) {
            .nav-menu, .auth-buttons {
                display: none;
            }
            .container {
                padding: 4rem 1rem 1rem;
            }
            .pricing-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <nav class="nav-header">
        <div class="nav-container">
            <a href="/" class="logo">Telegram Ads</a>
            <ul class="nav-menu">
                <li><a href="/features">Features</a></li>
                <li><a href="/pricing" class="active">Pricing</a></li>
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
        <div class="pricing-header">
            <h1>Simple, Transparent Pricing</h1>
            <p>Choose the plan that best fits your needs</p>
        </div>

        <div class="pricing-grid">
            <div class="pricing-card">
                <h2>Starter</h2>
                <div class="price">$29<span>/month</span></div>
                <ul class="features-list">
                    <li><i class="fas fa-check"></i>Basic Analytics</li>
                    <li><i class="fas fa-check"></i>Up to 5 Campaigns</li>
                    <li><i class="fas fa-check"></i>Basic Targeting</li>
                    <li><i class="fas fa-check"></i>Email Support</li>
                </ul>
                <a href="/register" class="cta-button">Get Started</a>
            </div>

            <div class="pricing-card popular">
                <div class="popular-badge">Most Popular</div>
                <h2>Professional</h2>
                <div class="price">$99<span>/month</span></div>
                <ul class="features-list">
                    <li><i class="fas fa-check"></i>Advanced Analytics</li>
                    <li><i class="fas fa-check"></i>Unlimited Campaigns</li>
                    <li><i class="fas fa-check"></i>Advanced Targeting</li>
                    <li><i class="fas fa-check"></i>Priority Support</li>
                    <li><i class="fas fa-check"></i>API Access</li>
                </ul>
                <a href="/register" class="cta-button">Get Started</a>
            </div>

            <div class="pricing-card">
                <h2>Enterprise</h2>
                <div class="price">Custom</div>
                <ul class="features-list">
                    <li><i class="fas fa-check"></i>Custom Analytics</li>
                    <li><i class="fas fa-check"></i>Unlimited Everything</li>
                    <li><i class="fas fa-check"></i>Custom Integration</li>
                    <li><i class="fas fa-check"></i>24/7 Support</li>
                    <li><i class="fas fa-check"></i>Dedicated Manager</li>
                </ul>
                <a href="/contact" class="cta-button">Contact Sales</a>
            </div>
        </div>
    </div>
</body>
</html>