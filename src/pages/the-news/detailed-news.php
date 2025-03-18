<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detailed Latest</title>
    <link rel="stylesheet" href="/css/output.css">

</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300">
    <!-- Include Navbar -->
    <?php include '../../components/navbar.php'; ?>

    <!-- Banner Section -->
    <section class="relative h-80 w-full bg-cover bg-center" style="background-image: url('/assets/homepagebg.jpg');">
        <div class="absolute inset-0 bg-white dark:bg-black bg-opacity-50 dark:bg-opacity-50 flex flex-col justify-center items-center text-center">
            <h1 class="text-black dark:text-white text-3xl md:text-5xl font-bold tracking-wide">The Latest</h1>
            <!-- Breadcrumb -->
            <div class="container mx-auto px-4 md:px-8 py-4">
                <nav class="text-sm text-gray-800 dark:text-gray-200">
                    <a href="/index.php" class="hover:text-purple-600 font-bold">Home</a>
                    <span class="mx-2">/</span>
                    <span class="text-gray-800 dark:text-gray-200 font-semibold">The Latest</span>
                </nav>
            </div>
        </div>
    </section>

    <section class="relative w-full">
        <!-- Elegant Dotted Grid Background Pattern -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div class="absolute inset-0 opacity-5 dark:opacity-10">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="dotted-grid" width="24" height="24" patternUnits="userSpaceOnUse">
                            <circle cx="12" cy="12" r="1.25" class="fill-gray-700 dark:fill-gray-300" />
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#dotted-grid)" />
                </svg>
            </div>
        </div>
        <div class="max-w-5xl mx-auto px-6 py-12">
            <!-- Image Container -->
            <div class="relative w-full h-[400px] md:h-[500px] lg:h-[600px] overflow-hidden rounded-3xl shadow-xl">
                <img src="https://images.unsplash.com/photo-1505330622279-bf7d7fc918f4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Featured Image"
                    class="w-full h-full object-cover">
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent"></div>
            </div>

            <!-- Content Section -->
            <div class="mt-8 text-center">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white">
                    Discover the Latest News
                </h2>
                <p class="mt-4 text-lg text-gray-700 dark:text-gray-300 leading-relaxed max-w-3xl mx-auto">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mt-8">Innovations in Technology</h3>
                <p class="mt-4 text-lg text-gray-700 dark:text-gray-300 leading-relaxed max-w-3xl mx-auto">
                    Stay updated with the newest innovations in technology. From artificial intelligence to blockchain, the tech industry is constantly evolving. Our articles delve deep into the latest advancements, providing you with expert insights and comprehensive analyses. Whether you're a tech enthusiast or a professional in the field, our content is designed to keep you informed and ahead of the curve.
                </p>

                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mt-8">Trends in Fashion</h3>
                <p class="mt-4 text-lg text-gray-700 dark:text-gray-300 leading-relaxed max-w-3xl mx-auto">
                    Explore the latest trends in fashion. From runway shows to street style, we cover it all. Our fashion experts bring you the newest styles and trends from around the world. Stay ahead of the fashion game with our in-depth articles and expert insights. Whether you're looking for inspiration or just want to stay updated, our fashion section has something for everyone.
                </p>

                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mt-8">Global Updates</h3>
                <p class="mt-4 text-lg text-gray-700 dark:text-gray-300 leading-relaxed max-w-3xl mx-auto">
                    Get the latest updates from around the world. Our global news section covers everything from politics to entertainment. Stay informed with our comprehensive coverage and expert analysis. Whether you're interested in current events or just want to stay updated, our global news section has you covered. Explore in-depth articles and stay informed with the latest updates from around the world.
                </p>
                </p>
            </div>
        </div>

    </section>



    <!-- Include Footer -->
    <?php include '../../components/footer.php'; ?>



    <script src="/js/theme.js"></script>
    <script src="/js/navbar.js"></script>

</body>

</html>