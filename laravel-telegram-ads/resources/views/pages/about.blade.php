<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About - Telegram Ads Platform</title>
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
        .about-content {
            background: #ffffff;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-top: 2rem;
        }
        .about-content h2 {
            color: #2d3748;
            margin-bottom: 1.5rem;
        }
        .about-content p {
            color: #4a5568;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }
        .team-section {
            margin-top: 3rem;
        }
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        .team-member {
            text-align: center;
        }
        .team-member img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 1rem;
        }
        .team-member h3 {
            color: #2d3748;
            margin-bottom: 0.5rem;
        }
        .team-member p {
            color: #718096;
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
                <li><a href="/features">Features</a></li>
                <li><a href="/pricing">Pricing</a></li>
                <li><a href="/about" class="active">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            <div class="auth-buttons">
                <a href="/login" class="auth-button login-button">Login</a>
                <a href="/register" class="auth-button signup-button">Sign Up</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>About Us</h1>
        <div class="about-content">
            <h2>Our Mission</h2>
            <p>At Telegram Ads Platform, we're dedicated to revolutionizing the way businesses advertise on Telegram. Our platform combines cutting-edge technology with user-friendly interfaces to make advertising accessible, effective, and measurable for businesses of all sizes.</p>

            <h2>Our Story</h2>
            <p>Founded in 2023, Telegram Ads Platform emerged from the growing need for a comprehensive advertising solution for the Telegram messaging platform. We recognized the potential of Telegram's massive user base and built a platform that helps businesses reach their target audience effectively.</p>

            <div class="team-section">
                <h2>Our Team</h2>
                <div class="team-grid">
                    <div class="team-member">
                        <div class="feature-icon">
                            <i class="fas fa-user-circle fa-4x"></i>
                        </div>
                        <h3>John Smith</h3>
                        <p>CEO & Founder</p>
                    </div>
                    <div class="team-member">
                        <div class="feature-icon">
                            <i class="fas fa-user-circle fa-4x"></i>
                        </div>
                        <h3>Sarah Johnson</h3>
                        <p>Head of Product</p>
                    </div>
                    <div class="team-member">
                        <div class="feature-icon">
                            <i class="fas fa-user-circle fa-4x"></i>
                        </div>
                        <h3>Michael Chen</h3>
                        <p>Lead Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>