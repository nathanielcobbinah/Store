<?php
include 'db.php';

session_start(); // Start the session

$usernameErr = $passwordErr = "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    if (empty($username)) {
        $usernameErr = "Username is required";
    }

    // Validate password
    $password = $_POST["password"];
    if (empty($password)) {
        $passwordErr = "Password is required";
    }

    // If there are no errors, proceed with login
    if (empty($usernameErr) && empty($passwordErr)) {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                // Password is correct, set session variables
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                // Redirect to a dashboard or home page
                header("Location: index.php");
                exit();
            } else {
                $errors['login'] = "Incorrect password";
            }
        } else {
            $errors['login'] = "Username not found";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gradient-to-r from-blue-600 to-blue-400 bg-no-repeat min-h-screen font-sans text-gray-800 xs:text-red-500 text-lg">
    <?php include 'header.php'; ?>
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h1 class="text-2xl font-bold mb-6">Login</h1>
        <form action="login.php" method="post">
            <div class="mb-4">
                <span class="text-red-500 italic"><?php echo $usernameErr; ?></span>
                <label for="username" class="block text-gray-600">Username:</label>
                <input type="text" id="username" name="username" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <span class="text-red-500 italic"><?php echo $passwordErr; ?></span>
                <label for="password" class="block text-gray-600">Password:</label>
                <input type="password" id="password" name="password" class="w-full border p-2 rounded" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
        </form>
        <?php if (isset($errors['login'])): ?>
            <p class="text-red-500 mt-4"><?= $errors['login'] ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
