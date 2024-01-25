<?php
// add_product.php

$nameErr = $descriptionErr = $priceErr = $thumbnailErr = "";
$name = $description = $price = $thumbnail = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Include database connection
    include 'db.php';

    // Process form data
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["description"])) {
        $descriptionErr = "Description is required";
    } else {
        $description = test_input($_POST["description"]);
    }

    if (empty($_POST["price"])) {
        $priceErr = "Price field is required";
    } else {
        $price = test_input($_POST["price"]);
    }

    if (!empty($_FILES["thumbnail"]["name"])) {
        $thumbnail_tmp = $_FILES["thumbnail"]["tmp_name"];
        $thumbnail_name = basename($_FILES["thumbnail"]["name"]);
        $thumbnail_path = "uploads/" . $thumbnail_name; // Adjust the directory path as needed
    
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif']; // Add or remove allowed file extensions
    
        // Check file extension
        $file_extension = strtolower(pathinfo($thumbnail_path, PATHINFO_EXTENSION));
        if (!in_array($file_extension, $allowed_extensions)) {
            $thumbnailErr = "Invalid file format. Allowed formats: " . implode(', ', $allowed_extensions);
        } elseif ($_FILES["thumbnail"]["size"] > 5242880) { // 5 MB (adjust as needed)
            $thumbnailErr = "File size exceeds the limit of 5 MB.";
        } elseif (move_uploaded_file($thumbnail_tmp, $thumbnail_path)) {
            $thumbnail = test_input($thumbnail_path);
        } else {
            $thumbnailErr = "Error uploading thumbnail.";
        }
    } else {
        $thumbnailErr = "Thumbnail field is required";
    }

    // Check for any errors before inserting into the database
    if (empty($nameErr) && empty($descriptionErr) && empty($priceErr) && empty($thumbnailErr)) {
        // Insert product into the database
        $udpateQuery = "UPDATE products SET name = '$name', description = '$description', price = '$price'";

        if (!empty($thumbnail)) {
            $udpateQuery .=", thumbnail_url = '$thumbnail'";
        }

        // Complete the update query with the WHERE clause
        $productId = $_GET['id'];

        $udpateQuery .= " WHERE id = $productId";

        $conn->query($udpateQuery);

        // Redirect to the updated product page
        header("Location: product-page.php?id=$productId");
        exit;

    }
}

function test_input($data) {
    if (is_array($data)) {
        // If $data is an array (e.g., $_FILES), apply the function recursively
        return array_map('test_input', $data);
    } else {
        // If $data is a string, apply the usual sanitation
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
?>

<?php 

include 'db.php';

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    $result = $conn->query("SELECT * FROM products WHERE id = $productId");

    if ($result && $result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        die("Product not found");
    }
} else {
    die("Product ID not provided");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - E_Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold mb-4">Add Product</h1>

        <!-- Add Product Form -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $productId; ?>" enctype="multipart/form-data">
            <div class="mb-4">
                <span class="text-red-600 py-2">* <?php echo $nameErr; ?></span>
                <label for="name" class="block text-gray-600">Product Name</label>
                <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>" class="border rounded-md px-4 py-2 w-full outline-none">
            </div>
            <div class="mb-4">
                <span class="text-red-600 py-2">* <?php echo $descriptionErr; ?></span>
                <label for="description" class="block text-gray-600">Description</label>
                <textarea id="description" name="description" class="border rounded-md px-4 py-2 w-full outline-none"><?php echo $product['description']; ?></textarea>
            </div>
            <div class="mb-4">
                <span class="text-red-600 py-2">* <?php echo $priceErr; ?></span>
                <label for="price" class="block text-gray-600">Price</label>
                <input type="text" id="price" name="price" value="<?php echo $product['price']; ?>" class="border rounded-md px-4 py-2 w-full outline-none">
            </div>
            <div class="mb-4">
                <span class="text-red-600 py-2">* <?php echo $thumbnailErr; ?></span>
                <label for="thumbnail" class="block text-gray-600">Thumbnail</label>
                <input type="file" id="thumbnail" value="<?php $product['thumbnail_url'];?>" name="thumbnail" class="border rounded-md px-4 py-2 w-full outline-none" onchange="previewImage()">
                <img id="thumbnail-preview" src="<?php echo $product['thumbnail_url']; ?>" alt="Thumbnail Preview" style="transition: 0.5s;" class="w-44 h-32 mt-3">
            </div>            
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Product</button>
        </form>
        <script>
            function previewImage() {
                var thumbnailInput = document.getElementById('thumbnail');
                var thumbnailPreview = document.getElementById('thumbnail-preview');

                if (thumbnailInput.files && thumbnailInput.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        thumbnailPreview.src = e.target.result;
                        thumbnailPreview.style.display = 'block';
                    };

                    reader.readAsDataURL(thumbnailInput.files[0]);
                }
            }
        </script>

        
        
    </div>

</body>
</html>
