<!-- Hero Section -->
 @extends('layouts.app')
@section('content')
<section class="relative overflow-hidden" style="background-image: url('{{ asset('assets/imgs/furniture/banner/bg.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 500px;">

    <div class="max-w-7xl mx-auto px-8 sm:px-12 lg:px-16 py-16 lg:py-20 relative z-10">
        <div class="grid lg:grid-cols-2 gap-8 items-center">

            <!-- Left Content -->
            <div class="text-left">
                <span class="inline-block px-3 py-1 text-xs font-semibold uppercase tracking-widest mb-6 border" style="color: #9D6E3D; border-color: #9D6E3D; background: transparent;">
                    New Arrival...
                </span>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-gray-900 leading-tight mb-6" style="font-family: sans-serif; letter-spacing: -1px;">
                    Elevate<br>
                    Your Home<br>
                    Aesthetics
                </h1>
                <p class="text-gray-500 mb-10 max-w-sm text-sm leading-relaxed">
                    A furniture e-commerce company operates in the digital space, offering a wide range of furniture products for sale through an online platform.
                </p>
                <div class="flex flex-row gap-4 items-center">
                    <a href="#" class="inline-flex items-center justify-center px-8 py-3 font-semibold text-white text-sm transition-all duration-300 hover:opacity-90" style="background-color: #9D6E3D;">
                        Shop Now
                    </a>
                    <a href="#" class="inline-flex items-center justify-center px-8 py-3 font-semibold text-sm border transition-all duration-300 hover:bg-gray-100" style="border-color: #9D6E3D; color: #9D6E3D; background: transparent;">
                        View Collection
                    </a>
                </div>
            </div>

            <!-- Right Content - circle + chair -->
            <div class="relative flex items-center justify-center">
                <img
                    src="{{ asset('assets/imgs/furniture/banner/circle.png') }}"
                    alt="Circle"
                    class="w-full object-contain"
                    style="max-width: 480px;"
                >
                <img
                    src="{{ asset('assets/imgs/furniture/banner/chair2.png') }}"
                    alt="Featured Chair"
                    class="absolute object-contain"
                    style="max-width: 500px; width: 100%; bottom: 0;"
                >
                <div class="absolute right-0 top-1/2 -translate-y-1/2 flex flex-col gap-2">
                    <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                    <span class="w-2 h-2 rounded-full" style="background-color: #9D6E3D;"></span>
                    <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Features Bar -->
<section class="py-10 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-8 sm:px-12 lg:px-16">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">

            <!-- Feature 1 -->
            <div class="flex items-center gap-4">
                <div class="flex-shrink-0">
                    <svg class="w-10 h-10" style="color: #9D6E3D;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"/>
                    </svg>
                </div>
                <div>
                    <p class="font-bold text-gray-900 text-sm">Free Delivery</p>
                    <p class="text-gray-400 text-xs">Free shipping on all order</p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="flex items-center gap-4">
                <div class="flex-shrink-0">
                    <svg class="w-10 h-10" style="color: #9D6E3D;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/>
                    </svg>
                </div>
                <div>
                    <p class="font-bold text-gray-900 text-sm">Money Return</p>
                    <p class="text-gray-400 text-xs">Back guarantee under 7 day</p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="flex items-center gap-4">
                <div class="flex-shrink-0">
                    <div class="w-10 h-10 rounded-full border-2 flex items-center justify-center text-xs font-bold" style="border-color: #9D6E3D; color: #9D6E3D;">
                        24/7
                    </div>
                </div>
                <div>
                    <p class="font-bold text-gray-900 text-sm">Online Support 24/7</p>
                    <p class="text-gray-400 text-xs">Support online 24 hours a day</p>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="flex items-center gap-4">
                <div class="flex-shrink-0">
                    <svg class="w-10 h-10" style="color: #9D6E3D;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                </div>
                <div>
                    <p class="font-bold text-gray-900 text-sm">Reliable</p>
                    <p class="text-gray-400 text-xs">Trusted by 1000+ brands</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Promo Cards Section -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-8 sm:px-12 lg:px-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Card 1 - Wicker Hanging Chairs -->
            <div class="relative overflow-hidden" style="height: 300px;">
                <!-- Full card background image -->
                <img
                    src="{{ asset('assets/imgs/furniture/product/off-01.png') }}"
                    alt=""
                    class="absolute inset-0 w-full h-full object-cover"
                >
                <!-- Left Text -->
                <div class="absolute left-0 top-0 bottom-0 w-1/2 flex flex-col justify-center px-10">
                    <p class="text-xs font-semibold uppercase tracking-widest mb-2" style="color: #9D6E3D;">Get 30% Off</p>
                    <h3 class="text-2xl font-black text-gray-900 leading-tight mb-6">
                        Wicker Hanging<br>Chairs
                    </h3>
                    <a href="#" class="inline-flex items-center justify-center px-6 py-3 text-white text-xs font-bold uppercase tracking-widest transition-all duration-300 hover:opacity-90" style="background-color: #9D6E3D; width: fit-content;">
                        Buy Now &rsaquo;
                    </a>
                </div>
            </div>

            <!-- Card 2 - Brasslegged Armchair -->
            <div class="relative overflow-hidden" style="height: 300px;">
                <!-- Full card background image -->
                <img
                    src="{{ asset('assets/imgs/furniture/product/off-02.png') }}"
                    alt=""
                    class="absolute inset-0 w-full h-full object-cover"
                >
                <!-- Left Text -->
                <div class="absolute left-0 top-0 bottom-0 w-1/2 flex flex-col justify-center px-10">
                    <p class="text-xs font-semibold uppercase tracking-widest mb-2" style="color: #9D6E3D;">Get 15% Off</p>
                    <h3 class="text-2xl font-black text-gray-900 leading-tight mb-6">
                        Brasslegged<br>Armchair
                    </h3>
                    <a href="#" class="inline-flex items-center justify-center px-6 py-3 text-white text-xs font-bold uppercase tracking-widest transition-all duration-300 hover:opacity-90" style="background-color: #9D6E3D; width: fit-content;">
                        Buy Now
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Featured Products Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-8 sm:px-12 lg:px-16">

        <!-- Section Header -->
        <div class="text-center mb-10">
            <span class="inline-block px-4 py-1 text-xs font-semibold uppercase tracking-widest border mb-3" style="color: #9D6E3D; border-color: #9D6E3D;">
                Top Sale
            </span>
            <h2 class="text-4xl font-black text-gray-900">Featured Product</h2>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            <!-- Card 1 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden mb-4" style="background-color: #F5F0E8; height: 220px;">
                    <!-- Discount Badge -->
                    <span class="absolute top-3 left-3 z-10 px-3 py-1 text-xs font-semibold text-white rounded-full" style="background-color: #9D6E3D;">
                        10% Off
                    </span>
                    <img
                        src="{{ asset('assets/imgs/furniture/product/product3.png') }}"
                        alt="Leather Chair"
                        class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300"
                    >
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-1">Leather Chair</h3>
                <div class="flex items-center gap-1 mb-1">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4" style="color: #9D6E3D;" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-sm font-semibold" style="color: #9D6E3D;">USD 200.00</p>
            </div>

            <!-- Card 2 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden mb-4" style="background-color: #F5F0E8; height: 220px;">
                    <img
                        src="{{ asset('assets/imgs/furniture/product/product4.png') }}"
                        alt="Chair Pillow"
                        class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300"
                    >
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-1">Chair Pillow</h3>
                <div class="flex items-center gap-1 mb-1">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4" style="color: #9D6E3D;" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-sm font-semibold" style="color: #9D6E3D;">USD 49.00</p>
            </div>

            <!-- Card 3 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden mb-4" style="background-color: #F5F0E8; height: 220px;">
                    <!-- Discount Badge -->
                    <span class="absolute top-3 left-3 z-10 px-3 py-1 text-xs font-semibold text-white rounded-full" style="background-color: #9D6E3D;">
                        10% Off
                    </span>
                    <img
                        src="{{ asset('assets/imgs/furniture/product/product1.png') }}"
                        alt="Alexander Roll Arm Sofa"
                        class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300"
                    >
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-1">Alexander Roll Arm Sofa</h3>
                <div class="flex items-center gap-1 mb-1">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4" style="color: #9D6E3D;" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-sm font-semibold" style="color: #9D6E3D;">USD 150.00</p>
            </div>

            <!-- Card 4 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden mb-4" style="background-color: #F5F0E8; height: 220px;">
                    <img
                        src="{{ asset('assets/imgs/furniture/product/product2.png') }}"
                        alt="Brasslegged Armchair"
                        class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300"
                    >
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-1">Brasslegged Armchair</h3>
                <div class="flex items-center gap-1 mb-1">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4" style="color: #9D6E3D;" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-sm font-semibold" style="color: #9D6E3D;">USD 150.00</p>
            </div>

        </div>
    </div>
</section>
<!-- Hot Deal Section -->
<!-- Hot Deal Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-8 sm:px-12 lg:px-16">
        <div class="grid grid-cols-2 overflow-hidden" style="background-color: #F5F0E8;">

            <!-- Left Side -->
            <div class="flex items-center justify-center p-6">
                <!-- Brown Box with border -->
                <div class="relative w-full h-full p-12" style="background-color: #9D6E3D; min-height: 380px;">
                    <!-- Inner border -->
                    <div class="absolute inset-4 border border-white/40 pointer-events-none"></div>
                    <!-- Content -->
                    <div class="relative z-10 flex flex-col justify-center h-full">
                        <p class="text-white text-xs font-bold uppercase tracking-widest mb-6">Hot Deal Furniture</p>
                        <h2 class="text-3xl md:text-4xl font-black text-white leading-tight mb-10">
                            Live Furniture<br>Your Love
                        </h2>
                        <a href="#" class="inline-flex items-center justify-center px-8 py-3 bg-white text-gray-900 text-xs font-bold uppercase tracking-widest transition-all duration-300 hover:bg-gray-100" style="width: fit-content;">
                            Buy Now &rsaquo;
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Side - Room Image with hotspots -->
            <div class="relative overflow-hidden" style="min-height: 400px;">
                <img
                    src="{{ asset('assets/imgs/furniture/rating/bg-image.png') }}"
                    alt="Living Room"
                    class="absolute inset-0 w-full h-full object-cover"
                >

                <!-- Hotspot 1 -->
                <div class="absolute" style="top: 55%; left: 20%;">
                    <div class="w-5 h-5 rounded-full border-4 border-white cursor-pointer" style="background-color: #9D6E3D;"></div>
                </div>

                <!-- Hotspot 2 -->
                <div class="absolute" style="bottom: 22%; left: 55%;">
                    <div class="w-5 h-5 rounded-full border-4 border-white cursor-pointer" style="background-color: #9D6E3D;"></div>
                </div>

                <!-- Hotspot 3 - top right with popup to its LEFT -->
                <div class="absolute" style="top: 28%; right: 12%;">
                    <div class="relative flex items-center">
                        <!-- Popup Card to the LEFT of the dot -->
                        <div class="bg-white shadow-xl p-4 mr-3" style="width: 175px;">
                            <h4 class="font-bold text-gray-900 text-sm mb-2">Dining Table</h4>
                            <div class="flex items-center gap-1 mb-2">
                                @for ($i = 0; $i < 3; $i++)
                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                                @for ($i = 0; $i < 2; $i++)
                                    <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-sm font-bold" style="color: #9D6E3D;">USD 190.00</p>
                            <!-- Arrow pointing RIGHT toward the dot -->
                            <div class="absolute w-3 h-3 bg-white rotate-45" style="right: -6px; top: 50%; transform: translateY(-50%);"></div>
                        </div>
                        <!-- Dot -->
                        <div class="w-5 h-5 rounded-full border-4 border-white cursor-pointer flex-shrink-0" style="background-color: #9D6E3D;"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Trendy Collection Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-8 sm:px-12 lg:px-16">

        <!-- Section Header -->
        <div class="flex items-center justify-between mb-10">
            <!-- Left -->
            <div>
                <span class="inline-block px-3 py-1 text-xs font-semibold uppercase tracking-widest mb-3 border" style="color: #9D6E3D; border-color: #9D6E3D;">
                    This Month
                </span>
                <h2 class="text-4xl font-black text-gray-900">Trendy Collection</h2>
            </div>

            <!-- Right - Tabs -->
            <div class="flex items-center gap-6">
                <a href="#" class="relative text-sm font-semibold text-gray-900 pb-1" style="border-bottom: 2px solid #9D6E3D;">
    All Collection
    <!-- Count Badge -->
    <span class="absolute -top-3 -right-4 w-5 h-5 rounded-full text-white text-xs flex items-center justify-center font-bold" style="background-color: #9D6E3D; font-size: 10px;">8</span>
</a>
                <a href="#" class="text-sm text-gray-500 hover:text-gray-900 transition-colors">New In</a>
                <a href="#" class="text-sm text-gray-500 hover:text-gray-900 transition-colors">Top Rated</a>
                <a href="#" class="text-sm text-gray-500 hover:text-gray-900 transition-colors">Tensing Items</a>
            </div>
        </div>

        <!-- Products Grid - 4 cols, 2 rows -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

            <!-- Card 1 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden mb-3" style="background-color: #F5F0E8; height: 240px;">
                    <span class="absolute top-3 left-3 z-10 px-3 py-1 text-xs font-semibold text-white rounded-full" style="background-color: #9D6E3D;">10% Off</span>
                    <img src="{{ asset('assets/imgs/furniture/product/product1.png') }}" alt="Stylish Grey Chair"
                        class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300">
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-1">Stylish Grey Chair</h3>
                <div class="flex items-center gap-0.5 mb-1">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-3.5 h-3.5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-sm font-semibold" style="color: #9D6E3D;">USD 150.00</p>
            </div>

            <!-- Card 2 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden mb-3" style="background-color: #F5F0E8; height: 240px;">
                    <img src="{{ asset('assets/imgs/furniture/product/product2.png') }}" alt="Chair Pillow"
                        class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300">
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-1">Chair Pillow</h3>
                <div class="flex items-center gap-0.5 mb-1">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-3.5 h-3.5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-sm font-semibold" style="color: #9D6E3D;">USD 190.00</p>
            </div>

            <!-- Card 3 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden mb-3" style="background-color: #F5F0E8; height: 240px;">
                    <span class="absolute top-3 left-3 z-10 px-3 py-1 text-xs font-semibold text-white rounded-full" style="background-color: #9D6E3D;">15% Off</span>
                    <img src="{{ asset('assets/imgs/furniture/product/product3.png') }}" alt="Seater Gray Sofa"
                        class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300">
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-1">Seater Gray Sofa</h3>
                <div class="flex items-center gap-0.5 mb-1">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-3.5 h-3.5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-sm font-semibold" style="color: #9D6E3D;">USD 300.00</p>
            </div>

            <!-- Card 4 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden mb-3" style="background-color: #F5F0E8; height: 240px;">
                    <img src="{{ asset('assets/imgs/furniture/product/product4.png') }}" alt="Wooden Chair"
                        class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300">
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-1">Wooden Chair</h3>
                <div class="flex items-center gap-0.5 mb-1">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-3.5 h-3.5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-sm font-semibold" style="color: #9D6E3D;">USD 129.00</p>
            </div>

            <!-- Card 5 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden mb-3" style="background-color: #F5F0E8; height: 240px;">
                    <span class="absolute top-3 left-3 z-10 px-3 py-1 text-xs font-semibold text-white rounded-full" style="background-color: #9D6E3D;">10% Off</span>
                    <img src="{{ asset('assets/imgs/furniture/product/product5.png') }}" alt="Dark Swivel Chair"
                        class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300">
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-1">Dark Swivel Chair</h3>
                <div class="flex items-center gap-0.5 mb-1">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-3.5 h-3.5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-sm font-semibold" style="color: #9D6E3D;">USD 220.00</p>
            </div>

            <!-- Card 6 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden mb-3" style="background-color: #F5F0E8; height: 240px;">
                    <img src="{{ asset('assets/imgs/furniture/product/product6.png') }}" alt="Rattan Dining Chair"
                        class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300">
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-1">Rattan Dining Chair</h3>
                <div class="flex items-center gap-0.5 mb-1">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-3.5 h-3.5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-sm font-semibold" style="color: #9D6E3D;">USD 175.00</p>
            </div>

            <!-- Card 7 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden mb-3" style="background-color: #F5F0E8; height: 240px;">
                    <span class="absolute top-3 left-3 z-10 px-3 py-1 text-xs font-semibold text-white rounded-full" style="background-color: #9D6E3D;">NEW</span>
                    <img src="{{ asset('assets/imgs/furniture/product/product7.png') }}" alt="Accent Armchair"
                        class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300">
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-1">Accent Armchair</h3>
                <div class="flex items-center gap-0.5 mb-1">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-3.5 h-3.5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-sm font-semibold" style="color: #9D6E3D;">USD 80.00</p>
            </div>

            <!-- Card 8 -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden mb-3" style="background-color: #F5F0E8; height: 240px;">
                    <img src="{{ asset('assets/imgs/furniture/product/product8.png') }}" alt="Plaid Accent Chair"
                        class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300">
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-1">Plaid Accent Chair</h3>
                <div class="flex items-center gap-0.5 mb-1">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-3.5 h-3.5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-sm font-semibold" style="color: #9D6E3D;">USD 49.00</p>
            </div>

        </div>
    </div>
</section>
<!-- Ad Banner Section -->
<!-- Ad Banner Section -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-8 sm:px-12 lg:px-16">
        <div class="grid grid-cols-2 gap-6">

            <!-- Left Card - Furniture Limit Offer -->
            <div class="relative overflow-hidden" style="height: 300px;">
                <img
                    src="{{ asset('assets/imgs/furniture/ad/ad-discount.png') }}"
                    alt="Furniture Limit Offer"
                    class="absolute inset-0 w-full h-full object-cover"
                >
                <div class="absolute inset-0" style="background: rgba(0,0,0,0.45);"></div>
                <div class="absolute inset-4 border border-white/30 pointer-events-none z-10"></div>
                <div class="absolute inset-0 z-20 flex flex-col justify-center px-10">
                    <p class="text-white text-xs font-bold uppercase tracking-widest mb-4">Hot Deal Furniture</p>
                    <h2 class="text-3xl md:text-4xl font-black text-white leading-tight mb-6">
                        Furniture Limit Offer<br>30% Off
                    </h2>
                    <a href="#" class="inline-flex items-center justify-center px-6 py-2.5 bg-white text-gray-900 text-xs font-bold uppercase tracking-widest transition-all duration-300 hover:bg-gray-100" style="width: fit-content;">
                        Buy Now &rsaquo;
                    </a>
                </div>
            </div>

            <!-- Right Card - Deals Of The Week -->
            <div class="relative overflow-hidden" style="height: 300px;">
                <img
                    src="{{ asset('assets/imgs/furniture/ad/ad-timer.png') }}"
                    alt="Deals Of The Week"
                    class="absolute inset-0 w-full h-full object-cover object-center"
                    style="object-fit: cover; object-position: center;"
                >
                <div class="absolute inset-0" style="background: rgba(0, 80, 90, 0.75);"></div>
                <div class="absolute inset-4 border border-white/30 pointer-events-none z-10"></div>
                <div class="absolute inset-0 z-20 flex flex-col justify-center items-center text-center px-10">
                    <p class="text-white text-xs font-bold uppercase tracking-widest mb-3">Hot Deal Furniture</p>
                    <h2 class="text-3xl md:text-4xl font-black text-white leading-tight mb-6">Deals OF The Week</h2>

                    <!-- Static Countdown -->
                    <div class="flex items-center gap-3 mb-6">
                        <div class="flex flex-col items-center">
                            <div class="w-14 h-14 flex items-center justify-center text-white font-black text-xl rounded" style="background-color: rgba(255,255,255,0.15);">159</div>
                            <span class="text-white text-xs mt-1 uppercase tracking-widest">Days</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-14 h-14 flex items-center justify-center text-white font-black text-xl rounded" style="background-color: rgba(255,255,255,0.15);">10</div>
                            <span class="text-white text-xs mt-1 uppercase tracking-widest">Hrs</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-14 h-14 flex items-center justify-center text-white font-black text-xl rounded" style="background-color: rgba(255,255,255,0.15);">15</div>
                            <span class="text-white text-xs mt-1 uppercase tracking-widest">Mins</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-14 h-14 flex items-center justify-center text-white font-black text-xl rounded" style="background-color: rgba(255,255,255,0.15);">16</div>
                            <span class="text-white text-xs mt-1 uppercase tracking-widest">Secs</span>
                        </div>
                    </div>

                    <a href="#" class="inline-flex items-center justify-center px-6 py-2.5 bg-white text-gray-900 text-xs font-bold uppercase tracking-widest transition-all duration-300 hover:bg-gray-100">
                        Buy Now &rsaquo;
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="relative py-20 overflow-hidden">
    <!-- Background Image -->
    <img
        src="{{ asset('assets/imgs/furniture/testimonial/bg.jpg') }}"
        alt="Testimonial Background"
        class="absolute inset-0 w-full h-full object-cover"
    >
    <!-- Dark overlay -->
    <div class="absolute inset-0" style="background: rgba(20, 20, 20, 0.82);"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-8 sm:px-12 lg:px-16">

        <!-- Section Header -->
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1 text-xs font-semibold uppercase tracking-widest border mb-4" style="color: #9D6E3D; border-color: #9D6E3D;">
                Testimonials
            </span>
            <h2 class="text-4xl font-black text-white">Client Feedback</h2>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">

            <!-- Card 1 -->
            <div class="bg-white p-6">
                <!-- Stars + Quote Icon -->
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-1">
                        @for ($i = 0; $i < 4; $i++)
                            <svg class="w-4 h-4" style="color: #9D6E3D;" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                        <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <!-- Quote Icon -->
                    <svg class="w-8 h-8" style="color: #9D6E3D;" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                </div>
                <h4 class="font-bold text-gray-900 text-sm">Jerome Bell</h4>
                <p class="text-gray-400 text-xs mb-4">Web Designer</p>
                <p class="text-gray-500 text-sm leading-relaxed">Lorem Ipsum dolor sit amet consectetur the adipiscing elit vestibulum viverra eget felis interdum fusce odio lacus.</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-6">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-1">
                        @for ($i = 0; $i < 4; $i++)
                            <svg class="w-4 h-4" style="color: #9D6E3D;" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                        <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <svg class="w-8 h-8" style="color: #9D6E3D;" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                </div>
                <h4 class="font-bold text-gray-900 text-sm">Annette Black</h4>
                <p class="text-gray-400 text-xs mb-4">Dog Trainer</p>
                <p class="text-gray-500 text-sm leading-relaxed">Lorem Ipsum dolor sit amet consectetur the adipiscing elit vestibulum viverra eget felis interdum fusce odio lacus.</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-6">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-1">
                        @for ($i = 0; $i < 4; $i++)
                            <svg class="w-4 h-4" style="color: #9D6E3D;" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                        <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <svg class="w-8 h-8" style="color: #9D6E3D;" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                </div>
                <h4 class="font-bold text-gray-900 text-sm">Ralph Edwards</h4>
                <p class="text-gray-400 text-xs mb-4">UI/UX Designer</p>
                <p class="text-gray-500 text-sm leading-relaxed">Lorem Ipsum dolor sit amet consectetur the adipiscing elit vestibulum viverra eget felis interdum fusce odio lacus.</p>
            </div>

        </div>

        <!-- Prev / Next Arrows -->
        <div class="flex items-center justify-center gap-3">
            <button class="w-10 h-10 rounded-full border border-white/40 flex items-center justify-center text-white hover:border-white transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <button class="w-10 h-10 rounded-full border border-white/40 flex items-center justify-center text-white hover:border-white transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>

    </div>
</section>
<!-- Best Sellers Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-8 sm:px-12 lg:px-16">

        <!-- Header -->
        <div class="mb-10">
            <span class="inline-block px-3 py-1 text-xs font-semibold uppercase tracking-widest border mb-3" style="color: #9D6E3D; border-color: #9D6E3D;">
                This Week
            </span>
            <h2 class="text-4xl font-black text-gray-900">Best Sellers</h2>
        </div>

        <!-- Products Grid - 3 cols, 2 rows -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

            <!-- Card 1 -->
            <div class="flex items-center gap-4 p-4 border border-gray-100 hover:shadow-md transition-shadow cursor-pointer">
                <div class="flex-shrink-0" style="background-color: #F5F0E8; width: 100px; height: 100px;">
                    <img src="{{ asset('assets/imgs/furniture/product/fs-01.png') }}" alt="Stylish Grey Chair"
                        class="w-full h-full object-contain p-2">
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 text-sm mb-1">Stylish Grey Chair</h4>
                    <p class="text-sm font-semibold mb-1" style="color: #9D6E3D;">USD 66.00</p>
                    <div class="flex items-center gap-0.5">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-3.5 h-3.5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flex items-center gap-4 p-4 border border-gray-100 hover:shadow-md transition-shadow cursor-pointer">
                <div class="flex-shrink-0" style="background-color: #F5F0E8; width: 100px; height: 100px;">
                    <img src="{{ asset('assets/imgs/furniture/product/fs-02.png') }}" alt="Chair Pillow"
                        class="w-full h-full object-contain p-2">
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 text-sm mb-1">Chair Pillow</h4>
                    <p class="text-sm font-semibold mb-1" style="color: #9D6E3D;">USD 66.00</p>
                    <div class="flex items-center gap-0.5">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-3.5 h-3.5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="flex items-center gap-4 p-4 border border-gray-100 hover:shadow-md transition-shadow cursor-pointer">
                <div class="flex-shrink-0" style="background-color: #F5F0E8; width: 100px; height: 100px;">
                    <img src="{{ asset('assets/imgs/furniture/product/fs-03.png') }}" alt="Alexander Roll"
                        class="w-full h-full object-contain p-2">
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 text-sm mb-1">Alexander Roll ..</h4>
                    <p class="text-sm font-semibold mb-1" style="color: #9D6E3D;">USD 66.00</p>
                    <div class="flex items-center gap-0.5">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-3.5 h-3.5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="flex items-center gap-4 p-4 border border-gray-100 hover:shadow-md transition-shadow cursor-pointer">
                <div class="flex-shrink-0" style="background-color: #F5F0E8; width: 100px; height: 100px;">
                    <img src="{{ asset('assets/imgs/furniture/product/fs-04.png') }}" alt="Wooden Chair"
                        class="w-full h-full object-contain p-2">
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 text-sm mb-1">Wooden Chair</h4>
                    <p class="text-sm font-semibold mb-1" style="color: #9D6E3D;">USD 66.00</p>
                    <div class="flex items-center gap-0.5">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-3.5 h-3.5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="flex items-center gap-4 p-4 border border-gray-100 hover:shadow-md transition-shadow cursor-pointer">
                <div class="flex-shrink-0" style="background-color: #F5F0E8; width: 100px; height: 100px;">
                    <img src="{{ asset('assets/imgs/furniture/product/fs-05.png') }}" alt="Chair Pillow"
                        class="w-full h-full object-contain p-2">
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 text-sm mb-1">Chair Pillow</h4>
                    <p class="text-sm font-semibold mb-1" style="color: #9D6E3D;">USD 66.00</p>
                    <div class="flex items-center gap-0.5">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-3.5 h-3.5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="flex items-center gap-4 p-4 border border-gray-100 hover:shadow-md transition-shadow cursor-pointer">
                <div class="flex-shrink-0" style="background-color: #F5F0E8; width: 100px; height: 100px;">
                    <img src="{{ asset('assets/imgs/furniture/product/fs-06.png') }}" alt="Seater Gray Sofa"
                        class="w-full h-full object-contain p-2">
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 text-sm mb-1">Seater Gray Sofa</h4>
                    <p class="text-sm font-semibold mb-1" style="color: #9D6E3D;">USD 66.00</p>
                    <div class="flex items-center gap-0.5">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-3.5 h-3.5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Recent Blog Section -->
<section class="py-16" style="background-color: #F5F0E8;">
    <div class="max-w-7xl mx-auto px-8 sm:px-12 lg:px-16">

        <!-- Header -->
        <div class="text-center mb-10">
            <span class="inline-block px-4 py-1 text-xs font-semibold uppercase tracking-widest border mb-4" style="color: #9D6E3D; border-color: #9D6E3D;">
                Read Blog
            </span>
            <h2 class="text-4xl font-black text-gray-900">Recent Blog</h2>
        </div>

        <!-- Blog Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Blog Card 1 -->
            <div class="bg-white overflow-hidden flex" style="min-height: 240px;">
                <!-- Left Content -->
                <div class="flex flex-col justify-between p-8 flex-1">
                    <div>
                        <span class="inline-block px-3 py-1 text-xs rounded-full mb-4" style="background-color: #F5F0E8; color: #9D6E3D;">Chair Design</span>
                        <div class="flex items-center gap-3 text-xs text-gray-400 mb-4">
                            <span>By Alex Manie</span>
                            <span>07 Jan, 2024</span>
                        </div>
                        <h3 class="text-xl font-black text-gray-900 leading-snug mb-6">
                            Arrangement That's<br>Nearly Perfect.
                        </h3>
                    </div>
                    <!-- Arrow Button -->
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-gray-900 hover:text-gray-900 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
                <!-- Right Image -->
                <div class="flex-shrink-0" style="width: 200px;">
                    <img src="{{ asset('assets/imgs/furniture/blog/blog-image1.jpg') }}" alt="Chair Design Blog"
                        class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Blog Card 2 -->
            <div class="bg-white overflow-hidden flex" style="min-height: 240px;">
                <!-- Left Content -->
                <div class="flex flex-col justify-between p-8 flex-1">
                    <div>
                        <span class="inline-block px-3 py-1 text-xs rounded-full mb-4" style="background-color: #F5F0E8; color: #9D6E3D;">Sofa Design</span>
                        <div class="flex items-center gap-3 text-xs text-gray-400 mb-4">
                            <span>By Alex Manie</span>
                            <span>07 Jan, 2024</span>
                        </div>
                        <h3 class="text-xl font-black text-gray-900 leading-snug mb-6">
                            Eworkstation<br>Arrangement That's
                        </h3>
                    </div>
                    <!-- Arrow Button -->
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-gray-900 hover:text-gray-900 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
                <!-- Right Image -->
                <div class="flex-shrink-0" style="width: 200px;">
                    <img src="{{ asset('assets/imgs/furniture/blog/blog-image2.jpg') }}" alt="Sofa Design Blog"
                        class="w-full h-full object-cover">
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Newsletter / CTA Cards Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-8 sm:px-12 lg:px-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Card 1 - Exclusive Offers -->
            <div class="p-8" style="background-color: #E8F4F8;">
                <h3 class="text-xl font-black text-gray-900 mb-3">Exclusive offers for you</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6">Get weekly deals, valuable health information and more.</p>
                <a href="#" class="inline-flex items-center justify-center px-6 py-2.5 text-xs font-bold uppercase tracking-widest border border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-white transition-all duration-300">
                    Sing Up &rsaquo;
                </a>
            </div>

            <!-- Card 2 - Join Community -->
            <div class="p-8" style="background-color: #F5F8E8;">
                <h3 class="text-xl font-black text-gray-900 mb-3">Join Our Community</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6">Get weekly deals, valuable health information and more.</p>
                <a href="#" class="inline-flex items-center justify-center px-6 py-2.5 text-xs font-bold uppercase tracking-widest border border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-white transition-all duration-300">
                    Join Free Now &rsaquo;
                </a>
            </div>

            <!-- Card 3 - Get App -->
            <div class="p-8" style="background-color: #FDF0F0;">
                <h3 class="text-xl font-black text-gray-900 mb-3">Get our FREE app Now!</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6">Get weekly deals, valuable health information and more.</p>
                <div class="flex items-center gap-3">
                    <a href="# bg-black">
                        <img src="{{ asset('assets/imgs/app/play-store.png') }}" alt="Get it on Google Play" class="h-10 object-contain">
                    </a>
                    <a href="#">
                        <img src="{{ asset('assets/imgs/app/apple-store.png') }}" alt="Download on App Store" class="h-10 object-contain">
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Brand Logos Section -->
<section class="py-12 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-8 sm:px-12 lg:px-16">
        <div class="flex items-center justify-between gap-8">
            <a href="#" class="flex items-center justify-center opacity-50 hover:opacity-100 transition-opacity">
                <img src="{{ asset('assets/imgs/furniture/brand/brand-01.png') }}" alt="Brand 1" class="h-14 object-contain">
            </a>
            <a href="#" class="flex items-center justify-center opacity-50 hover:opacity-100 transition-opacity">
                <img src="{{ asset('assets/imgs/furniture/brand/brand-02.png') }}" alt="Brand 2" class="h-14 object-contain">
            </a>
            <a href="#" class="flex items-center justify-center opacity-50 hover:opacity-100 transition-opacity">
                <img src="{{ asset('assets/imgs/furniture/brand/brand-03.png') }}" alt="Brand 3" class="h-14 object-contain">
            </a>
            <a href="#" class="flex items-center justify-center opacity-50 hover:opacity-100 transition-opacity">
                <img src="{{ asset('assets/imgs/furniture/brand/brand-04.png') }}" alt="Brand 4" class="h-14 object-contain">
            </a>
            <a href="#" class="flex items-center justify-center opacity-50 hover:opacity-100 transition-opacity">
                <img src="{{ asset('assets/imgs/furniture/brand/brand-05.png') }}" alt="Brand 5" class="h-14 object-contain">
            </a>
        </div>
    </div>
</section>
@endsection