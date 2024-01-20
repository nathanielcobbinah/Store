<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Acme Laptop Pro - The Ultimate Productivity Machine</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="bg-gradient-to-r from-blue-600 to-blue-400  bg-no-repeat min-h-screen font-sans text-gray-800 xs:text-red-500 text-lg">

 












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
                    <a href="index.php" class="text-gray-950 hover:text-gray-700">Home</a>
                    <a href="#" class="text-gray-950 hover:text-gray-700">Shop</a>
                    <a href="#" class="text-gray-950 hover:text-gray-700">Products</a>
                    <a href="#" class="text-gray-950 hover:text-gray-700">Lorem</a>
                    <a href="#" class="text-gray-950 hover:text-gray-700">Contact</a>
                </div>
                <div class="flex space-x-2 text-gray-900 text-xl">
                    <i class='bx bx-search-alt-2 text-red-500'></i>
                    <i class='bx bx-heart text-red-500'></i>
                    <i class='bx bx-cart text-red-500'></i>
                </div>
            </div>
        </nav>

        <!-- Responsive Menu -->
        <div id="responsive-menu" class="hidden lg:hidden bg-blue-700 p-4">
            <a href="index.php" class="text-gray-950 block py-2">Home</a>
            <a href="#" class="text-gray-950 block py-2">Shop</a>
            <a href="#" class="text-gray-950 block py-2">Products</a>
            <a href="#" class="text-gray-950 block py-2">Lorem</a>
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



        








    <main class="container mx-auto sm:mx-0 px-4 sm:px-0 mt-6 sm:mt-1">
        <div class="flex flex-row sm:flex-col lg:flex-row justify-between gap-4 p-4 bg-gradient-to-r from-blue-700 to-blue-400 rounded-lg">
            <div class="rounded-lg overflow-hidden w-2/5 sm:w-full lg:w-2/5">
                <img src="images/laptop2-removebg-preview.png" alt="Acme Laptop Pro" class="w-full h-64 flex justify-center items-center">
                <div class="flex flex-row items-center gap-2 ring-1 ring-blue-400 p-0.5 mt-8 sm:px-6 lg:px-2">
                    <img src="images/laptop2-removebg-preview.png" alt="" class="w-32 h-24">
                    <img src="images/laptop2-removebg-preview.png" alt="" class="w-32 h-24">
                    <img src="images/laptop2-removebg-preview.png" alt="" class="w-32 h-24">
                    <img src="images/laptop2-removebg-preview.png" alt="" class="w-32 h-24">
                    <img src="images/laptop2-removebg-preview.png" alt="" class="w-32 h-24">
                </div>
    
                <div class="p-4 sm:p-0 lg:p-3 bg-gradient-to-l from-blue-600 to-blue-500 rounded-lg shadow-md mt-8">
                    <h2 class="text-xl font-semibold mb-2 p-3">Related Products</h2>
                    <div class="flex flex-row justify-between gap-1 flex-wrap mt-4 w-full">
                        <div class=" rounded-lg shadow-md shadow-blue-500 p-2">
                            <img src="images/iphone-15-pro-gray-removebg-preview.png" alt="Product 1" class="w-32 lg:w-40   xl:w-32  h-20 object-fill">
                            <div class="p-1 flex flex-col items-center">
                                <h3 class="text-sm font-semibold mb-2 text-center">Product 1 Name</h3>
                                <p class="text-gray-700">$99.99</p>
                                <button class="bg-red-500 text-white px-4 py-1 text-sm border-none rounded-md font-semibold">View Details</button>
                            </div>
                        </div>

                        <div class=" rounded-lg shadow-md shadow-blue-500 p-2">
                            <img src="images/game-pad-removebg-preview.png" alt="Product 2" class="w-32 lg:w-40 xl:w-32  h-20 object-fill">
                            <div class="p-1 flex flex-col items-center">
                                <h3 class="text-sm font-semibold mb-2 text-center">Product 2 Name</h3>
                                <p class="text-gray-700">$129.99</p>
                                <button class="bg-red-500 text-white px-4 py-1 text-sm border-none rounded-md font-semibold">View Details</button>
                            </div>
                        </div>

                        <div class=" rounded-lg shadow-md shadow-blue-500 p-2">
                            <img src="images/laptop2-removebg-preview.png" alt="Product 3" class="w-32 lg:w-40  xl:w-32  h-20 object-fill">
                            <div class="p-1 flex flex-col items-center">
                                <h3 class="text-sm font-semibold mb-2 text-center">Product 3 Name</h3>
                                <p class="text-gray-700">$149.99</p>
                                <button class="bg-red-500 text-white px-4 py-1 text-sm border-none rounded-md font-semibold">View Details</button>
                            </div>
                        </div>
                        <div class=" rounded-lg shadow-md shadow-blue-500 p-2">
                            <img src="images/iphone-15-pro-gray-removebg-preview.png" alt="Product 3" class="w-32 lg:w-40   xl:w-32  h-20 object-fill">
                            <div class="p-1 flex flex-col items-center">
                                <h3 class="text-sm font-semibold mb-2 text-center">Product 3 Name</h3>
                                <p class="text-gray-700">$149.99</p>
                                <button class="bg-red-500 text-white px-4 py-1 text-sm border-none rounded-md font-semibold">View Details</button>
                            </div>
                        </div>
                        <div class=" rounded-lg shadow-md shadow-blue-500 p-2">
                            <img src="images/game-pad-removebg-preview.png" alt="Product 3" class="w-32 lg:w-40 xl:w-32  h-20 object-fill">
                            <div class="p-1 flex flex-col items-center">
                                <h3 class="text-sm font-semibold mb-2 text-center">Product 3 Name</h3>
                                <p class="text-gray-700">$149.99</p>
                                <button class="bg-red-500 text-white px-4 py-1 text-sm border-none rounded-md font-semibold">View Details</button>
                            </div>
                        </div>
                        <div class=" rounded-lg shadow-md shadow-blue-500 p-2">
                            <img src="images/laptop2-removebg-preview.png" alt="Product 3" class="w-32 lg:w-40  xl:w-32  h-20 object-fill">
                            <div class="p-1 flex flex-col items-center">
                                <h3 class="text-sm font-semibold mb-2 text-center">Product 3 Name</h3>
                                <p class="text-gray-700">$149.99</p>
                                <button class="bg-red-500 text-white px-4 py-1 text-sm border-none rounded-md font-semibold">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-4 rounded-lg shadow-md w-1/2 sm:w-full lg:w-1/2">
                <h1 class="text-2xl font-bold mb-2">Acme Laptop Pro</h1>
                <p class="mb-4">The ultimate productivity machine, designed for power users and creative professionals.</p>
                <h2 class="text-xl font-semibold mb-2">Key Features</h2>
                <ul class="list-disc pl-6 mb-4">
                    <li>15.6-inch Retina display with stunning visuals</li>
                    <li>Latest Intel Core i7 processor for blazing-fast performance</li>
                    <li>16GB of RAM to handle demanding tasks with ease</li>
                    <li>512GB SSD for lightning-fast storage</li>
                    <li>All-day battery life to keep you productive on the go</li>
                </ul>

            <div class="flex flex-row items-center justify-between mr-16">
                <div>
                    <h2 class="text-xl font-semibold mb-2">Price</h2>
                    <p class="text-lg">$1,999.99</p>
                </div>
                <div>
                    <div class="p-4 rounded-lg">
                        <h2 class="text-xl font-semibold mb-2">Quantity</h2>
                        <div class="flex items-center mb-4 p-2 gap-0.5">
                            <button class="bg-gray-200 hover:bg-gray-300 text-gray-600 font-bold py-2 px-4 rounded-l">-</button>
                            <input type="number" class="text-center w-16 border border-gray-300 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-400 rounded-md text-xl" value="1">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-r">+</button>
                        </div>
                    </div>
                </div>
            </div>

            <button class="bg-red-500 text-white px-4 py-2 rounded-md font-semibold mt-4">Add to Cart</button>
            
            <div class="flex  flex-col mb-4 mt-4 border-t-2 border-t-blue-400">
                <h2 class="text-xl font-semibold mb-2">Ratings and Reviews</h2>

                <div class="flex flex-row">
                    <i class='bx bxs-star text-red-500 ml-1'></i>
                    <i class='bx bxs-star text-red-500 ml-1'></i>
                    <i class='bx bxs-star text-red-500 ml-1'></i>
                    <i class='bx bxs-star-half text-red-500 ml-1'></i>
                    <i class='bx bx-star text-red-500 ml-1'></i>
                </div>
                <span class="ml-2">4.8 (125 reviews)</span>

                <div class="mt-4">
                    <p class="text-gray-900">Read what customers are saying about this product:</p>
                    <div class="mt-2 flex flex-col gap-3 mb-2">
                        <div class="review text-gray-700 shadow-md shadow-blue-600">
                            <p class="review-text">"This laptop is amazing! It's super fast and has a great display. I'm so happy with my purchase." - John Smith</p>
                            <p class="review-rating"><i class='bx bxs-star text-red-500'></i><i class='bx bxs-star text-red-500'></i><i class='bx bxs-star text-red-500'></i><i class='bx bxs-star text-red-500'></i><i class='bx bxs-star text-red-500'></i></p>
                        </div>
                        <div class="review text-gray-700 shadow-md shadow-blue-600">
                            <p class="review-text">"This laptop is amazing! It's super fast and has a great display. I'm so happy with my purchase." - John Smith</p>
                            <p class="review-rating"><i class='bx bxs-star text-red-500'></i><i class='bx bxs-star text-red-500'></i><i class='bx bxs-star text-red-500'></i><i class='bx bxs-star text-red-500'></i><i class='bx bxs-star text-red-500'></i></p>
                        </div>
                        <div class="review text-gray-700 shadow-md shadow-blue-600">
                            <p class="review-text">"This laptop is amazing! It's super fast and has a great display. I'm so happy with my purchase." - John Smith</p>
                            <p class="review-rating"><i class='bx bxs-star text-red-500'></i><i class='bx bxs-star text-red-500'></i><i class='bx bxs-star text-red-500'></i><i class='bx bxs-star text-red-500'></i><i class='bx bxs-star text-red-500'></i></p>
                        </div>
                    </div>

                    <div class="flex flex-col">
                        <a href="#write-review" class="btn btn-blue-500 mt-4">Write a Review</a>
                        




                        <div class="flex flex-row p-2" id="ratingIcons">
                            <i class='bx bx-star text-red-500 ml-1' onclick="changeIcon(1)"></i>
                            <i class='bx bx-star text-red-500 ml-1' onclick="changeIcon(2)"></i>
                            <i class='bx bx-star text-red-500 ml-1' onclick="changeIcon(3)"></i>
                            <i class='bx bx-star text-red-500 ml-1' onclick="changeIcon(4)"></i>
                            <i class='bx bx-star text-red-500 ml-1' onclick="changeIcon(5)"></i>
                        </div>

                        <script>
                            function changeIcon(selectedIndex) {
                                const icons = document.getElementById('ratingIcons').children;
                                // Remove 'bx-star' class and add 'bxs-star' class based on the selected index.
                                for (let i = 0; i < icons.length; i++) {
                                    if (i < selectedIndex) {
                                        icons[i].classList.remove('bx-star');
                                        icons[i].classList.add('bxs-star');
                                    } else {
                                        icons[i].classList.remove('bxs-star');
                                        icons[i].classList.add('bx-star');
                                    }
                                }
                            }
                        </script>



                        
                        
                        
                        <div class="relative">
                            <textarea id="reviewTextarea" placeholder="Add a review to this product..." class="p-2 text-sm text-gray-900 outline-none h-auto w-full resize-none overflow-hidden"></textarea>
                            <i class="bx bx-send absolute w-10 right-4 bottom-4 text-gray-500"></i>
                        </div>

                        <script>
                            const textarea = document.getElementById('reviewTextarea');
                            textarea.addEventListener('input', function () {
                                this.style.height = 'auto';
                                this.style.height = (this.scrollHeight) + 'px';
                            });

                            // Trigger the input event to adjust the height initially if there is existing content.
                            textarea.dispatchEvent(new Event('input'));
                        </script>

                    </div>

                </div>
            </div>

                <!-- <div class="text-gray-800">
                    <p>"This laptop is amazing! It's super fast and has a beautiful display." - John Doe</p>
                    <p>"I've been using this laptop for work and it's been a game-changer. It's so powerful and reliable." - Jane Smith</p>
                    <p>"I've been using this laptop for work and it's been a game-changer. It's so powerful and reliable." - Jane Smith</p>
                    <p>"I've been using this laptop for work and it's been a game-changer. It's so powerful and reliable." - Jane Smith</p>
                </div> -->
            </div>
            
        </div>
    </main>

    <footer class="bg-blue-600 mb-0 p-5 ring-1 ring-blue-800 mx-6 sm:mx-2">
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

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
