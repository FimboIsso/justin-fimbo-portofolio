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

            <!-- Desktop Navigation -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="{{ request()->routeIs('portfolio.index') ? '#home' : route('portfolio.index') . '#home' }}"
                        class="nav-link text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200">
                        {{ __('messages.Accueil') }}
                    </a>
                    <a href="{{ request()->routeIs('portfolio.index') ? '#about' : route('portfolio.index') . '#about' }}"
                        class="nav-link text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200">
                        {{ __('messages.À propos') }}
                    </a>
                    <a href="{{ request()->routeIs('portfolio.index') ? '#skills' : route('portfolio.index') . '#skills' }}"
                        class="nav-link text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200">
                        {{ __('messages.Compétences') }}
                    </a>
                    <a href="{{ request()->routeIs('portfolio.index') ? '#projects' : route('portfolio.index') . '#projects' }}"
                        class="nav-link text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200">
                        {{ __('messages.Projets') }}
                    </a>
                    <a href="{{ request()->routeIs('portfolio.index') ? '#experience' : route('portfolio.index') . '#experience' }}"
                        class="nav-link text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200">
                        {{ __('messages.Expérience') }}
                    </a>
                    <a href="{{ route('blog.index') }}"
                        class="nav-link {{ request()->routeIs('blog.*') ? 'active' : '' }} text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200">
                        {{ __('messages.Blog') }}
                    </a>
                    <a href="{{ request()->routeIs('portfolio.index') ? '#contact' : route('portfolio.index') . '#contact' }}"
                        class="nav-link text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200">
                        {{ __('messages.Contact') }}
                    </a>
                </div>
            </div>

            <!-- Language Switcher & Mobile Menu Button -->
            <div class="flex items-center space-x-4">
                <!-- Language Switcher -->
                <button id="language-toggle"
                    class="text-gray-700 hover:text-blue-600 p-2 rounded-md transition-colors duration-200">
                    <i class="fas fa-globe"></i>
                    <span class="ml-1 text-sm">{{ strtoupper(app()->getLocale()) }}</span>
                </button>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button"
                        class="text-gray-700 hover:text-blue-600 p-2 rounded-md transition-colors duration-200">
                        <div class="w-6 h-6 flex flex-col justify-center">
                            <span class="bg-current block h-0.5 w-6 rounded-sm transition-all duration-300"></span>
                            <span class="bg-current block h-0.5 w-6 rounded-sm transition-all duration-300 mt-1"></span>
                            <span class="bg-current block h-0.5 w-6 rounded-sm transition-all duration-300 mt-1"></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-200">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ request()->routeIs('portfolio.index') ? '#home' : route('portfolio.index') . '#home' }}"
                class="mobile-nav-link text-gray-700 hover:text-blue-600 block px-3 py-2 text-base font-medium transition-colors duration-200">
                {{ __('messages.Accueil') }}
            </a>
            <a href="{{ request()->routeIs('portfolio.index') ? '#about' : route('portfolio.index') . '#about' }}"
                class="mobile-nav-link text-gray-700 hover:text-blue-600 block px-3 py-2 text-base font-medium transition-colors duration-200">
                {{ __('messages.À propos') }}
            </a>
            <a href="{{ request()->routeIs('portfolio.index') ? '#skills' : route('portfolio.index') . '#skills' }}"
                class="mobile-nav-link text-gray-700 hover:text-blue-600 block px-3 py-2 text-base font-medium transition-colors duration-200">
                {{ __('messages.Compétences') }}
            </a>
            <a href="{{ request()->routeIs('portfolio.index') ? '#projects' : route('portfolio.index') . '#projects' }}"
                class="mobile-nav-link text-gray-700 hover:text-blue-600 block px-3 py-2 text-base font-medium transition-colors duration-200">
                {{ __('messages.Projets') }}
            </a>
            <a href="{{ request()->routeIs('portfolio.index') ? '#experience' : route('portfolio.index') . '#experience' }}"
                class="mobile-nav-link text-gray-700 hover:text-blue-600 block px-3 py-2 text-base font-medium transition-colors duration-200">
                {{ __('messages.Expérience') }}
            </a>
            <a href="{{ route('blog.index') }}"
                class="mobile-nav-link {{ request()->routeIs('blog.*') ? 'active' : '' }} text-gray-700 hover:text-blue-600 block px-3 py-2 text-base font-medium transition-colors duration-200">
                {{ __('messages.Blog') }}
            </a>
            <a href="{{ request()->routeIs('portfolio.index') ? '#contact' : route('portfolio.index') . '#contact' }}"
                class="mobile-nav-link text-gray-700 hover:text-blue-600 block px-3 py-2 text-base font-medium transition-colors duration-200">
                {{ __('messages.Contact') }}
            </a>
        </div>
    </div>
</nav>

<style>
    /* Active navigation link */
    .nav-link.active,
    .mobile-nav-link.active {
        color: #2563eb;
        position: relative;
    }

    .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 30px;
        height: 2px;
        background: #2563eb;
        border-radius: 1px;
    }

    /* Navbar background on scroll */
    .navbar-scrolled {
        background: rgba(255, 255, 255, 0.98);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    /* Hover underline for desktop nav */
    .nav-link {
        position: relative;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 2px;
        background: #2563eb;
        transition: width 0.25s ease;
        border-radius: 1px;
    }

    .nav-link:hover::after {
        width: 30px;
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
