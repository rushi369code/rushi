<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cake Bakery</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url("https://img.lovepik.com/photo/48029/9152.jpg_wh860.jpg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #333;
            animation: fadeInBody 1.5s ease-in-out;
        }

        @keyframes fadeInBody {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        header {
            background-color: rgba(248, 198, 208, 0.9);
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            animation: slideInHeader 1s ease-out;
        }

        @keyframes slideInHeader {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(0); }
        }

        .contact-info {
            display: flex;
            gap: 20px;
        }

        .contact-info span {
            font-size: 14px;
        }

        nav {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            animation: slideInNav 1.5s ease-out;
        }

        @keyframes slideInNav {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(0); }
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            opacity: 0;
            animation: fadeInNavLinks 1.5s ease-out forwards;
        }

        @keyframes fadeInNavLinks {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        nav ul li:nth-child(1) { animation-delay: 0.1s; }
        nav ul li:nth-child(2) { animation-delay: 0.2s; }
        nav ul li:nth-child(3) { animation-delay: 0.3s; }
        nav ul li:nth-child(4) { animation-delay: 0.4s; }
        nav ul li:nth-child(5) { animation-delay: 0.5s; }
        nav ul li:nth-child(6) { animation-delay: 0.6s; }
        nav ul li:nth-child(7) { animation-delay: 0.7s; }
        nav ul li:nth-child(8) { animation-delay: 0.8s; }

        .hero {
            position: relative;
            text-align: center;
            color: white;
            animation: fadeInHero 2s ease-out;
        }

        @keyframes fadeInHero {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .hero img {
            width: 100%;
            height: auto;
        }

        .hero h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.5);
            padding: 10px 20px;
            border-radius: 5px;
            animation: fadeInHeroText 2s ease-out;
        }

        @keyframes fadeInHeroText {
            0% { opacity: 0; transform: translate(-50%, -60%); }
            100% { opacity: 1; transform: translate(-50%, -50%); }
        }

        .cake-image {
            text-align: center;
            margin: 20px 0;
        }

        .cake-image img {
            max-width: 300px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            animation: fadeInCakeImage 1s ease-out;
        }

        @keyframes fadeInCakeImage {
            0% { opacity: 0; transform: scale(0.8); }
            100% { opacity: 1; transform: scale(1); }
        }

        /* 10 New Animation Effects */
        .login-form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            animation: fadeInForm 1.5s ease-out;
        }

        @keyframes fadeInForm {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #f8c6d0;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s ease-in-out;
            animation: popInButton 1s ease-out;
        }

        @keyframes popInButton {
            0% { opacity: 0; transform: scale(0.8); }
            100% { opacity: 1; transform: scale(1); }
        }

        .login-form button:hover {
            background-color: #e0a6b3;
            transform: scale(1.05);
        }

        footer {
            background-color: rgba(248, 198, 208, 0.9);
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            animation: fadeInFooter 1.5s ease-out;
        }

        @keyframes fadeInFooter {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        /* 10 New Animations Below */
        .cake-gallery {
            animation: fadeInGallery 1.5s ease-out;
        }

        @keyframes fadeInGallery {
            0% { opacity: 0; transform: translateY(50px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .cake-gallery img {
            animation: scaleUpCakeImage 1.5s ease-out;
        }

        @keyframes scaleUpCakeImage {
            0% { opacity: 0; transform: scale(0.5); }
            100% { opacity: 1; transform: scale(1); }
        }

        .cake-gallery img:hover {
            animation: rotateCakeImage 0.5s ease-in-out;
        }

        @keyframes rotateCakeImage {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(15deg); }
        }

        .cake-description {
            opacity: 0;
            animation: fadeInDescription 2s ease-out forwards;
        }

        @keyframes fadeInDescription {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .hero img:hover {
            animation: zoomInImage 0.5s ease-in-out;
        }

        @keyframes zoomInImage {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }

        .cake-description p {
            animation: slideInDescription 1s ease-out;
        }

        @keyframes slideInDescription {
            0% { transform: translateX(50px); opacity: 0; }
            100% { transform: translateX(0); opacity: 1; }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="contact-info">
             <p id="wel"><span>W</span>elcome <span>T</span>o <span>B</span>akrey <span>S</span>hop</p>
        </div>
        <div>
            <a href="#">Admin</a>
        </div>
    </header>

    <!-- Navigation Bar -->
    <nav>
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="#">Our Cakes</a></li>
            <li><a href="#">Cake Category</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="sign">Sign Up</a></li>
            <li><a href="login">login</a></li>
            <li><a href="#">Track Order</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <img src="https://img.lovepik.com/photo/48029/9152.jpg_wh860.jpg" alt="Cake Bakery">
        <h1>Welcome to Cake Bakery</h1>
    </div>

    <!-- Cake Gallery Section -->
    <div class="cake-gallery">
        <img src="https://via.placeholder.com/300" alt="Delicious Cake">
        <p class="cake-description">Our delicious cakes are baked fresh every day!</p>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Cake Bakery. All Rights Reserved.</p>
    </footer>
</body>
</html>
