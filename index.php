<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accommodation System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Welcome to our Hotel</h1>
    <h2>Accommodation Booking Form</h2>
    <form action="book-accommodation.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone:</label><br>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="room_type">Room Type:</label><br>
        <select id="room_type" name="room_type" required>
            <option value="Deluxe">Deluxe</option>
            <option value="Standard">Standard</option>
            <option value="Suite">Suite</option>
        </select><br><br>

        <button type="submit">Book Accommodation</button>
    </form>

    <a href="admin-login.php">Admin Dashboard</a>
</body>

</html>