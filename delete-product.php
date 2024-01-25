<?php
include 'db.php';

// Check if the product ID is provided in the URL
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Delete the product from the database
    $deleteQuery = "DELETE FROM products WHERE id = $productId";
    $conn->query($deleteQuery);

    // Check if the deletion was successful
    if ($conn->affected_rows > 0) {
        $message = "Product has been deleted successfully.";
    } else {
        $message = "Failed to delete the product.";
    }
} else {
    $message = "Product ID not provided.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product - E_Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold mb-4">Delete Product</h1>

        <p><?php echo $message; ?></p>

        <p><a href="products.php" class="text-blue-500 hover:underline">Back to Product Listing</a></p>
    </div>

</body>
</html>
