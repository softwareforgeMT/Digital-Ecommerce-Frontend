<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Computer Nostalgia Navbar</title>
  <link rel="stylesheet" href="/css/output.css" />
  <link rel="stylesheet" href="/css/tailwind.css">
</head>

<body
  class="relative bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300">
  <!-- Navigation Bar -->
  <?php include 'components/navbar.php'; ?>

  <!-- Modern Hero Section -->
  <section class="relative h-screen overflow-hidden bg-gray-50 dark:bg-gray-900">
    <!-- Dotted Grid Background Pattern -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
      <div class="absolute inset-0 opacity-10">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <pattern id="dotted-grid" width="20" height="20" patternUnits="userSpaceOnUse">
              <circle cx="10" cy="10" r="1.5" class="fill-gray-700 dark:fill-gray-300" />
            </pattern>
          </defs>
          <rect width="100%" height="100%" fill="url(#dotted-grid)" />
        </svg>
      </div>
    </div>



    <!-- Content Container -->
    <div class="z-10 h-full container mx-auto px-4 md:px-6 flex items-center">
      <div class="max-w-xl">
        <!-- Badge -->

        <span class="inline-block px-5 py-2 rounded-full bg-purple-100 bg-opacity-50 dark:bg-purple-800 dark:bg-opacity-50 text-purple-700 dark:text-pink-100 text-sm font-medium mb-4 border border-transparent dark:border-pink-500 dark:border-opacity-30 shadow-sm">Where Convenience Meets Innovation</span>

        <!-- Heading -->
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black dark:text-white mb-6 opacity-0 transform -translate-y-4 animate-fade-in-down animation-delay-150">
          Discover Our
          <span class="relative">
            <span class="text-transparent bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text">New Collection</span>
          </span>
        </h1>

        <!-- Description -->
        <p class="text-gray-700 dark:text-gray-300 mt-6 text-lg max-w-2xl mx-auto leading-relaxed mb-4">
          Elevate your space with our premium collection of handcrafted furniture, designed for comfort and sophistication.
        </p>

        <!-- Button -->
        <a href="#" class="relative inline-flex items-center">
          <button class="bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 text-white font-bold py-3 px-10 rounded-full transition-all duration-300 transform hover:-translate-y-2">
            <span class="relative flex items-center">
              Explore More Products
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </span>
          </button>
          <!-- Button glow effect -->
          <span class="absolute -inset-2 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 opacity-30 blur-lg transform scale-110 animate-pulse"></span>
        </a>

        <!-- Features -->
        <div class="mt-16 grid grid-cols-3 gap-4 opacity-0 transform -translate-y-4 animate-fade-in-down animation-delay-600">
          <div class="flex flex-col items-center md:items-center">
            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-opacity-20 mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <span class="text-black dark:text-white text-sm text-center ">Fast Shipping</span>
          </div>
          <div class="flex flex-col items-center md:items-center">
            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-opacity-20 mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
            </div>
            <span class="text-black dark:text-white text-sm text-center ">Quality Guarantee</span>
          </div>
          <div class="flex flex-col items-center md:items-center">
            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-opacity-20 mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
              </svg>
            </div>
            <span class="text-black dark:text-white text-sm text-center ">Secure Payment</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Floating Elements -->
    <div class="absolute hidden sm:block md:bottom-16 md:right-16 w-24 h-24 md:w-32 md:h-32 bg-gray-700 dark:bg-gray-400 bg-opacity-10 dark:bg-opacity-10 backdrop-blur-md rounded-full animate-float"></div>

    <div class="absolute top-2 right-1/2 md:top-32 md:right-24 w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 bg-opacity-10 backdrop-blur-md rounded-full animate-float animation-delay-2000"></div>
  </section>


  <!-- Home Page Cards -->
  <?php
  $cards = [
    ["image" => "/assets/homePageCardImage.png", "title" => "Heading 1"],
    ["image" => "/assets/homePageCardImage.png", "title" => "Heading 2"],
    ["image" => "/assets/homePageCardImage.png", "title" => "Heading 3"],
    ["image" => "/assets/homePageCardImage.png", "title" => "Heading 4"],
    ["image" => "/assets/homePageCardImage.png", "title" => "Heading 5"],
    ["image" => "/assets/homePageCardImage.png", "title" => "Heading 6"]
  ];
  ?>

  <section class="relative bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300 flex flex-col items-center py-16">
    <!-- Dotted Grid Background Pattern -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
      <div class="absolute inset-0 opacity-10">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <pattern id="dotted-grid" width="20" height="20" patternUnits="userSpaceOnUse">
              <circle cx="10" cy="10" r="1.5" class="fill-gray-700 dark:fill-gray-300" />
            </pattern>
          </defs>
          <rect width="100%" height="100%" fill="url(#dotted-grid)" />
        </svg>
      </div>
    </div>

    <!-- Section Header -->
    <div class="relative z-10 mb-12">
      <h1 class="text-4xl md:text-5xl font-bold text-center mb-4 relative">
        <span class="text-transparent bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text">The Latest</span>
      </h1>
      <p class="text-gray-600 dark:text-gray-300 text-center mb-2 max-w-2xl">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
      </p>
      <!-- Decorative line -->
      <div class="flex items-center justify-center mt-6">
        <div class="h-px w-10 bg-gradient-to-r from-transparent to-pink-300"></div>
        <div class="h-1 w-24 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full mx-2 animate-pulse"></div>
        <div class="h-px w-10 bg-gradient-to-l from-transparent to-pink-300"></div>
      </div>
    </div>

    <div class="w-[90%] md:w-full max-w-7xl overflow-hidden relative">
      <!-- Arrow Buttons -->
      <button id="scrollLeft" class="absolute left-0 top-1/2 transform -translate-y-1/2 p-3 rounded-full z-10 text-gray-900 dark:text-white bg-white/80 dark:bg-gray-800/80 shadow-lg hover:bg-white hover:dark:bg-gray-800 transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </button>

      <!-- Cards Wrapper -->
      <div id="cardContainer" class="flex space-x-6 md:space-x-8 transition-transform duration-500 py-10">
        <?php foreach ($cards as $index => $card): ?>
          <div class="card min-w-[290px] md:min-w-[365px] bg-white dark:bg-gray-800 rounded-xl shadow-xl overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl border border-gray-100 dark:border-gray-700">
            <div class="relative">
              <img src="<?= $card['image'] ?>" class="w-full h-[200px] object-cover" alt="<?= $card['title'] ?>" />
              <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-black/50 to-transparent"></div>
            </div>
            <div class="p-6">
              <span class="inline-block px-3 py-1 text-xs font-semibold text-white bg-gradient-to-r from-purple-600 to-pink-500 rounded-full mb-3">Featured <?= $index + 1 ?></span>
              <h2 class="text-xl font-bold mb-3 dark:text-white"><?= $card['title'] ?></h2>
              <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <div class="flex justify-between items-center">
                <button class="bg-gradient-to-r from-purple-600 to-pink-500 text-white px-4 py-2 rounded-lg flex items-center gap-2 hover:shadow-lg transition-all duration-300 group">
                  <span>Learn More</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                  </svg>
                </button>
                <span class="text-gray-400 dark:text-gray-500 text-sm">Mar 2025</span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Right Arrow Button -->
      <button id="scrollRight" class="absolute right-0 top-1/2 transform -translate-y-1/2 p-3 rounded-full z-10 text-gray-900 dark:text-white bg-white/80 dark:bg-gray-800/80 shadow-lg hover:bg-white hover:dark:bg-gray-800 transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>

    <!-- Indicator Dots -->
    <div id="indicatorContainer" class="flex space-x-3 mt-8">
      <?php for ($i = 0; $i < count($cards); $i++): ?>
        <button class="w-3 h-3 rounded-full bg-gray-300 dark:bg-gray-700 transition-all duration-300 hover:bg-purple-500 hover:dark:bg-purple-500 <?= $i === 0 ? 'bg-purple-500 dark:bg-purple-500' : '' ?>"></button>
      <?php endfor; ?>
    </div>
  </section>



  <!-- Brand Categories Section -->

  <?php
  $categories = [
    [
      "title" => "Brand Categories 1",
      "description" => "Link Airtable to your existing tools, connect important business processes."
    ],
    [
      "title" => "Brand Categories 2",
      "description" => "Connect your data across various platforms, streamline your workflow."
    ],
    [
      "title" => "Brand Categories 3",
      "description" => "Build dynamic databases, integrate with multiple APIs, and automate processes."
    ]
  ];
  ?>

  <section class="relative py-20 overflow-hidden  text-gray-800 dark:text-white transition-all duration-500">
    <!-- Dotted Grid Background Pattern -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
      <div class="absolute inset-0 opacity-10">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <pattern id="dotted-grid" width="20" height="20" patternUnits="userSpaceOnUse">
              <circle cx="10" cy="10" r="1.5" class="fill-gray-700 dark:fill-gray-300" />
            </pattern>
          </defs>
          <rect width="100%" height="100%" fill="url(#dotted-grid)" />
        </svg>
      </div>
    </div>

    <div class=" z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header with decorative accents -->
      <div class="text-center mb-16">
        <span class="inline-block px-5 py-2 rounded-full bg-purple-100 bg-opacity-50 dark:bg-purple-800 dark:bg-opacity-50 text-purple-700 dark:text-pink-100 text-sm font-medium mb-4 border border-transparent dark:border-pink-500 dark:border-opacity-30 shadow-sm">
          Featured Categories
        </span>
        <h2 class="text-4xl md:text-5xl font-bold mb-4 text-transparent bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text">
          Discover Our Premium Selections
        </h2>
        <p class="max-w-2xl mx-auto text-gray-600 dark:text-purple-200">
          Explore our handpicked categories designed to enhance your digital lifestyle and experience.
        </p>
        <!-- Decorative line -->
        <div class="flex items-center justify-center mt-6">
          <div class="h-px w-10 bg-gradient-to-r from-transparent to-pink-300"></div>
          <div class="h-1 w-24 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full mx-2"></div>
          <div class="h-px w-10 bg-gradient-to-l from-transparent to-pink-300"></div>
        </div>
      </div>

      <div class=" w-full overflow-hidden">
        <div id="carousel" class="flex transition-transform duration-500">
          <?php foreach ($categories as $index => $category): ?>
            <div class="min-w-full opacity-0 translate-y-8" data-carousel-item data-index="<?= $index ?>">
              <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl dark:shadow-purple-900/20 p-8 backdrop-blur-sm bg-opacity-80 dark:bg-opacity-30 border border-purple-100 dark:border-purple-800 hover:shadow-2xl transition-all duration-500">
                <div class="flex flex-col lg:flex-row gap-8">
                  <!-- Text Content -->
                  <div class="w-full lg:w-1/3 flex flex-col justify-center">
                    <h3 class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-pink-500 dark:from-purple-400 dark:to-pink-400 bg-clip-text text-transparent">
                      <?= htmlspecialchars($category["title"]) ?>
                    </h3>
                    <p class="mt-4 text-gray-600 dark:text-purple-200">
                      <?= htmlspecialchars($category["description"]) ?>
                    </p>
                    <div class="mt-6">
                      <a href="#" class="group inline-flex items-center px-6 py-3 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 hover:from-pink-500 hover:to-purple-500 text-white font-medium transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg">
                        Explore all categories
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M5 12h14"></path>
                          <path d="M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>
                  </div>

                  <!-- Images Grid -->
                  <div class="w-full lg:w-2/3 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="group bg-purple-50 dark:bg-purple-900/30 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 hover:scale-[1.02]">
                      <div class="p-6 flex flex-col items-center">
                        <div class="h-40 w-40 flex items-center justify-center mb-4 bg-white dark:bg-gray-800 rounded-full p-4 shadow-inner">
                          <img src="../assets/mobile.png" class="w-32 h-32 object-contain transform group-hover:scale-110 transition-transform duration-300" alt="Mobile image" />
                        </div>
                        <p class="text-xl font-bold text-center text-purple-700 dark:text-pink-200">Mobile</p>
                      </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="group bg-purple-50 dark:bg-purple-900/30 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 hover:scale-[1.02]">
                      <div class="p-6 flex flex-col items-center">
                        <div class="h-40 w-40 flex items-center justify-center mb-4 bg-white dark:bg-gray-800 rounded-full p-4 shadow-inner">
                          <img src="../assets/PCS.png" class="w-32 h-32 object-contain transform group-hover:scale-110 transition-transform duration-300" alt="PCs Images" />
                        </div>
                        <p class="text-xl font-bold text-center text-purple-700 dark:text-pink-200">PCs</p>
                      </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="group bg-purple-50 dark:bg-purple-900/30 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 hover:scale-[1.02]">
                      <div class="p-6 flex flex-col items-center">
                        <div class="h-40 w-40 flex items-center justify-center mb-4 bg-white dark:bg-gray-800 rounded-full p-4 shadow-inner">
                          <img src="../assets/console.png" class="w-32 h-32 object-contain transform group-hover:scale-110 transition-transform duration-300" alt="Console image" />
                        </div>
                        <p class="text-xl font-bold text-center text-purple-700 dark:text-pink-200">Console</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Navigation Buttons -->
        <button id="prev" class="absolute left-4 lg:left-12 top-2/3 transform -translate-y-1/2 p-3 bg-white/80 dark:bg-purple-800/80 text-purple-700 dark:text-white rounded-full shadow-lg hover:bg-gradient-to-r hover:from-purple-500 hover:to-pink-500 hover:text-white transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
          </svg>
        </button>

        <button id="next" class="absolute right-4 lg:right-12 top-2/3 transform -translate-y-1/2 p-3 bg-white/80 dark:bg-purple-800/80 text-purple-700 dark:text-white rounded-full shadow-lg hover:bg-gradient-to-r hover:from-purple-500 hover:to-pink-500 hover:text-white transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
          </svg>
        </button>

        <!-- Navigation Dots -->
        <div id="indicators" class="flex justify-center mt-8 space-x-3">
          <?php foreach ($categories as $index => $category): ?>
            <button data-index="<?= $index ?>" class="indicator w-3 h-3 rounded-full bg-purple-200 dark:bg-purple-700 hover:bg-purple-500 dark:hover:bg-pink-500 <?= $index === 0 ? 'bg-gradient-to-r from-purple-500 to-pink-500 w-8' : '' ?> transition-all duration-300"></button>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>



  <!-- Our Products Section -->
  <?php
  $products = [
    ["id" => 1, "name" => "Product 1", "desc" => "Short description 1", "price" => "0 - $5", "discount" => 5, "img" => "../assets/cupImage.png"],
    ["id" => 2, "name" => "Product 2", "desc" => "Short description 2", "price" => "5 - $10", "discount" => 1, "img" => "../assets/cupImage.png"],
    ["id" => 3, "name" => "Product 3", "desc" => "Short description 3", "price" => "5 - $15", "discount" => 5, "img" => "../assets/cupImage.png"],
    ["id" => 4, "name" => "Product 4", "desc" => "Short description 4", "price" => "0 - $15", "discount" => 14, "img" => "../assets/cupImage.png"],
    // ["id" => 5, "name" => "Product 5", "desc" => "Short description 5", "price" => "0 - $5", "discount" => 2, "img" => "../assets/cupImage.png"],
    // ["id" => 6, "name" => "Product 6", "desc" => "Short description 6", "price" => "0 - $5", "discount" => 4, "img" => "../assets/cupImage.png"],
    // ["id" => 7, "name" => "Product 7", "desc" => "Short description 7", "price" => "10 - $15", "discount" => 10, "img" => "../assets/cupImage.png"],
    // ["id" => 8, "name" => "Product 8", "desc" => "Short description 8", "price" => "5 - $10", "discount" => 9, "img" => "../assets/cupImage.png"],
  ];
  ?>

  <section class="relative py-20 overflow-hidden  text-gray-800 dark:text-white transition-all duration-500">

    <!-- Dotted Grid Background Pattern -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
      <div class="absolute inset-0 opacity-10">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <pattern id="dotted-grid" width="20" height="20" patternUnits="userSpaceOnUse">
              <circle cx="10" cy="10" r="1.5" class="fill-gray-700 dark:fill-gray-300" />
            </pattern>
          </defs>
          <rect width="100%" height="100%" fill="url(#dotted-grid)" />
        </svg>
      </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
      <!-- Section Header with decorative accents -->
      <div class="text-center mb-16 relative">
        <span class="inline-block px-5 py-2 rounded-full bg-purple-100 bg-opacity-50 dark:bg-purple-800 dark:bg-opacity-50 text-purple-700 dark:text-pink-100 text-sm font-medium mb-4 border border-transparent dark:border-pink-500 dark:border-opacity-30 shadow-sm">
          Our Collection
        </span>
        <h1 class="text-4xl md:text-5xl font-bold mb-4 text-transparent bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text">
          Discover Our Premium Products
        </h1>
        <p class="max-w-2xl mx-auto text-gray-600 dark:text-purple-200">
          Explore our handpicked selection of high-quality products designed for your lifestyle and comfort.
        </p>
        <!-- Decorative line -->
        <div class="flex items-center justify-center mt-6">
          <div class="h-px w-10 bg-gradient-to-r from-transparent to-pink-300"></div>
          <div class="h-1 w-24 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full mx-2 animate-pulse"></div>
          <div class="h-px w-10 bg-gradient-to-l from-transparent to-pink-300"></div>
        </div>
      </div>

      <!-- Products Grid -->
      <div id="productGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <?php foreach ($products as $index => $product) : ?>
          <!-- Product Card with animation classes -->
          <div class="product-card opacity-0 transform translate-y-8 transition-all duration-700 ease-out bg-white dark:bg-gray-800 bg-opacity-80 dark:bg-opacity-30 backdrop-filter backdrop-blur-lg rounded-2xl overflow-hidden group h-[450px] border border-purple-100 dark:border-purple-800 shadow-xl hover:shadow-2xl hover:scale-[1.02] " data-delay="<?= $index * 100 ?>">
            <!-- Status Badge -->
            <div class="absolute top-4 right-4 z-10">
              <div class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-pink-600 to-purple-600 font-bold text-white shadow-lg">
                -<?= $product["discount"] ?>%
              </div>
            </div>

            <!-- Product Image -->
            <div class="h-[250px] w-full overflow-hidden">
              <img
                src="<?= $product["img"] ?>"
                alt="<?= $product["name"] ?>"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            </div>

            <!-- Product Info -->
            <div class="p-6 flex flex-col flex-grow">
              <h2 class="text-xl font-bold mb-2 text-purple-700 dark:text-pink-200"><?= $product["name"] ?></h2>
              <p class="text-gray-600 dark:text-purple-200 text-sm mb-3"><?= $product["desc"] ?></p>
              <div class="mt-auto flex justify-between items-end">
                <div>
                  <span class="text-xl font-bold block mb-1 text-gray-800 dark:text-white"><?= $product["price"] ?></span>
                  <span class="text-xs text-gray-500 dark:text-purple-300">Max Discount: $<?= $product["discount"] ?></span>
                </div>
                <button class="h-10 w-10 rounded-full flex items-center justify-center bg-gradient-to-r from-purple-500 to-pink-500 text-white transition-all duration-300 hover:from-pink-500 hover:to-purple-500 shadow-md hover:shadow-lg group-hover:scale-110">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                  </svg>
                </button>
              </div>
            </div>

            <!-- Hover Overlay -->
            <div class="absolute inset-0 bg-gradient-to-br from-purple-600 to-pink-600 bg-opacity-90 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-all duration-500 p-6">
              <a href="#" class="mb-6 w-full">
                <button class="w-full bg-white text-purple-800 hover:bg-purple-100 py-3 rounded-xl font-bold shadow-lg transition-all duration-300 flex items-center justify-center space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                  <span>Add to Cart</span>
                </button>
              </a>
              <div class="flex justify-center space-x-6 w-full">
                <button class="flex flex-col items-center text-white hover:text-pink-200 transition-colors duration-300">
                  <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                  </svg>
                  <span class="text-xs font-medium">Wishlist</span>
                </button>
                <button class="flex flex-col items-center text-white hover:text-pink-200 transition-colors duration-300">
                  <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                  </svg>
                  <span class="text-xs font-medium">Compare</span>
                </button>
                <button class="flex flex-col items-center text-white hover:text-pink-200 transition-colors duration-300">
                  <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                  </svg>
                  <span class="text-xs font-medium">Share</span>
                </button>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Show More Button -->
      <div class="flex justify-center mt-16">
        <a href="#" class="relative inline-flex items-center">
          <button class="bg-gradient-to-r from-purple-500 to-pink-500 hover:from-pink-500 hover:to-purple-500 text-white font-bold py-3 px-10 rounded-full shadow-xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <span class="relative z-10 flex items-center">
              Explore More Products
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </span>
          </button>
          <!-- Button glow effect -->
          <span class="absolute -inset-2 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 opacity-30 blur-lg transform scale-110 animate-pulse"></span>
        </a>
      </div>
    </div>

  </section>


  <?php
  $services = [
    ["title" => "Web Development", "desc" => "Build modern, scalable websites and applications.", "img" => "../assets/homePageServicesImg.png"],
    ["title" => "UI/UX Design", "desc" => "Craft stunning user experiences and intuitive interfaces.", "img" => "../assets/homePageServicesImg.png"],
    ["title" => "SEO & Marketing", "desc" => "Optimize and boost your online presence with strategic marketing.", "img" => "../assets/homePageServicesImg.png"],
  ];
  ?>

  <!-- Our Services -->
  <section class="relative text-gray-900 dark:text-white transition-colors duration-300 py-20 overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-full -translate-x-1/2 -translate-y-1/2 dark:from-blue-500/20 dark:to-purple-500/20"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-tl from-indigo-500/10 to-pink-500/10 rounded-full translate-x-1/3 translate-y-1/3 dark:from-indigo-500/20 dark:to-pink-500/20"></div>

    <!-- Dotted Grid Background Pattern -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
      <div class="absolute inset-0 opacity-10">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <pattern id="dotted-grid" width="20" height="20" patternUnits="userSpaceOnUse">
              <circle cx="10" cy="10" r="1.5" class="fill-gray-700 dark:fill-gray-300" />
            </pattern>
          </defs>
          <rect width="100%" height="100%" fill="url(#dotted-grid)" />
        </svg>
      </div>
    </div>

    <!-- Container -->
    <div class="container mx-auto px-4 relative z-10">
      <!-- Heading with animated underline -->
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h1 class="text-3xl md:text-5xl font-bold  bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 inline-block">
          Our Featured Services
        </h1>
        <p class="text-center text-gray-700 dark:text-gray-300 mt-4 text-lg max-w-2xl mx-auto leading-relaxed">
          We offer a wide range of services to help you achieve your business goals. Explore our top-notch offerings below.
        </p>
        <!-- Decorative line -->
        <div class="flex items-center justify-center mt-6">
          <div class="h-px w-10 bg-gradient-to-r from-transparent to-pink-300"></div>
          <div class="h-1 w-24 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full mx-2 animate-pulse"></div>
          <div class="h-px w-10 bg-gradient-to-l from-transparent to-pink-300"></div>
        </div>
      </div>

      <!-- Cards Container with staggered animation -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
        <?php foreach ($services as $index => $service) : ?>
          <!-- Adding data-aos attributes for AOS animation library -->
          <div class="service-card group"
            data-aos="fade-up"
            data-aos-delay="<?= $index * 100 ?>"
            data-aos-duration="800">

            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden h-full flex flex-col transform hover:-translate-y-2">
              <!-- Image Container with Overlay -->
              <div class="relative overflow-hidden">
                <!-- Image with zoom effect -->
                <img src="<?= $service['img'] ?>"
                  alt="<?= $service['title'] ?>"
                  class="w-full h-56 sm:h-64 object-cover transition-transform duration-700 group-hover:scale-110">

                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end">
                  <span class="text-white font-medium px-4 py-2 ml-3 mb-3 text-sm bg-indigo-600/80 backdrop-blur-sm rounded-lg">
                    View Details
                  </span>
                </div>
              </div>

              <!-- Content -->
              <div class="p-6 flex-grow flex flex-col">
                <!-- Badge for category -->
                <span class="bg-indigo-100 dark:bg-indigo-900/30 text-indigo-800 dark:text-indigo-300 text-xs font-semibold px-3 py-1 rounded-full w-fit mb-3">
                  <?= $service['category'] ?? 'Featured' ?>
                </span>

                <!-- Title with animated underline on hover -->
                <h2 class="text-xl font-bold group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors duration-300 relative inline-block">
                  <?= $service['title'] ?>
                  <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-indigo-600 dark:bg-indigo-400 group-hover:w-full transition-all duration-300"></span>
                </h2>

                <!-- Description -->
                <p class="text-gray-600 dark:text-gray-400 mt-3 text-sm leading-relaxed flex-grow">
                  <?= $service['desc'] ?>
                </p>

                <!-- Learn More link -->
                <a href="#" class="mt-4 text-indigo-600 dark:text-indigo-400 font-medium text-sm flex items-center w-fit group-hover:translate-x-1 transition-transform duration-300">
                  Learn more
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Button with enhanced animation -->
      <div class="flex justify-center mt-16">
        <a href="#" class="group flex items-center bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 dark:from-indigo-500 dark:to-purple-500 dark:hover:from-indigo-600 dark:hover:to-purple-600 text-white font-semibold px-8 py-4 rounded-full shadow-lg hover:shadow-indigo-500/30 dark:hover:shadow-indigo-500/50 transition-all duration-300 transform hover:-translate-y-1">
          <span>Explore All Services</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14"></path>
            <path d="M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>
  </section>

  <!-- Hot Topics -->

  <section class="relative py-24 overflow-hidden w-full mx-auto">
    <!-- Dotted Grid Background Pattern -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
      <div class="absolute inset-0 opacity-10">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <pattern id="dotted-grid" width="20" height="20" patternUnits="userSpaceOnUse">
              <circle cx="10" cy="10" r="1.5" class="fill-gray-700 dark:fill-gray-300" />
            </pattern>
          </defs>
          <rect width="100%" height="100%" fill="url(#dotted-grid)" />
        </svg>
      </div>
    </div>

    <div class="container mx-auto px-6 relative mt-24">
      <div class="flex flex-col gap-x-10 lg:flex-row items-center">
        <!-- Left side content -->
        <div class="w-full lg:w-2/5 lg:pr-16 mb-16 lg:mb-0 relative z-10">
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black dark:text-white mb-6">
            Discover Our
            <span class="relative">
              <span class="text-transparent bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text">New Collection</span>
            </span>
          </h1>
          <div class="w-20 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 mb-8"></div>
          <p class="text-gray-700 dark:text-gray-300 mt-6 text-lg max-w-2xl mx-auto leading-relaxed mb-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut urna mi. Aliquam
            mollis accumsan sem, fermentum maximus augue cursus vitae. Sed ante nibh, laoreet
            quis vulputate at, venenatis eget elit. Sed feugiat dolor in fringilla volutpat.
          </p>
          <!-- Button with enhanced animation -->
          <div class="flex mt-16">
            <a href="#" class="group flex items-center bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 dark:from-indigo-500 dark:to-purple-500 dark:hover:from-indigo-600 dark:hover:to-purple-600 text-white font-semibold px-8 py-4 rounded-full shadow-lg hover:shadow-indigo-500/30 dark:hover:shadow-indigo-500/50 transition-all duration-300 transform hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              <span>Explore All Services</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>

        <!-- Carousel -->
        <div class="w-full lg:w-3/6 relative">
          <div class="carousel-container overflow-hidden rounded-xl shadow-2xl"
            role="region"
            aria-roledescription="carousel"
            aria-label="Collection highlights">
            <!-- Carousel items -->
            <div class="carousel-slides flex transition-transform duration-700 ease-out">
              <!-- Slide 1 -->
              <div class="carousel-slide flex-shrink-0 w-full"
                role="group"
                aria-roledescription="slide"
                aria-label="1 of 4">
                <div class="relative aspect-[4/3] overflow-hidden">
                  <img src="../assets/modernImage.png"
                    alt="Interior design"
                    class="w-full h-full object-cover"
                    loading="lazy" />
                  <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent flex items-center justify-center">
                    <div class="p-8 text-center max-w-md">
                      <h3 class="text-3xl font-semibold text-white mb-4">Modern Interiors</h3>
                      <div class="w-16 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 mx-auto mb-4"></div>
                      <p class="text-gray-200">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Duis ut urna mi. Aliquam mollis accumsan sem,
                        fermentum maximus augue cursus vitae.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 2 -->
              <div class="carousel-slide flex-shrink-0 w-full"
                role="group"
                aria-roledescription="slide"
                aria-label="2 of 4">
                <div class="relative aspect-[4/3] overflow-hidden">
                  <img src="../assets/modernImage.png"
                    alt="Modern interior"
                    class="w-full h-full object-cover"
                    loading="lazy" />
                  <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent flex items-center justify-center">
                    <div class="p-8 text-center max-w-md">
                      <h3 class="text-3xl font-semibold text-white mb-4">Classic Designs</h3>
                      <div class="w-16 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 mx-auto mb-4"></div>
                      <p class="text-gray-200">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Duis ut urna mi. Aliquam mollis accumsan sem,
                        fermentum maximus augue cursus vitae.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 3 -->
              <div class="carousel-slide flex-shrink-0 w-full"
                role="group"
                aria-roledescription="slide"
                aria-label="3 of 4">
                <div class="relative aspect-[4/3] overflow-hidden">
                  <img src="../assets/modernImage.png"
                    alt="Home decor"
                    class="w-full h-full object-cover"
                    loading="lazy" />
                  <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent flex items-center justify-center">
                    <div class="p-8 text-center max-w-md">
                      <h3 class="text-3xl font-semibold text-white mb-4">Luxury Accents</h3>
                      <div class="w-16 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 mx-auto mb-4"></div>
                      <p class="text-gray-200">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Duis ut urna mi. Aliquam mollis accumsan sem,
                        fermentum maximus augue cursus vitae.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 4 -->
              <div class="carousel-slide flex-shrink-0 w-full"
                role="group"
                aria-roledescription="slide"
                aria-label="4 of 4">
                <div class="relative aspect-[4/3] overflow-hidden">
                  <img src="../assets/modernImage.png"
                    alt="Furniture design"
                    class="w-full h-full object-cover"
                    loading="lazy" />
                  <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent flex items-center justify-center">
                    <div class="p-8 text-center max-w-md">
                      <h3 class="text-3xl font-semibold text-white mb-4">Exclusive Furniture</h3>
                      <div class="w-16 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 mx-auto mb-4"></div>
                      <p class="text-gray-200">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Duis ut urna mi. Aliquam mollis accumsan sem,
                        fermentum maximus augue cursus vitae.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Navigation Arrows -->
          <button id="prevButton"
            class="absolute top-1/2 left-4 -translate-y-1/2 bg-white hover:bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 text-black hover:text-white w-12 h-12 rounded-full flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300 z-10 shadow-lg"
            aria-label="Previous slide">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
          </button>

          <button id="nextButton"
            class="absolute top-1/2 right-4 -translate-y-1/2 bg-white hover:bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 text-black hover:text-white w-12 h-12 rounded-full flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300 z-10 shadow-lg"
            aria-label="Next slide">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>

          <!-- Dots Navigation -->
          <div class="absolute -bottom-10 left-1/2 transform -translate-x-1/2 flex space-x-3 mb-4"
            role="tablist"
            aria-label="Carousel navigation">
            <button class="carousel-dot w-3 h-3 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 transition duration-300 scale-125"
              role="tab"
              aria-selected="true"
              aria-label="Go to slide 1"></button>
            <button class="carousel-dot w-3 h-3 rounded-full bg-gray-300 hover:bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 transition duration-300 hover:scale-125"
              role="tab"
              aria-selected="false"
              aria-label="Go to slide 2"></button>
            <button class="carousel-dot w-3 h-3 rounded-full bg-gray-300 hover:bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 transition duration-300 hover:scale-125"
              role="tab"
              aria-selected="false"
              aria-label="Go to slide 3"></button>
            <button class="carousel-dot w-3 h-3 rounded-full bg-gray-300 hover:bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 transition duration-300 hover:scale-125"
              role="tab"
              aria-selected="false"
              aria-label="Go to slide 4"></button>
          </div>
        </div>
      </div>
    </div>


  </section>


  <?php include 'components/footer.php'; ?>


  <!-- <script src="../js/main.js"></script> -->
  <script src="../js/theme.js"></script>
  <script src="../js/navbar.js"></script>
  <script src="../js/homePageCards.js"></script>
  <script src="../js/homePageBrandCategoriesSection.js"></script>
  <script src="../js/homePageOurServices.js"></script>
  <script src="../js/homePageOurProducts.js"></script>
  <script src="../js/homePageHotTopics.js"></script>
  <!-- Add AOS Animation Library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

</body>

</html>