<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Professional Landing Page">
    <meta name="author" content="Your Name">
    <title>Professional Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            background: #0056b3;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        nav {
            text-align: center;
            padding: 1rem 0;
            background: #f4f4f9;
        }
        nav a {
            text-decoration: none;
            color: #0056b3;
            margin: 0 1rem;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        section {
            padding: 2rem;
            text-align: center;
        }
        .cta {
            background: #007bff;
            color: #fff;
            padding: 1rem 2rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 1.5rem;
        }
        .cta:hover {
            background: #0056b3;
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Landing Page</h1>
    </header>

    <nav>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </nav>

    <section id="about">
        <h2>About Us</h2>
        <p>We are committed to delivering top-notch solutions for our clients. Our professional team ensures excellence in every project.</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <p>Explore our wide range of services tailored to meet your business needs.</p>
        <button class="cta">Learn More</button>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>Have questions? Feel free to reach out and we'll be happy to assist you!</p>
    </section>

    <footer>
        <p>&copy; 2024 Your Company Name. All rights reserved.</p>
    </footer>
</body>
</html>
?>