<!DOCTYPE html>
<html>
<head>
    <title>Charity Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>

    <style>

      * {
    margin: 0;
    padding: 0;
    box-sizing:border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
}

header {
    background-color: #333;
    color: wheat;
    padding: 20px;
    text-align: center;
}

nav {
    background-color: #f9f9f9;
    padding: 10px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: center;
}

nav ul li {
    display: inline-block;
}

nav ul li a {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: #333;
}

section {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.banner {
    background-image: url(banner_image.jpg);
    background-size: cover;
    height: 300px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: #fff;
    animation: fadeIn 2s;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.banner h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

p {
    font-size: 18px;
    margin-bottom: 20px;
    animation: slideInUp 2s;
}

@keyframes slideInUp {
    from {
        transform: translateY(100px);
    }
    to {
        transform: translateY(0);
    }
}

.donate-button {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    margin-top: 20px;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}

.feature {
    display: flex;
    margin-top: 40px;
    animation: slideInRight 2s;
}

@keyframes slideInRight {
    from {
        transform: translateX(-100px);
    }
    to {
        transform: translateX(0);
    }
}

.feature img {
    width: 40%;
    border-radius: 5px;
}

.feature-text {
    background-color: #eee;
    padding: 20px;
    flex: 1;
    border-radius: 5px;
    margin-left: 20px;
}

.feature-text h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.feature-text p {
    font-size: 16px;
    margin-bottom: 20px;
}

.feature-text a {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
}

.gallery {
    margin-top: 40px;
    animation: fadeInUpBig 2s;
}

@keyframes fadeInUpBig {
    from {
        opacity: 0;
        transform: translateY(100px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.gallery h3 {
    font-size: 24px;
    margin-bottom: 20px;
}

.image-box {
    margin-bottom: 20px;
}

.image-box img {
    width: 100%;
    border-radius: 5px;
}

.newsletter {
    background-color: #f9f9f9;
    padding: 20px;
    margin-top: 40px;
    animation: fadeInLeftBig 2s;
}

@keyframes fadeInLeftBig {
    from {
        opacity: 0;
        transform: translateX(-100px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.newsletter h3 {
    font-size: 24px;
    margin-bottom: 20px;
}

.newsletter input[type="email"] {
    padding: 10px;
    width: 60%;
    border-radius: 5px;
}

.newsletter button {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    border: none;
    margin-top: 10px;
    cursor: pointer;
}

footer {
    background-color: #666;
    color: #fff;
    text-align: center;
    padding: 10px;
    margin-top: 40px;
}
    </style>
</head>
<body>
    <header>
        <h1>Charity Home</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Donate</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <section>
        <div class="banner">
            <h2>Welcome to Charity Home</h2>
            <p>We strive to make a difference through charitable works.</p>
            <a href="#" class="donate-button">Donate Now</a>
        </div>
        <div class="feature">
            <img src="pichelp.avif" alt="Feature Image">
            <div class="feature-text">
                <h3>Our Mission</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget elit mi. Mauris vel convallis mauris.</p>
                <a href="#">Learn More</a>
            </div>
        </div>
        <div class="gallery">
            <h3>Our Work</h3>
            <div class="image-box">
                <img src="gallery_image1.jpg" alt="Gallery Image 1">
            </div>
            <div class="image-box">
                <img src="gallery_image2.jpg" alt="Gallery Image 2">
            </div>
            <div class="image-box">
                <img src="gallery_image3.jpg" alt="Gallery Image 3">
            </div>
        </div>
        <div class="newsletter">
            <h3>Subscribe to our Newsletter</h3>
            <form>
                <input type="email" placeholder="Enter your email address">
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>
    <footer>
        <p>&copy; 2022 Charity Home. All rights reserved. | Privacy Policy | Terms of Service</p>
    </footer>
</body>
</html>