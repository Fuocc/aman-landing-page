<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $checkIn = $_POST["check-in"];
    $checkOut = $_POST["check_out"];

    // Perform validation if needed

    // Insert data into the database (using mysqli as an example)
    $servername = "your_server_name";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL query
    $sql = "INSERT INTO your_table_name (name, phone, check_in, check_out) VALUES ('$name', '$phone', '$checkIn', '$checkOut')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // Handle the case where the form is not submitted
    echo "Form not submitted";
}
?>
