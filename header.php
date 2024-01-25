<?php include 'db.php';  session_start()?>

    <!-- Category Header -->
    <header> 
        <nav class="bg-blue-700 p-4">
            <div class="flex justify-between items-center">
                <a href="#" class="text-gray-950 font-bold text-lg">E_Store</a>
                <!-- Responsive Menu Button -->
                <div class="lg:hidden">
                    <button id="menu-toggle" class="text-gray-900 hover:text-gray-700 focus:outline-none">
                        <i class='bx bx-menu text-2xl'></i>
                    </button>
                </div>
                <div class="hidden lg:flex space-x-4 text-md">
                    <a href="index.php" class="text-gray-950 block py-2">Home</a>
                    <a href="cms.php" class="text-gray-950 block py-2">CMS</a>
                    <a href="" class="text-gray-950 block py-2">Products</a>
                    <a href="categories.php" class="text-gray-950 block py-2">Categories</a>
                    <a href="#" class="text-gray-950 block py-2">Contact</a>
                </div>
                <div>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <p><?= $_SESSION['username'] ?>!</p>
                    <?php else: ?>
                        <p><a href="login.php">login</a>/<a href="signup.php">sign up</a>.</p>
                    <?php endif; ?>
                </div>
                <div class="flex space-x-2 text-gray-900">
                    <i class='bx bx-search-alt-2 text-black text-2xl'></i>
                    <i class='bx bx-heart text-black text-2xl'></i>
                    <i class='bx bx-cart text-black text-2xl'>2</i>
                </div>
            </div>
        </nav>

        <!-- Responsive Menu -->
        <div id="responsive-menu" class="hidden lg:hidden bg-blue-700 p-4">
            <a href="index.php" class="text-gray-950 block py-2">Home</a>
            <a href="cms.php" class="text-gray-950 block py-2">CMS</a>
            <a href="" class="text-gray-950 block py-2">Products</a>
            <a href="categories.php" class="text-gray-950 block py-2">Categories</a>
            <a href="#" class="text-gray-950 block py-2">Contact</a>
        </div>
      </header>

    <script>
        // JavaScript to toggle the responsive menu
        document.getElementById('menu-toggle').addEventListener('click', function () {
            var menu = document.getElementById('responsive-menu');
            menu.classList.toggle('hidden');
        });
    </script>