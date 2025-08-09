<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <title>@yield('title', 'Justin Fimbo - Développeur & Entrepreneur')</title>
    <meta name="description" content="@yield('description', 'Développeur informatique confirmé et PDG d\'UZASHOP, expert Laravel/Flutter/Java. Créateur d\'ERP multisectoriels adaptés au contexte africain.')">
    <meta name="keywords" content="@yield('keywords', 'Justin Fimbo, développeur, Laravel, Flutter, Java, UZASHOP, ERP, RDC, Beni, développement web, applications mobiles')">
    <meta name="author" content="Justin Fimbo">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'Justin Fimbo - Développeur & Entrepreneur')">
    <meta property="og:description" content="@yield('og_description', 'Développeur informatique confirmé et PDG d\'UZASHOP, expert Laravel/Flutter/Java.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('images/justin-profile.jpg'))">
    <meta property="og:site_name" content="Justin Fimbo Portfolio">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Justin Fimbo - Développeur & Entrepreneur')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Développeur informatique confirmé et PDG d\'UZASHOP, expert Laravel/Flutter/Java.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/justin-profile.jpg'))">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Additional Head Content -->
    @stack('head')
</head>

<body class="font-sans antialiased bg-white text-gray-900">
    <!-- Navigation -->
    @include('components.navigation')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Language Switcher Modal -->
    @include('components.language-modal')

    <!-- Back to Top Button -->
    <button id="backToTop"
        class="fixed bottom-6 right-6 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg transition-all duration-300 transform scale-0 z-50">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- JavaScript -->
    <script>
        // Smooth scrolling for navigation links
        document.addEventListener('DOMContentLoaded', function() {
            // Intersection Observer for fade-in animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                    }
                });
            }, observerOptions);

            // Observe all elements with fade-in-up class
            document.querySelectorAll('.fade-in-up').forEach(el => {
                observer.observe(el);
            });

            // Back to top button functionality
            const backToTopButton = document.getElementById('backToTop');

            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.remove('scale-0');
                    backToTopButton.classList.add('scale-100');
                } else {
                    backToTopButton.classList.remove('scale-100');
                    backToTopButton.classList.add('scale-0');
                }
            });

            backToTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');

                    // Toggle hamburger animation
                    const spans = mobileMenuButton.querySelectorAll('span');
                    spans.forEach(span => span.classList.toggle('rotate-45'));
                });
            }

            // Language switcher
            const languageToggle = document.getElementById('language-toggle');
            const languageModal = document.getElementById('language-modal');

            if (languageToggle && languageModal) {
                languageToggle.addEventListener('click', function() {
                    languageModal.classList.toggle('hidden');
                });

                // Close modal when clicking outside
                languageModal.addEventListener('click', function(e) {
                    if (e.target === languageModal) {
                        languageModal.classList.add('hidden');
                    }
                });
            }
        });
    </script>

    <!-- Additional Body Scripts -->
    @stack('scripts')
</body>

</html>
