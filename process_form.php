<?php
header("Content-Type: text/html; charset=UTF-8");

// Connect to database
include_once("db_config.php");

$conn = new mysqli($severname, $username, $password, $dbname);

// Check connection to the database
if ($conn->connect_error) {
    die("Failed to connect to the database: " . $conn->connect_error);
}

// Take out data from Form
if (isset($_POST['fullName'])) {
    $fullName = $_POST['fullName'];
} else {
    $fullName = '';
}

if (isset($_POST['phoneNumber'])) {
    $phoneNumber = $_POST['phoneNumber'];
} else {
    $phoneNumber = '';
}

if (isset($_POST['check_in'])) {
    $check_in = $_POST['check_in'];
} else {
    $check_in = '';
}

if (isset($_POST['check_out'])) {
    $check_out = $_POST['check_out'];
} else {
    $check_out = '';
}

// Insert data into Database
$stmt = $conn->prepare("INSERT INTO bookings (fullName, phoneNumber, check_in, check_out) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $fullName, $phoneNumber, $check_in, $check_out);

if ($stmt->execute()) {
    echo "Booking Successful!!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement
$stmt->close();

// Close the connection
$conn->close();
?>
