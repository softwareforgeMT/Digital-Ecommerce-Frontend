<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300">
    <!-- Include Navbar -->
    <?php include '../../components/navbar.php'; ?>

    <!-- Banner Section -->
    <section class="relative h-80 w-full bg-cover bg-center" style="background-image: url('../../assets/homepagebg.jpg');">
        <div class="absolute inset-0 bg-white dark:bg-black bg-opacity-50 dark:bg-opacity-50 flex flex-col justify-center items-center text-center">
            <h1 class="text-black dark:text-white text-3xl md:text-5xl font-bold tracking-wide">Cart</h1>
            <!-- Breadcrumb -->
            <div class="container mx-auto px-4 md:px-8 py-4">
                <nav class="text-sm text-gray-800 dark:text-gray-200">
                    <a href="/" class="hover:text-purple-600 font-bold">Home</a>
                    <span class="mx-2">/</span>
                    <span class="text-gray-800 dark:text-gray-200 font-semibold">Cart</span>
                </nav>
            </div>
        </div>
    </section>


    <!-- Cart Section -->
    <section class="container mx-auto py-8 px-4 mt-10">

        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Cart Items Section -->
            <div class="w-full lg:w-2/3">
                <!-- Cart Header -->
                <div class="bg-secondary rounded-t-lg p-4 hidden md:grid grid-cols-12 gap-4 font-medium">
                    <div class="col-span-6 text-black">Product</div>
                    <div class="col-span-2 text-center text-black">Price</div>
                    <div class="col-span-2 text-center text-black">Quantity</div>
                    <div class="col-span-2 text-center text-black">Subtotal</div>
                </div>

                <!-- Cart Items -->
                <div class="bg-faf5eb dark:bg-gray-800 rounded-lg md:rounded-t-none shadow">
                    <!-- Cart Item -->
                    <div class="p-4 border-b border-gray-200 dark:border-gray-700 grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
                        <!-- Product (Image and Name) -->
                        <div class="md:col-span-6 flex space-x-4 items-center">
                            <div class="w-20 h-20 flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1486401899868-0e435ed85128?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Item Name" class="w-full h-full object-cover rounded-md bg-gray-200 dark:bg-gray-700">
                            </div>
                            <div>
                                <h3 class="font-medium">Item Name</h3>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="md:col-span-2 flex md:justify-center items-center">
                            <span class="md:hidden font-medium mr-2">Price:</span>
                            <span>$ 500</span>
                        </div>

                        <!-- Quantity -->
                        <div class="md:col-span-2 flex md:justify-center items-center">
                            <span class="md:hidden font-medium mr-2">Quantity:</span>
                            <div class="border border-gray-300 dark:border-gray-600 rounded w-12 h-12 flex items-center justify-center">
                                <input type="number" value="1" min="1" class="w-8 bg-transparent text-center focus:outline-none">
                            </div>
                        </div>

                        <!-- Subtotal -->
                        <div class="md:col-span-2 flex justify-between items-center">
                            <span class="md:hidden font-medium">Subtotal:</span>
                            <div class="flex items-center space-x-2">
                                <span>$ 500</span>
                                <button class="p-1 text-gray-500 hover:text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cart Summary Section -->
            <div class="w-full lg:w-1/3 mt-6 lg:mt-0">
                <div class="bg-secondary rounded-lg shadow p-6">
                    <h2 class="text-xl font-bold mb-6 text-center text-gray-900">Cart Totals</h2>

                    <div class="space-y-4">
                        <!-- Subtotal Row -->
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-gray-700">Subtotal</span>
                            <span class="text-gray-600 font-bold">$ 500</span>
                        </div>

                        <!-- Total Row -->
                        <div class="flex justify-between items-center border-t border-gray-200 dark:border-gray-700 pt-4">
                            <span class="font-bold text-gray-700">Total</span>
                            <span class="text-primary font-bold">$ 500</span>
                        </div>

                        <!-- Checkout Button -->
                        <button class="mx-auto w-72 mt-2 text-center bg-primary-gradient text-white px-4 py-2 rounded-lg flex items-center justify-center gap-2 hover:shadow-lg transition-all duration-300 group">
                            Check Out
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Why choose us -->
     <section>
        <div class="bg-secondary dark:bg-gray-800 py-12 px-4 mt-10">
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

    <!-- Include Footer -->
    <?php include '../../components/footer.php'; ?>

    <script src="../../js/theme.js"></script>
    <script src="../../js/navbar.js"></script>

</body>

</html>