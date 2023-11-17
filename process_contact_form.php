<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aa";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$callRequest = isset($_POST['callRequest']) ? 'Yes' : 'No';
$mobileNumber = isset($_POST['mobileNumber']) ? $_POST['mobileNumber'] : '';

// Insert data into the database
$sql = "INSERT INTO contact_entries (contact_name, contact_email, contact_message, call_request, mobile_number) 
        VALUES ('$name', '$email', '$message', '$callRequest', '$mobileNumber')";

if ($conn->query($sql) === TRUE) {
    echo "Request sent successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
