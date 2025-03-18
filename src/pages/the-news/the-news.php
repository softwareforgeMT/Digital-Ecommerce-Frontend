<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The News</title>
    <link rel="stylesheet" href="/css/output.css">

</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300">
    <!-- Include Navbar -->
    <?php include '../../components/navbar.php'; ?>

    <div class="relative">
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

        <!-- Banner Section -->
        <section class="relative h-80 w-full bg-cover bg-center" style="background-image: url('/assets/homepagebg.jpg');">
            <div class="absolute inset-0 bg-white dark:bg-black bg-opacity-50 dark:bg-opacity-50 flex flex-col justify-center items-center text-center">
                <h1 class="text-black dark:text-white text-3xl md:text-5xl font-bold tracking-wide">News</h1>
                <!-- Breadcrumb -->
                <div class="container mx-auto px-4 md:px-8 py-4">
                    <nav class="text-sm text-gray-800 dark:text-gray-200">
                        <a href="/index.php" class="hover:text-purple-600 font-bold">Home</a>
                        <span class="mx-2">/</span>
                        <span class="text-gray-800 dark:text-gray-200 font-semibold">News</span>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="flex flex-col sm:flex-row max-w-[80%] mx-auto">
            <div class="max-w-md mx-auto px-4 py-12">
                <div>
                    <!-- Search Bar -->
                    <div class="relative mb-10">
                        <input type="text" placeholder="Search" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-transparent transition">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Categories Heading -->
                    <h2 class="text-xl font-bold mb-6">Categories</h2>

                    <!-- Categories List -->
                    <div class="space-y-2">
                        <a href="#" class="block p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                            <div class="flex justify-between text-gray-500">
                                <span>Mobile</span>
                                <span>2</span>
                            </div>
                        </a>
                        <a href="#" class="block p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                            <div class="flex justify-between text-gray-500">
                                <span>PCs</span>
                                <span>8</span>
                            </div>
                        </a>
                        <a href="#" class="block p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                            <div class="flex justify-between text-gray-500">
                                <span>Console</span>
                                <span>7</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Section Title -->
                <div>
                    <h2 class="text-xl font-bold mb-10">Recent Posts</h2>

                    <!-- Posts Grid -->
                    <div class="space-y-6">
                        <!-- Post Item 1 -->
                        <div class="rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden mb-0 md:mb-4">
                            <a href="#" class="flex items-center">
                                <div class="">
                                    <img src="https://images.unsplash.com/photo-1542435503-956c469947f6?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Post thumbnail" class="h-20 w-20 object-cover rounded-lg" />
                                </div>
                                <div class="p-3 flex flex-col justify-center">
                                    <h3 class="text-sm font-bold mb-2">Post Heading</h3>
                                    <p class="text-xs text-gray-500">11 Oct 2024</p>
                                </div>
                            </a>
                        </div>

                        <!-- Post Item 2 -->
                        <div class="rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden mb-0 md:mb-4">
                            <a href="#" class="flex items-center">
                                <div class="">
                                    <img src="https://images.unsplash.com/photo-1542435503-956c469947f6?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Post thumbnail" class="h-20 w-20 object-cover rounded-lg" />
                                </div>
                                <div class="p-3 flex flex-col justify-center">
                                    <h3 class="text-sm font-bold mb-2">Post Heading</h3>
                                    <p class="text-xs text-gray-500">11 Oct 2024</p>
                                </div>
                            </a>
                        </div>

                        <!-- Post Item 3 -->
                        <div class="rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden mb-0 md:mb-4">
                            <a href="#" class="flex items-center">
                                <div class="">
                                    <img src="https://images.unsplash.com/photo-1542435503-956c469947f6?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Post thumbnail" class="h-20 w-20 object-cover rounded-lg" />
                                </div>
                                <div class="p-3 flex flex-col justify-center">
                                    <h3 class="text-sm font-bold mb-2">Post Heading</h3>
                                    <p class="text-xs text-gray-500">11 Oct 2024</p>
                                </div>
                            </a>
                        </div>

                        <!-- Post Item 4 -->
                        <div class="rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden mb-0 md:mb-4">
                            <a href="#" class="flex items-center">
                                <div class="">
                                    <img src="https://images.unsplash.com/photo-1542435503-956c469947f6?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Post thumbnail" class="h-20 w-20 object-cover rounded-lg" />
                                </div>
                                <div class="p-3 flex flex-col justify-center">
                                    <h3 class="text-sm font-bold mb-2">Post Heading</h3>
                                    <p class="text-xs text-gray-500">11 Oct 2024</p>
                                </div>
                            </a>
                        </div>

                        <!-- Post Item 5 -->
                        <div class="rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden">
                            <a href="#" class="flex items-center">
                                <div class="">
                                    <img src="https://images.unsplash.com/photo-1542435503-956c469947f6?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Post thumbnail" class="h-20 w-20 object-cover rounded-lg" />
                                </div>
                                <div class="p-3 flex flex-col justify-center">
                                    <h3 class="text-sm font-bold mb-2">Post Heading</h3>
                                    <p class="text-xs text-gray-500">11 Oct 2024</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Posts -->
            <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <!-- Blog Post 1 -->
                <article class="mb-16">
                    <div class="overflow-hidden rounded-lg shadow-md mb-6">
                        <img src="https://images.unsplash.com/photo-1517430816045-df4b7de11d1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                            alt="Laptop on wooden table with notepad"
                            class="w-full h-[400px] object-cover">
                    </div>

                    <div class="flex items-center space-x-4 text-sm text-gray-500 mb-3">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span>Admin</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>11 Oct 2024</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                            <span>Wood</span>
                        </div>
                    </div>

                    <h2 class="text-2xl sm:text-3xl font-bold mb-4">Heading</h2>

                    <p class="text-gray-600 mb-5 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Mus mauris vitae ultricies leo integer malesuada nunc. In nulla posuere sollicitudin
                        aliquam ultrices. Morbi blandit cursus risus at ultrices mi tempus imperdiet. Libero enim sed faucibus turpis
                        in. Cursus mattis molestie a iaculis at erat. Nibh cras pulvinar mattis nunc sed blandit libero. Pellentesque elit
                        ullamcorper dignissim cras tincidunt. Pharetra et ultrices neque ornare aenean euismod elementum.
                    </p>

                    <a href="/pages/the-news/detailed-news.php" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition-colors">
                        Read more
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </article>

                <!-- Blog Post 2 -->
                <article class="mb-16">
                    <div class="overflow-hidden rounded-lg shadow-md mb-6">
                        <img src="https://images.unsplash.com/photo-1511367461989-f85a21fda167?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Person writing in notebook"
                            class="w-full h-[400px] object-cover">
                    </div>

                    <div class="flex items-center space-x-4 text-sm text-gray-500 mb-3">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span>Admin</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>11 Oct 2024</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                            <span>Handmade</span>
                        </div>
                    </div>

                    <h2 class="text-2xl sm:text-3xl font-bold mb-4">Heading</h2>

                    <p class="text-gray-600 mb-5 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Mus mauris vitae ultricies leo integer malesuada nunc. In nulla posuere sollicitudin
                        aliquam ultrices. Morbi blandit cursus risus at ultrices mi tempus imperdiet. Libero enim sed faucibus turpis
                        in. Cursus mattis molestie a iaculis at erat. Nibh cras pulvinar mattis nunc sed blandit libero. Pellentesque elit
                        ullamcorper dignissim cras tincidunt. Pharetra et ultrices neque ornare aenean euismod elementum.
                    </p>

                    <a href="/pages/the-news/detailed-news.php" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition-colors">
                        Read more
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </article>

                <!-- Blog Post 3 -->
                <article class="mb-16">
                    <div class="overflow-hidden rounded-lg shadow-md mb-6">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                            alt="Coffee and notebook on desk"
                            class="w-full h-[400px] object-cover">
                    </div>

                    <div class="flex items-center space-x-4 text-sm text-gray-500 mb-3">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span>Admin</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>11 Oct 2024</span>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                            <span>Wood</span>
                        </div>
                    </div>

                    <h2 class="text-2xl sm:text-3xl font-bold mb-4">Heading</h2>

                    <p class="text-gray-600 mb-5 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Mus mauris vitae ultricies leo integer malesuada nunc. In nulla posuere sollicitudin
                        aliquam ultrices. Morbi blandit cursus risus at ultrices mi tempus imperdiet. Libero enim sed faucibus turpis
                        in. Cursus mattis molestie a iaculis at erat. Nibh cras pulvinar mattis nunc sed blandit libero. Pellentesque elit
                        ullamcorper dignissim cras tincidunt. Pharetra et ultrices neque ornare aenean euismod elementum.
                    </p>

                    <a href="/pages/the-news/detailed-news.php" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition-colors">
                        Read more
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </article>

                <!-- Pagination -->
                <div class="flex justify-center mt-12">
                    <nav class="inline-flex rounded-md shadow-sm" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center justify-center px-4 py-2 text-sm font-medium rounded-l-md bg-yellow-500 text-white hover:bg-yellow-600 focus:z-10 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">
                            1
                        </a>
                        <a href="#" class="relative inline-flex items-center justify-center px-4 py-2 text-sm font-medium bg-white text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">
                            2
                        </a>
                        <a href="#" class="relative inline-flex items-center justify-center px-4 py-2 text-sm font-medium bg-white text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">
                            3
                        </a>
                        <a href="#" class="relative inline-flex items-center justify-center px-4 py-2 text-sm font-medium rounded-r-md bg-white text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">
                            Next
                        </a>
                    </nav>
                </div>
            </div>

        </section>

        <section>
            <div class="bg-softCream dark:bg-gray-900 py-12 px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 py-2 md:p-8">
                    <!-- High Quality Feature -->
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-800 dark:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold ">High Quality</h3>
                            <p class="text-gray-500 dark:text-gray-300">crafted from top materials</p>
                        </div>
                    </div>

                    <!-- Warranty Protection Feature -->
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-800 dark:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Warranty Protection</h3>
                            <p class="text-gray-500 dark:text-gray-300">Over 2 years</p>
                        </div>
                    </div>

                    <!-- Free Shipping Feature -->
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-800 dark:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16m8 0h3a2 2 0 002-2v-4a2 2 0 00-2-2h-3v8z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Free Shipping</h3>
                            <p class="text-gray-500 dark:text-gray-300">Order over 150 $</p>
                        </div>
                    </div>

                    <!-- 24/7 Support Feature -->
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-800 dark:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 11a4 4 0 108 0 4 4 0 00-8 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">24 / 7 Support</h3>
                            <p class="text-gray-500 dark:text-gray-300">Dedicated support</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <!-- Include Footer -->
    <?php include '../../components/footer.php'; ?>

    <script src="/js/theme.js"></script>
    <script src="/js/navbar.js"></script>
</body>

</html>