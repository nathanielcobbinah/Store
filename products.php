<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing - E_Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-600 to-blue-400  bg-no-repeat min-h-screen font-sans text-gray-800 xs:text-red-500 text-lg">
    <?php
        include 'header.php';
    ?>

    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold mb-4 text-center p-2">Product Listing</h1>

        <!-- Product Table -->
        <table class="min-w-full bg-gradient-to-b from-blue-400  to-blue-400 border-2 border-gray-300 shadow-md">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase tracking-wider">Product Name</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase tracking-wider">Description</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase tracking-wider">Price</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase tracking-wider">Thumbnail</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Assuming $conn is your database connection
                include 'db.php';

                $result = $conn->query("SELECT * FROM products");

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='px-6 py-4 whitespace-nowrap border-b-2 border-b-blue-500'>" . htmlspecialchars($row['name']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap border-b-2 border-b-blue-500'>" . htmlspecialchars($row['description']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap border-b-2 border-b-blue-500'>$" . htmlspecialchars($row['price']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap border-b-2 border-b-blue-500'><img src='" . htmlspecialchars($row['thumbnail_url']) . "' alt='Thumbnail' class='w-16 h-16 object-cover'></td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap border-b-2 border-b-blue-500'>";
                        echo "<a href='product-page.php?id=" . $row['id'] . "' class='text-gray-50 hover:underline mr-2'>View</a>";
                        echo "<a href='update.php?id=" . $row['id'] . "' class='text-green-600 hover:underline mr-2'>Update</a>";
                        echo "<a href='delete-product.php?id=" . $row['id'] . "' class='text-red-600 hover:underline'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        
    </div>

</body>
</html>

