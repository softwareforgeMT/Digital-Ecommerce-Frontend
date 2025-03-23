<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="../../../css/output.css">
</head>

<body class="bg-white font-sans">
    <div class="flex min-h-screen">
        <!-- Left Section -->
        <div class="hidden md:flex md:w-1/2 bg-white p-8 flex-col items-center justify-center relative">
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <img src="../../../assets/logo.png" alt="Computer Heaven Logo" class="w-16 h-16">
                </div>
                <p class="text-gray-600 max-w-md mx-auto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit suspendisse.
                </p>
            </div>
            <img src="../../../assets/authImg.png" alt="">
        </div>

        <div class="w-[2px] h-auto md:h-screen bg-gray-300"></div>

        <!-- Right Section - Sign Up Form -->
        <div class="w-full md:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <div class="text-center md:text-left">
                    <p class="text-gray-500 mb-2">Start for free</p>
                    <h1 class="text-3xl font-bold text-gray-800 mb-8">Sign Up to TailAdmin</h1>
                </div>

                <form>
                    <!-- Name Field -->
                    <div class="mb-6">
                        <label for="name" class="block text-gray-700 mb-2">Full Name</label>
                        <div class="relative">
                            <input type="text" id="name" placeholder="Enter your full name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 pr-10">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                                    <circle cx="12" cy="7" r="4" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Email Field -->
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 mb-2">Email</label>
                        <div class="relative">
                            <input type="email" id="email" placeholder="Enter your email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 pr-10">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 mb-2">Password</label>
                        <div class="relative">
                            <input type="password" id="password" placeholder="6+ Characters, 1 Capital letter" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 pr-10">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Retype Password Field -->
                    <div class="mb-6">
                        <label for="retype-password" class="block text-gray-700 mb-2">Retype Password</label>
                        <div class="relative">
                            <input type="password" id="retype-password" placeholder="Confirm your password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 pr-10">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Sign Up Button -->
                    <button class="w-full mb-2 mt-2 text-center bg-primary-gradient text-white px-4 py-3 rounded-lg gap-2 hover:shadow-lg transition-all duration-300 group">
                        Create Account
                    </button>

                    <!-- Google Sign Up -->
                    <button type="button" class="w-full bg-blue-50 text-gray-700 py-3 rounded-lg hover:bg-blue-100 transition duration-200 mb-4 flex items-center justify-center">
                        <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24">
                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                        </svg>
                        Sign up with Google
                    </button>

                    <!-- Sign In Link -->
                    <div class="text-center text-gray-500">
                        Already have an account? <a href="../login/login.php" class="text-blue-600 font-medium">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>