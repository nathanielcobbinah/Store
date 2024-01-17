<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout for order</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="bg-gradient-to-r from-blue-600 to-blue-400  bg-no-repeat min-h-screen font-sans text-gray-800 xs:text-red-500 text-lg">
    <header>
        <nav class="bg-blue-700 p-4">
            <div class="  flex justify-between items-center">
                <a href="#" class="text-gray-950 font-bold text-lg">E_Store</a>
                <div class="space-x-4 text-md">
                    <a href="#" class="text-gray-950 hover:text-gray-700">Home</a>
                    <a href="#" class="text-gray-950 hover:text-gray-700">Shop</a>
                    <a href="#" class="text-gray-950 hover:text-gray-700">Products</a>
                    <a href="#" class="text-gray-950 hover:text-gray-700">Lorem</a>
                    <a href="#" class="text-gray-950 hover:text-gray-700">Contact</a>
                </div>      
                <div class="flex space-x-2 text-gray-900 text-xl">
                    <i class='bx bx-search-alt-2 text-red-500'></i>
                    <i class='bx bx-heart text-red-500' ></i>
                    <i class='bx bx-cart text-red-500' ></i>
                </div>
            </div>
        </nav>
    </header>

    <!-- Checkout Form -->
    <div class="container mx-auto mt-8 p-4">
        <h1 class="text-3xl font-semibold text-gray-800 mb-4 m-auto">Checkout</h1>
        <form action="#" method="POST" class="max-w-2xl mx-auto">
            <!-- Billing Information -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-500 p-6 rounded-md shadow-md mb-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Billing Information</h2>
                <!-- Form fields go here -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="mb-4">
                        <label for="fullName" class="block text-gray-700 text-sm font-medium">Full Name</label>
                        <input type="text" id="fullName" name="fullName" class="mt-1 p-2 w-full border outline-none focus:ring-2 focus:ring-blue-200 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-medium">Email Address</label>
                        <input type="email" id="email" name="email" class="mt-1 p-2 w-full border outline-none focus:ring-2 focus:ring-blue-200 rounded-md">
                    </div>
                </div>
                <!-- Add more billing information fields as needed -->
            </div>

            <!-- Shipping Information -->
            <div class="bg-gradient-to-l from-blue-600 to-blue-500 p-6 rounded-md shadow-md mb-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Shipping Information</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="mb-4">
                        <label for="address" class="block text-gray-700 text-sm font-medium">Address</label>
                        <input type="text" id="address" name="address" class="mt-1 p-2 w-full border outline-none focus:ring-2 focus:ring-blue-200 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="city" class="block text-gray-700 text-sm font-medium">City</label>
                        <input type="text" id="city" name="city" class="mt-1 p-2 w-full border outline-none focus:ring-2 focus:ring-blue-200 rounded-md">
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="shippingType" class="block text-gray-700 text-sm font-medium">Shipping Type</label>
                    <select id="shippingType" name="shippingType" class="mt-1 p-2 w-full border focus:ring-2 focus:ring-blue-200 rounded-md">
                        <option value="standard">Standard Shipping</option>
                        <option value="express">Express Shipping</option>
                        <!-- Add more shipping options as needed -->
                    </select>
                </div>
                
                <!-- Add more shipping information fields as needed -->
            </div>

            <!-- Payment Information -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-500 p-6 rounded-md shadow-md mb-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Payment Information</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="mb-4">
                        <label for="cardNumber" class="block text-gray-700 text-sm font-medium">Card Number</label>
                        <input type="text" id="cardNumber" name="cardNumber" class="mt-1 p-2 w-full border outline-none focus:ring-2 focus:ring-blue-200 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="cardHolder" class="block text-gray-700 text-sm font-medium">Cardholder's Name</label>
                        <input type="text" id="cardHolder" name="cardHolder" class="mt-1 p-2 w-full border outline-none focus:ring-2 focus:ring-blue-200 rounded-md">
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <div class="mb-4">
                        <label for="expirationDate" class="block text-gray-700 text-sm font-medium">Expiration Date</label>
                        <input type="text" id="expirationDate" name="expirationDate" placeholder="MM/YYYY" class="mt-1 p-2 w-full border outline-none focus:ring-2 focus:ring-blue-200 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="cvv" class="block text-gray-700 text-sm font-medium">CVV</label>
                        <input type="text" id="cvv" name="cvv" class="mt-1 p-2 w-full border outline-none focus:ring-2 focus:ring-blue-200 rounded-md">
                    </div>
                </div>
                <!-- Add more payment information fields as needed -->
            </div>

            <!-- Order Summary -->
            <div class="bg-gradient-to-l from-blue-600 to-blue-500 p-6 rounded-md shadow-md mb-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Order Summary</h2>
                <div class="flex justify-between mb-2">
                    <span class="text-gray-700">Subtotal</span>
                    <span class="text-gray-700">$99.99</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="text-gray-700">Shipping</span>
                    <span class="text-gray-700">$9.99</span>
                </div>
                <div class="border-t border-gray-300 my-2"></div>
                <div class="flex justify-between mb-2">
                    <span class="font-bold text-xl">Total</span>
                    <span class="font-bold text-xl">$109.98</span>
                </div>
            </div>

            <!-- Place Order Button -->
            <div class="flex justify-end">
                <button type="submit" class="bg-red-500 text-white font-bold px-4 py-2 rounded-full hover:bg-blue-600 shadow-md shadow-gray-400 focus:outline-none focus:shadow-outline-blue">Place Order</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-600 mb-0 p-5 ring-1 ring-blue-800 mx-6 mt-20 sm:mx-2">
        <!-- Footer content goes here -->
    </footer>

</body>
</html>
