<!DOCTYPE html>
<html>
<head>
    <title>Image and Text Example</title>
    <style>
        .continent-button {
            background-color: #000000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin: 5px;
            border-radius: 5px;
            text-decoration: none;
            display: block; /* Make the buttons block-level elements */
            transition: transform 0.2s ease; /* Add a transition for a smooth hover effect */
        }

        .continent-button:hover {
            background-color: #162017;
            transform: scale(0.98); /* Add a slight scale animation on hover */
        }

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
            text-align: center; /* Center the navigation menu */
            position: fixed; /* Stick the header to the top of the viewport */
            width: 100%; /* Make the header span the full width */
        }

        nav ul {
            list-style: none;
        }

        nav li {
            display: inline;
            margin: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        /* Add padding to the top to prevent content from going under the navbar */
        .content {
            padding-top: 100px; /* Adjust the value as needed */
            display: flex; /* Make content a flex container */
            justify-content: space-between; /* Put content on left and image on right */
            align-items: flex-start; /* Align items to the top */
        }

        /* Style for the clickable image icon container */
        .clickable-icon-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Show 4 icons in a row */
            grid-gap: 20px; /* Add some space between icons */
            justify-content: center; /* Center the icons horizontally */
        }

        .clickable-icon {
            text-align: center;
        }

        .clickable-icon a {
            border-radius: 10px;
            overflow: hidden;
            display: block;
            text-decoration: none;
            color: #333;
        }

        .clickable-icon a:hover {
            transform: scale(1.1);
        }

        .clickable-icon img {
            max-width: 220px; /* Set the maximum width of the image */
            max-height: 220px; /* Set the maximum height of the image */
            border-radius: 20px;
            transition: transform 0.3s ease;
        }

        .icon-label {
            margin-top: 8px;
            font-size: 18px;
            transition: transform 0.3s ease;
        }

        h1, h2 {
            margin: 10px 0; /* Add space above and below the headings */
            font-size: 24px; /* Increase the font size */
        }

        ul {
            list-style-type: disc; /* Change the list style to bullets */
            padding-left: 20px; /* Add left padding for the list */
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
    <div class="content"> <!-- Added a content div to add padding -->
        <div class="text">
            <h1>URSA MAJOR</h1>
            <p>
The best time, day, and month to see Ursa Major (the Great Bear) from Antarctica or any other location in the Southern Hemisphere can vary based on your specific location within Antarctica and the time of year. Here are some general guidelines:</p>
            <ul>
                <li><h2>Time of Year</h2>Ursa Major is a circumpolar constellation in the Northern Hemisphere, which means it never sets below the horizon. In the Southern Hemisphere, including Antarctica, Ursa Major is not a prominent constellation and may not be visible at all times. It is most visible during the winter months in the Southern Hemisphere when it appears low on the northern horizon. Therefore, the best time to see Ursa Major from Antarctica is during the Southern Hemisphere winter, roughly from May to August.</li>
                <li><h2>Time of Day</h2> Ursa Major is best seen during the night when it is dark. Given its northerly position in the sky from Antarctica, it will be visible in the northern part of the sky during the evening and night hours.</li>
                <li><h2>Best Months</h2> The best months to see Ursa Major from Antarctica would typically be from May to August, which corresponds to the Southern Hemisphere winter. During this period, the constellation will be above the northern horizon for a longer duration during the night.</li>
            </ul>
        </div>
        <div class="image">
            <img src="UM.png" alt="Image Description">
        </div>
    </div>
</body>
</html>