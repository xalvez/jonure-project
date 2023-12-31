<!DOCTYPE html>
<html>
<head>
    <title>Charity Home</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

header {
    background: #333;
    color: #fff;
    padding: 20px;
}

.hero {
    background: url('hero-image.jpg') no-repeat center center/cover;
    height: 500px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.hero .container {
    background: rgba(0, 0, 0, 0.5);
    padding: 20px;
    border-radius: 10px;
}

button {
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    background: #333;
    color: #fff;
    cursor: pointer;
}

.about, .services, .contact {
    padding: 80px 0;
    text-align: center;
}

.container {
    max-width: 800px;
    margin: 0 auto;
}

footer {
    background: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
} 
    </style>
</head>
<body>
    <header>
        <h1>My Charity</h1>
    </header>

    <section class="hero">
        <div class="container">
            <h2>Donate and Make a Difference</h2>
            <p>Join us in our mission to help those in need.</p>
            <button id="donateBtn">Donate Now</button>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2>Our Services</h2>
            <ul>
                <li>Food Donation</li>
                <li>Medical Aid</li>
                <li>Education Support</li>
                <li>Shelter Assistance</li>
            </ul>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Email: info@mycharity.org</p>
            <p>Phone: 123-456-7890</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2022 My Charity. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>