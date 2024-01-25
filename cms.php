<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - E_Store CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-700 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="font-bold text-lg">E_Store CMS</a>
            <div class="space-x-4">
                <a href="dashboard.php" class="hover:text-gray-300">Dashboard</a>
                <a href="add_product.php" class="hover:text-gray-300">Create Product</a>
                <a href="products.php" class="hover:text-gray-300">Products</a>
                <a href="categories.php" class="hover:text-gray-300">Categories</a>
                <a href="users.php" class="hover:text-gray-300">Users</a>
                <a href="#" class="hover:text-gray-300">Settings</a>
            </div>
            <a href="#" class="hover:text-gray-300">Logout</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold mb-4">Admin Dashboard</h1>

        <!-- Cards for Statistics -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Card 1: Total Products -->

            <?php 
            
            include 'db.php';

            // Execute the SQL query to get the total count
            $query = "SELECT COUNT(*) AS total FROM products";
            $result = $conn->query($query);

            // Check if the query was successful
            if ($result) {
                // Fetch the result
                $row = $result->fetch_assoc();
                
                // Get the total count from the associative array
                $totalProducts = $row['total'];
            } else {
                // Handle the error if the query fails
                $totalProducts = 0; // Default value
            }
            ?>
            

            <div class="bg-white p-4 rounded-md shadow-md">
                <h2 class="text-xl font-semibold mb-2">Total Products</h2>
                <p class="text-3xl font-bold text-blue-500"><?php echo $totalProducts; ?></p>
            </div>

            <?php 
                $query = "SELECT COUNT(*) AS total FROM categories";
                $result = $conn->query($query);

                if ($result) {
                    $row = $result->fetch_assoc();

                    $totalCategories = $row['total'];
                } else {
                    $totalCategories = 0;
                }
            ?>

            <!-- Card 2: Total Categories -->
            <div class="bg-white p-4 rounded-md shadow-md">
                <h2 class="text-xl font-semibold mb-2">Total Categories</h2>
                <p class="text-3xl font-bold text-blue-500"><?php echo $totalCategories; ?></p>
            </div>

            <!-- Card 3: Total Users -->
            <div class="bg-white p-4 rounded-md shadow-md">
                <h2 class="text-xl font-semibold mb-2">Total Users</h2>
                <p class="text-3xl font-bold text-blue-500">150</p>
            </div>

            <!-- Card 4: Revenue -->
            <div class="bg-white p-4 rounded-md shadow-md">
                <h2 class="text-xl font-semibold mb-2">Revenue</h2>
                <p class="text-3xl font-bold text-blue-500">$25,000</p>
            </div>
        </div>

        <!-- Recent Orders Table -->
        <div class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">Recent Orders</h2>
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Order ID</th>
                        <th class="py-2 px-4 border-b">Product</th>
                        <th class="py-2 px-4 border-b">Customer</th>
                        <th class="py-2 px-4 border-b">Total</th>
                        <th class="py-2 px-4 border-b">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Data, Replace with Dynamic Data -->
                    <tr>
                        <td class="py-2 px-4 border-b">1</td>
                        <td class="py-2 px-4 border-b">Product A</td>
                        <td class="py-2 px-4 border-b">John Doe</td>
                        <td class="py-2 px-4 border-b">$50.00</td>
                        <td class="py-2 px-4 border-b">Shipped</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b">2</td>
                        <td class="py-2 px-4 border-b">Product B</td>
                        <td class="py-2 px-4 border-b">Jane Smith</td>
                        <td class="py-2 px-4 border-b">$30.00</td>
                        <td class="py-2 px-4 border-b">Pending</td>
                    </tr>
                    <!-- End Sample Data -->
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
