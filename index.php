<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Computer Nostalgia Navbar</title>
  <link rel="stylesheet" href="./src/css/output.css" />
  <!-- <link rel="stylesheet" href="/css/tailwind.css"> -->
</head>

<body
  class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300">
  <!-- Navigation Bar -->
  <?php include './src/components/navbar.php'; ?>

  <!-- Hero Section -->
  <section class="relative h-[70vh] md:h-screen overflow-hidden bg-gray-50 dark:bg-gray-900">

    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
      style="background-image: url('./src/assets/homepagebg.jpg');">
      <!-- Dark Overlay for Better Readability -->
      <div class="absolute inset-0 bg-black/40 dark:bg-black/60"></div>
    </div>

    <!-- Content Container -->
    <div class="z-10 relative h-full container mx-auto px-4 md:px-6 flex items-center">
      <div class="max-w-xl">
        <!-- Badge -->
        <span class="inline-block px-5 py-2 rounded-full bg-purple-100 bg-opacity-50 dark:bg-purple-800 dark:bg-opacity-50 text-black dark:text-white text-sm font-medium mb-4 border border-transparent dark:border-pink-500 dark:border-opacity-30 shadow-sm">
          Where Convenience Meets Innovation
        </span>

        <!-- Heading -->
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 animate-fade-in-down">
          Discover Our
          <span class="relative">
            <span class="text-transparent bg-primary-gradient bg-clip-text">
              New Collection
            </span>
          </span>
        </h1>


        <!-- Description -->
        <p class="text-gray-200 mt-6 text-lg max-w-2xl mx-auto leading-relaxed mb-4">
          Elevate your space with our premium collection of handcrafted furniture, designed for comfort and sophistication.
        </p>

        <!-- Button -->
        <a href="#" class="relative inline-flex items-center">
          <button class="bg-primary-gradient text-white font-bold py-3 px-10 rounded-full transition-all duration-300 transform hover:-translate-y-2">
            <span class="relative flex items-center">
              Explore More Products
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </span>
          </button>
        </a>
      </div>
    </div>
  </section>

  <!-- Home Page Cards -->
  <?php
  $cards = [
    [
      "image" => "https://img.freepik.com/free-vector/realistic-display-smartphone-with-different-apps_52683-30241.jpg",
      "title" => "Flagship Smartphone",
      "description" => "Experience cutting-edge technology with our latest flagship smartphone, featuring a powerful processor, and stunning display."
    ],
    [
      "image" => "https://img.freepik.com/free-vector/realistic-smartphone-device_52683-29765.jpg",
      "title" => "Budget-Friendly Smartphone",
      "description" => "A reliable and affordable smartphone packed with essential features, long battery life, and a sleek design."
    ],
    [
      "image" => "https://img.freepik.com/free-photo/3d-workstation-with-computer-peripheral-devices_23-2150714201.jpg",
      "title" => "Gaming PC Setup",
      "description" => "Dominate your gaming sessions with a high-performance gaming PC, featuring the latest GPU, fast SSD, and immersive RGB lighting."
    ],
    [
      "image" => "https://img.freepik.com/free-vector/realistic-smartphone-device_52683-29765.jpg",
      "title" => "Mid-Range Smartphone",
      "description" => "Strike the perfect balance between performance and affordability with our mid-range smartphone, ideal for everyday use."
    ],
    [
      "image" => "https://img.freepik.com/free-vector/realistic-display-smartphone-with-different-apps_52683-30241.jpg",
      "title" => "Premium Laptop",
      "description" => "Stay productive on the go with a lightweight, high-performance laptop featuring a stunning display and long-lasting battery life."
    ],
    [
      "image" => "https://img.freepik.com/free-vector/realistic-smartphone-device_52683-29765.jpg",
      "title" => "Next-Gen Gaming Console",
      "description" => "Enjoy immersive gaming with our next-gen console, offering ultra-fast load times, and breathtaking graphics."
    ]
  ];

  ?>

  <section class="relative bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300 flex flex-col items-center py-16">

    <!-- Section Header -->
    <div class="relative z-10 mb-12">
      <h1 class="text-4xl md:text-5xl font-bold text-center mb-4 relative">
        <span class="">The Latest</span>
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

    <div class="w-[90%] md:w-full max-w-7xl overflow-hidden">
      <!-- Left Arrow Button -->
      <button id="scrollLeft" class="absolute left-2 md:left-8 top-1/2 transform -translate-y-1/2 p-3 rounded-full z-10 bg-white hover:bg-primary-gradient text-black hover:text-white w-12 h-12 flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-lg transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </button>

      <!-- Cards Wrapper -->
      <div id="cardContainer" class="flex space-x-6 md:space-x-8 transition-transform duration-500 py-10">
        <?php foreach ($cards as $index => $card): ?>
          <div class="card min-w-[290px] md:min-w-[365px] h-full bg-white dark:bg-gray-800 rounded-xl shadow-xl overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl border border-gray-100 dark:border-gray-700">
            <div class="relative">
              <img src="<?= $card['image'] ?>" class="w-full full object-contain" alt="<?= $card['title'] ?>" />
              <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-black/50 to-transparent"></div>
            </div>
            <div class="p-6">
              <span class="inline-block px-3 py-1 text-xs font-semibold text-white bg-primary-gradient rounded-full mb-3">Featured <?= $index + 1 ?></span>
              <h2 class="text-xl font-bold mb-3 dark:text-white"><?= $card['title'] ?></h2>
              <p class="text-gray-600 dark:text-gray-300 text-sm mb-4"><?= $card['description'] ?></p>
              <div class="flex justify-between items-center">
                <a href="./src/pages/the-latest/the-latest.php">
                  <!-- button -->
                  <button class="bg-primary-gradient text-white px-4 py-2 rounded-lg flex items-center gap-2 hover:shadow-lg transition-all duration-300 group">
                    <span>Learn More</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                  </button>
                </a>
                <span class="text-gray-400 dark:text-gray-500 text-sm">Mar 2025</span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Right Arrow Button -->
      <button id="scrollRight" class="absolute right-2 md:right-8 top-1/2 transform -translate-y-1/2 p-3 rounded-full z-10 bg-white hover:bg-primary-gradient text-black hover:text-white w-12 h-12 flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-lg transition-all duration-300">
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
    <div class=" z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header with decorative accents -->
      <div class="text-center mb-16">
        <span class="inline-block px-5 py-2 rounded-full bg-purple-100 bg-opacity-50 dark:bg-purple-800 dark:bg-opacity-50 text-purple-700 dark:text-pink-100 text-sm font-medium mb-4 border border-transparent dark:border-pink-500 dark:border-opacity-30 shadow-sm">
          Featured Categories
        </span>
        <h2 class="text-4xl md:text-5xl font-bold mb-4 ">
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
              <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl dark:shadow-purple-900/20 p-8 backdrop-blur-sm bg-opacity-80 dark:bg-opacity-30 border dark:border-white hover:shadow-2xl transition-all duration-500">
                <div class="flex flex-col lg:flex-row gap-8">
                  <!-- Text Content -->
                  <div class="w-full lg:w-1/3 flex flex-col justify-center">
                    <h3 class="text-2xl font-bold ">
                      <?= htmlspecialchars($category["title"]) ?>
                    </h3>
                    <p class="mt-4 text-gray-600 dark:text-gray-300">
                      <?= htmlspecialchars($category["description"]) ?>
                    </p>

                    <!-- button -->
                    <div class="mt-6">
                      <a href="./src/pages/brand-categories/brand-categories.php" class="group inline-flex items-center px-6 py-3 rounded-full bg-primary-gradient text-white font-medium transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg">
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
                    <div class="group bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 hover:scale-[1.02]">
                      <div class="p-6 flex flex-col items-center gap-y-4 h-full">
                        <img src="https://images.unsplash.com/photo-1736173155834-6cd98d8dc9fe?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-contain transform group-hover:scale-110 transition-transform duration-300" alt="Mobile image" />
                        <p class="text-xl font-bold text-center text-gray-800 dark:text-white">Mobile</p>
                      </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="group bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 hover:scale-[1.02]">
                      <div class="p-6 flex flex-col items-center gap-y-4 h-full">
                        <img src="https://images.unsplash.com/photo-1596697938846-313cdbbe4fd8?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-contain transform group-hover:scale-110 transition-transform duration-300" alt="Mobile image" />
                        <p class="text-xl font-bold text-center text-gray-800 dark:text-white">PCs</p>
                      </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="group bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 hover:scale-[1.02]">
                      <div class="p-6 flex flex-col items-center gap-y-4 h-full">
                        <img src="https://images.unsplash.com/photo-1632312527375-bd5d5a0d3484?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-contain transform group-hover:scale-110 transition-transform duration-300" alt="Mobile image" />
                        <p class="text-xl font-bold text-center text-gray-800 dark:text-white">Console</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Navigation Left Button -->
        <button id="prev" class="absolute left-4 lg:left-12 top-2/3 transform -translate-y-1/2 p-3 bg-white hover:bg-primary-gradient text-black hover:text-white w-12 h-12 flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 rounded-full shadow-lg transition-all duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
          </svg>
        </button>

        <!-- Navigation Right Button -->
        <button id="next" class="absolute right-4 lg:right-12 top-2/3 transform -translate-y-1/2 p-3 bg-white hover:bg-primary-gradient text-black hover:text-white w-12 h-12 flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 rounded-full shadow-lg transition-all duration-300">
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
    [
      "id" => 1,
      "name" => "Gaming PC - RTX 4070",
      "desc" => "High-performance gaming PC with an Intel i7 processor and NVIDIA RTX 4070 GPU, ideal for AAA gaming.",
      "price" => "$1500 - $2000",
      "discount" => 10,
      "img" => "https://images.unsplash.com/photo-1587302912306-cf1ed9c33146?q=80&w=1960&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    ],
    [
      "id" => 2,
      "name" => "PlayStation 5",
      "desc" => "Next-gen PlayStation 5 console with ultra-fast SSD, ray tracing support, and an immersive gaming experience.",
      "price" => "$499 - $599",
      "discount" => 5,
      "img" => "https://images.unsplash.com/photo-1678761442615-5af77170f925?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    ],
    [
      "id" => 3,
      "name" => "Xbox Series X",
      "desc" => "Powerful Xbox Series X console with 4K gaming, 120FPS support, and Game Pass access.",
      "price" => "$499 - $599",
      "discount" => 8,
      "img" => "https://images.unsplash.com/photo-1632312527375-bd5d5a0d3484?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    ],
    [
      "id" => 4,
      "name" => "iPhone 15 Pro Max",
      "desc" => "Latest iPhone 15 Pro Max with A17 Bionic chip, ProMotion display, and advanced camera system.",
      "price" => "$1099 - $1299",
      "discount" => 6,
      "img" => "https://images.unsplash.com/photo-1736173155834-6cd98d8dc9fe?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    ],
  ];
  ?>

  <section class="relative py-20 overflow-hidden  text-gray-800 dark:text-white transition-all duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
      <!-- Section Header with decorative accents -->
      <div class="text-center mb-16 relative">
        <span class="inline-block px-5 py-2 rounded-full bg-purple-100 bg-opacity-50 dark:bg-purple-800 dark:bg-opacity-50 text-purple-700 dark:text-pink-100 text-sm font-medium mb-4 border border-transparent dark:border-pink-500 dark:border-opacity-30 shadow-sm">
          Our Collection
        </span>
        <h1 class="text-4xl md:text-5xl font-bold mb-4 ">
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
          <div class="product-card opacity-0 transform translate-y-8 transition-all duration-700 ease-out bg-white dark:bg-gray-800 bg-opacity-80 dark:bg-opacity-30 backdrop-filter backdrop-blur-lg rounded-2xl overflow-hidden group h-[450px]  shadow-xl hover:shadow-2xl hover:scale-[1.02] " data-delay="<?= $index * 100 ?>">
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
              <h2 class="text-xl font-bold mb-2 text-black dark:text-white"><?= $product["name"] ?></h2>
              <p class="text-gray-600 dark:text-gray-300 text-sm mb-3"><?= $product["desc"] ?></p>
              <div class="mt-auto flex justify-between items-end">
                <div>
                  <span class="text-xl font-bold block mb-1 text-gray-800 dark:text-white"><?= $product["price"] ?></span>
                  <span class="text-xs text-gray-500 dark:text-gray-300">Max Discount: $<?= $product["discount"] ?></span>
                </div>

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

      <!-- button -->
      <div class="mt-10 flex justify-center items-center">
        <a href="#" class="group inline-flex items-center px-6 py-3 rounded-full bg-primary-gradient text-white font-medium transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg">
          Explore more products
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14"></path>
            <path d="M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>

  </section>


  <!-- Our Services -->
  <?php
  $services = [
    ["title" => "Web Development", "desc" => "Build modern, scalable websites and applications.", "img" => "./src/assets/homePageServicesImg.png"],
    ["title" => "UI/UX Design", "desc" => "Craft stunning user experiences and intuitive interfaces.", "img" => "./src/assets/homePageServicesImg.png"],
    ["title" => "SEO & Marketing", "desc" => "Optimize and boost your online presence with strategic marketing.", "img" => "./src/assets/homePageServicesImg.png"],
  ];
  ?>

  <section class="relative text-gray-900 dark:text-white transition-colors duration-300 py-20 overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-full -translate-x-1/2 -translate-y-1/2 dark:from-blue-500/20 dark:to-purple-500/20"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-tl from-indigo-500/10 to-pink-500/10 rounded-full translate-x-1/3 translate-y-1/3 dark:from-indigo-500/20 dark:to-pink-500/20"></div>

    <!-- Container -->
    <div class="container mx-auto px-4 relative z-10">
      <!-- Heading with animated underline -->
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h1 class="text-3xl md:text-5xl font-bold inline-block">
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

      <!-- button -->
      <div class="mt-10 flex justify-center items-center">
        <a href="#" class="group inline-flex items-center px-6 py-3 rounded-full bg-primary-gradient text-white font-medium transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg">
          Explore all services
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14"></path>
            <path d="M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>
  </section>

  <!-- Hot Topics -->
  <section class="relative py-24 overflow-hidden w-full mx-auto">
    <div class="container mx-auto px-6 relative mt-24">
      <div class="flex flex-col gap-x-10 lg:flex-row items-center">
        <!-- Left side content -->
        <div class="w-full lg:w-2/5 lg:pr-16 mb-16 lg:mb-0 relative z-10">
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black dark:text-white mb-6">
            Hot
            <span class="relative">
              <span class="">Topics</span>
            </span>
          </h1>
          <div class="w-20 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 mb-8"></div>
          <p class="text-gray-700 dark:text-gray-300 mt-6 text-lg max-w-2xl mx-auto leading-relaxed mb-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut urna mi. Aliquam
            mollis accumsan sem, fermentum maximus augue cursus vitae. Sed ante nibh, laoreet
            quis vulputate at, venenatis eget elit. Sed feugiat dolor in fringilla volutpat.
          </p>
          <!-- button -->
          <div class="mt-6">
            <a href="./src/pages/hot-topics/hot-topics.php" class="group inline-flex items-center px-6 py-3 rounded-full bg-primary-gradient text-white font-medium transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg">
              Explore hot topics
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                  <img src="./src/assets/modernImage.png"
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
                  <img src="./src/assets/modernImage.png"
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
                  <img src="./src/assets/modernImage.png"
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
                  <img src="./src/assets/modernImage.png"
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
            class="absolute top-1/2 left-4 -translate-y-1/2 bg-white hover:bg-primary-gradient text-black hover:text-white w-12 h-12 rounded-full flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300 z-10 shadow-lg"
            aria-label="Previous slide">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
          </button>

          <button id="nextButton"
            class="absolute top-1/2 right-4 -translate-y-1/2 bg-white hover:bg-primary-gradient text-black hover:text-white w-12 h-12 rounded-full flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300 z-10 shadow-lg"
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

  <?php include './src/components/footer.php'; ?>


  <!-- <script src="../js/main.js"></script> -->
  <script src="./src/js/theme.js"></script>
  <script src="./src/js/navbar.js"></script>
  <script src="./src/js/homePageCards.js"></script>
  <script src="./src/js/homePageBrandCategoriesSection.js"></script>
  <script src="./src/js/homePageOurServices.js"></script>
  <script src="./src/js/homePageOurProducts.js"></script>
  <script src="./src/js/homePageHotTopics.js"></script>
  <!-- Add AOS Animation Library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

</body>

</html>