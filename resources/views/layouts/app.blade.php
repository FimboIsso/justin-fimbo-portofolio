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
    <!-- Loading Screen -->
    <div class="loader" id="loader">
        <div class="loader-spinner"></div>
        <p class="text-white mt-4 text-lg font-semibold">{{ __('messages.Chargement...') }}</p>
    </div>

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
            // Legacy fade-in animation (will be handled by advanced observer below)

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

            // Advanced Scroll Animations with Intersection Observer
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            // Create multiple observers for different animation types
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        // Optional: Stop observing after animation
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe all reveal elements
            document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale, .reveal-flip').forEach(
                el => {
                    revealObserver.observe(el);
                });

            // Staggered animations for skill cards
            const staggerObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const delay = parseInt(entry.target.style.getPropertyValue('--i') || 0) *
                            150;
                        setTimeout(() => {
                            entry.target.classList.add('active');
                        }, delay);
                        staggerObserver.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe staggered elements
            document.querySelectorAll('.stagger-animation, [style*="--i"]').forEach(el => {
                staggerObserver.observe(el);
            });

            // Enhanced Magnetic Effect for Interactive Elements
            document.querySelectorAll('.magnetic').forEach(element => {
                element.addEventListener('mousemove', (e) => {
                    const rect = element.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    const deltaX = (x - centerX) / centerX;
                    const deltaY = (y - centerY) / centerY;

                    element.style.transform =
                        `translate(${deltaX * 10}px, ${deltaY * 10}px) scale(1.05)`;
                });

                element.addEventListener('mouseleave', () => {
                    element.style.transform = 'translate(0px, 0px) scale(1)';
                });
            });

            // Parallax Effect for Floating Elements
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const parallax = document.querySelectorAll('.parallax-element');

                parallax.forEach(element => {
                    const speed = element.dataset.speed || 0.5;
                    const yPos = -(scrolled * speed);
                    element.style.transform = `translate3d(0, ${yPos}px, 0)`;
                });
            });

            // Advanced Tilt Effect for 3D Cards
            document.querySelectorAll('.tilt-effect').forEach(element => {
                element.addEventListener('mousemove', (e) => {
                    const rect = element.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    const rotateX = (y - centerY) / 4;
                    const rotateY = (centerX - x) / 4;

                    element.style.transform =
                        `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.05, 1.05, 1.05)`;
                });

                element.addEventListener('mouseleave', () => {
                    element.style.transform =
                        'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
                });
            });

            // Loading Animation
            const loader = document.querySelector('.loader');
            if (loader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        loader.classList.add('hidden');
                    }, 500);
                });
            }

            // Smooth reveal on page load
            setTimeout(() => {
                document.querySelectorAll('.fade-in-up:not(.animate)').forEach((el, index) => {
                    setTimeout(() => {
                        el.classList.add('animate');
                    }, index * 100);
                });
            }, 300);
        });
    </script>

    <!-- Additional Body Scripts -->
    @stack('scripts')
</body>

</html>
