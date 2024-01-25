<?php
// add_product.php

$nameErr = $descriptionErr = $priceErr = $thumbnailErr = $featuresErr = $categoryErr = "";
$name = $description = $price = $thumbnail = $features = $category_id = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   if ($_POST["form_type"] === "add_product") {
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
 
     // Other form processing code...
 
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
 
     if (empty($_POST["features"])) {
         $featuresErr = "Features field is required";
     } else {
         $features = test_input($_POST["features"]);
     }
 
     if (empty($_POST["category_id"])) {
         $categoryErr = "Category is required";
     } else {
         $category_id = test_input($_POST["category_id"]);
     }
 
     // Check for any errors before inserting into the database
     if (empty($nameErr) && empty($descriptionErr) && empty($priceErr) && empty($thumbnailErr) && empty($featuresErr) && empty($categoryErr)) {
 
         // Insert product into the database
         $conn->query("INSERT INTO products (name, description, price, thumbnail_url, category_id) VALUES ('$name', '$description', '$price', '$thumbnail', '$category_id')");
 
         // Get the last inserted product ID
         $productId = $conn->insert_id;
 
         // Insert features into the 'features' table using the retrieved product ID
 
         foreach ($features as $feature) {
             $conn->query("INSERT INTO features (product_id, features) VALUES ('$productId', '$feature')");
         }
 
         // Redirect to the product listing page
         header('Location: cms.php');
         exit;
     }
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

<!-- Rest of your HTML code remains unchanged -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - E_Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-8 flex flex-row justify-between p-5 ring-1 ring-blue-500 rounded-xl">
        
        <!-- Add Product Form -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" class="w-3/5">
            <h1 class="text-3xl font-semibold mb-4">Add Product</h1>

            <input type="hidden" name="form_type" value="add_product">
            <div class="mb-4">
                <span class="text-red-600 py-2">* <?php echo $thumbnailErr; ?></span>
                <label for="thumbnail" class="block text-gray-600">Thumbnail</label>
                <input type="file" id="thumbnail" name="thumbnail" class="border rounded-md px-4 py-2 w-full outline-none" onchange="previewImage()">
                <img id="thumbnail-preview" src="#" alt="Thumbnail Preview" style="display: none; transition: 0.5s;" class="w-44 h-32 mt-3">
            </div> 
            <div class="mb-4">
                <span class="text-red-600 py-2">* <?php echo $nameErr; ?></span>
                <label for="name" class="block text-gray-600">Product Name</label>
                <input type="text" id="name" name="name" class="border rounded-md px-4 py-2 w-full outline-none">
            </div>
            <div class="mb-4">
                <span class="text-red-600 py-2">* <?php echo $descriptionErr; ?></span>
                <label for="description" class="block text-gray-600">Description</label>
                <textarea id="description" name="description" class="border rounded-md px-4 py-2 w-full outline-none"></textarea>
            </div>
            <div class="mb-4">
                <span class="text-red-600 py-2">* <?php echo $priceErr; ?></span>
                <label for="price" class="block text-gray-600">Price</label>
                <input type="text" id="price" name="price" class="border rounded-md px-4 py-2 w-full outline-none">
            </div>

            <!-- Inside your form -->
            <div class="mb-4">
                <span class="text-red-600 py-2">* <?php echo $categoryErr; ?></span>
                <label for="category_id" class="block text-gray-600">Select Category</label>
                <select id="category_id" name="category_id" class="border rounded-md px-4 py-2 w-full outline-none">
                    <?php
                    // Include database connection
                    include 'db.php';

                    // Fetch categories from the database
                    $result = $conn->query("SELECT id, name FROM categories");

                    // Check if categories are available
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='{$row['id']}'>{$row['name']}</option>";
                        }
                    }
                    ?>
                </select>
            </div>

            
            
            <div class="mb-4">
                <span class="text-red-600 py-2">* <?php echo $featuresErr; ?></span>
                <label for="features" class="block text-gray-600">Features</label>
                <!-- Use square brackets in the name to handle an array of features -->
                <div id="features-container">
                    <textarea name="features[]" class="border rounded-md px-4 py-2 w-full outline-none"></textarea>
                </div>
                <button type="button" onclick="addFeature()">Add Another Feature</button>
            </div>
            
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Product</button>
        </form>

        <!-- <br><br><br> -->



        <div class="w-1/3">
            <!-- Add Category Form -->
            <?php 
                $categoryErr = "";
                $category_name = "";

                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    if ($_POST["form_type"] === "add_category") {
                        if (empty($_POST["category_name"])) {
                            $categoryErr = "Category field is required";
                        } else {
                            $category_name = test_input($_POST["category_name"]);
                        }

                        if (empty($categoryErr)) {
                            $conn->query("INSERT INTO categories(name) VALUES ('$category_name')");
                        }
                    }
                }
            ?>
                
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="hidden" name="form_type" value="add_category">
                    <div class="mb-4">
                        <span class="text-red-600 py-6">* <?php echo $categoryErr; ?></span>
                        <label for="category_name" class="text-gray-600">Category Name</label>
                        <input type="text" name="category_name" class="border rounded-md px-4 py-2 w-full outline-none" id="">
                    </div>
                
                    <!-- Add a message div to display the success message -->
                    <div id="success-message" class="mb-4 text-green-500"></div>

                <!-- ... your other form fields ... -->

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Product</button>
                </form>

                <script>
                    // Check if the success message is set and display it
                    <?php if (!empty($category_name)) : ?>
                        document.getElementById('success-message').innerText = 'Category "' + <?php echo json_encode($category_name); ?> + '" has been added successfully!';
                    <?php endif; ?>
                </script>

        </div>
                


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

            function addFeature() {
                // console.log('Adding another feature'); // Check if this line gets printed to the console
                var featuresContainer = document.getElementById('features-container');
                var newFeatureTextarea = document.createElement('textarea');
                newFeatureTextarea.name = 'features[]';
                newFeatureTextarea.className = 'border rounded-md px-4 py-2 w-full outline-none';
                featuresContainer.appendChild(newFeatureTextarea);
            }
        </script>






    </div>
</body>
</html>
