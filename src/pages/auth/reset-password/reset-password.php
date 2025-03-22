<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="bg-white font-sans">
    <div class="flex min-h-screen">
        <!-- Left Section -->
        <div class="hidden md:flex md:w-1/2 bg-white p-8 flex-col items-center justify-center relative">
            <!-- Logo and text -->
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <img src="/assets/logo.png" alt="Computer Heaven Logo" class="w-16 h-16">
                </div>
                <p class="text-gray-600 max-w-md mx-auto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit suspendisse.
                </p>
            </div>

            <!-- Phone mockup -->
            <img src="/assets/authImg.png" alt="">
        </div>

        <div class="w-[2px] h-auto md:h-screen bg-gray-300"></div>



        <!-- Right Section - Sign In Form -->
        <div class="w-full md:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <div class="text-center md:text-left">
                    <h1 class="text-3xl font-bold text-gray-800 mb-8">Reset Password</h1>
                    <p class="text-gray-500 mb-2">Enter your email address to receive a password reset link.</p>
                </div>

                <form>
                    <!-- Email Field -->
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 mb-2">Email</label>
                        <div class="relative">
                            <input
                                type="email"
                                id="email"
                                placeholder="Enter your email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 pr-10">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Login Button -->
                    <button class="w-full mb-2 mt-2 text-center bg-primary-gradient text-white px-4 py-3 rounded-lg gap-2 hover:shadow-lg transition-all duration-300 group">
                        Send password reset link
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>