<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nostalgia-Base</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300">

    <!-- Include Navbar -->
    <?php include '../../components/navbar.php'; ?>

    <!-- Banner Section -->
    <section class="relative h-80 w-full bg-cover bg-center" style="background-image: url('../../assets/homepagebg.jpg');">
        <div class="absolute inset-0 bg-white dark:bg-black bg-opacity-50 dark:bg-opacity-50 flex flex-col justify-center items-center text-center">
            <h1 class="text-black dark:text-white text-3xl md:text-5xl font-bold tracking-wide">
                NostalgiaBase
            </h1>
            <!-- Breadcrumb -->
            <div class="container mx-auto px-4 md:px-8 py-4">
                <nav class="text-sm text-gray-800 dark:text-gray-200">
                    <a href="/index.php" class="hover:text-purple-600 font-bold">Home</a>
                    <span class="mx-2">/</span>
                    <span class="text-gray-800 dark:text-gray-200 font-semibold">
                        Category
                    </span>
                </nav>
            </div>
        </div>
    </section>

    <!-- Main Section -->
    <section class="text-gray-900 dark:text-white transition-colors duration-300 py-4 md:py-16 lg:py-20 overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">
            <div class="">

                <!-- Main Content -->
                <div>
                    <h2 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-2">Nostalgiabase</h2>
                    <div class="w-full h-[2px] bg-gray-300 dark:bg-gray-600 rounded-full mb-4"></div>

                    <!-- buttons -->
                    <div class="flex flex-wrap gap-10 justify-center ">
                        <a href="/pages/nostalgia-base/add-console.php" class="w-full md:w-auto">
                            <button class="w-full sm:w-auto px-6 py-2 bg-gray-200 dark:bg-gray-600 rounded-md transition hover:bg-gray-300 dark:hover:bg-gray-700">
                                Add Console
                            </button>
                        </a>
                        <button id="openBrandModal" class="w-full sm:w-auto px-6 py-2 bg-gray-200 dark:bg-gray-600 rounded-md transition hover:bg-gray-300 dark:hover:bg-gray-700">
                            Add Brand
                        </button>
                        <button class="w-full sm:w-auto px-6 py-2 bg-gray-200 dark:bg-gray-600 rounded-md transition hover:bg-gray-300 dark:hover:bg-gray-700">
                            View Latest Additions
                        </button>
                        <button class="w-full sm:w-auto px-6 py-2 bg-gray-200 dark:bg-gray-600 rounded-md transition hover:bg-gray-300 dark:hover:bg-gray-700">
                            View Entire Database
                        </button>
                    </div>


                    <!-- Grid of Cards -->

                    <div class="container mx-auto px-6 py-12">
                        <div class="space-y-10">
                            <?php
                            $cards = [
                                ['img' => '/assets/brandImage.png', 'title' => 'Mobile Brand 1'],
                                ['img' => '/assets/brandImage.png', 'title' => 'Mobile Brand 2'],
                                ['img' => '/assets/brandImage.png', 'title' => 'Mobile Brand 3'],
                                ['img' => '/assets/brandImage.png', 'title' => 'PC Brand 1'],
                                ['img' => '/assets/brandImage.png', 'title' => 'PC Brand 2'],
                                ['img' => '/assets/brandImage.png', 'title' => 'PC Brand 3'],
                                ['img' => '/assets/brandImage.png', 'title' => 'Console Brand 1'],
                                ['img' => '/assets/brandImage.png', 'title' => 'Console Brand 2'],
                                ['img' => '/assets/brandImage.png', 'title' => 'Console Brand 3'],
                            ];

                            $categories = [
                                'Mobile' => array_slice($cards, 0, 3),
                                'PC' => array_slice($cards, 3, 3),
                                'Console' => array_slice($cards, 6, 3),
                            ];

                            foreach ($categories as $category => $items): ?>
                                <div>
                                    <!-- Section Heading -->
                                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100 mb-6"><?php echo $category; ?></h2>

                                    <!-- Cards Grid -->
                                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-8">
                                        <?php foreach ($items as $card): ?>
                                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm overflow-hidden transition-all duration-300 hover:shadow-md transform hover:-translate-y-1">
                                                <div class="p-4 bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                                                    <div class="w-full h-36 flex items-center justify-center overflow-hidden">
                                                        <img src="<?php echo $card['img']; ?>" alt="Card Image" class="object-contain w-full h-full">
                                                    </div>
                                                </div>
                                                <div class="p-5">
                                                    <h3 class="text-center text-gray-900 dark:text-gray-100 font-medium text-lg mb-2 line-clamp-2 hover:text-blue-600 dark:hover:text-blue-400 transition duration-200">
                                                        <a href="/pages/nostalgia-base/nostalgia-base-sub-category.php"><?php echo $card['title']; ?></a>
                                                    </h3>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Brand Modal -->
    <div id="addBrandModal" class="fixed inset-0 z-50 hidden">
        <!-- Modal Backdrop -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- Modal Content -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-md ">
            <div class="bg-gray-100 dark:bg-gray-800 transition-colors duration-300 rounded-lg shadow-xl overflow-hidden">
                <!-- Modal Header -->
                <div class="relative p-6 pb-3 flex justify-between items-center">
                    <h2 class="text-xl font-semibold">Add Brand</h2>
                    <button id="closeModal" class="text-gray-400 hover:text-white focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="p-6 pt-3">
                    <form id="addBrandForm">
                        <!-- Brand Name -->
                        <div class="mb-4">
                            <label for="brandName" class="block mb-2">Brand Name</label>
                            <input
                                type="text"
                                id="brandName"
                                class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500"
                                placeholder="Brand Name">
                        </div>

                        <!-- Brand Type Select -->
                        <div class="mb-4">
                            <label for="brandType" class="block mb-2">Select Brand Type</label>
                            <div class="relative">
                                <select
                                    id="brandType"
                                    class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 border border-gray-600 rounded-md appearance-none focus:outline-none focus:ring-2 focus:ring-purple-500">
                                    <option value="" disabled selected>Select Brand Type</option>
                                    <option value="console">Console</option>
                                    <option value="accessory">Accessory</option>
                                    <option value="game">Game</option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Image Upload -->
                        <div class="mb-6">
                            <label class="block mb-2">Add images</label>
                            <div class="flex items-start">
                                <div class="w-24 h-24 bg-gray-100 dark:bg-gray-700 border border-dashed border-gray-500 rounded-md flex items-center justify-center cursor-pointer hover:bg-gray-600 transition">
                                    <div class="text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button class="mx-auto w-full mt-2 text-center bg-primary-gradient text-white px-4 py-2 rounded-lg flex items-center justify-center gap-2 hover:shadow-lg transition-all duration-300 group">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- Script to open modal -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('addBrandModal');
            const openModalBtn = document.getElementById('openBrandModal');
            const closeModalBtn = document.getElementById('closeModal');
            const modalBackdrop = modal.querySelector('.absolute.inset-0');

            function openModal() {
                modal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }

            function closeModal() {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }

            openModalBtn.addEventListener('click', openModal);
            closeModalBtn.addEventListener('click', closeModal);
            modalBackdrop.addEventListener('click', closeModal);
        });
    </script>

    <!-- Include Footer -->
    <?php include '../../components/footer.php'; ?>

    <script src="../../js/theme.js"></script>
    <script src="../../js/navbar.js"></script>

</body>

</html>