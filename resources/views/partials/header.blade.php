<!-- Top Bar -->
<div style="background-color: #9D6E3D;" class="text-white text-sm py-3 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <!-- Left: Phone Number -->
            <div class="flex items-center space-x-2">
                <x-lucide-phone class="w-4 h-4" />
                <span>+1 (555) 123-4567</span>
            </div>

            <!-- Center: Lorem Text -->
            <div class="hidden md:block text-center flex-1 px-4">
                <p class="text-white">Welcome to our premium e-commerce experience</p>
            </div>

            <!-- Right: Dropdowns -->
            <div class="flex items-center space-x-6">
                <!-- Language Dropdown -->
                <div class="relative group">
                    <button class="flex items-center space-x-1 hover:opacity-80 transition duration-300">
                        <x-lucide-globe class="w-4 h-4" />
                        <span>English</span>
                        <x-lucide-chevron-down class="w-3 h-3" />
                    </button>
                    <div class="absolute left-0 mt-0 w-32 rounded shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 invisible group-hover:visible z-10" style="background-color: #8B5E2F;">
                        <a href="#" class="block px-4 py-2 hover:opacity-75 transition duration-300">English</a>
                        <a href="#" class="block px-4 py-2 hover:opacity-75 transition duration-300">Spanish</a>
                        <a href="#" class="block px-4 py-2 hover:opacity-75 transition duration-300">French</a>
                    </div>
                </div>

                <!-- Currency Dropdown -->
                <div class="relative group">
                    <button class="flex items-center space-x-1 hover:opacity-80 transition duration-300">
                        <x-lucide-circle-dollar-sign class="w-4 h-4" />
                        <span>USD</span>
                        <x-lucide-chevron-down class="w-3 h-3" />
                    </button>
                    <div class="absolute left-0 mt-0 w-32 rounded shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 invisible group-hover:visible z-10" style="background-color: #8B5E2F;">
                        <a href="#" class="block px-4 py-2 hover:opacity-75 transition duration-300">USD ($)</a>
                        <a href="#" class="block px-4 py-2 hover:opacity-75 transition duration-300">EUR (€)</a>
                        <a href="#" class="block px-4 py-2 hover:opacity-75 transition duration-300">GBP (£)</a>
                    </div>
                </div>

                <!-- Settings Dropdown -->
                <div class="relative group">
                    <button class="flex items-center space-x-1 hover:opacity-80 transition duration-300">
                        <x-lucide-settings class="w-4 h-4" />
                        <span>Settings</span>
                        <x-lucide-chevron-down class="w-3 h-3" />
                    </button>
                    <div class="absolute right-0 mt-0 w-40 rounded shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 invisible group-hover:visible z-10" style="background-color: #8B5E2F;">
                        <a href="#" class="block px-4 py-2 hover:opacity-75 transition duration-300">Account Settings</a>
                        <a href="#" class="block px-4 py-2 hover:opacity-75 transition duration-300">Notifications</a>
                        <a href="#" class="block px-4 py-2 hover:opacity-75 transition duration-300">Privacy Policy</a>
                        <a href="#" class="block px-4 py-2 hover:opacity-75 transition duration-300">Help & Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation Bar -->
<nav class="bg-white shadow-md sticky top-0 z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Left: Logo and Navs -->
            <div class="flex items-center space-x-8">
                <!-- Logo -->
                <a href="/" class="flex-shrink-0 hover:opacity-80 transition duration-300 flex items-center">
                    <img src="{{ asset('assets/imgs/furniture/logo/logo.svg') }}" alt="{{ config('app.name') }}" class="h-10 w-auto">
                </a>
                
                <!-- Navigation Items -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-amber-800 transition duration-300 font-medium {{ request()->routeIs('home') ? 'text-amber-800' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-amber-800 transition duration-300 font-medium {{ request()->routeIs('about') ? 'text-amber-800' : '' }}">About</a>
                    <a href="{{ route('products') }}" class="text-gray-700 hover:text-amber-800 transition duration-300 font-medium {{ request()->routeIs('products') ? 'text-amber-800' : '' }}">Shop</a>
                    <a href="#" class="text-gray-700 hover:text-amber-800 transition duration-300 font-medium">Pages</a>
                    <a href="#" class="text-gray-700 hover:text-amber-800 transition duration-300 font-medium">Blog</a>
                   <a href="{{ route('contact') }}" class="text-gray-700 hover:text-amber-800 transition duration-300 font-medium {{ request()->routeIs('contact') ? 'text-amber-800' : '' }}">Contact</a>
                </div>
            </div>

            <!-- Right: Search, Heart, Cart, Hamburger -->
            <div class="flex items-center gap-3 md:gap-5">
                <!-- Search Bar -->
                <div class="relative hidden sm:flex items-center">
                    <input type="text" placeholder="Search..." class="pl-4 pr-12 py-2 rounded-full border border-gray-300 bg-gray-50 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-amber-800 focus:bg-white transition duration-300 w-48 lg:w-72">
                    <button style="background-color: #9D6E3D;" class="absolute right-0 top-0 bottom-0 w-10 text-white hover:opacity-80 transition duration-300 rounded-full flex items-center justify-center">
                        <x-lucide-search class="w-4 h-4" />
                    </button>
                </div>

                <!-- Heart Icon (Wishlist) -->
                <button class="text-gray-700 hover:text-amber-800 transition duration-300 relative">
                    <x-lucide-heart class="w-6 h-6" />
                    <span style="background-color: #9D6E3D;" class="absolute -top-2 -right-2 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
                </button>

                <!-- Shopping Cart Icon -->
                <button class="text-gray-700 hover:text-amber-800 transition duration-300 relative">
                    <x-lucide-shopping-cart class="w-6 h-6" />
                    <span style="background-color: #9D6E3D;" class="absolute -top-2 -right-2 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                </button>

                <!-- Hamburger Menu -->
                <button class="lg:hidden text-gray-700 hover:text-amber-800 transition duration-300">
                    <x-lucide-menu class="w-6 h-6" />
                </button>
            </div>
        </div>
    </div>
</nav>