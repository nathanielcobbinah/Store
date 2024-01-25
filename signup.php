<?php
include 'db.php';

$usernameErr = $emailErr = $passwordErr = "";
$username = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    // Validate username
    $username = $_POST["username"];
    if (empty($username)) {
        $usernameErr = "Username is required";
    } 

    // Validate email
    $email = $_POST["email"];
    if (empty($email)) {
        $emailErr = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }


    $existingUserCheck = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = $conn->query($existingUserCheck);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['username'] === $username) {
            $usernameErr = "Username already exists";
        } 
        if ($row['email'] === $email) {
            $emailErr = "Email already exists";
        }
    }
    

    // Validate password
    $password = $_POST["password"];
    if (empty($password)) {
        $passwordErr= "Password is required";
    } elseif (strlen($password) < 4 || strlen($password > 10)) {
        $passwordErr = "Password must be between 3 and 10 character";
    }

    // If there are no errors, proceed with registration
    if (empty($usernameErr) && empty($emailErr) && empty($passwordErr)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } 
}
// }

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gradient-to-r from-blue-600 to-blue-400 bg-no-repeat min-h-screen font-sans text-gray-800 xs:text-red-500 text-lg">
    <?php include 'header.php'; ?>
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h1 class="text-2xl font-bold mb-6">Register</h1>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="mb-4">
                <span class="text-red-500 italic text-sm"><?php echo $usernameErr; ?></span>
                <label for="username" class="block text-gray-600">Username:</label>
                <input type="text" id="username" name="username" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <span class="text-red-500 italic text-sm"><?php echo $emailErr; ?></span>
                <label for="email" class="block text-gray-600">Email:</label>
                <input type="email" id="email" name="email" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <span class="text-red-500 italic text-sm"><?php echo $passwordErr; ?></span>
                <label for="password" class="block text-gray-600">Password:</label>
                <input type="password" id="password" name="password" class="w-full border p-2 rounded" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Register</button>
        </form>
    </div>
</body>
</html>
