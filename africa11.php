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
            <h1>ANDROMEDA</h1>
            <p>
The best time, day, and month to see the Andromeda Galaxy (M31) from Africa, or any other location, depend on several factors, including the time of year, your specific location within Africa, and your observing conditions. Here are some general guidelines:</p>
            <ul>
                <li><h2>Time of Year</h2>The Andromeda Galaxy is best observed during the late summer and early autumn months in the Northern Hemisphere. In the Southern Hemisphere, it's visible during the spring and early summer. Since Africa is primarily located in the Northern Hemisphere, the best time to see Andromeda is typically from late August to November.</li>
                <li><h2>Time of Day</h2>Andromeda is a faint object and is best observed during moonless nights and under dark skies. It's visible throughout the night, but it's usually best observed in the late evening when it rises in the east. Avoid nights with a bright moon because the moon's light can wash out the faint details of the galaxy.</li>
                <li><h2>Best Months</h2>The best months to see Andromeda from Africa are typically September, October, and November. During these months, Andromeda will be well-placed in the eastern sky after sunset, and you'll have more hours of darkness to observe it.</li>
            </ul>
        </div>
        <div class="image">
            <img src="AD.png" alt="Image Description">
        </div>
    </div>
</body>
</html>
