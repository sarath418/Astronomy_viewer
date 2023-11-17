<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <style>
        /* Reset some default browser styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Set a background color and text color for the entire page */
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Style the header and navigation menu */
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        nav ul {
            list-style: none;
            text-align: center;
        }

        nav li {
            display: inline;
            margin: 0 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        /* Style the hero background image */
        .hero::before {
            content: "";
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1; /* Place it behind the content */
        }

        /* Style the text and button within the hero section */
        .hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
            position: absolute;
            top: 50%; /* Center vertically */
            left: 50%; /* Center horizontally */
            transform: translate(-50%, -50%);
        }

        .hero p {
            font-size: 18px;
            position: absolute;
            top: 70%; /* Adjust the vertical position */
            left: 50%; /* Center horizontally */
            transform: translateX(-50%);
        }

        /* Style the about section */
        .about-section {
            padding: 40px;
        }

        /* Style the contact button section */
        .contact-button-section {
            text-align: center;
            padding: 20px;
        }

        /* Style the contact button */
        .contact-button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="explore.php">Home</a></li>
                <li><a href="events.php">Constellation</a></li>
                <li><a href="cal.php">Articles</a></li>
                <li><a href="CO.php">Stargazing Events</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    </header>

    <!-- About Section -->
    <section class="about-section">
        <h2>About Our Website</h2><br>
        <p>
            Welcome to Astronomy Viewer, your online portal to the cosmos! Our website is your gateway to the fascinating world of astronomy, stargazing, and all things celestial. Whether you're a seasoned astronomer, a curious stargazer, or someone who simply gazes at the night sky in wonder, you've found the perfect place to fuel your cosmic curiosity.
        </p><br><br>
        <ul>
            <li>Stargazing Events: Stay updated on upcoming stargazing events, meteor showers, eclipses, and other celestial spectacles. We'll guide you on when and where to witness these cosmic phenomena.</li><br>
            <li>Astronomy Articles: Dive into a universe of knowledge with our collection of articles on space, stars, planets, and beyond. Whether you're a beginner or an expert, you'll find something to pique your interest.</li><br>
            <li>Community Hub: Join a thriving community of space enthusiasts, ask questions, share your astrophotography, and connect with fellow explorers of the night sky.</li><br>
            <li>Article Contributions: Have a cosmic discovery or an astronomy story to share? You can contribute your articles and insights to our growing repository of celestial wisdom.</li><br>
            <li>Explore and Learn: Immerse yourself in the wonders of the universe, from the birth of stars to the mysteries of black holes. We provide an engaging platform for learning and exploration.</li><br>
        </ul>
        <p>
            Our mission is to inspire, educate, and connect people with the mysteries of the cosmos. Join us in this celestial adventure as we journey through the universe and unravel its secrets. Together, we'll reach for the stars and explore the infinite wonders of space.
        </p><br>

        <p>
            Welcome to Astronomy Viewer, where the sky is not the limit—it's just the beginning.
        </p>
    </section>

    <!-- Contact Button Section -->
    <section class="contact-button-section">
        <button class="contact-button" onclick="openContactPage()">Contact Us</button>
    </section>

    <footer>
        <!-- Footer content goes here if needed -->
    </footer>

    <script>
        function openContactPage() {
            window.location.href = "contact.php";
        }
    </script>
</body>
</html>
