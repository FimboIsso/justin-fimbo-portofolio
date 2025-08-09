<!-- Navigation -->
<nav class="fixed top-0 left-0 right-0 glass-nav z-50 transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('portfolio.index') }}" class="text-2xl font-bold gradient-text">
                    Justin Fimbo
                </a>
            </div>

            <!-- Enhanced Desktop Navigation -->
            <div class="hidden lg:block">
                <div class="flex items-center space-x-8">
                    <a href="{{ request()->routeIs('portfolio.index') ? '#home' : route('portfolio.index') . '#home' }}"
                        class="nav-link text-gray-700 hover:text-black px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300 relative group">
                        <i class="fas fa-home mr-2 text-xs"></i>
                        {{ __('messages.Accueil') }}
                    </a>
                    <a href="{{ request()->routeIs('portfolio.index') ? '#about' : route('portfolio.index') . '#about' }}"
                        class="nav-link text-gray-700 hover:text-black px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300 relative group">
                        <i class="fas fa-user mr-2 text-xs"></i>
                        {{ __('messages.À propos') }}
                    </a>
                    <a href="{{ request()->routeIs('portfolio.index') ? '#skills' : route('portfolio.index') . '#skills' }}"
                        class="nav-link text-gray-700 hover:text-black px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300 relative group">
                        <i class="fas fa-code mr-2 text-xs"></i>
                        {{ __('messages.Compétences') }}
                    </a>
                    <a href="{{ request()->routeIs('portfolio.index') ? '#projects' : route('portfolio.index') . '#projects' }}"
                        class="nav-link text-gray-700 hover:text-black px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300 relative group">
                        <i class="fas fa-laptop-code mr-2 text-xs"></i>
                        {{ __('messages.Projets') }}
                    </a>
                    <a href="{{ request()->routeIs('portfolio.index') ? '#experience' : route('portfolio.index') . '#experience' }}"
                        class="nav-link text-gray-700 hover:text-black px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300 relative group">
                        <i class="fas fa-briefcase mr-2 text-xs"></i>
                        {{ __('messages.Expérience') }}
                    </a>
                    <a href="{{ route('blog.index') }}"
                        class="nav-link {{ request()->routeIs('blog.*') ? 'active' : '' }} text-gray-700 hover:text-black px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300 relative group">
                        <i class="fas fa-blog mr-2 text-xs"></i>
                        {{ __('messages.Blog') }}
                    </a>
                    <a href="{{ request()->routeIs('portfolio.index') ? '#contact' : route('portfolio.index') . '#contact' }}"
                        class="bg-black text-white hover:bg-gray-800 px-4 py-2 rounded-full text-sm font-medium transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        <i class="fas fa-envelope mr-2 text-xs"></i>
                        {{ __('messages.Contact') }}
                    </a>
                </div>
            </div>

            <!-- Medium Screen Navigation -->
            <div class="hidden md:block lg:hidden">
                <div class="flex items-center space-x-4">
                    <a href="{{ request()->routeIs('portfolio.index') ? '#home' : route('portfolio.index') . '#home' }}"
                        class="nav-link text-gray-700 hover:text-black px-2 py-2 rounded-lg text-sm font-medium transition-all duration-300">
                        <i class="fas fa-home"></i>
                    </a>
                    <a href="{{ request()->routeIs('portfolio.index') ? '#about' : route('portfolio.index') . '#about' }}"
                        class="nav-link text-gray-700 hover:text-black px-2 py-2 rounded-lg text-sm font-medium transition-all duration-300">
                        <i class="fas fa-user"></i>
                    </a>
                    <a href="{{ request()->routeIs('portfolio.index') ? '#skills' : route('portfolio.index') . '#skills' }}"
                        class="nav-link text-gray-700 hover:text-black px-2 py-2 rounded-lg text-sm font-medium transition-all duration-300">
                        <i class="fas fa-code"></i>
                    </a>
                    <a href="{{ request()->routeIs('portfolio.index') ? '#projects' : route('portfolio.index') . '#projects' }}"
                        class="nav-link text-gray-700 hover:text-black px-2 py-2 rounded-lg text-sm font-medium transition-all duration-300">
                        <i class="fas fa-laptop-code"></i>
                    </a>
                    <a href="{{ route('blog.index') }}"
                        class="nav-link {{ request()->routeIs('blog.*') ? 'active' : '' }} text-gray-700 hover:text-black px-2 py-2 rounded-lg text-sm font-medium transition-all duration-300">
                        <i class="fas fa-blog"></i>
                    </a>
                    <a href="{{ request()->routeIs('portfolio.index') ? '#contact' : route('portfolio.index') . '#contact' }}"
                        class="bg-black text-white hover:bg-gray-800 px-3 py-2 rounded-full text-sm font-medium transition-all duration-300">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>

            <!-- Language Switcher & Mobile Menu Button -->
            <div class="flex items-center space-x-4">
                <!-- Enhanced Language Switcher -->
                <button id="language-toggle"
                    class="glass-card text-gray-700 hover:text-black p-3 rounded-full transition-all duration-300   flex items-center space-x-2">
                    <i class="fas fa-globe text-lg"></i>
                    <span class="text-sm font-medium">{{ strtoupper(app()->getLocale()) }}</span>
                </button>

                <!-- Enhanced Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button"
                        class="text-gray-700 hover:text-black p-2 rounded-lg transition-all duration-300">
                        <div class="w-6 h-6 flex flex-col justify-center space-y-1">
                            <span
                                class="bg-current block h-0.5 w-6 rounded-sm transition-all duration-300 ease-out"></span>
                            <span
                                class="bg-current block h-0.5 w-6 rounded-sm transition-all duration-300 ease-out"></span>
                            <span
                                class="bg-current block h-0.5 w-6 rounded-sm transition-all duration-300 ease-out"></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="md:hidden hidden bg-white/95 backdrop-blur-lg border-t border-gray-200 shadow-lg">
        <div class="px-4 pt-4 pb-4 space-y-2">
            <a href="{{ request()->routeIs('portfolio.index') ? '#home' : route('portfolio.index') . '#home' }}"
                class="mobile-nav-link text-gray-700 hover:text-black hover:bg-gray-50 flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200">
                <i class="fas fa-home mr-3 text-gray-500 w-4"></i>
                {{ __('messages.Accueil') }}
            </a>
            <a href="{{ request()->routeIs('portfolio.index') ? '#about' : route('portfolio.index') . '#about' }}"
                class="mobile-nav-link text-gray-700 hover:text-black hover:bg-gray-50 flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200">
                <i class="fas fa-user mr-3 text-gray-500 w-4"></i>
                {{ __('messages.À propos') }}
            </a>
            <a href="{{ request()->routeIs('portfolio.index') ? '#skills' : route('portfolio.index') . '#skills' }}"
                class="mobile-nav-link text-gray-700 hover:text-black hover:bg-gray-50 flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200">
                <i class="fas fa-code mr-3 text-gray-500 w-4"></i>
                {{ __('messages.Compétences') }}
            </a>
            <a href="{{ request()->routeIs('portfolio.index') ? '#projects' : route('portfolio.index') . '#projects' }}"
                class="mobile-nav-link text-gray-700 hover:text-black hover:bg-gray-50 flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200">
                <i class="fas fa-laptop-code mr-3 text-gray-500 w-4"></i>
                {{ __('messages.Projets') }}
            </a>
            <a href="{{ request()->routeIs('portfolio.index') ? '#experience' : route('portfolio.index') . '#experience' }}"
                class="mobile-nav-link text-gray-700 hover:text-black hover:bg-gray-50 flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200">
                <i class="fas fa-briefcase mr-3 text-gray-500 w-4"></i>
                {{ __('messages.Expérience') }}
            </a>
            <a href="{{ route('blog.index') }}"
                class="mobile-nav-link {{ request()->routeIs('blog.*') ? 'active' : '' }} text-gray-700 hover:text-black hover:bg-gray-50 flex items-center px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200">
                <i class="fas fa-blog mr-3 text-gray-500 w-4"></i>
                {{ __('messages.Blog') }}
            </a>
            <div class="pt-2 border-t border-gray-200">
                <a href="{{ request()->routeIs('portfolio.index') ? '#contact' : route('portfolio.index') . '#contact' }}"
                    class="mobile-nav-link bg-black text-white hover:bg-gray-800 flex items-center justify-center px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200">
                    <i class="fas fa-envelope mr-2"></i>
                    {{ __('messages.Contact') }}
                </a>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Active navigation link */
    .nav-link.active {
        color: #000000 !important;
        background-color: rgba(0, 0, 0, 0.05);
        border-radius: 8px;
    }

    .mobile-nav-link.active {
        color: #000000 !important;
        background-color: rgba(0, 0, 0, 0.05);
    }

    /* Navbar background on scroll */
    .navbar-scrolled {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        box-shadow: 0 1px 20px rgba(0, 0, 0, 0.1);
    }

    /* Hover effects for nav links */
    .nav-link:hover {
        background-color: rgba(0, 0, 0, 0.05);
        border-radius: 8px;
        transform: translateY(-1px);
    }

    /* Mobile menu animation */
    #mobile-menu {
        transform: translateY(-10px);
        opacity: 0;
        transition: all 0.2s ease-out;
    }

    #mobile-menu.show {
        transform: translateY(0);
        opacity: 1;
    }

    /* Smooth glass effect */
    .glass-nav {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Active navigation link highlighting
        const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');
        const sections = document.querySelectorAll('section[id]');

        function updateActiveLink() {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveLink);
        updateActiveLink(); // Initial call

        // Navbar background on scroll
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });

        // Close mobile menu when clicking on a link
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileNavLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
            });
        });
    });
</script>
