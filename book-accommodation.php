<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $room_type = $_POST['room_type'];

    // Perform any necessary validation here

    // Insert data into the accommodation_bookings table
    $sql = "INSERT INTO accommodation_bookings (name, email, phone, room_type) VALUES ('$name', '$email', '$phone', '$room_type')";
    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>