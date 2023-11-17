<?php
// Replace these values with your actual database credentials
$servername = "localhost"; // Change this if your MySQL server is on a different host
$username = "root"; // Replace with your actual MySQL username
$password = ""; // Replace with your actual MySQL password
$dbname = "aa"; // Replace this with your actual database name

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get form data
    $articleName = $_POST['articleName'];
    $aboutArticle = $_POST['aboutArticle'];

    // Insert data into the database
    $sql = "INSERT INTO article_requests (article_name, about_article) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$articleName, $aboutArticle]);

    echo "Article request submitted successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null; // Close the connection
?>
