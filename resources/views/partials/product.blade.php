<!-- Page Header / Breadcrumb -->
 @extends('layouts.app')
@section('content')
<section class="relative overflow-hidden" style="height: 220px;">
    <img
        src="{{ asset('assets/imgs/bg/breadcrumb-bg-furniture.jpg') }}"
        alt="Product Header"
        class="absolute inset-0 w-full h-full object-cover"
    >
    <div class="absolute inset-0" style="background: rgba(0,0,0,0.45);"></div>
    <div class="absolute inset-0 flex flex-col items-center justify-center z-10">
        <h1 class="text-5xl font-black text-white mb-3">Product</h1>
        <div class="flex items-center gap-2 text-sm text-gray-300">
            <a href="#" class="hover:text-white transition-colors">Home</a>
            <span>•</span>
            <span class="text-white">Product</span>
        </div>
    </div>
</section>

<!-- Product Listing -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-8 sm:px-12 lg:px-16">

        <!-- Toolbar -->
        <div class="flex items-center justify-between mb-8">
            <!-- Left -->
            <p class="text-sm font-semibold text-gray-900">20 Item On List</p>

            <!-- Right -->
            <div class="flex items-center gap-4">
                <!-- Filter -->
                <button class="flex items-center gap-2 text-sm text-gray-600 hover:text-gray-900 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M7.5 12h9m-5.25 5.25h1.5"/>
                    </svg>
                    FILTER
                </button>

                <div class="w-px h-5 bg-gray-300"></div>

                <!-- Show per page -->
                <select class="text-sm border border-gray-200 px-3 py-1.5 text-gray-600 focus:outline-none focus:border-gray-400 cursor-pointer">
                    <option>Show 20</option>
                    <option>Show 40</option>
                    <option>Show 60</option>
                </select>

                <!-- Grid / List Toggle -->
                <div class="flex items-center gap-2">
                    <button class="text-gray-900">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3 3h7v7H3V3zm0 11h7v7H3v-7zm11-11h7v7h-7V3zm0 11h7v7h-7v-7z"/>
                        </svg>
                    </button>
                    <button class="text-gray-400 hover:text-gray-900 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3 5h18v2H3V5zm0 6h18v2H3v-2zm0 6h18v2H3v-2z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12">

            <!-- Card 1 -->
            <div class="group cursor-pointer border border-gray-100 hover:shadow-lg transition-shadow duration-300">
                <div class="relative overflow-hidden p-6 bg-white" style="height: 240px;">
                    <span class="absolute top-4 left-4 z-10 px-3 py-1 text-xs font-semibold text-white rounded-full" style="background-color: #9D6E3D;">10% Off</span>
                    <img src="{{ asset('assets/imgs/product/product1.png') }}" alt="Alexander Sofa"
                        class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="px-5 pb-5 pt-3 border-t border-gray-100">
                    <p class="text-xs font-semibold uppercase tracking-widest mb-1" style="color: #9D6E3D;">Accessories</p>
                    <h3 class="font-black text-gray-900 text-base mb-2">Alexander Sofa</h3>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-400 text-sm line-through">$16.00</span>
                        <span class="font-bold text-gray-900 text-sm">$12.00</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group cursor-pointer border border-gray-100 hover:shadow-lg transition-shadow duration-300">
                <div class="relative overflow-hidden p-6 bg-white" style="height: 240px;">
                    <span class="absolute top-4 left-4 z-10 px-3 py-1 text-xs font-semibold text-white rounded-full" style="background-color: #9D6E3D;">10% Off</span>
                    <img src="{{ asset('assets/imgs/product/product2.png') }}" alt="Chair Pillow"
                        class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="px-5 pb-5 pt-3 border-t border-gray-100">
                    <p class="text-xs font-semibold uppercase tracking-widest mb-1" style="color: #9D6E3D;">Pharma Product</p>
                    <h3 class="font-black text-gray-900 text-base mb-2">Chair Pillow</h3>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-400 text-sm line-through">$20.00</span>
                        <span class="font-bold text-gray-900 text-sm">$34.00</span>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="group cursor-pointer border border-gray-100 hover:shadow-lg transition-shadow duration-300">
                <div class="relative overflow-hidden p-6 bg-white" style="height: 240px;">
                    <span class="absolute top-4 left-4 z-10 px-3 py-1 text-xs font-semibold text-white rounded-full" style="background-color: #9D6E3D;">10% Off</span>
                    <img src="{{ asset('assets/imgs/product/product3.png') }}" alt="Curaskin Lipgel"
                        class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="px-5 pb-5 pt-3 border-t border-gray-100">
                    <p class="text-xs font-semibold uppercase tracking-widest mb-1" style="color: #9D6E3D;">Skin Product</p>
                    <h3 class="font-black text-gray-900 text-base mb-2">Curaskin Lipgel</h3>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-400 text-sm line-through">$12.00</span>
                        <span class="font-bold text-gray-900 text-sm">$8.50</span>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="group cursor-pointer border border-gray-100 hover:shadow-lg transition-shadow duration-300">
                <div class="relative overflow-hidden p-6 bg-white" style="height: 240px;">
                    <span class="absolute top-4 left-4 z-10 px-3 py-1 text-xs font-semibold text-white rounded-full" style="background-color: #9D6E3D;">10% Off</span>
                    <img src="{{ asset('assets/imgs/product/product4.png') }}" alt="Leather Chair"
                        class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="px-5 pb-5 pt-3 border-t border-gray-100">
                    <p class="text-xs font-semibold uppercase tracking-widest mb-1" style="color: #9D6E3D;">Accessories</p>
                    <h3 class="font-black text-gray-900 text-base mb-2">Leather Chair</h3>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-400 text-sm line-through">$80.00</span>
                        <span class="font-bold text-gray-900 text-sm">$66.00</span>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="group cursor-pointer border border-gray-100 hover:shadow-lg transition-shadow duration-300">
                <div class="relative overflow-hidden p-6 bg-white" style="height: 240px;">
                    <span class="absolute top-4 left-4 z-10 px-3 py-1 text-xs font-semibold text-white rounded-full" style="background-color: #9D6E3D;">10% Off</span>
                    <img src="{{ asset('assets/imgs/product/product5.png') }}" alt="Alexander Sofa"
                        class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="px-5 pb-5 pt-3 border-t border-gray-100">
                    <p class="text-xs font-semibold uppercase tracking-widest mb-1" style="color: #9D6E3D;">Accessories</p>
                    <h3 class="font-black text-gray-900 text-base mb-2">Alexander Sofa</h3>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-400 text-sm line-through">$15.00</span>
                        <span class="font-bold text-gray-900 text-sm">$12.00</span>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="group cursor-pointer border border-gray-100 hover:shadow-lg transition-shadow duration-300">
                <div class="relative overflow-hidden p-6 bg-white" style="height: 240px;">
                    <span class="absolute top-4 left-4 z-10 px-3 py-1 text-xs font-semibold text-white rounded-full" style="background-color: #9D6E3D;">10% Off</span>
                    <img src="{{ asset('assets/imgs/product/product6.png') }}" alt="Chair Pillow"
                        class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="px-5 pb-5 pt-3 border-t border-gray-100">
                    <p class="text-xs font-semibold uppercase tracking-widest mb-1" style="color: #9D6E3D;">Pharma Product</p>
                    <h3 class="font-black text-gray-900 text-base mb-2">Chair Pillow</h3>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-400 text-sm line-through">$20.00</span>
                        <span class="font-bold text-gray-900 text-sm">$34.00</span>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="group cursor-pointer border border-gray-100 hover:shadow-lg transition-shadow duration-300">
                <div class="relative overflow-hidden p-6 bg-white" style="height: 240px;">
                    <span class="absolute top-4 left-4 z-10 px-3 py-1 text-xs font-semibold text-white rounded-full" style="background-color: #9D6E3D;">10% Off</span>
                    <img src="{{ asset('assets/imgs/product/product7.png') }}" alt="Curaskin Lipgel"
                        class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="px-5 pb-5 pt-3 border-t border-gray-100">
                    <p class="text-xs font-semibold uppercase tracking-widest mb-1" style="color: #9D6E3D;">Skin Product</p>
                    <h3 class="font-black text-gray-900 text-base mb-2">Curaskin Lipgel</h3>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-400 text-sm line-through">$12.00</span>
                        <span class="font-bold text-gray-900 text-sm">$8.50</span>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="group cursor-pointer border border-gray-100 hover:shadow-lg transition-shadow duration-300">
                <div class="relative overflow-hidden p-6 bg-white" style="height: 240px;">
                    <span class="absolute top-4 left-4 z-10 px-3 py-1 text-xs font-semibold text-white rounded-full" style="background-color: #9D6E3D;">10% Off</span>
                    <img src="{{ asset('assets/imgs/product/product8.png') }}" alt="Leather Chair"
                        class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="px-5 pb-5 pt-3 border-t border-gray-100">
                    <p class="text-xs font-semibold uppercase tracking-widest mb-1" style="color: #9D6E3D;">Accessories</p>
                    <h3 class="font-black text-gray-900 text-base mb-2">Leather Chair</h3>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-400 text-sm line-through">$80.00</span>
                        <span class="font-bold text-gray-900 text-sm">$66.00</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Pagination -->
        <div class="flex items-center justify-center gap-2">
            <button class="w-10 h-10 rounded-full flex items-center justify-center text-sm font-bold text-white transition-colors" style="background-color: #9D6E3D;">
                1
            </button>
            <button class="w-10 h-10 rounded-full flex items-center justify-center text-sm font-semibold text-gray-600 border border-gray-200 hover:border-gray-400 transition-colors">
                2
            </button>
            <button class="w-10 h-10 rounded-full flex items-center justify-center text-sm font-semibold text-gray-600 border border-gray-200 hover:border-gray-400 transition-colors">
                3
            </button>
            <button class="w-10 h-10 rounded-full flex items-center justify-center text-gray-600 border border-gray-200 hover:border-gray-400 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>

    </div>
</section>
@endsection
