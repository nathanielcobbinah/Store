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

    <?php 
    include 'header.php';
    ?>

    <script>
        // JavaScript to toggle the responsive menu
        document.getElementById('menu-toggle').addEventListener('click', function () {
            var menu = document.getElementById('responsive-menu');
            menu.classList.toggle('hidden');
        });
    </script>

  <div class=" flex flex-row justify-around  mt-5 sm:-mt-5 xl:mt-9 xl:mx-7 sm:mx-2 items-center flex-wrap sm:flex-col-reverse md:flex-row">
    <div class="w-1/3 sm:w-full flex flex-col gap-3 sm:gap-2 md:gap-4 sm:items-center  md:w-2/5 xl:w-1/2 md:items-start">
      <h3 class="text-red-500 text-bold text-2xl xl:text-3xl">SALE UP TO 30% OFF</h3>
      <h2 class="text-5xl sm:text-4xl lg:text-5xl xl:text-7xl">Top Laptop Series</h2>
      <p class="text-md" xl:text-lg>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima illo reprehenderit facilis.</p>
      <button class= "text-white py-2 px-10 rounded-3xl mx-0  bg-red-500 w-fit">Buy Now</button>
    </div>
    <div class="w-3/5 sm:w-full md:w-2/5 lg:w-96 xl:w-1/2">
      <img class="w-60 sm:w-full h-96 sm:h-80 ml-5 md:w-96 md:h-60 xl:w-full xl:w-72 xl:h-80" src="images/laptop2-removebg-preview.png" alt="">
    </div>
  </div>
  <div class="flex flex-row justify-around  items-center mt-36 md:mx-10">
    <div class="flex flex-col items-center gap-2">
      <img class="w-60 h-48 sm:w-80" src="images/game-pad-removebg-preview.png" alt="">
      <h3>Authentic Game Pad</h3>
      <button class= "text-white py-1 px-2 text-sm rounded-3xl mx-0  bg-red-600 ">Buy Now</button>
    </div>
    <div class="flex flex-col items-center gap-2">
      <img class="w-60 h-48 sm:w-80" src="images/iphone-15-pro-gray-removebg-preview.png" alt="">
      <h3>Iphone 15 Pro Max</h3>
      <button class= "text-white py-1 px-2 text-sm rounded-3xl mx-0  bg-red-600 ">Buy Now</button>
    </div>
  </div>

  <section class="my-10">
    <h2 class="p-3 text-2xl text-center">Trending Categories</h2>
    <div class="flex flex-row gap-3 md:gap-1 mx-5 items-center overflow-x-auto md:overflow-x-hidden space-x-4 md:space-x-1">
      <div class="flex flex-col items-center gap-2 w-36 h-36 flex-shrink-0 shadow-sm shadow-blue-600 p-2 sm:w-44 md:w-52  ">
        <img src="images/game-pad-removebg-preview.png" alt="" class="w-32  h-24">
        <h3 class="overflow-ellipsis text-sm text-center whitespace-pre-line line-clamp-2">Game Pad</h3>
      </div>
      <div class="flex flex-col items-center gap-2 w-36 h-36 flex-shrink-0 shadow-md shadow-blue-600 p-2 sm:w-44 md:w-52  ">
        <img src="images/laptop2-removebg-preview.png" alt="" class="w-32 h-24">
        <h3 class="overflow-ellipsis text-sm text-center whitespace-pre-line line-clamp-2">India Laptop</h3>
      </div>
      <div class="flex flex-col items-center gap-2 w-36 h-36 flex-shrink-0 shadow-md shadow-blue-600 p-2 sm:w-44 md:w-52  ">
        <img src="images/iphone-15-pro-gray-removebg-preview.png" alt="" class="w-32 h-24">
        <h3 class="overflow-ellipsis text-sm text-center whitespace-pre-line line-clamp-2">New Iphone 15 Pro-max</h3>
      </div>
      <div class="flex flex-col items-center gap-2 w-36 h-36 flex-shrink-0 shadow-md shadow-blue-600 p-2 sm:w-44 md:w-52  ">
        <img src="images/game-pad-removebg-preview.png" alt="" class="w-32 h-24">
        <h3 class="overflow-ellipsis text-sm text-center whitespace-pre-line line-clamp-2"> Original Game Pad</h3>
      </div>
      <div class="flex flex-col items-center gap-2 w-36 h-36 flex-shrink-0 shadow-md shadow-blue-600 p-2 sm:w-44 md:w-52  ">
        <img src="images/laptop2-removebg-preview.png" alt="" class="w-32 h-24">
        <h3 class="overflow-ellipsis text-sm text-center whitespace-pre-line line-clamp-2">A new Laptop</h3>
      </div>
      <div class="flex flex-col items-center gap-2 w-36 h-36 flex-shrink-0 shadow-md shadow-blue-600 p-2 sm:w-44 md:w-52  ">
        <img src="images/iphone-15-pro-gray-removebg-preview.png" alt="" class="w-32 h-24">
        <h3 class="overflow-ellipsis text-sm text-center whitespace-pre-line line-clamp-2">Iphone Pro</h3>
      </div>

    </div>
  </section>

  <section class="mt-12 mx-2 mb-3 sm:mx-4 ">
    <h2 class="py-2 px-1 text-2xl mb-4 text-center">Exclusive Deals just for you</h2>
    <div class="flex flex-row justify-around  sm:flex-col md:flex-row">
      <div class=" bg-gradient-to-r from-blue-600 to-blue-400 relative flex flex-col rounded-3xl ring-1 ring-blue-500 p-5 w-2/5 gap-2 sm:w-full md:w-1/2 md:h-72 lg:w-2/5 sm:mb-4 sm:ring-1 sm:ring-blue-700 ">
        <span class="bg-red-700 p-3 text-white rounded-full w-fit absolute top-1 left-1">30%</span>
        <img src="images/laptop2-removebg-preview.png" alt="" class="w-56 h-40  m-auto sm:w-60">
        <div class="flex flex-row justify-between">
          <h3>India Premium Laptop</h3>
          <h4>$64.99</h4>
        </div>
        <div class="flex flex-row justify-between ">
          <button class="bg-red-600 rounded-full py-1 px-2 text-white text-sm">Add To Cart</button>
          <button class="bg-red-500 rounded-full py-1 px-2 text-white text-sm">Buy Now</button>
        </div>

      </div>
      <div class=" bg-gradient-to-l from-blue-600 to-blue-400 relative flex flex-col rounded-3xl ring-1 ring-blue-500 p-5 w-2/5 gap-2 sm:w-full md:w-1/2 md:h-72 lg:w-2/5 sm:ring-1 sm:ring-blue-700">
        <span class="bg-red-700 p-3 text-white rounded-full w-fit absolute top-1 left-1">30%</span>
        <img src="images/iphone-15-pro-gray-removebg-preview.png" alt="" class="w-56 h-40  m-auto sm:w-60">
        <div class="flex flex-row justify-between">
          <h4>$99.99</h4>
          <h3>Iphone 15 Pro Max</h3>
        </div>
        <div class="flex flex-row justify-between ">
          <button class="bg-red-500 rounded-full py-1 px-2 text-white text-sm">Buy Now</button>
          <button class="bg-red-600 rounded-full py-1 px-2 text-white text-sm">Add To Cart</button>
        </div>
      </div>
    </div>
  </section>

  <section class="my-16 mx-6 sm:mx-2">
    <h2 class="p-2 text-center text-2xl">New Products</h2>
    <p class="text-sm text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur, minima.</p>
    <div class="flex justify-between gap-3 items-center mt-6 overflow-x-auto">
      <div class="flex flex-col items-center bg-gradient-to-b from-blue-600 via-blue-400 to-blue-600 p-2 ring-1 ring-blue-700 rounded-3xl flex-shrink-0">
        <img src="images/iphone-15-pro-gray-removebg-preview.png" alt="" class="w-52 h-24 ">
        <h3>Game Pad</h3>
        <h4>$34.00</h4>
        <div class="flex flex-row">
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star-half text-red-500 ml-1' ></i>
          <i class='bx bx-star text-red-500 ml-1'></i>
        </div>
      </div>
      <div class="flex flex-col items-center bg-gradient-to-b from-blue-600 via-blue-400 to-blue-600 p-2 ring-1 ring-blue-700 rounded-3xl flex-shrink-0">
        <img src="images/laptop2-removebg-preview.png" alt="" class="w-52 h-24 ">
        <h3>Game Pad</h3>
        <h4>$34.00</h4>
        <div class="flex flex-row">
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star-half text-red-500 ml-1' ></i>
          <i class='bx bx-star text-red-500 ml-1'></i>
        </div>
      </div>
      <div class="flex flex-col items-center bg-gradient-to-b from-blue-600 via-blue-400 to-blue-600 p-2 ring-1 ring-blue-700 rounded-3xl flex-shrink-0">
        <img src="images/game-pad-removebg-preview.png" alt="" class="w-52 h-24 ">
        <h3>Game Pad</h3>
        <h4>$34.00</h4>
        <div class="flex flex-row">
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star-half text-red-500 ml-1' ></i>
          <i class='bx bx-star text-red-500 ml-1'></i>
        </div>
      </div>
      <div class="flex flex-col items-center bg-gradient-to-b from-blue-600 via-blue-400 to-blue-600 p-2 ring-1 ring-blue-700 rounded-3xl flex-shrink-0">
        <img src="images/iphone-15-pro-gray-removebg-preview.png" alt="" class="w-52 h-24 ">
        <h3>Game Pad</h3>
        <h4>$34.00</h4>
        <div class="flex flex-row">
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star-half text-red-500 ml-1' ></i>
          <i class='bx bx-star text-red-500 ml-1'></i>
        </div>
      </div>
      <div class="flex flex-col items-center bg-gradient-to-b from-blue-600 via-blue-400 to-blue-600 p-2 ring-1 ring-blue-700 rounded-3xl flex-shrink-0">
        <img src="images/laptop2-removebg-preview.png" alt="" class="w-52 h-24 ">
        <h3>Game Pad</h3>
        <h4>$34.00</h4>
        <div class="flex flex-row">
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star-half text-red-500 ml-1' ></i>
          <i class='bx bx-star text-red-500 ml-1'></i>
        </div>
      </div>
    </div>
  </section>

  <section class="m-12 mx-6 sm:mx-2">
    <h2 class="text-3xl text-center text">More In Our Store</h2>
    <p class="text-sm p-2 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium minima eum, ipsum consectetur veniam cum.</p>
    <div class="flex flex-row flex-wrap justify-between items-center gap-1">
      <div class="flex flex-col justify-between mb-4 items-center bg-gradient-to-b  from-blue-600 via-blue-400 to-blue-600 p-2 w-52  h-56 sm:h-52 sm:w-48 md:w-60 ring-1 flex-shrink-0 ring-blue-700 rounded-3xl">
        <img src="images/game-pad-removebg-preview.png" alt="" class="w-52 h-24 ">
        <h3 class="overflow-ellipsis line-clamp-1 text-sm ">Game Pad</h3>
        <h4>$34.00</h4>
        <div class="flex flex-row">
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star-half text-red-500 ml-1' ></i>
          <i class='bx bx-star text-red-500 ml-1'></i>
        </div>
        <button class="bg-red-500 text-white py-0.5 px-2 mt-2 text-sm rounded-md mb-1">Add To Cart</button>
      </div>
      <div class="flex flex-col justify-between mb-4 items-center bg-gradient-to-b  from-blue-600 via-blue-400 to-blue-600 p-2 w-52  h-56 sm:h-52 sm:w-48 md:w-60 ring-1 flex-shrink-0 ring-blue-700 rounded-3xl">
        <img src="images/laptop2-removebg-preview.png" alt="" class="w-52 h-24 overflow-hidden">
        <h3 class="overflow-ellipsis line-clamp-1 text-sm ">Laptop </h3>
        <h4>$104.00</h4>
        <div class="flex flex-row">
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star-half text-red-500 ml-1' ></i>
          <i class='bx bx-star text-red-500 ml-1'></i>
        </div>
        <button class="bg-red-500 text-white py-0.5 px-2 mt-2 text-sm rounded-md mb-1">Add To Cart</button>
      </div>
      <div class="flex flex-col justify-between mb-4 items-center bg-gradient-to-b  from-blue-600 via-blue-400 to-blue-600 p-2 w-52  h-56 sm:h-52 sm:w-48 md:w-60 ring-1 flex-shrink-0 ring-blue-700 rounded-3xl">
        <img src="images/iphone-15-pro-gray-removebg-preview.png" alt="" class="w-52 h-24 overflow-hidden">
        <h3 class="overflow-ellipsis line-clamp-1 text-sm ">Iphone 15 Pro Max</h3>
        <h4>$224.00</h4>
        <div class="flex flex-row">
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star-half text-red-500 ml-1' ></i>
          <i class='bx bx-star text-red-500 ml-1'></i>
        </div>
        <button class="bg-red-500 text-white py-0.5 px-2 mt-2 text-sm rounded-md mb-1">Add To Cart</button>
      </div>
      <div class="flex flex-col justify-between mb-4 items-center bg-gradient-to-b  from-blue-600 via-blue-400 to-blue-600 p-2 w-52  h-56 sm:h-52 sm:w-48 md:w-60 ring-1 flex-shrink-0 ring-blue-700 rounded-3xl">
        <img src="images/game-pad-removebg-preview.png" alt="" class="w-52 h-24 overflow-hidden">
        <h3 class="overflow-ellipsis line-clamp-1 text-sm ">Game Pad</h3>
        <h4>$34.00</h4>
        <div class="flex flex-row">
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star-half text-red-500 ml-1' ></i>
          <i class='bx bx-star text-red-500 ml-1'></i>
        </div>
        <button class="bg-red-500 text-white py-0.5 px-2 mt-2 text-sm rounded-md mb-1">Add To Cart</button>
      </div>
      <div class="flex flex-col justify-between mb-4 items-center bg-gradient-to-b  from-blue-600 via-blue-400 to-blue-600 p-2 w-52  h-56 sm:h-52 sm:w-48 md:w-60 ring-1 flex-shrink-0 ring-blue-700 rounded-3xl">
        <img src="images/laptop2-removebg-preview.png" alt="" class="w-52 h-24 overflow-hidden">
        <h3 class="overflow-ellipsis line-clamp-1 text-sm ">HP Laptop Computer</h3>
        <h4>$100.00</h4>
        <div class="flex flex-row">
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star-half text-red-500 ml-1' ></i>
          <i class='bx bx-star text-red-500 ml-1'></i>
        </div>
        <button class="bg-red-500 text-white py-0.5 px-2 mt-2 text-sm rounded-md mb-1">Add To Cart</button>
      </div>
      <div class="flex flex-col justify-between mb-4 items-center bg-gradient-to-b  from-blue-600 via-blue-400 to-blue-600 p-2 w-52  h-56 sm:h-52 sm:w-48 md:w-60 ring-1 flex-shrink-0 ring-blue-700 rounded-3xl">
        <img src="images/iphone-15-pro-gray-removebg-preview.png" alt="" class="w-52 h-24 overflow-hidden">
        <h3 class="overflow-ellipsis line-clamp-1 text-sm ">New Iphone 15</h3>
        <h4>$111.00</h4>
        <div class="flex flex-row">
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star-half text-red-500 ml-1' ></i>
          <i class='bx bx-star text-red-500 ml-1'></i>
        </div>
        <button class="bg-red-500 text-white py-0.5 px-2 mt-2 text-sm rounded-md mb-1">Add To Cart</button>
      </div>
      <div class="flex flex-col justify-between mb-4 items-center bg-gradient-to-b  from-blue-600 via-blue-400 to-blue-600 p-2 w-52  h-56 sm:h-52 sm:w-48 md:w-60 ring-1 flex-shrink-0 ring-blue-700 rounded-3xl">
        <img src="images/game-pad-removebg-preview.png" alt="" class="w-52 h-24 overflow-hidden">
        <h3 class="overflow-ellipsis line-clamp-1 text-sm ">Game Pad</h3>
        <h4>$34.00</h4>
        <div class="flex flex-row">
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star-half text-red-500 ml-1' ></i>
          <i class='bx bx-star text-red-500 ml-1'></i>
        </div>
        <button class="bg-red-500 text-white py-0.5 px-2 mt-2 text-sm rounded-md mb-1">Add To Cart</button>
      </div>
      <div class="flex flex-col justify-between mb-4 items-center bg-gradient-to-b  from-blue-600 via-blue-400 to-blue-600 p-2 w-52  h-56 sm:h-52 sm:w-48 md:w-60 ring-1 flex-shrink-0 ring-blue-700 rounded-3xl">
        <img src="images/laptop2-removebg-preview.png" alt="" class="w-52 h-24 overflow-hidden">
        <h3 class="overflow-ellipsis line-clamp-1 text-sm ">Laptop Computer</h3>
        <h4>$34.00</h4>
        <div class="flex flex-row">
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star-half text-red-500 ml-1' ></i>
          <i class='bx bx-star text-red-500 ml-1'></i>
        </div>
        <button class="bg-red-500 text-white py-0.5 px-2 mt-2 text-sm rounded-md mb-1">Add To Cart</button>
      </div>
      <div class="flex flex-col justify-between mb-4 items-center bg-gradient-to-b  from-blue-600 via-blue-400 to-blue-600 p-2 w-52  h-56 sm:h-52 sm:w-48 md:w-60 ring-1 flex-shrink-0 ring-blue-700 rounded-3xl">
        <img src="images/iphone-15-pro-gray-removebg-preview.png" alt="" class="w-52 h-24 overflow-hidden">
        <h3 class="overflow-ellipsis line-clamp-1 text-sm ">Iphone 15 Pro</h3>
        <h4>$34.00</h4>
        <div class="flex flex-row">
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star-half text-red-500 ml-1' ></i>
          <i class='bx bx-star text-red-500 ml-1'></i>
        </div>
        <button class="bg-red-500 text-white py-0.5 px-2 mt-2 text-sm rounded-md mb-1">Add To Cart</button>
      </div>
      <div class="flex flex-col justify-between mb-4 items-center bg-gradient-to-b  from-blue-600 via-blue-400 to-blue-600 p-2 w-52  h-56 sm:h-52 sm:w-48 md:w-60 ring-1 flex-shrink-0 ring-blue-700 rounded-3xl">
        <img src="images/game-pad-removebg-preview.png" alt="" class="w-52 h-24 overflow-hidden">
        <h3 class="overflow-ellipsis line-clamp-1 text-sm ">Game Pad</h3>
        <h4>$34.00</h4>
        <div class="flex flex-row">
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star-half text-red-500 ml-1' ></i>
          <i class='bx bx-star text-red-500 ml-1'></i>
        </div>
        <button class="bg-red-500 text-white py-0.5 px-2 mt-2 text-sm rounded-md mb-1">Add To Cart</button>
      </div>
      <div class="flex flex-col justify-between mb-4 items-center bg-gradient-to-b  from-blue-600 via-blue-400 to-blue-600 p-2 w-52  h-56 sm:h-52 sm:w-48 md:w-60 ring-1 flex-shrink-0 ring-blue-700 rounded-3xl">
        <img src="images/laptop2-removebg-preview.png" alt="" class="w-52 h-24 overflow-hidden">
        <h3 class="overflow-ellipsis line-clamp-1 text-sm ">Laptop Computer</h3>
        <h4>$34.00</h4>
        <div class="flex flex-row">
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star-half text-red-500 ml-1' ></i>
          <i class='bx bx-star text-red-500 ml-1'></i>
        </div>
        <button class="bg-red-500 text-white py-0.5 px-2 mt-2 text-sm rounded-md mb-1">Add To Cart</button>
      </div>
      <div class="flex flex-col justify-between mb-4 items-center bg-gradient-to-b  from-blue-600 via-blue-400 to-blue-600 p-2 w-52  h-56 sm:h-52 sm:w-48 md:w-60 ring-1 flex-shrink-0 ring-blue-700 rounded-3xl">
        <img src="images/game-pad-removebg-preview.png" alt="" class="w-52 h-24 overflow-hidden">
        <h3 class="overflow-ellipsis line-clamp-1 text-sm ">Game Pad</h3>
        <h4>$34.00</h4>
        <div class="flex flex-row">
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star text-red-500 ml-1' ></i>
          <i class='bx bxs-star-half text-red-500 ml-1' ></i>
          <i class='bx bx-star text-red-500 ml-1'></i>
        </div>
        <button class="bg-red-500 text-white py-0.5 px-2 mt-2 text-sm rounded-md mb-1">Add To Cart</button>
      </div>
    </div>
  </section>

  <section class="m-12 mx-6 sm:mx-1">
    <div class="bg-blue-500 w-full h-auto p-12 sm:p-1 m-auto ring-1 ring-blue-700">
      <div class="mx-20 sm:mx-4 lg:mx-20 flex flex-row gap-1 justify-between items-center m-auto">
        <div class=" flex flex-col gap-4">
          <h3 class="text-3xl uppercase mt-12">LIMITED WEEKLY <br> DEAL</h3>
          <p>Last call for up to <span class="text-red-600 text-2xl">$253.00 off!</span></p>
        </div>
        <div class="">
          <img src="images/laptop2-removebg-preview.png" alt="" class="w-96 h-64 sm:h-52 sm:w-72 lg:w-80 xl:w-96 xl:h-64">
        </div>
      </div>
    </div>
  </section>

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
  
 <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>