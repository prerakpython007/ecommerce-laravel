<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name'))</title>
    
    <!-- Vite CSS -->
    @vite(['resources/css/app.css'])
    
    @stack('styles')
</head>
<body>
    @include('partials.header')
    
    <main>
        @include('partials.hero')
        
        @yield('content')
    </main>
    
    @include('partials.footer')
    
    <!-- Vite JS -->
    @vite(['resources/js/app.js'])
    
    <!-- Custom JS from reference site -->
    <script src="{{ asset('js/main.js') }}"></script>
    
    @stack('scripts')
</body>
</html>
