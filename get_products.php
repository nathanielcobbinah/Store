<?php
include 'db.php';

if (isset($_GET['category'])) {
  $selectedCategory = $_GET['category'];

  // Add proper validation and security measures before using the category in the SQL query
  $selectedCategory = mysqli_real_escape_string($conn, $selectedCategory);

  $result = $conn->query("SELECT * FROM products WHERE category = '$selectedCategory'");

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      // Output the HTML structure for each product (similar to your existing product code)
      echo '<div class="bg-gradient-to-b from-blue-600 via-blue-400 to-blue-600 shadow-md shadow-gray-700 p-2 pb-4 rounded-lg m-auto w-80 md:w-72 xl:w-80 mb-8">';
      // Output the product details (image, name, description, price, etc.)
      // ...
      echo '</div>';
    }
  } else {
    echo '<p>No products found for the selected category.</p>';
  }
} else {
  echo '<p>Invalid request.</p>';
}
?>