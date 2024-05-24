<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta char set="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Accommodation Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <?php
    $sql = "SELECT * FROM accommodation_bookings";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h1>Admin Dashboard - Accommodation Information</h1>";
        echo "<table>
                <tr>
                    <th>Name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>room_type</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["phone"] . "</td>
                    <td>" . $row["room_type"] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<h1>No accommodations found.</h1>";
    }

    $conn->close();
    ?>
    <a href="logout.php">Logout</a>
</body>

</html>