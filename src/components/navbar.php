<nav
    class="bg-white dark:bg-gray-900 px-4 py-3 shadow-sm transition-colors duration-300">
    <div class="container mx-auto">
      <!-- Desktop & Mobile Top Bar -->
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center">
          <a href="/" class="flex items-center">
            <img
              src="/assets/logo.png"
              alt="Computer Nostalgia Logo"
              class="h-10 md:h-14" />
          </a>
        </div>

        <!-- Desktop Navigation Links - Hidden on Mobile -->
        <div class="hidden md:flex space-x-4 lg:space-x-8">
          <a
            href="/"
            class="text-purple-600 font-medium dark:text-purple-400 text-sm lg:text-base">Home</a>
          <a
            href="/pages/the-news/the-news.php"
            class="text-gray-800 dark:text-gray-300 font-medium text-sm lg:text-base">News</a>
          <a
            href="/pages/store/store.php"
            class="text-gray-800 dark:text-gray-300 font-medium text-sm lg:text-base">Store</a>
          <a
            href="#"
            class="text-gray-800 dark:text-gray-300 font-medium text-sm lg:text-base">NostalgiaBase</a>
          <a
            href="#"
            class="text-gray-800 dark:text-gray-300 font-medium text-sm lg:text-base">Services</a>
          <a
            href="#"
            class="text-gray-800 dark:text-gray-300 font-medium text-sm lg:text-base">Bit Logs</a>
        </div>

        <!-- Right Side Elements -->
        <div class="flex items-center space-x-2 md:space-x-4">
          <!-- Search Bar -->
          <div class="relative">
            <div
              class="flex w-40 md:w-[253px] items-center bg-gray-200 dark:bg-gray-700 rounded-lg overflow-hidden">
              <div class="flex items-center pl-2 md:pl-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 w-4 md:h-5 md:w-5 text-gray-500 dark:text-gray-300"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </div>
              <input
                type="text"
                placeholder="Search"
                class="bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-white py-1 md:py-2 px-1 md:px-2 focus:outline-none w-16 sm:w-24 md:w-32 text-sm" />
              <div>
                <button
                  class="bg-primary-gradient text-white px-2 ml-4 md:px-4 py-1 rounded-lg text-xs md:text-sm">
                  Search
                </button>
              </div>
            </div>
          </div>

          <!-- Dark Mode Toggle - Visible on All Screens -->
          <button id="theme-toggle" class="p-1 md:p-2 rounded-md">
            <img
              id="theme-icon"
              src="/assets/togglingIcon.png"
              alt="Theme Toggle"
              class="w-5 h-5 md:w-6 md:h-6 transition-all duration-300 dark:invert" />
          </button>

          <!-- Desktop - Cart Icon and Login Button -->
          <div class="hidden md:flex items-center space-x-4">
            <a href="#" class="text-gray-800 dark:text-white">
              <div class="flex items-center">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-6 w-6 lg:h-8 lg:w-8"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </div>
            </a>

            <a
              href="#"
              class="bg-primary-gradient hover:opacity-80 text-white px-4 lg:px-6 py-1 lg:py-2 rounded-xl font-medium transition-opacity duration-300">
              <button class="w-16 lg:w-[96px] text-sm lg:text-base">
                Login
              </button>
            </a>
          </div>

          <!-- Mobile - Menu Toggle Button -->
          <button
            id="menu-toggle"
            class="md:hidden text-gray-800 dark:text-white p-1 focus:outline-none">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Menu - Hidden by Default -->
      <div id="mobile-menu" class="mobile-menu md:hidden mt-2">
        <div
          class="flex flex-col space-y-4 py-4 px-2 border-t border-gray-200 dark:border-gray-700">
          <a href="/" class="text-purple-600 font-medium dark:text-purple-400">Home</a>
          <a href="/pages/the-news/the-news.php" class="text-gray-800 dark:text-gray-300 font-medium">News</a>
          <a href="/pages/store/store.php" class="text-gray-800 dark:text-gray-300 font-medium">Store</a>
          <a href="#" class="text-gray-800 dark:text-gray-300 font-medium">NostalgiaBase</a>
          <a href="#" class="text-gray-800 dark:text-gray-300 font-medium">Services</a>
          <a href="#" class="text-gray-800 dark:text-gray-300 font-medium">Bit Logs</a>

          <!-- Mobile - Cart Icon and Login Button -->
          <div
            class="flex items-center justify-between pt-4 border-t border-gray-200 dark:border-gray-700">
            <a href="#" class="text-gray-800 dark:text-white">
              <div class="flex items-center">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-6 w-6"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </div>
            </a>

            <a
              href="#"
              class="bg-primary-gradient hover:opacity-80 text-white px-4 py-2 rounded-xl font-medium transition-opacity duration-300">
              <button class="w-16">Login</button>
            </a>

            <!-- <button id="mobile-theme-toggle" class="p-1 rounded-md">
              <img id="mobile-theme-icon" src="../assets/togglingIcon.png" alt="Theme Toggle" class="w-5 h-5 transition-all duration-300 dark:invert" />
            </button> -->
          </div>
        </div>
      </div>
    </div>
  </nav>