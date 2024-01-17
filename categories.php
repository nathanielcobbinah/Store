<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecommerce Website</title>
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

<body class="bg-gray-100 font-sans">

    <!-- Category Header -->
    <header class="bg-blue-to-b from-blue-600 to-blue-500 py-8">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold text-gray-800">Shop by Category</h1>
            <p class="text-gray-600 mt-2">Explore our wide range of products</p>
        </div>
    </header>

    <div class="flex flex-row justify-between mt-6 mx-2 sm:mx-0.5">
        <div class="w-1/5 shadow-md shadow-gray-300 bg-blue-600 rounded-lg h-auto ml-3">
            <ul class="flex flex-col flex-wrap justify-center gap-4 text-lg font-semibold uppercase">
                <li><a href="#" class="px-4 py-2 rounded-md hover:bg-blue-500 hover:text-gray-700 transition-all duration-200 shadow-sm shadow-gray-400 border-b-2 border-blue-500 w-full block sm:text-sm lg:text-md 2xl:text-xl">Laptops</a></li>
                <li><a href="#" class="px-4 py-2 rounded-md hover:bg-blue-500 hover:text-gray-700 transition-all duration-200 shadow-sm shadow-gray-400 border-b-2 border-blue-500 w-full block sm:text-sm lg:text-md 2xl:text-xl">Phones</a></li>
                <li><a href="#" class="px-4 py-2 rounded-md hover:bg-blue-500 hover:text-gray-700 transition-all duration-200 shadow-sm shadow-gray-400 border-b-2 border-blue-500 w-full block sm:text-sm lg:text-md 2xl:text-xl">Watches</a></li>
                <li><a href="#" class="px-4 py-2 rounded-md hover:bg-blue-500 hover:text-gray-700 transition-all duration-200 shadow-sm shadow-gray-400 border-b-2 border-blue-500 w-full block sm:text-sm lg:text-md 2xl:text-xl">Cameras</a></li>
                <li><a href="#" class="px-4 py-2 rounded-md hover:bg-blue-500 hover:text-gray-700 transition-all duration-200 shadow-sm shadow-gray-400 border-b-2 border-blue-500 w-full block sm:text-sm lg:text-md 2xl:text-xl">Headphones</a></li>
                <li><a href="#" class="px-4 py-2 rounded-md hover:bg-blue-500 hover:text-gray-700 transition-all duration-200 shadow-sm shadow-gray-400 border-b-2 border-blue-500 w-full block sm:text-sm lg:text-md 2xl:text-xl">Gaming</a></li>
            </ul>
        </div>
    
        <div class="flex justify-between flex-wrap gap-1 ml-4 w-4/5">
            <div class="bg-gradient-to-b from-blue-600 via-blue-400 to-blue-600 shadow-md shadow-gray-700  p-2 pb-4 rounded-lg m-auto  w-80  md:w-72 xl:w-80 mb-8">
                <img src="images/Top-laptop-brands-in-India-1200x900.webp" alt="Product Image" class="w-full h-44 object-cover mb-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h2>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="flex flex-row justify-between items-center">
                    <span class="text-red-500 font-bold shadow-md shadow-gray-400 py-2 px-4 rounded-full">$19.99</span>
                    <button class="bg-red-500 text-white font-bold px-4 py-2 rounded-full  hover:bg-blue-600 shadow-md shadow-gray-400 focus:outline-none focus:shadow-outline-blue">Add to Cart</button>
                </div>
            </div>
            <div class="bg-gradient-to-b from-blue-600 via-blue-400 to-blue-600 shadow-md shadow-gray-700  p-2 pb-4 rounded-lg m-auto  w-80  md:w-72 xl:w-80 mb-8">
                <img src="images/iphone-15-pro-gray.jpg" alt="Product Image" class="w-full h-44 object-cover mb-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h2>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="flex flex-row justify-between items-center">
                    <span class="text-red-500 font-bold shadow-md shadow-gray-400 py-2 px-4 rounded-full">$19.99</span>
                    <button class="bg-red-500 text-white font-bold px-4 py-2 rounded-full  hover:bg-blue-600 shadow-md shadow-gray-400 focus:outline-none focus:shadow-outline-blue">Add to Cart</button>
                </div>
            </div>
            <div class="bg-gradient-to-b from-blue-600 via-blue-400 to-blue-600 shadow-md shadow-gray-700  p-2 pb-4 rounded-lg m-auto  w-80  md:w-72 xl:w-80 mb-8">
            <img src="images/game-pad.jpg" alt="Product Image" class="w-full h-44 object-cover mb-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h2>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="flex flex-row justify-between items-center">
                    <span class="text-red-500 font-bold shadow-md shadow-gray-400 py-2 px-4 rounded-full">$19.99</span>
                    <button class="bg-red-500 text-white font-bold px-4 py-2 rounded-full  hover:bg-blue-600 shadow-md shadow-gray-400 focus:outline-none focus:shadow-outline-blue">Add to Cart</button>
                </div>
            </div>
            <div class="bg-gradient-to-b from-blue-600 via-blue-400 to-blue-600 shadow-md shadow-gray-700  p-2 pb-4 rounded-lg m-auto  w-80  md:w-72 xl:w-80 mb-8">
                <img src="images/laptop2.jpeg" alt="Product Image" class="w-full h-44 object-cover mb-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h2>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="flex flex-row justify-between items-center">
                    <span class="text-red-500 font-bold shadow-md shadow-gray-400 py-2 px-4 rounded-full">$19.99</span>
                    <button class="bg-red-500 text-white font-bold px-4 py-2 rounded-full  hover:bg-blue-600 shadow-md shadow-gray-400 focus:outline-none focus:shadow-outline-blue">Add to Cart</button>
                </div>
            </div>
            <div class="bg-gradient-to-b from-blue-600 via-blue-400 to-blue-600 shadow-md shadow-gray-700  p-2 pb-4 rounded-lg m-auto  w-80  md:w-72 xl:w-80 mb-8">
                <img src="images/Top-laptop-brands-in-India-1200x900.webp" alt="Product Image" class="w-full h-44 object-cover mb-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h2>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="flex flex-row justify-between items-center">
                    <span class="text-red-500 font-bold shadow-md shadow-gray-400 py-2 px-4 rounded-full">$19.99</span>
                    <button class="bg-red-500 text-white font-bold px-4 py-2 rounded-full  hover:bg-blue-600 shadow-md shadow-gray-400 focus:outline-none focus:shadow-outline-blue">Add to Cart</button>
                </div>
            </div>
            <div class="bg-gradient-to-b from-blue-600 via-blue-400 to-blue-600 shadow-md shadow-gray-700  p-2 pb-4 rounded-lg m-auto  w-80  md:w-72 xl:w-80 mb-8">
                <img src="images/iphone-15-pro-gray.jpg" alt="Product Image" class="w-full h-44 object-cover mb-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h2>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="flex flex-row justify-between items-center">
                    <span class="text-red-500 font-bold shadow-md shadow-gray-400 py-2 px-4 rounded-full">$19.99</span>
                    <button class="bg-red-500 text-white font-bold px-4 py-2 rounded-full  hover:bg-blue-600 shadow-md shadow-gray-400 focus:outline-none focus:shadow-outline-blue">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>






    <footer class="bg-blue-600 mb-0 p-5 ring-1 ring-blue-800 mx-6 mt-20 sm:mx-2">
        <div class="flex flex-row gap-3 justify-around items-center">
            <div class="flex flex-col items-center gap-2 w-1/4">
                <i class='bx bx-package text-5xl text-gray-700' ></i>
                <h3 class="text-center">Free delivery</h3>
                <p class="text-center text-sm">And free returns. See checkout for delivery dates</p>
            </div>
            <div class="flex flex-col items-center gap-2 w-1/4">
                <i class='bx bx-dollar-circle text-5xl text-gray-700' ></i>
                <h3 class="text-center">Pay monthly at 0% APR</h3>
                <p class="text-center text-sm">Choose to chekc out with Apple Card Monthly installments</p>
            </div>
            <div class="flex flex-col items-center gap-2 w-1/4">
                <i class='bx bx-pause-circle text-5xl text-gray-700'></i>
                <h3 class="text-center">Personalize it</h3>
                <p class="text-center text-sm">Enagage your device with your name or a personal note</p>
            </div>
        </div>

    <div class="mt-16">
      <div class="flex flex-row justify-between items-start flex-wrap gap-3">
        <div class="flex flex-col gap-2 text-sm">
          <h3 class="text-gray-800 text-2xl">Contact Us</h3>
          <div class="flex flex-col">
            <a href="#">Drou Demo Store</a>
            <a href="#">No. 1259 Freedom, New York</a>
            <a href="#">United State</a>
            <a href="#">+91-8343243425</a>
            <a href="#">demo@exampledemo.com</a>
          </div>
        </div>
        <div class="flex flex-col gap-2 text-sm">
          <h3 class="text-gray-800 text-2xl">Information</h3>
          <div class="flex flex-col">
            <a href="#">Product Support</a>
            <a href="#">Checkout</a>
            <a href="#">License Policy</a>
            <a href="#">Affiliate</a>
          </div>
        </div>
        <div class="flex flex-col gap-2 text-sm">
          <h3 class="text-gray-800 text-2xl">Customer Service</h3>
          <div class="flex flex-col">
            <a href="#">Help Center</a>
            <a href="#">Redeem Voucher</a>
            <a href="#">Contact Us</a>
            <a href="#">Policies & Rules</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="flex flex-row justify-between mt-12">
      <div>
        <p class="text-sm">Copyright©DeEscades | Built with Lorem by DeEscades.</p>
      </div>
      <div>
        <img src="images/payment-method.webp" alt="">
      </div>
    </div>

    </footer>

    
    
    

</body>

</html>
