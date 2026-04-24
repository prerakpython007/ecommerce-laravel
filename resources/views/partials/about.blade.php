<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - {{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        .breadcrumb-bg {
            background-image: url('{{ asset("assets/imgs/bg/breadcrumb-bg-furniture.jpg") }}');
            background-size: cover;
            background-position: center;
        }
        .video-play-btn:hover .play-icon {
            transform: scale(1.1);
        }
        .store-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #111;
            color: #fff;
            padding: 10px 16px;
            border-radius: 8px;
            text-decoration: none;
        }
        .store-btn .get-it {
            font-size: 9px;
            opacity: 0.7;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            display: block;
        }
        .store-btn .store-name {
            font-size: 15px;
            font-weight: 600;
            display: block;
            line-height: 1.2;
        }
        .outline-cta {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            border: 1.5px solid #1a1a1a;
            background: transparent;
            padding: 10px 22px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.05em;
            color: #1a1a1a;
            cursor: pointer;
            text-transform: uppercase;
            transition: background 0.2s;
        }
        .outline-cta:hover {
            background: rgba(0,0,0,0.06);
        }
    </style>
</head>
<body>

    <!-- Include your header here -->
    @include('partials.header')

    <!-- Breadcrumb Section -->
    <div class="breadcrumb-bg py-20 md:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">About Us</h1>
            <div class="flex justify-center items-center space-x-2 text-white">
                <a href="{{ route('home') }}" class="hover:text-amber-200 transition">Home</a>
                <span>/</span>
                <span class="text-amber-200">About Us</span>
            </div>
        </div>
    </div>

    <!-- Main About Section -->
    <div class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Text Left, Image Right - Top Row -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start mb-8">
                <!-- Left Column - Content -->
                <div>
                    <span class="text-[#b4864a] font-semibold uppercase tracking-wide text-sm">About Our Company</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-[#1a1a1a] mt-2 mb-6">We Create Unique & Modern Furniture Designs</h2>
                    <p class="text-[#5a5a5a] mb-6 leading-relaxed text-base">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p class="text-[#5a5a5a] mb-8 leading-relaxed text-base">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <!-- Progress Bars -->
                    <div class="space-y-5">
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-[#1a1a1a] font-medium">Furniture</span>
                                <span class="text-[#b4864a] font-semibold">70%</span>
                            </div>
                            <div class="w-full bg-[#e8e4df] h-3">
                                <div class="bg-[#b4864a] h-3" style="width: 70%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-[#1a1a1a] font-medium">Handmade</span>
                                <span class="text-[#b4864a] font-semibold">52%</span>
                            </div>
                            <div class="w-full bg-[#e8e4df] h-3">
                                <div class="bg-[#b4864a] h-3" style="width: 52%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-[#1a1a1a] font-medium">Crafts</span>
                                <span class="text-[#b4864a] font-semibold">80%</span>
                            </div>
                            <div class="w-full bg-[#e8e4df] h-3">
                                <div class="bg-[#b4864a] h-3" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Pink Sofa Image (taller, aligned to bottom) -->
                <div class="flex items-end">
                    <img src="{{ asset('assets/imgs/furniture/about/about-image1.jpg') }}" alt="Pink Sofa" class="w-full h-[700px] md:h-[900px] object-cover shadow-lg">
                </div>
            </div>

            <!-- Bottom Row - Small Yellow Sofa on Left (positioned up) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                <!-- Left - Yellow Sofa (smaller, positioned upper) -->
                <div class="-mt-80">
                    <img src="{{ asset('assets/imgs/furniture/about/about-image2.jpg') }}" alt="Yellow Sofa" class="w-full h-[200px] md:h-[300px] object-cover shadow-lg">
                </div>
                <!-- Right - Empty -->
                <div></div>
            </div>
        </div>
    </div>

    <!-- Video Section -->
    <div class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-hidden shadow-xl">
                <img src="{{ asset('assets/imgs/furniture/about/about-video-image.jpg') }}" alt="Video Thumbnail" class="w-full h-96 object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <button class="video-play-btn w-20 h-20 bg-[#b4864a] rounded-full flex items-center justify-center hover:bg-[#9a7240] transition duration-300 shadow-lg">
                        <svg class="play-icon w-10 h-10 text-white ml-1 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ✅ UPDATED: Three Cards Bottom Section -->
    <div class="py-12 px-4 sm:px-8 lg:px-16 bg-white">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Card 1 - Exclusive Offers (Light Blue) -->
        <div class="p-10 md:p-14" style="background-color: #d9f0f5;">
            <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">Exclusive offers for you</h3>
            <p class="text-[#555] text-sm leading-relaxed mb-8">Get weekly deals, valuable health information and more.</p>
            <button class="outline-cta">SIGN UP &rsaquo;</button>
        </div>

        <!-- Card 2 - Join Community (Light Yellow) -->
        <div class="p-10 md:p-14" style="background-color: #f5f5d8;">
            <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">Join Our Community</h3>
            <p class="text-[#555] text-sm leading-relaxed mb-8">Get weekly deals, valuable health information and more.</p>
            <button class="outline-cta">JOIN FREE NOW &rsaquo;</button>
        </div>

        <!-- Card 3 - Get App (Light Pink) -->
        <div class="p-10 md:p-14" style="background-color: #fce4e4;">
            <h3 class="text-xl font-bold text-[#1a1a1a] mb-3">Get our FREE app Now!</h3>
            <p class="text-[#555] text-sm leading-relaxed mb-8">Get weekly deals, valuable health information and more.</p>
            <div class="flex flex-wrap gap-3">
                <!-- Google Play -->
                <a href="#" class="store-btn">
                    <svg width="20" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.18 23.76c.3.17.64.24.99.2L14.6 12 3.17.04A1.5 1.5 0 003 .77v22.22c0 .28.06.54.18.77z" fill="#EA4335"/>
                        <path d="M18.46 15.69l2.9-1.67c.85-.49.85-1.55 0-2.04l-2.9-1.67L15.2 12l3.26 3.69z" fill="#FBBC05"/>
                        <path d="M3.17.04l11.43 11.97 3.86-3.86L5.08.26C4.5-.08 3.75-.1 3.17.04z" fill="#4285F4"/>
                        <path d="M3.17 23.96l13.29-7.82-3.86-3.87L3.17 23.96z" fill="#34A853"/>
                    </svg>
                    <div>
                        <span class="get-it">GET IT ON</span>
                        <span class="store-name">Google Play</span>
                    </div>
                </a>
                <!-- App Store -->
                <a href="#" class="store-btn">
                    <svg width="18" height="20" viewBox="0 0 814 1000" fill="white" xmlns="http://www.w3.org/2000/svg">
                        <path d="M788.1 340.9c-5.8 4.5-108.2 62.2-108.2 190.5 0 148.4 130.3 200.9 134.2 202.2-.6 3.2-20.7 71.9-68.7 141.9-42.8 61.6-87.5 123.1-155.5 123.1s-85.5-39.5-164-39.5c-76 0-103.7 40.8-165.9 40.8s-105.3-57.8-155.5-127.4C46 790.7 0 663 0 541.8c0-207.9 137.2-318 272.1-318 67.9 0 124.5 44.8 167.6 44.8 41.3 0 106.7-47.6 183.9-47.6zm-194.3-86.5c31.1-36.9 53.1-88.1 53.1-139.3 0-7.1-.6-14.3-1.9-20.1-50.6 1.9-110.8 33.7-147.1 75.8-28.5 32.4-55.1 83.6-55.1 135.5 0 7.8 1.3 15.6 1.9 18.1 3.2.6 8.4 1.3 13.6 1.3 45.4 0 102.5-30.4 135.5-71.3z"/>
                    </svg>
                    <div>
                        <span class="get-it">Download on the</span>
                        <span class="store-name">App Store</span>
                    </div>
                </a>
            </div>
        </div>

        </div>
    </div>

    <!-- Include Footer -->
    @include('partials.footer')

</body>
</html>