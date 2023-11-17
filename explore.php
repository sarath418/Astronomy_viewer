<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astronomy viewer</title>
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

        /* Style the hero section */
        .hero {
            background-image: url('asix1.jpg'); /* Initial background image */
            background-size: cover; /* Cover the entire container */
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 100px 0;
            position: relative;
            height: 300px; /* Set a fixed height for the hero section */
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

        .btn {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            position: absolute;
            top: 85%; /* Adjust the vertical position */
            left: 50%; /* Center horizontally */
            transform: translateX(-50%);
        }

        /* Style the features section */
        .features {
            display: flex;
            justify-content: center;
            background-color: #fff;
            padding: 40px 0;
        }

        .feature {
            text-align: center;
            margin: 0 20px;
        }

        .feature h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        /* Style the footer */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: auto;
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
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome To Astronomy Viewer</h1>
            <p>Your Window to the Universe.</p>
        </div>
    </section>
    <section class="features">
    <div class="feature">
        <h2>Feature 1: Explore the Cosmos</h2>
        <p>Discover the vast universe and explore the mysteries of the cosmos. Our website is your window to the stars, planets, galaxies, and beyond. Whether you're a beginner or a seasoned astronomer, you'll find a wealth of information about the cosmos, its wonders, and the latest discoveries.</p>
    </div>
    <div class="feature">
    <h2>Feature 2: Read and Write articles</h2>
    <p>At Astronomy Viewer, we believe in sharing knowledge and fostering the spirit of exploration. That's why we provide a platform where you can not only read captivating articles about space and astronomy but also become a part of our cosmic community by contributing your own articles.</p>
</div>
<div class="feature">
    <h2>Feature 3: Stargazing Events</h2>
    <p>Get ready for an adventure beyond our world with our "Stargazing Events" feature. We're your cosmic calendar, providing you with up-to-date information on upcoming stargazing events, meteor showers, eclipses, and other celestial spectacles. Stay informed about when and where you can witness these mesmerizing cosmic phenomena.</p>
</div>

    </section>
    <footer>
        &copy; <?php echo date("Y"); ?> Astronomy viewer. All rights reserved.
    </footer>

    <script>
        const images = [
            'asix1.jpg',
            'asix2.jpg',
            'asix.jpg',
        ];

        const heroBackground = document.querySelector('.hero');
        const imageElements = [];

        let currentImageIndex = 0;

        // Preload all images
        images.forEach((imagePath) => {
            const img = new Image();
            img.src = imagePath;
            imageElements.push(img);
        });

        function changeHeroBackground() {
            heroBackground.style.backgroundImage = `url('${images[currentImageIndex]}')`;
            currentImageIndex = (currentImageIndex + 1) % images.length;
        }

        // Change the background image every 3 seconds (3000 milliseconds)
        setInterval(changeHeroBackground, 3000);
    </script>
</body>
</html>
