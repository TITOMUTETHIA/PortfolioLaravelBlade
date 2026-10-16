<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Primary SEO Meta Tags -->
    <title>@yield('title', 'Tito Mutethia | Aspiring Software Developer Portfolio')</title>
    <meta name="title" content="Tito Mutethia | Developer Portfolio">
    <meta name="description" content="Portfolio of Tito Mutethia, an aspiring full-stack software developer showcasing projects, skills, and experience in web development.">
    <meta name="keywords" content="Tito Mutethia, software developer, portfolio, web development, programming, projects, skills, experience">
    <meta name="author" content="Tito Mutethia">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#07111F">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Tito Mutethia | Developer">
    <meta property="og:description" content="Explore projects, technical skills, and experience of Tito Mutethia, aspiring full-stack software engineer.">
    <meta property="og:image" content="{{ asset('images/profile.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Tito Mutethia | Developer">
    <meta property="twitter:description" content="Explore projects, technical skills, and experience of Tito Mutethia, aspiring full-stack software engineer.">
    <meta property="twitter:image" content="{{ asset('images/profile.png') }}">

    <!-- Google Fonts: Plus Jakarta Sans & JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Custom Portfolio Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    
    @stack('styles')
</head>
<body>

    {{-- Main Sticky Navigation --}}
    @include('partials.navbar')

    {{-- Main Content Sections --}}
    <main id="main-content">
        @yield('content')
    </main>

    {{-- Footer & Back to top --}}
    @include('partials.footer')

    <!-- Custom Portfolio Interactions -->
    <script src="{{ asset('js/portfolio.js') }}"></script>
    
    @stack('scripts')
</body>
</html>
