<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Console</title>
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


    <!-- Add Console Form Section -->
    <section class="max-w-4xl mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-2">Add Console</h1>
        <div class="w-full h-[3px] bg-gray-300 dark:bg-gray-600 rounded-full mb-10"></div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <form id="addConsoleForm" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- First Column -->
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium mb-2" for="option1">Select an option:</label>
                            <div class="relative">
                                <select id="option1" class="block w-full bg-gray-200 dark:bg-gray-700 border-0 rounded-md py-2 pl-3 pr-10 text-sm appearance-none focus:ring-2 focus:ring-purple-500">
                                    <option value="" selected disabled>Select an option</option>
                                    <!-- Add options here -->
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2" for="option3">Select an option:</label>
                            <div class="relative">
                                <select id="option3" class="block w-full bg-gray-200 dark:bg-gray-700 border-0 rounded-md py-2 pl-3 pr-10 text-sm appearance-none focus:ring-2 focus:ring-purple-500">
                                    <option value="" selected disabled>Select an option</option>
                                    <!-- Add options here -->
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2" for="option5">Select an option:</label>
                            <div class="relative">
                                <select id="option5" class="block w-full bg-gray-200 dark:bg-gray-700 border-0 rounded-md py-2 pl-3 pr-10 text-sm appearance-none focus:ring-2 focus:ring-purple-500">
                                    <option value="" selected disabled>Select an option</option>
                                    <!-- Add options here -->
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2" for="option7">Select an option:</label>
                            <div class="relative">
                                <select id="option7" class="block w-full bg-gray-200 dark:bg-gray-700 border-0 rounded-md py-2 pl-3 pr-10 text-sm appearance-none focus:ring-2 focus:ring-purple-500">
                                    <option value="" selected disabled>Select an option</option>
                                    <!-- Add options here -->
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2" for="option9">Select an option:</label>
                            <div class="relative">
                                <select id="option9" class="block w-full bg-gray-200 dark:bg-gray-700 border-0 rounded-md py-2 pl-3 pr-10 text-sm appearance-none focus:ring-2 focus:ring-purple-500">
                                    <option value="" selected disabled>Select an option</option>
                                    <!-- Add options here -->
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Column -->
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium mb-2" for="option2">Select an option:</label>
                            <div class="relative">
                                <select id="option2" class="block w-full bg-gray-200 dark:bg-gray-700 border-0 rounded-md py-2 pl-3 pr-10 text-sm appearance-none focus:ring-2 focus:ring-purple-500">
                                    <option value="" selected disabled>Select an option</option>
                                    <!-- Add options here -->
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2" for="option4">Select an option:</label>
                            <div class="relative">
                                <select id="option4" class="block w-full bg-gray-200 dark:bg-gray-700 border-0 rounded-md py-2 pl-3 pr-10 text-sm appearance-none focus:ring-2 focus:ring-purple-500">
                                    <option value="" selected disabled>Select an option</option>
                                    <!-- Add options here -->
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2" for="option6">Select an option:</label>
                            <div class="relative">
                                <select id="option6" class="block w-full bg-gray-200 dark:bg-gray-700 border-0 rounded-md py-2 pl-3 pr-10 text-sm appearance-none focus:ring-2 focus:ring-purple-500">
                                    <option value="" selected disabled>Select an option</option>
                                    <!-- Add options here -->
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2" for="option8">Select an option:</label>
                            <div class="relative">
                                <select id="option8" class="block w-full bg-gray-200 dark:bg-gray-700 border-0 rounded-md py-2 pl-3 pr-10 text-sm appearance-none focus:ring-2 focus:ring-purple-500">
                                    <option value="" selected disabled>Select an option</option>
                                    <!-- Add options here -->
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2" for="option10">Select an option:</label>
                            <div class="relative">
                                <select id="option10" class="block w-full bg-gray-200 dark:bg-gray-700 border-0 rounded-md py-2 pl-3 pr-10 text-sm appearance-none focus:ring-2 focus:ring-purple-500">
                                    <option value="" selected disabled>Select an option</option>
                                    <!-- Add options here -->
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-medium mb-2" for="description">Description</label>
                    <textarea id="description" rows="5" placeholder="Description..." class="block w-full bg-gray-200 dark:bg-gray-700 border-0 rounded-md p-3 text-sm focus:ring-2 focus:ring-purple-500 resize-none"></textarea>
                </div>

                <!-- Image Upload -->
                <div>
                    <label class="block text-sm font-medium mb-2">Add images</label>
                    <div class="grid grid-cols-6 gap-4">
                        <div class="w-24 h-24 bg-gray-200 dark:bg-gray-700 rounded-md flex items-center justify-center cursor-pointer hover:bg-gray-300 dark:hover:bg-gray-600 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                        <!-- Additional image placeholders can be added here -->
                    </div>
                </div>
                <div>
                    <!-- Submit Button -->
                    <button class="mx-auto w-full mt-2 text-center bg-primary-gradient text-white px-4 py-2 rounded-lg flex items-center justify-center gap-2 hover:shadow-lg transition-all duration-300 group">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include '../../components/footer.php'; ?>

    <script src="../../js/theme.js"></script>
    <script src="../../js/navbar.js"></script>
</body>

</html>