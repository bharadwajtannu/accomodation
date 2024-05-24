<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the submitted credentials match the default admin credentials
    if ($_POST["username"] === "sanya" && $_POST["password"] === "12345") {
        // Redirect to the admin dashboard or perform other admin-specific actions
        header("Location: admin-dashboard.php");
        exit;
    } else {
        // Incorrect credentials, display an error message
        $error_message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Dashboard</title>
</head>

<body>
    <h1>Login - Admin Dashboard</h1>
    <?php if (isset($error_message)): ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>

</html>