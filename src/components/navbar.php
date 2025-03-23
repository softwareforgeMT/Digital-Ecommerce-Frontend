<nav
  class="bg-white dark:bg-gray-900 px-4 py-3 shadow-sm transition-colors duration-300">
  <div class="container mx-auto">
    <!-- Desktop & Mobile Top Bar -->
    <div class="flex items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center">
        <a href="/" class="flex items-center">
          <img
            src="/src/assets/logo.png"
            alt="Computer Nostalgia Logo"
            class="h-10 md:h-14" />
        </a>
      </div>

      <!-- Desktop Navigation Links - Hidden on Mobile -->
      <div class="hidden md:flex space-x-4 lg:space-x-8">
        <a
          href="/"
          class="text-gray-800 dark:text-gray-300 font-medium text-sm lg:text-base">Home</a>
        <a
          href="/src/pages/the-news/the-news.php"
          class="text-gray-800 dark:text-gray-300 font-medium text-sm lg:text-base">News</a>
        <a
          href="/src/pages/store/store.php"
          class="text-gray-800 dark:text-gray-300 font-medium text-sm lg:text-base">Store</a>
        <a
          href="/src/pages/nostalgia-base/nostalgia-base.php"
          class="text-gray-800 dark:text-gray-300 font-medium text-sm lg:text-base">NostalgiaBase</a>
        <a
          href="/src/pages/services/services.php"
          class="text-gray-800 dark:text-gray-300 font-medium text-sm lg:text-base">Services</a>
        <a
          href="/src/pages/bit-logs/bit-logs.php"
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
            src="/src/assets/togglingIcon.png"
            alt="Theme Toggle"
            class="w-5 h-5 md:w-6 md:h-6 transition-all duration-300 dark:invert" />
        </button>

        <!-- Desktop - Cart Icon, User Icon and Login Button -->
        <div class="hidden md:flex items-center space-x-4">
          <!-- Shopping Cart Icon with Dropdown -->
          <div class="relative">
            <!-- Cart Icon Button -->
            <button id="cart-toggle" class="text-gray-800 dark:text-white relative">
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
              <!-- Cart Item Counter Badge -->
              <span class="absolute -top-2 -right-2 bg-purple-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">2</span>
            </button>

            <!-- Shopping Cart Dropdown - Hidden by default -->
            <div id="cart-dropdown" class="hidden absolute right-0 mt-2 w-80 bg-white dark:bg-gray-800 rounded-lg shadow-lg z-50">
              <div class="p-4 text-left">
                <div class="flex justify-between items-center mb-4">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Shopping Cart</h3>
                  <button id="close-cart" class="text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>

                <div class="border-t border-gray-200 dark:border-gray-700"></div>

                <!-- Cart Items -->
                <div class="space-y-4 my-4 max-h-80 overflow-y-auto">
                  <!-- Item 1 -->
                  <div class="flex items-center space-x-4">
                    <img src="https://images.unsplash.com/photo-1486401899868-0e435ed85128?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Item 1" class="w-16 h-16 rounded object-cover bg-gray-200 dark:bg-gray-700" />
                    <div class="flex-1">
                      <p class="text-sm font-medium text-gray-900 dark:text-white">Item Name</p>
                      <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        <span>1</span>
                        <span class="mx-1">x</span>
                        <span>$500</span>
                      </div>
                    </div>
                    <button class="text-gray-400 hover:text-red-500 dark:text-gray-500 dark:hover:text-red-400">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                    </button>
                  </div>

                  <!-- Item 2 -->
                  <div class="flex items-center space-x-4">
                    <img src="https://images.unsplash.com/photo-1486401899868-0e435ed85128?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Item 2" class="w-16 h-16 rounded object-cover bg-gray-200 dark:bg-gray-700" />
                    <div class="flex-1">
                      <p class="text-sm font-medium text-gray-900 dark:text-white">Item Name</p>
                      <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        <span>1</span>
                        <span class="mx-1">x</span>
                        <span>$500</span>
                      </div>
                    </div>
                    <button class="text-gray-400 hover:text-red-500 dark:text-gray-500 dark:hover:text-red-400">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                    </button>
                  </div>
                </div>

                <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                  <div class="flex justify-between mb-4 text-gray-900 dark:text-white">
                    <span>Subtotal</span>
                    <span>$1000</span>
                  </div>

                  <div class="grid grid-cols-3 gap-3">
                    <a href="/src/pages/cart/cart.php" class="flex justify-center col-span-1 text-center bg-gray-100 hover:bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600 text-gray-800 dark:text-white font-medium py-2 px-4 rounded-lg transition-colors">
                      Cart
                    </a>
                    <a href="/src/pages/checkout/checkout.php" class="flex justify-center col-span-1 text-center bg-gray-800 hover:bg-gray-700 dark:bg-gray-600 dark:hover:bg-gray-500 text-white font-medium py-2 px-4 rounded-lg transition-colors">
                      Checkout
                    </a>
                    <a href="#" class="flex justify-center col-span-1 text-center bg-gray-100 hover:bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600 text-gray-800 dark:text-white font-medium py-2 px-4 rounded-lg transition-colors">
                      Compare
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- User Icon -->
          <a href="/src/pages/user-dashboard/user-dashboard.php" 
             class="text-gray-800 dark:text-white hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 lg:h-8 lg:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </a>

          <a
            href="/src/pages/auth/login/login.php"
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
        <a href="/src/pages/the-news/the-news.php" class="text-gray-800 dark:text-gray-300 font-medium">News</a>
        <a href="/src/pages/store/store.php" class="text-gray-800 dark:text-gray-300 font-medium">Store</a>
        <a href="/src/pages/nostalgia-base/nostalgia-base.php" class="text-gray-800 dark:text-gray-300 font-medium">NostalgiaBase</a>
        <a href="/src/pages/services/services.php" class="text-gray-800 dark:text-gray-300 font-medium">Services</a>
        <a href="/src/pages/bit-logs/bit-logs.php" class="text-gray-800 dark:text-gray-300 font-medium">Bit Logs</a>

        <!-- Mobile - Cart Icon, User Icon and Login Button -->
        <div
          class="flex items-center justify-between pt-4 border-t border-gray-200 dark:border-gray-700">
          <div class="flex items-center space-x-4">
            <a href="/src/pages/cart/cart.php" class="text-gray-800 dark:text-white">
              <!-- Cart Icon -->
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

            <!-- User Icon -->
            <a href="/src/pages/user-dashboard/user-dashboard.php" class="text-gray-800 dark:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </a>
          </div>

          <a
            href="/src/pages/auth/login/login.php"
            class="bg-primary-gradient hover:opacity-80 text-white px-4 py-2 rounded-xl font-medium transition-opacity duration-300">
            <button class="w-16">Login</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

<script src="/src/js/drop-downs-js/cart-dropdown.js"></script>