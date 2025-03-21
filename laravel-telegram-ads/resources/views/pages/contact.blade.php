<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact - Telegram Ads Platform</title>
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
        .contact-content {
            background: #ffffff;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-top: 2rem;
        }
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        .contact-form {
            padding: 2rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #4a5568;
            font-weight: 500;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #e2e8f0;
            border-radius: 4px;
            font-size: 1rem;
        }
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #4299e1;
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.1);
        }
        .contact-info {
            padding: 2rem;
        }
        .contact-info h3 {
            color: #2d3748;
            margin-bottom: 1.5rem;
        }
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        .contact-item i {
            color: #4299e1;
            margin-right: 1rem;
            font-size: 1.25rem;
        }
        .submit-button {
            background-color: #4299e1;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .submit-button:hover {
            background-color: #3182ce;
        }
        @media (max-width: 768px) {
            .nav-menu, .auth-buttons {
                display: none;
            }
            .container {
                padding: 4rem 1rem 1rem;
            }
            .contact-grid {
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
                <li><a href="/pricing">Pricing</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact" class="active">Contact</a></li>
            </ul>
            <div class="auth-buttons">
                <a href="/login" class="auth-button login-button">Login</a>
                <a href="/register" class="auth-button signup-button">Sign Up</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Contact Us</h1>
        <div class="contact-content">
            <div class="contact-grid">
                <div class="contact-form">
                    <h2>Send us a Message</h2>
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="submit-button">Send Message</button>
                    </form>
                </div>
                <div class="contact-info">
                    <h2>Get in Touch</h2>
                    <p>Have questions? We're here to help!</p>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>support@telegramads.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+1 (555) 123-4567</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>123 Business Street<br>New York, NY 10001</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <span>Monday - Friday<br>9:00 AM - 6:00 PM EST</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>