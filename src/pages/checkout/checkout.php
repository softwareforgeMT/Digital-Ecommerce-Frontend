<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>

<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300">
    <!-- Include Navbar -->
    <?php include '../../components/navbar.php'; ?>

    <!-- Banner Section -->
    <section class="relative h-80 w-full bg-cover bg-center" style="background-image: url('../../assets/homepagebg.jpg');">
        <div class="absolute inset-0 bg-white dark:bg-black bg-opacity-50 dark:bg-opacity-50 flex flex-col justify-center items-center text-center">
            <h1 class="text-black dark:text-white text-3xl md:text-5xl font-bold tracking-wide">Checkout</h1>
            <!-- Breadcrumb -->
            <div class="container mx-auto px-4 md:px-8 py-4">
                <nav class="text-sm text-gray-800 dark:text-gray-200">
                    <a href="/" class="hover:text-purple-600 font-bold">Home</a>
                    <span class="mx-2">/</span>
                    <span class="text-gray-800 dark:text-gray-200 font-semibold">Checkout</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- Checkout Section -->
    <section class="container mx-auto max-w-7xl py-8 px-4 mt-10">

        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Billing Details Section -->
            <div class="w-full lg:w-2/3 bg-gray-50 dark:bg-gray-800 rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-6 ">Billing details</h2>

                <form class="space-y-4">
                    <!-- Name Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="firstName" class="block text-sm font-medium mb-2 text-gray-800 dark:text-gray-800">First Name</label>
                            <input type="text" id="firstName" class="w-full bg-white dark:bg-gray-700 border border-gray-600 rounded-md py-2 px-4 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-medium mb-2 text-gray-800 dark:text-gray-300">Last Name</label>
                            <input type="text" id="lastName" class="w-full bg-white dark:bg-gray-700 border border-gray-600 rounded-md py-2 px-4 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        </div>
                    </div>

                    <!-- Company Name -->
                    <div>
                        <label for="companyName" class="block text-sm font-medium mb-2 text-gray-800 dark:text-gray-300">Company Name (Optional)</label>
                        <input type="text" id="companyName" class="w-full bg-white dark:bg-gray-700 border border-gray-600 rounded-md py-2 px-4 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>

                    <!-- Country/Region -->
                    <div>
                        <label for="country" class="block text-sm font-medium mb-2 text-gray-800 dark:text-gray-300">Country / Region</label>
                        <div class="relative">
                            <select id="country" class="w-full bg-white dark:bg-gray-700 border border-gray-600 rounded-md py-2 px-4 text-white appearance-none focus:outline-none focus:ring-2 focus:ring-purple-500">
                                <option value="sri-lanka" selected>Sri Lanka</option>
                                <option value="india">India</option>
                                <option value="usa">United States</option>
                                <option value="uk">United Kingdom</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
                                <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Street Address -->
                    <div>
                        <label for="streetAddress" class="block text-sm font-medium mb-2 text-gray-800 dark:text-gray-300">Street address</label>
                        <input type="text" id="streetAddress" class="w-full bg-white dark:bg-gray-700 border border-gray-600 rounded-md py-2 px-4 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>

                    <!-- Town/City -->
                    <div>
                        <label for="city" class="block text-sm font-medium mb-2 text-gray-800 dark:text-gray-300">Town / City</label>
                        <input type="text" id="city" class="w-full bg-white dark:bg-gray-700 border border-gray-600 rounded-md py-2 px-4 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>

                    <!-- Province -->
                    <div>
                        <label for="province" class="block text-sm font-medium mb-2 text-gray-800 dark:text-gray-300">Province</label>
                        <div class="relative">
                            <select id="province" class="w-full bg-white dark:bg-gray-700 border border-gray-600 rounded-md py-2 px-4 text-white appearance-none focus:outline-none focus:ring-2 focus:ring-purple-500">
                                <option value="western" selected>Western Province</option>
                                <option value="central">Central Province</option>
                                <option value="southern">Southern Province</option>
                                <option value="northern">Northern Province</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
                                <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- ZIP Code -->
                    <div>
                        <label for="zipCode" class="block text-sm font-medium mb-2 text-gray-800 dark:text-gray-300">ZIP code</label>
                        <input type="text" id="zipCode" class="w-full bg-white dark:bg-gray-700 border border-gray-600 rounded-md py-2 px-4 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>

                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-medium mb-2 text-gray-800 dark:text-gray-300">Phone</label>
                        <input type="tel" id="phone" class="w-full bg-white dark:bg-gray-700 border border-gray-600 rounded-md py-2 px-4 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-medium mb-2 text-gray-800 dark:text-gray-300">Email address</label>
                        <input type="email" id="email" class="w-full bg-white dark:bg-gray-700 border border-gray-600 rounded-md py-2 px-4 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label for="additionalInfo" class="block text-sm font-medium mb-2 text-gray-800 dark:text-gray-300">Additional information</label>
                        <textarea id="additionalInfo" rows="3" class="w-full bg-white dark:bg-gray-700 border border-gray-600 rounded-md py-2 px-4 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500"></textarea>
                    </div>
                </form>
            </div>

            <!-- Order Summary Section -->
            <div class="w-full lg:w-1/2 h-1/2 bg-gray-50 dark:bg-gray-800 rounded-lg p-6">
                <div class="space-y-6">
                    <!-- Product Summary -->
                    <div>
                        <h3 class="text-lg font-medium mb-4">Product</h3>

                        <div class="flex justify-between items-center pb-4 border-b border-gray-700">
                            <div class="flex items-center space-x-2">
                                <span class="text-gray-800 dark:text-gray-300">Item Name</span>
                                <span class="text-gray-400">× 1</span>
                            </div>
                            <span class="text-gray-800 dark:text-gray-300">$500</span>
                        </div>

                        <!-- Discount Entry -->
                        <div class="mt-4 pb-4 border-b border-gray-700 flex justify-between items-center">
                            <label for="bitCount" class="block text-sm font-medium mb-2 text-gray-800 dark:text-gray-300">
                                Enter bits to get discount
                            </label>
                            <div class="flex items-center space-x-2 border border-gray-300 dark:border-gray-600 rounded-md px-2 py-1 max-w-28">
                                <!-- Decrease Button -->
                                <button onclick="this.nextElementSibling.stepDown()"
                                    class="px-2 py-1 rounded-md text-lg font-medium focus:outline-none">
                                    −
                                </button>

                                <!-- Number Input Field -->
                                <input type="number" id="bitCount" value="0" min="0" step="1"
                                    class="w-8 text-center bg-transparent focus:outline-none">

                                <!-- Increase Button -->
                                <button onclick="this.previousElementSibling.stepUp()"
                                    class="px-2 py-1 rounded-md text-lg font-medium focus:outline-none">
                                    +
                                </button>
                            </div>

                        </div>


                        <!-- Price Breakdown -->
                        <div class="space-y-2 pb-4 border-b border-gray-700">
                            <div class="flex justify-between">
                                <span class="text-gray-700 dark:text-gray-300">Discounted price</span>
                                <span class="text-gray-700 dark:text-gray-300 text-sm">$ 300</span>
                            </div>
                            <div class="flex justify-between font-medium">
                                <span class="text-gray-700 dark:text-gray-300">Total</span>
                                <span class="text-primary">$ 300</span>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Options -->
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <input type="radio" id="bankTransfer" name="paymentMethod" value="bank" checked class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-600 bg-white dark:bg-gray-700">
                            <label for="bankTransfer" class="">Direct Bank Transfer</label>
                        </div>

                        <div class="ml-7 text-sm text-gray-800 dark:text-gray-300">
                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                        </div>

                        <div class="flex items-center space-x-3">
                            <input type="radio" id="bankTransfer2" name="paymentMethod" value="bank2" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-600 bg-white dark:bg-gray-700">
                            <label for="bankTransfer2" class="">Direct Bank Transfer</label>
                        </div>

                        <div class="flex items-center space-x-3">
                            <input type="radio" id="cashDelivery" name="paymentMethod" value="cash" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-600 bg-white dark:bg-gray-700">
                            <label for="cashDelivery" class="">Cash On Delivery</label>
                        </div>
                    </div>

                    <!-- Privacy Policy Notice -->
                    <div class="text-sm text-gray-800 dark:text-gray-300">
                        <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" class="text-purple-400 hover:text-purple-300">privacy policy</a>.</p>
                    </div>

                    <!-- Place Order Button -->
                    <button class="mx-auto w-72 mt-2 text-center bg-primary-gradient text-white px-4 py-2 rounded-lg flex items-center justify-center gap-2 hover:shadow-lg transition-all duration-300 group">
                        Place order
                    </button>

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