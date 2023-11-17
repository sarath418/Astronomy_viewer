<!DOCTYPE html>
<html>
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
            text-align: center; /* Center the navigation menu */
        }

        nav ul {
            list-style: none;
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

        /* Style for the clickable image icon container */
        .clickable-icon-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Show 4 icons in a row */
            grid-gap: 20px; /* Add some space between icons */
            justify-content: center; /* Center the icons horizontally */
            padding: 20px 0; /* Add some space between navigation and icons */
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
            width: 220px;
            height: 220px;
            border-radius: 20px;
            transition: transform 0.3s ease;
        }

        .icon-label {
            margin-top: 8px;
            font-size: 18px;
            transition: transform 0.3s ease;
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

    <!-- PHP code for the clickable image icons with text -->
    <div class="clickable-icon-container">
        <div class="clickable-icon">
            <?php
            // Path variables for the first icon
            $imagePath1 = 'OC.png'; // Replace with your image path
            $fileToOpen1 = 'continent1.php'; // Replace with the file path you want to open
            $iconText1 = 'Orion'; // Text to display below the first icon
            echo '<a href="' . htmlspecialchars($fileToOpen1) . '"" rel="noopener noreferrer">';
            echo '<img src="' . htmlspecialchars($imagePath1) . '" alt="Open File 1">';
            echo '<div class="icon-label">' . htmlspecialchars($iconText1) . '</div>'; // The text below the first icon
            echo '</a>';
            ?>
        </div>
        
        <div class="clickable-icon">
            <?php
            // Path variables for the second icon
            $imagePath2 = 'UM.png'; // Replace with your image path
            $fileToOpen2 = 'continent2.php'; // Replace with the file path you want to open
            $iconText2 = 'Ursa Major'; // Text to display below the second icon
            echo '<a href="' . htmlspecialchars($fileToOpen2) . '" " rel="noopener noreferrer">';
            echo '<img src="' . htmlspecialchars($imagePath2) . '" alt="Open File 2">';
            echo '<div class "icon-label">' . htmlspecialchars($iconText2) . '</div>'; // The text below the second icon
            echo '</a>';
            ?>
        </div>

        <div class="clickable-icon">
            <?php
            // Path variables for the third icon
            $imagePath3 = 'URM.png'; // Replace with your image path
            $fileToOpen3 = 'continent3.php'; // Replace with the file path you want to open
            $iconText3 = 'Ursa Minor'; // Text to display below the third icon
            echo '<a href="' . htmlspecialchars($fileToOpen3) . '" " rel="noopener noreferrer">';
            echo '<img src="' . htmlspecialchars($imagePath3) . '" alt="Open File 3">';
            echo '<div class="icon-label">' . htmlspecialchars($iconText3) . '</div>'; // The text below the third icon
            echo '</a>';
            ?>
        </div>
        <div class="clickable-icon">
            <?php
            // Path variables for the fourth icon
            $imagePath4 = 'CA.png'; // Replace with your image path
            $fileToOpen4 = 'continent4.php'; // Replace with the file path you want to open
            $iconText4 = 'Cassiopeia'; // Text to display below the fourth icon
            echo '<a href="' . htmlspecialchars($fileToOpen4) . '" " rel="noopener noreferrer">';
            echo '<img src="' . htmlspecialchars($imagePath4) . '" alt="Open File 4">';
            echo '<div class="icon-label">' . htmlspecialchars($iconText4) . '</div>'; // The text below the fourth icon
            echo '</a>';
            ?>
        </div>
        <div class="clickable-icon">
    <?php
    // Path variables for the fifth icon
    $imagePath5 = 'CX.png'; // Replace with your image path
    $fileToOpen5 = 'continent5.php'; // Replace with the file path you want to open
    $iconText5 = 'Crux'; // Text to display below the fifth icon
    echo '<a href="' . htmlspecialchars($fileToOpen5) . '" rel="noopener noreferrer">';
    echo '<img src="' . htmlspecialchars($imagePath5) . '" alt="Open File 5">';
    echo '<div class="icon-label">' . htmlspecialchars($iconText5) . '</div>'; // The text below the fifth icon
    echo '</a>';
    ?>
</div>
<div class="clickable-icon">
    <?php
    // Path variables for the fifth icon
    $imagePath5 = 'LEO.png'; // Replace with the path to your image
    $fileToOpen5 = 'continent6.php'; // Replace with the path to your PHP file
    $iconText5 = 'Leo'; // Text to display below the fifth icon
    echo '<a href="' . htmlspecialchars($fileToOpen5) . '" rel="noopener noreferrer">';
    echo '<img src="' . htmlspecialchars($imagePath5) . '" alt="Open File 5">';
    echo '<div class="icon-label">' . htmlspecialchars($iconText5) . '</div>'; // The text below the fifth icon
    echo '</a>';
    ?>
</div>
<div class="clickable-icon">
    <?php
    // Path variables for the fifth icon
    $imagePath5 = 'SC.png'; // Replace with the path to your image
    $fileToOpen5 = 'continent7.php'; // Replace with the path to your PHP file
    $iconText5 = 'Scorpius'; // Text to display below the fifth icon
    echo '<a href="' . htmlspecialchars($fileToOpen5) . '" rel="noopener noreferrer">';
    echo '<img src="' . htmlspecialchars($imagePath5) . '" alt="Open File 5">';
    echo '<div class="icon-label">' . htmlspecialchars($iconText5) . '</div>'; // The text below the fifth icon
    echo '</a>';
    ?>
</div>
<div class="clickable-icon">
    <?php
    // Path variables for the fifth icon
    $imagePath5 = 'CY.png'; // Replace with the path to your image
    $fileToOpen5 = 'continent8.php'; // Replace with the path to your PHP file
    $iconText5 = 'Cygnus'; // Text to display below the fifth icon
    echo '<a href="' . htmlspecialchars($fileToOpen5) . '" rel="noopener noreferrer">';
    echo '<img src="' . htmlspecialchars($imagePath5) . '" alt="Open File 5">';
    echo '<div class="icon-label">' . htmlspecialchars($iconText5) . '</div>'; // The text below the fifth icon
    echo '</a>';
    ?>
</div>

<div class="clickable-icon">
    <?php
    // Path variables for the fifth icon
    $imagePath5 = 'TS.png'; // Replace with the path to your image
    $fileToOpen5 = 'continent9.php'; // Replace with the path to your PHP file
    $iconText5 = 'Taurus'; // Text to display below the fifth icon
    echo '<a href="' . htmlspecialchars($fileToOpen5) . '" rel="noopener noreferrer">';
    echo '<img src="' . htmlspecialchars($imagePath5) . '" alt="Open File 5">';
    echo '<div class="icon-label">' . htmlspecialchars($iconText5) . '</div>'; // The text below the fifth icon
    echo '</a>';
    ?>
</div>

<div class="clickable-icon">
    <?php
    // Path variables for the fifth icon
    $imagePath5 = 'SAG.png'; // Replace with the path to your image
    $fileToOpen5 = 'continent10.php'; // Replace with the path to your PHP file
    $iconText5 = 'Sagittarius'; // Text to display below the fifth icon
    echo '<a href="' . htmlspecialchars($fileToOpen5) . '" rel="noopener noreferrer">';
    echo '<img src="' . htmlspecialchars($imagePath5) . '" alt="Open File 5">';
    echo '<div class="icon-label">' . htmlspecialchars($iconText5) . '</div>'; // The text below the fifth icon
    echo '</a>';
    ?>
</div>

<div class="clickable-icon">
    <?php
    // Path variables for the fifth icon
    $imagePath5 = 'AD.png'; // Replace with the path to your image
    $fileToOpen5 = 'continent11.php'; // Replace with the path to your PHP file
    $iconText5 = 'Andromeda'; // Text to display below the fifth icon
    echo '<a href="' . htmlspecialchars($fileToOpen5) . '" rel="noopener noreferrer">';
    echo '<img src="' . htmlspecialchars($imagePath5) . '" alt="Open File 5">';
    echo '<div class="icon-label">' . htmlspecialchars($iconText5) . '</div>'; // The text below the fifth icon
    echo '</a>';
    ?>
</div>

<div class="clickable-icon">
    <?php
    // Path variables for the fifth icon
    $imagePath5 = 'PG.png'; // Replace with the path to your image
    $fileToOpen5 = 'continent12.php'; // Replace with the path to your PHP file
    $iconText5 = 'Pegasus'; // Text to display below the fifth icon
    echo '<a href="' . htmlspecialchars($fileToOpen5) . '" rel="noopener noreferrer">';
    echo '<img src="' . htmlspecialchars($imagePath5) . '" alt="Open File 5">';
    echo '<div class="icon-label">' . htmlspecialchars($iconText5) . '</div>'; // The text below the fifth icon
    echo '</a>';
    ?>
</div>





        <!-- Add more clickable icons as needed -->
    </div>

    <!-- Rest of your HTML content -->

</body>
</html>
