<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em;
            font-size: 1.5em;
        }

        section {
            padding: 20px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: left;
        }

        input, textarea, button {
            margin-bottom: 15px;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #333;
            color: #fff;
            cursor: pointer;
            padding: 8px 15px;
        }

        #mobileNumberField {
            display: none;
        }
    </style>
</head>
<body>
    <header>
        Contact Us
    </header>
    <section>
        <form action="process_contact_form.php" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <label for="callRequest">Request a Call:</label>
            <input type="checkbox" id="callRequest" name="callRequest" onclick="toggleMobileNumberField()">

            <div id="mobileNumberField">
                <label for="mobileNumber">Your Mobile Number:</label>
                <input type="tel" id="mobileNumber" name="mobileNumber">
            </div>

            <button type="submit">Submit</button>
        </form>
        <br><br>
        <!-- Modified: Added an ID to the second form for better targeting -->
        <form id="aboutForm">
            <button onclick="goBackToAbout()">Go back to About</button>
        </form>
        <script>
            function toggleMobileNumberField() {
                var mobileNumberField = document.getElementById("mobileNumberField");
                mobileNumberField.style.display = document.getElementById("callRequest").checked ? "block" : "none";
            }

            function goBackToAbout() {
                window.location.href = "about.php";
            }

            // Prevent form submission for the second form
            document.getElementById("aboutForm").addEventListener("submit", function (event) {
                event.preventDefault();
            });
        </script>
    </section>
</body>
</html>
