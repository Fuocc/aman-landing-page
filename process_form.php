<?php
    // Connect to database
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel_booking";

    $conn = new mysqli($severname, $username, $password, $dbname);


    // Check connect to database
    if ($conn -> connect_error){
        die ("Failed to connect to: " . $conn -> connect_error);
    }

    // Take out data from Form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];


    // Insert data into Database
    $sql = "INSERT INTO bookings (name, phone, check_in, check_out)
            VALUES ('$name', '$phone', '$check_in', '$check_out')";
    

    if ($conn -> query($sql) === TRUE){
        echo "Booking Successful!!";
    }else {
        echo "Error: ". $sql . "<br>" . $conn -> error;
    }

    // Close the connect
    $conn -> close();
?>