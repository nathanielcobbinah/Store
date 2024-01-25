<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing - E_Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold mb-4">Product Listing</h1>

        <!-- Product Table -->
        <table class="min-w-full bg-white border border-gray-300 shadow-md">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Thumbnail</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
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
                        echo "<a href='product-page.php?id=" . $row['id'] . "' class='text-blue-500 hover:underline mr-2'>View</a>";
                        echo "<a href='update.php?id=" . $row['id'] . "' class='text-green-500 hover:underline mr-2'>Update</a>";
                        echo "<a href='delete-product.php?id=" . $row['id'] . "' class='text-red-500 hover:underline'>Delete</a>";
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

