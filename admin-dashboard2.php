<?php
/*session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin-login.php');
    exit;
}*/

include 'connect.php';

$sql = "SELECT * FROM accommodation_bookings";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Accommodation Bookings</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Admin Dashboard - Accommodation Bookings</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Room Type</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["phone"] . "</td>
                        <td>" . $row["room_type"] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No bookings found.</td></tr>";
        }
        ?>
    </table>
    <a href="logout.php">Logout</a>
</body>

</html>