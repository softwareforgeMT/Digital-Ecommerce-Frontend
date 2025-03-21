<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detailed nostalgia-base</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300">
    <!-- Include Navbar -->
    <?php include '../../components/navbar.php'; ?>

    <!-- Banner Section -->
    <section class="relative h-80 w-full bg-cover bg-center" style="background-image: url('../../assets/homepagebg.jpg');">
        <div class="absolute inset-0 bg-white dark:bg-black bg-opacity-50 dark:bg-opacity-50 flex flex-col justify-center items-center text-center">
            <h1 class="text-black dark:text-white text-3xl md:text-5xl font-bold tracking-wide">NostalgiaBase</h1>
            <!-- Breadcrumb -->
            <div class="container mx-auto px-4 md:px-8 py-4">
                <nav class="text-sm text-gray-800 dark:text-gray-200">
                    <a href="/index.php" class="hover:text-purple-600 font-bold">Home</a>
                    <span class="mx-2">/</span>
                    <span class="text-gray-800 dark:text-gray-200 font-semibold">Latest Addition</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- Product Details Section -->
    <section class="container mx-auto px-4 py-8 max-w-6xl">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Product Images -->
            <div class="lg:col-span-2">
                <h1 class="text-2xl font-bold mb-4">Heading</h1>

                <!-- Main Image Container -->
                <div class="relative mb-4 bg-white dark:bg-gray-800 rounded-lg overflow-hidden">
                    <img id="mainImage"
                        src="https://images.unsplash.com/photo-1486401899868-0e435ed85128?fm=jpg&q=60&w=3000"
                        alt="Gaming Console"
                        class="w-full object-contain transition-opacity duration-300">

                    <!-- Navigation Buttons -->
                    <button id="prevButton" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white/80 dark:bg-gray-700/80 rounded-full p-2 shadow-md hover:bg-purple-500 hover:text-white transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="nextButton" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white/80 dark:bg-gray-700/80 rounded-full p-2 shadow-md hover:bg-purple-500 hover:text-white transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

                <!-- Thumbnail Images -->
                <div class="flex space-x-2 overflow-x-auto pb-2">
                    <?php
                    $images = [
                        [
                            'thumb' => 'https://images.unsplash.com/photo-1486401899868-0e435ed85128?fm=jpg&q=60&w=3000',
                            'full' => 'https://images.unsplash.com/photo-1486401899868-0e435ed85128?fm=jpg&q=60&w=3000'
                        ],
                        [
                            'thumb' => 'https://images.unsplash.com/photo-1593118247619-e2d6f056869e?q=80&w=2070',
                            'full' => 'https://images.unsplash.com/photo-1593118247619-e2d6f056869e?q=80&w=2070'
                        ],
                        [
                            'thumb' => 'https://images.unsplash.com/photo-1590845947376-2638caa89309?q=80&w=2070',
                            'full' => 'https://images.unsplash.com/photo-1590845947376-2638caa89309?q=80&w=2070'
                        ]
                    ];

                    foreach ($images as $index => $image): ?>
                        <div class="thumbnail w-20 h-20 flex-shrink-0 border-2 border-gray-300 dark:border-gray-600 rounded-lg overflow-hidden cursor-pointer hover:border-purple-500 transition-colors duration-300"
                            data-full-img="<?= $image['full'] ?>">
                            <img src="<?= $image['thumb'] ?>"
                                alt="Thumbnail <?= $index + 1 ?>"
                                class="w-full h-full object-cover">
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Information Tabs -->
                <div class="mt-8 border-b border-gray-200 dark:border-gray-700">
                    <div class="flex flex-wrap -mb-px gap-10">
                        <div class="mr-8 py-4 font-medium">
                            <h2 class="text-lg font-bold">External Links</h2>
                            <ul class="list-disc ml-5 mt-2">
                                <li>Link 1</li>
                                <li>Link 2</li>
                                <li>Link 3</li>
                            </ul>
                        </div>

                        <div class="mr-8 py-4 font-medium">
                            <h2 class="text-lg font-bold">Common Faults</h2>
                            <ul class="list-disc ml-5 mt-2">
                                <li>Ellis Thomas website</li>
                            </ul>
                        </div>

                        <div class="mr-8 py-4 font-medium">
                            <h2 class="text-lg font-bold">Guides</h2>
                            <ul class="list-disc ml-5 mt-2">
                                <li>Link 1</li>
                                <li>Link 2</li>
                                <li>Link 3</li>
                            </ul>
                        </div>

                        <div class="py-4 font-medium">
                            <h2 class="text-lg font-bold">Where to Buy</h2>
                            <div class="ml-5 mt-2">
                                <p>Link to console</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="mt-8">
                    <h2 class="text-lg font-bold mb-4">Description</h2>
                    <div class="bg-gray-100 dark:bg-gray-800 p-4 rounded-lg">
                        <p class="mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eleifend varius risus eu faucibus. Maecenas ut fringilla ante, id dictum eros.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eleifend varius risus eu faucibus. Maecenas ut fringilla ante, id dictum eros. Fusce locus nisi, sollicitudin ut varius nec, venenatis eu justo. In varius efficitur locus et tristique. Quisque egestas neque tellus, at molestie ipsum gravida nec. In faucibus nulla ut sollicitudin tempor, nunc metus finibus purus. Ac pretium orci quam orci vitae augue. Aliquam non tellus ut dolor tristique congue.
                        </p>
                    </div>
                </div>

                <!-- Discussions -->
                <div class="mt-8">
                    <h2 class="text-lg font-bold mb-4">Discussions</h2>
                    <div class="bg-gray-200 dark:bg-gray-800 p-4 rounded-lg">
                        <p class="text-sm mb-2">Comments</p>
                        <!-- Textarea for better formatting -->
                        <textarea
                            class="w-full bg-gray-300 dark:bg-gray-700 rounded-lg p-4 min-h-[120px] resize-none focus:outline-none focus:ring-2 focus:ring-purple-500"
                            placeholder="Write your comment here..."></textarea>
                        <!-- Button centered below the textarea -->
                        <div class="flex justify-start">
                            <!-- Submit Button -->
                            <button class="mt-2 text-center bg-primary-gradient text-white px-4 py-2 rounded-lg gap-2 hover:shadow-lg transition-all duration-300 group">
                                Post Comment
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column - Product Info and Specs -->
            <div class="lg:col-span-1">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <div class="text-lg font-bold">Rating</div>
                            <div class="flex items-center mt-1">
                                <span class="text-yellow-400">★★★★★</span><span class="text-yellow-400"></span>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button class="p-2 bg-green-100 dark:bg-green-900 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </button>
                            <button class="p-2 bg-gray-100 dark:bg-gray-700 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Product Specs -->
                    <div class="space-y-4">
                        <div class="border-b border-gray-200 dark:border-gray-700 pb-4">
                            <div class="text-lg font-bold">Release Type</div>
                            <div class="mt-1">Prototype</div>
                        </div>

                        <div class="border-b border-gray-200 dark:border-gray-700 pb-4">
                            <div class="text-lg font-bold">Regional Code</div>
                            <div class="mt-1">PAL</div>
                        </div>

                        <div class="border-b border-gray-200 dark:border-gray-700 pb-4">
                            <div class="text-lg font-bold">Color</div>
                            <div class="mt-1">N/A</div>
                        </div>

                        <div class="border-b border-gray-200 dark:border-gray-700 pb-4">
                            <div class="text-lg font-bold">Desire</div>
                            <div class="mt-1">9</div>
                        </div>

                        <div class="border-b border-gray-200 dark:border-gray-700 pb-4">
                            <div class="text-lg font-bold">Country</div>
                            <div class="mt-1">United States</div>
                        </div>

                        <div>
                            <div class="text-lg font-bold">Release Date</div>
                            <div class="mt-1">-</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include '../../components/footer.php'; ?>

    <script src="../../js/theme.js"></script>
    <script src="../../js/navbar.js"></script>
    <script src="../../js/carousels/nostalgia-base-carousel.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new ImageCarousel({
                mainImageId: 'mainImage',
                thumbnailSelector: '.thumbnail',
                prevButtonId: 'prevButton',
                nextButtonId: 'nextButton'
            });
        });
    </script>
</body>

</html>