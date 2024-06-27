<?php
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $response = htmlspecialchars($_POST['response']);
    $name = isset($_COOKIE["name"]) ? htmlspecialchars($_COOKIE["name"]) : "Unknown";

    $stmt = $conn->prepare("INSERT INTO responses (name, response) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $response);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
?>
