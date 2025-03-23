<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detailed Service</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300">
    <!-- Include Navbar -->
    <?php include '../../components/navbar.php'; ?>

    <!-- Banner Section -->
    <section class="relative h-80 w-full bg-cover bg-center" style="background-image: url('../../assets/homepagebg.jpg');">
        <div class="absolute inset-0 bg-white dark:bg-black bg-opacity-50 dark:bg-opacity-50 flex flex-col justify-center items-center text-center">
            <h1 class="text-black dark:text-white text-3xl md:text-5xl font-bold tracking-wide">Services</h1>
            <!-- Breadcrumb -->
            <div class="container mx-auto px-4 md:px-8 py-4">
                <nav class="text-sm text-gray-800 dark:text-gray-200">
                    <a href="/" class="hover:text-purple-600 font-bold">Home</a>
                    <span class="mx-2">/</span>
                    <span class="text-gray-800 dark:text-gray-200 font-semibold">Services</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="flex items-center justify-center p-4">
        <div class="max-w-7xl w-full shadow-lg rounded-lg p-6 flex flex-col md:flex-row items-center md:items-start gap-6">
            <!-- Image on the left -->
            <img src="https://images.unsplash.com/photo-1590845947376-2638caa89309?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Placeholder Image" class="w-full md:w-1/2 rounded-lg shadow-md">

            <!-- Text Content -->
            <div class="flex-1 text-center md:text-left">
                <h2 class="text-2xl font-bold mb-2">Professional Heading</h2>
                <p class="text-gray-800 dark:text-gray-300 mb-4">This is the first paragraph providing some insightful information about the topic. It should be concise yet informative, maintaining a professional tone. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil exercitationem repudiandae dolorem harum obcaecati beatae modi maxime nulla sapiente. Iure?</p>
                <p class="text-gray-800 dark:text-gray-300 mb-6">This is the second paragraph, elaborating further on the topic. Keep it engaging and to the point, ensuring readability across all screen sizes. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolores fuga repellat perspiciatis unde cupiditate sequi eaque quod laborum reiciendis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis in aperiam ex eaque debitis ab officiis, excepturi nemo nostrum expedita.</p>


                <!-- button -->
                <button id="openEmailModal" class="w-full bg-primary-gradient text-white px-4 py-2 rounded-lg flex items-center justify-center gap-2 hover:shadow-lg transition-all duration-300 group">
                    <span>Contact with email</span>
                </button>

            </div>
        </div>
    </section>

    <!-- Main section -->
    <section class="text-gray-900 dark:text-white transition-colors duration-300 py-4 md:py-16 lg:py-20 overflow-hidden container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="flex justify-center">
            <!-- Main Content -->
            <div class="w-full lg:w-3/4">
                <h2 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-3">Other Services</h2>
                <div class="w-full h-[3px] bg-gray-300 dark:bg-gray-600 rounded-full mb-10"></div>
                <!-- Grid of Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-8">
                    <!-- Card Template (Repeat for each card) -->
                    <?php
                    $cards = [
                        [
                            'img' => 'https://images.unsplash.com/photo-1593118247619-e2d6f056869e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                            'title' => 'Category Name',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. '
                        ],
                        [
                            'img' => 'https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                            'title' => 'Category Name',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. '
                        ],
                        [
                            'img' => 'https://images.unsplash.com/photo-1590845947376-2638caa89309?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                            'title' => 'Category Name',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. '
                        ],

                    ];

                    foreach ($cards as $card): ?>
                        <div class="text-center bg-white dark:bg-gray-800 rounded-xl shadow-sm overflow-hidden transition-all duration-300 hover:shadow-md transform hover:-translate-y-1">
                            <div class="p-4 bg-white flex items-center justify-center">
                                <div class="w-full h-36 flex items-center justify-center overflow-hidden">
                                    <img src="<?php echo $card['img']; ?>" alt="Card Image" class="object-contain w-full h-full">
                                </div>
                            </div>
                            <div class="p-5">

                                <h3 class=" text-gray-900 dark:text-gray-100 font-medium text-lg mb-2 line-clamp-2 transition duration-200">
                                    <a href="#"><?php echo $card['title']; ?></a>
                                </h3>
                                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4 line-clamp-3"><?php echo $card['description']; ?></p>
                                <a href="./detailed-service.php">
                                    <!-- button -->
                                    <button class="mx-auto bg-primary-gradient text-white px-4 py-2 rounded-lg flex items-center gap-2 hover:shadow-lg transition-all duration-300 group">
                                        <span>Services Details</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- Pagination -->
        <div class="flex justify-center mt-8">
            <nav class="inline-flex shadow-md rounded-lg overflow-hidden">
                <a href="#" class="px-5 py-3 bg-primary text-white text-sm font-medium transition-colors duration-300">1</a>
                <a href="#" class="px-5 py-3 bg-white border-t border-b border-r border-gray-300 text-gray-700 text-sm font-medium hover:bg-gray-100 transition-colors duration-300">2</a>
                <a href="#" class="px-5 py-3 bg-white border-t border-b border-r border-gray-300 text-gray-700 text-sm font-medium hover:bg-gray-100 transition-colors duration-300">3</a>
                <a href="#" class="px-5 py-3 bg-white border-t border-b border-r border-gray-300 text-gray-700 text-sm font-medium hover:bg-gray-100 transition-colors duration-300 group flex items-center">
                    <span>Next</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transform transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </nav>
        </div>
    </section>

    <!-- Send Email Modal -->
    <div id="sendEmailModal" class="fixed inset-0 z-50 hidden">
        <!-- Modal Backdrop -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- Modal Content -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-md ">
            <div class="bg-gray-100 dark:bg-gray-800 transition-colors duration-300 rounded-lg shadow-xl overflow-hidden">
                <!-- Modal Header -->
                <div class="relative p-6 pb-3 flex justify-between items-center">
                    <h2 class="text-2xl font-semibold">Contact with email</h2>
                    <button id="closeModal" class="text-gray-400 hover:text-gray-700 dark:hover:text-white focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="p-6 pt-3">
                    <form id="sendEmailForm">

                        <div class="mb-4">
                            <label for="reciever" class="block mb-2">Reciever Email</label>
                            <input
                                type="text"
                                id="reciever"
                                class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500"
                                placeholder="Reciever email">
                        </div>
                        <div class="mb-4">
                            <label for="sender" class="block mb-2">Sender email</label>
                            <input
                                type="text"
                                id="sender"
                                class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500"
                                placeholder="Sender email">
                        </div>
                        <div class="mb-4">
                            <label for="subject" class="block mb-2">Subject</label>
                            <input
                                type="text"
                                id="subject"
                                class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500"
                                placeholder="Subject">
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block mb-2">Description</label>
                            <textarea
                                id="description"
                                class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500"
                                placeholder="Enter description"></textarea>
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
            const modal = document.getElementById('sendEmailModal');
            const openModalBtn = document.getElementById('openEmailModal');
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