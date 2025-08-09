@extends('layouts.app')

@section('title', 'Justin Fimbo - Développeur & Entrepreneur')
@section('description',
    'Portfolio de Justin Fimbo, développeur informatique confirmé et PDG d\'UZASHOP. Expert Laravel,
    Flutter, Java spécialisé dans les ERP africains.')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Ultra Modern Animated Background -->
        <div class="absolute inset-0 aurora-bg"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-black/20 via-transparent to-black/10"></div>

        <!-- Simplified Floating Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <!-- Subtle Geometric Shapes -->
            <div class="absolute top-1/4 left-1/4 w-16 h-16 border border-white/20 rotate-45 float-animation"></div>
            <div class="absolute top-3/4 right-1/4 w-12 h-12 border border-white/20 rotate-12 float-animation"
                style="animation-delay: -4s;"></div>
            <div class="absolute bottom-1/3 right-10 w-20 h-20 bg-white/5 rounded-full float-animation"
                style="animation-delay: -2s;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in-up">
                <!-- Enhanced Profile Picture -->
                <div class="mb-12 flex justify-center">
                    <div class="relative">
                        <!-- Simplified Glowing Ring -->
                        <div
                            class="absolute -inset-4 bg-gradient-to-r from-black via-gray-600 to-black rounded-full blur-lg opacity-30">
                        </div>

                        <!-- Main Profile Container -->
                        <div
                            class="relative w-48 h-48 md:w-56 md:h-56 rounded-full overflow-hidden border-4 border-white shadow-2xl transition-transform duration-300 hover:scale-105">
                            <img src="{{ asset('images/justin-profile.svg') }}" alt="Justin Fimbo"
                                class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                        </div>

                        <!-- Enhanced Status Badge -->
                        <div
                            class="absolute -bottom-3 -right-3 w-18 h-18 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full border-4 border-white flex items-center justify-center shadow-xl pulse-glow hover-glow magnetic">
                            <i class="fas fa-check text-white text-xl"></i>
                            <div
                                class="absolute inset-0 rounded-full bg-gradient-to-r from-green-400 to-emerald-500 blur-md opacity-50">
                            </div>
                        </div>

                        <!-- Enhanced Floating Tech Icons -->
                        <div class="absolute -top-6 -left-6 w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center text-white text-lg float-animation hover-glow magnetic electric-border"
                            style="animation-delay: -1s;">
                            <i class="fab fa-laravel"></i>
                        </div>
                        <div class="absolute -top-6 -right-6 w-12 h-12 bg-gradient-to-r from-cyan-500 to-cyan-600 rounded-full flex items-center justify-center text-white text-lg float-animation hover-glow magnetic electric-border"
                            style="animation-delay: -2s;">
                            <i class="fab fa-flutter"></i>
                        </div>
                        <div class="absolute -bottom-6 -left-6 w-12 h-12 bg-gradient-to-r from-orange-500 to-orange-600 rounded-full flex items-center justify-center text-white text-lg float-animation hover-glow magnetic electric-border"
                            style="animation-delay: -3s;">
                            <i class="fab fa-java"></i>
                        </div>
                        <div class="absolute top-1/2 -left-8 w-10 h-10 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center text-white text-sm float-animation hover-glow magnetic"
                            style="animation-delay: -4s; transform: translateY(-50%);">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="absolute top-1/2 -right-8 w-10 h-10 bg-gradient-to-r from-pink-500 to-pink-600 rounded-full flex items-center justify-center text-white text-sm float-animation hover-glow magnetic"
                            style="animation-delay: -5s; transform: translateY(-50%);">
                            <i class="fas fa-rocket"></i>
                        </div>
                    </div>
                </div>

                <!-- Simplified Main Title -->
                <h1 class="text-4xl md:text-6xl lg:text-8xl font-bold mb-8">
                    <span class="block text-white/90 font-light">{{ __('messages.Salut, je suis') }}</span>
                    <span class="block text-white font-black">Justin Fimbo</span>
                </h1>

                <!-- Simplified Subtitle -->
                <p class="text-xl md:text-3xl lg:text-4xl text-white/90 mb-10 max-w-4xl mx-auto font-medium">
                    {{ __('messages.Développeur & Entrepreneur innovant') }}
                </p>

                <!-- Enhanced Description with Typewriter Effect -->
                <div class="text-lg md:text-xl text-white/90 mb-14 max-w-5xl mx-auto fade-in-up"
                    style="animation-delay: 0.7s;">
                    <div class="glass-morphism p-6 rounded-2xl backdrop-blur-xl">
                        <p class="text-matrix">
                            {{ __('Expert en Laravel, Flutter & Java | PDG d\'UZASHOP | Créateur d\'ERP multisectoriels adaptés au contexte africain | Basé à Beni, RDC') }}
                        </p>
                    </div>
                </div>

                <!-- Enhanced CTA Buttons -->
                <div class="flex flex-col sm:flex-row justify-center items-center space-y-6 sm:space-y-0 sm:space-x-8 scale-in"
                    style="animation-delay: 0.9s;">
                    <a href="{{ asset('files/Justin_Fimbo_CV.pdf') }}" download
                        class="btn-modern inline-flex items-center text-lg px-8 py-4 hover-lift magnetic">
                        <i class="fas fa-download mr-3 text-xl"></i>
                        {{ __('messages.Télécharger CV') }}
                    </a>
                    <a href="#contact"
                        class="btn-glass px-8 py-4 text-white inline-flex items-center text-lg hover-glow magnetic">
                        <i class="fas fa-envelope mr-3 text-xl"></i>
                        {{ __('messages.Me contacter') }}
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-16 max-w-4xl mx-auto">
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-blue-600 mb-2">5+</div>
                        <div class="text-sm md:text-base text-gray-600">{{ __('messages.Années d\'expérience') }}</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-blue-600 mb-2">50+</div>
                        <div class="text-sm md:text-base text-gray-600">{{ __('messages.Projets réalisés') }}</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-blue-600 mb-2">20+</div>
                        <div class="text-sm md:text-base text-gray-600">{{ __('messages.Clients satisfaits') }}</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-blue-600 mb-2">1</div>
                        <div class="text-sm md:text-base text-gray-600">{{ __('messages.Entreprise créée') }}</div>
                    </div>
                </div>
            </div>

            <!-- Scroll indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                <a href="#about" class="text-gray-400 hover:text-blue-600 transition-colors duration-200">
                    <i class="fas fa-chevron-down text-2xl"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="fade-in-up">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        {{ __('messages.À propos de moi') }}
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        {{ __('messages.Découvrez mon parcours et ma passion pour le développement informatique') }}
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Text Content -->
                    <div class="space-y-6">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">
                            {{ __('messages.Développeur informatique confirmé & Entrepreneur') }}
                        </h3>

                        <p class="text-gray-600 leading-relaxed">
                            {{ __('messages.Passionné par la technologie depuis mon plus jeune âge, j\'ai développé mes compétences en développement web et mobile pour devenir un expert reconnu en Laravel, Flutter et Java. Basé à Beni en République Démocratique du Congo, j\'ai fondé UZASHOP avec la vision de créer des solutions technologiques adaptées au contexte africain.') }}
                        </p>

                        <p class="text-gray-600 leading-relaxed">
                            {{ __('messages.Mon expertise se concentre sur la création d\'ERP multisectoriels qui répondent aux besoins spécifiques des entreprises africaines. De la santé à l\'hôtellerie, en passant par l\'agriculture, mes solutions intègrent la synchronisation hors ligne et des interfaces utilisateur intuitives pour maximiser l\'efficacité opérationnelle.') }}
                        </p>

                        <!-- Key Points -->
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                <span
                                    class="text-gray-700">{{ __('messages.Expert Laravel & Flutter avec 5+ années d\'expérience') }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                <span class="text-gray-700">{{ __('messages.PDG et fondateur d\'UZASHOP') }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                <span class="text-gray-700">{{ __('messages.Spécialiste des ERP multisectoriels') }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                <span
                                    class="text-gray-700">{{ __('messages.Solutions adaptées au contexte africain') }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                <span
                                    class="text-gray-700">{{ __('messages.Specialiste en Système d\'Information Foncière') }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                <span
                                    class="text-gray-700">{{ __('messages.Specialiste en Système d\'Information Géographique') }}</span>
                            </div>
                        </div>

                        <!-- Personal Info -->
                        <div class="bg-gray-50 p-6 rounded-lg mt-8">
                            <h4 class="font-semibold text-gray-900 mb-4">{{ __('messages.Informations personnelles') }}
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div>
                                    <span class="font-medium text-gray-700">{{ __('messages.Nom:') }}</span>
                                    <span class="text-gray-600 ml-2">Justin Fimbo</span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-700">{{ __('messages.Localisation:') }}</span>
                                    <span class="text-gray-600 ml-2">{{ __('messages.location_beni') }}</span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-700">{{ __('messages.Email:') }}</span>
                                    <span class="text-gray-600 ml-2">fimbo.isso@uzashop.co</span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-700">{{ __('messages.Entreprise:') }}</span>
                                    <span class="text-gray-600 ml-2">UZASHOP</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Visual Content -->
                    <div class="relative">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="space-y-6">
                                <div class="card-3d cyber-border-animated hover-tilt magnetic">
                                    <div class="content p-6">
                                        <div
                                            class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full mb-4 hover-glow">
                                            <i class="fas fa-code text-white text-2xl"></i>
                                        </div>
                                        <h4 class="font-bold text-gray-900 mb-3 text-lg">
                                            {{ __('messages.Développement') }}</h4>
                                        <p class="text-gray-600 text-sm leading-relaxed">
                                            {{ __('messages.Applications web & mobiles modernes') }}</p>
                                    </div>
                                </div>
                                <div class="card-3d gradient-border-animated hover-tilt magnetic">
                                    <div class="content p-6">
                                        <div
                                            class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-orange-500 to-orange-600 rounded-full mb-4 hover-glow">
                                            <i class="fas fa-chart-line text-white text-2xl"></i>
                                        </div>
                                        <h4 class="font-bold text-gray-900 mb-3 text-lg">{{ __('messages.Business') }}
                                        </h4>
                                        <p class="text-gray-600 text-sm leading-relaxed">
                                            {{ __('messages.Solutions ERP sur mesure') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-6 mt-8">
                                <div class="card-3d glass-morphism hover-tilt magnetic">
                                    <div class="p-6">
                                        <div
                                            class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-full mb-4 hover-glow">
                                            <i class="fas fa-mobile-alt text-white text-2xl"></i>
                                        </div>
                                        <h4 class="font-bold text-gray-900 mb-3 text-lg">{{ __('messages.Mobile') }}</h4>
                                        <p class="text-gray-600 text-sm leading-relaxed">
                                            {{ __('messages.Apps Flutter natives') }}</p>
                                    </div>
                                </div>
                                <div class="card-3d neumorphism hover-tilt magnetic">
                                    <div class="p-6">
                                        <div
                                            class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full mb-4 hover-glow">
                                            <i class="fas fa-rocket text-white text-2xl"></i>
                                        </div>
                                        <h4 class="font-bold text-gray-900 mb-3 text-lg">{{ __('messages.Innovation') }}
                                        </h4>
                                        <p class="text-gray-600 text-sm leading-relaxed">
                                            {{ __('messages.Technologies de pointe') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="fade-in-up">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        {{ __('messages.Mes Compétences') }}
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        {{ __('messages.Technologies et outils que je maîtrise pour créer des solutions innovantes') }}
                    </p>
                </div>

                <!-- Enhanced Skills Grid -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mb-16">
                    <!-- Laravel -->
                    <div class="card-3d glass-morphism text-center hover-tilt magnetic reveal-scale" style="--i: 1">
                        <div class="p-6">
                            <div
                                class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-red-500 to-red-600 rounded-2xl flex items-center justify-center hover-glow electric-border">
                                <i class="fab fa-laravel text-white text-3xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-3 text-lg">Laravel</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">{{ __('messages.Framework PHP') }}</p>
                            <div class="mt-4 w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-red-500 to-red-600 h-2 rounded-full" style="width: 95%">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Flutter -->
                    <div class="card-3d gradient-border-animated text-center hover-tilt magnetic reveal-scale"
                        style="--i: 2">
                        <div class="content p-6">
                            <div
                                class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center hover-glow electric-border">
                                <i class="fab fa-flutter text-white text-3xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-3 text-lg">Flutter</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">{{ __('messages.Apps mobiles') }}</p>
                            <div class="mt-4 w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2 rounded-full"
                                    style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Java -->
                    <div class="card-3d cyber-border text-center hover-tilt magnetic reveal-scale" style="--i: 3">
                        <div class="cyber-border-content p-6">
                            <div
                                class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center hover-glow electric-border">
                                <i class="fab fa-java text-white text-3xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-3 text-lg">Java</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">{{ __('messages.Android natif') }}</p>
                            <div class="mt-4 w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-orange-500 to-orange-600 h-2 rounded-full"
                                    style="width: 85%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- API REST -->
                    <div class="card-3d neumorphism text-center hover-tilt magnetic reveal-scale" style="--i: 4">
                        <div class="p-6">
                            <div
                                class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl flex items-center justify-center hover-glow electric-border">
                                <i class="fas fa-code text-white text-3xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-3 text-lg">API REST</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">{{ __('messages.Services web') }}</p>
                            <div class="mt-4 w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-green-500 to-green-600 h-2 rounded-full"
                                    style="width: 92%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- MySQL -->
                    <div class="card-3d glass-morphism text-center hover-tilt magnetic reveal-scale" style="--i: 5">
                        <div class="p-6">
                            <div
                                class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center hover-glow electric-border">
                                <i class="fas fa-database text-white text-3xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-3 text-lg">MySQL</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">{{ __('messages.Base de données') }}</p>
                            <div class="mt-4 w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-blue-500 to-cyan-500 h-2 rounded-full"
                                    style="width: 88%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Git -->
                    <div class="card-3d neumorphism text-center hover-tilt magnetic reveal-scale" style="--i: 6">
                        <div class="p-6">
                            <div
                                class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-gray-600 to-gray-700 rounded-2xl flex items-center justify-center hover-glow electric-border">
                                <i class="fab fa-git-alt text-white text-3xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-3 text-lg">Git</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">{{ __('messages.Contrôle de version') }}</p>
                            <div class="mt-4 w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-gray-600 to-gray-700 h-2 rounded-full"
                                    style="width: 93%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Docker -->
                    <div class="card-3d cyber-border-animated text-center hover-tilt magnetic reveal-scale"
                        style="--i: 7">
                        <div class="content p-6">
                            <div
                                class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl flex items-center justify-center hover-glow electric-border">
                                <i class="fab fa-docker text-white text-3xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-3 text-lg">Docker</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">{{ __('messages.Conteneurisation') }}</p>
                            <div class="mt-4 w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-blue-600 to-indigo-600 h-2 rounded-full"
                                    style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- UX/UI -->
                    <div class="card-3d gradient-border text-center hover-tilt magnetic reveal-scale" style="--i: 8">
                        <div class="gradient-border-content p-6">
                            <div
                                class="w-20 h-20 mx-auto mb-6 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center hover-glow electric-border">
                                <i class="fas fa-palette text-white text-3xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-3 text-lg">UX/UI</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">{{ __('messages.Design utilisateur') }}</p>
                            <div class="mt-4 w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-purple-500 to-pink-500 h-2 rounded-full"
                                    style="width: 87%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Expertise Areas -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Backend Development -->
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <div class="text-center mb-6">
                            <div class="w-20 h-20 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-server text-blue-600 text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">{{ __('messages.Développement Backend') }}
                            </h3>
                        </div>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li>• Laravel & PHP 8+</li>
                            <li>• API REST & GraphQL</li>
                            <li>• Microservices</li>
                            <li>• Bases de données MySQL/PostgreSQL</li>
                            <li>• Redis & Caching</li>
                            <li>• Tests automatisés</li>
                        </ul>
                    </div>

                    <!-- Mobile Development -->
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <div class="text-center mb-6">
                            <div
                                class="w-20 h-20 mx-auto mb-4 bg-orange-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-orange-600 text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">{{ __('messages.Développement Mobile') }}</h3>
                        </div>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li>• Flutter & Dart</li>
                            <li>• Android Java/Kotlin</li>
                            <li>• Apps natives & hybrides</li>
                            <li>• Synchronisation hors ligne</li>
                            <li>• Push notifications</li>
                            <li>• Store deployment</li>
                        </ul>
                    </div>

                    <!-- DevOps & Tools -->
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <div class="text-center mb-6">
                            <div class="w-20 h-20 mx-auto mb-4 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-tools text-green-600 text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">{{ __('messages.DevOps & Outils') }}</h3>
                        </div>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li>• Docker & Containerization</li>
                            <li>• CI/CD Pipelines</li>
                            <li>• AWS & Cloud Services</li>
                            <li>• Git & Version Control</li>
                            <li>• Monitoring & Logging</li>
                            <li>• Agile & Scrum</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="fade-in-up">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        {{ __('messages.Mes Projets') }}
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        {{ __('messages.Découvrez quelques-uns de mes projets les plus significatifs') }}
                    </p>
                </div>

                <!-- Projects Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- UZASHOP POS -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center">
                            <i class="fas fa-cash-register text-white text-4xl"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">UZASHOP POS</h3>
                            <p class="text-gray-600 mb-4">
                                {{ __('messages.Système de point de vente complet avec gestion de stock, facturation et rapports analytiques.') }}
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-red-100 text-red-600 text-xs rounded">Laravel</span>
                                <span class="px-2 py-1 bg-blue-100 text-blue-600 text-xs rounded">Flutter</span>
                                <span class="px-2 py-1 bg-green-100 text-green-600 text-xs rounded">MySQL</span>
                            </div>

                            <div class="flex space-x-3">
                                <a href="#" class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                                    <i class="fas fa-eye mr-1"></i>{{ __('messages.Voir démo') }}
                                </a>
                                <a href="#" class="text-gray-600 hover:text-gray-700 text-sm font-medium">
                                    <i class="fab fa-github mr-1"></i>{{ __('messages.Code') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- ERP Santé -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center">
                            <i class="fas fa-heartbeat text-white text-4xl"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ __('messages.ERP Santé') }}</h3>
                            <p class="text-gray-600 mb-4">
                                {{ __('messages.Système de gestion hospitalière avec dossiers patients, planification et facturation médicale.') }}
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-red-100 text-red-600 text-xs rounded">Laravel</span>
                                <span class="px-2 py-1 bg-purple-100 text-purple-600 text-xs rounded">Vue.js</span>
                                <span class="px-2 py-1 bg-blue-100 text-blue-600 text-xs rounded">PostgreSQL</span>
                            </div>

                            <div class="flex space-x-3">
                                <a href="#" class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                                    <i class="fas fa-eye mr-1"></i>{{ __('messages.Voir démo') }}
                                </a>
                                <a href="#" class="text-gray-600 hover:text-gray-700 text-sm font-medium">
                                    <i class="fas fa-external-link-alt mr-1"></i>{{ __('messages.Site web') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- ERP Hôtellerie -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center">
                            <i class="fas fa-hotel text-white text-4xl"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ __('messages.ERP Hôtellerie') }}</h3>
                            <p class="text-gray-600 mb-4">
                                {{ __('messages.Plateforme de gestion hôtelière avec réservations, facturation et gestion de personnel.') }}
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-red-100 text-red-600 text-xs rounded">Laravel</span>
                                <span class="px-2 py-1 bg-yellow-100 text-yellow-600 text-xs rounded">React</span>
                                <span class="px-2 py-1 bg-green-100 text-green-600 text-xs rounded">MySQL</span>
                            </div>

                            <div class="flex space-x-3">
                                <a href="#" class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                                    <i class="fas fa-eye mr-1"></i>{{ __('messages.Voir démo') }}
                                </a>
                                <a href="#" class="text-gray-600 hover:text-gray-700 text-sm font-medium">
                                    <i class="fas fa-external-link-alt mr-1"></i>{{ __('messages.Site web') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- ERP Agriculture -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-yellow-500 to-orange-600 flex items-center justify-center">
                            <i class="fas fa-seedling text-white text-4xl"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ __('messages.ERP Agriculture') }}</h3>
                            <p class="text-gray-600 mb-4">
                                {{ __('messages.Solution de gestion agricole avec suivi des cultures, météo et market place.') }}
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-red-100 text-red-600 text-xs rounded">Laravel</span>
                                <span class="px-2 py-1 bg-blue-100 text-blue-600 text-xs rounded">Flutter</span>
                                <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">IoT</span>
                            </div>

                            <div class="flex space-x-3">
                                <a href="#" class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                                    <i class="fas fa-eye mr-1"></i>{{ __('messages.Voir démo') }}
                                </a>
                                <a href="#" class="text-gray-600 hover:text-gray-700 text-sm font-medium">
                                    <i class="fab fa-github mr-1"></i>{{ __('messages.Code') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- API Gateway -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-blue-500 to-indigo-700 flex items-center justify-center">
                            <i class="fas fa-network-wired text-white text-4xl"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">API Gateway</h3>
                            <p class="text-gray-600 mb-4">
                                {{ __('messages.Passerelle API centralisée avec authentification, rate limiting et monitoring.') }}
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-red-100 text-red-600 text-xs rounded">Laravel</span>
                                <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">Redis</span>
                                <span class="px-2 py-1 bg-orange-100 text-orange-600 text-xs rounded">Docker</span>
                            </div>

                            <div class="flex space-x-3">
                                <a href="#" class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                                    <i class="fas fa-eye mr-1"></i>{{ __('messages.Voir démo') }}
                                </a>
                                <a href="#" class="text-gray-600 hover:text-gray-700 text-sm font-medium">
                                    <i class="fab fa-github mr-1"></i>{{ __('messages.Code') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Banking -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-green-600 to-teal-700 flex items-center justify-center">
                            <i class="fas fa-mobile-alt text-white text-4xl"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ __('messages.Mobile Banking') }}</h3>
                            <p class="text-gray-600 mb-4">
                                {{ __('messages.Application bancaire mobile avec transferts, paiements et gestion de comptes.') }}
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-blue-100 text-blue-600 text-xs rounded">Flutter</span>
                                <span class="px-2 py-1 bg-orange-100 text-orange-600 text-xs rounded">Java</span>
                                <span class="px-2 py-1 bg-red-100 text-red-600 text-xs rounded">Laravel API</span>
                            </div>

                            <div class="flex space-x-3">
                                <a href="#" class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                                    <i class="fas fa-eye mr-1"></i>{{ __('messages.Voir démo') }}
                                </a>
                                <a href="#" class="text-gray-600 hover:text-gray-700 text-sm font-medium">
                                    <i class="fab fa-google-play mr-1"></i>{{ __('messages.Play Store') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- View All Projects Button -->
                <div class="text-center mt-12">
                    <a href="#contact" class="btn-primary">
                        {{ __('messages.Voir tous mes projets') }}
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="fade-in-up">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        {{ __('messages.Expérience & Réalisations') }}
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        {{ __('messages.Mon parcours professionnel et les étapes clés de ma carrière') }}
                    </p>
                </div>

                <!-- Experience Timeline -->
                <div class="relative">
                    <!-- Timeline line -->
                    <div class="absolute left-4 md:left-1/2 transform md:-translate-x-1/2 w-1 h-full bg-blue-200"></div>

                    <div class="space-y-12">
                        <!-- Gestionnaire des Projets – Congo Initiative-UCBC -->
                        <div class="relative flex items-center">
                            <div
                                class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 bg-blue-600 rounded-full border-4 border-white shadow-lg z-10">
                            </div>
                            <div class="ml-12 md:ml-0 md:w-1/2 md:pr-8 md:text-right">
                                <div class="bg-white p-6 rounded-lg shadow-md">
                                    <div class="text-sm text-blue-600 font-medium mb-1">06/2023 – Présent • Nyunzu‑Kalemie
                                        (RDC)</div>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-1">Gestionnaire des Projets (Project
                                        Manager)</h3>
                                    <h4 class="text-sm text-gray-600 mb-3">Congo Initiative‑UCBC</h4>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li>• Pilotage technico‑fonctionnel des projets (planification → exécution) avec
                                            outillage numérique et automatisations.</li>
                                        <li>• Rédaction de 10+ propositions (4 financées) en cadrant besoins, indicateurs et
                                            livrables digitaux.</li>
                                        <li>• Conception et supervision de 10+ études de base (collecte, traitement,
                                            restitution data‑driven).</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hidden md:block md:w-1/2 md:pl-8"></div>
                        </div>

                        <!-- Expert SIF – Congo Initiative-UCBC -->
                        <div class="relative flex items-center">
                            <div
                                class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 bg-indigo-600 rounded-full border-4 border-white shadow-lg z-10">
                            </div>
                            <div class="ml-12 md:ml-0 md:w-1/2 md:pl-8">
                                <div class="bg-white p-6 rounded-lg shadow-md">
                                    <div class="text-sm text-indigo-600 font-medium mb-1">05/2022 – 09/2023 •
                                        Nyunzu‑Kalemie (RDC)</div>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-1">Expert en Système d’Information
                                        Foncière</h3>
                                    <h4 class="text-sm text-gray-600 mb-3">Congo Initiative‑UCBC</h4>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li>• Architecture et développement d’un système d’archivage numérique (schémas,
                                            flux, interfaces).</li>
                                        <li>• Conception et déploiement d’un SIF opérationnel (modèles de données,
                                            workflows, UI/UX).</li>
                                        <li>• Mise en production d’un registre numérique des conflits (<a
                                                href="https://zeroconflit.org" target="_blank"
                                                class="text-blue-600 underline">zeroconflit.org</a>).</li>
                                        <li>• Chaîne cartographique complète: acquisition, traitement et édition de 10
                                            cartes parcellaires (10 villages).</li>
                                        <li>• Transfert de compétences: formation et coaching des équipes de
                                            l’administration foncière.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hidden md:block md:w-1/2 md:pr-8 md:text-right"></div>
                        </div>

                        <!-- Consultant Ingénieur Développeur Logiciel – ESCOKIVU SARL -->
                        <div class="relative flex items-center">
                            <div
                                class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 bg-orange-500 rounded-full border-4 border-white shadow-lg z-10">
                            </div>
                            <div class="ml-12 md:ml-0 md:w-1/2 md:pr-8 md:text-right">
                                <div class="bg-white p-6 rounded-lg shadow-md">
                                    <div class="text-sm text-orange-600 font-medium mb-1">05/2020 – Présent • Beni (RDC)
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-1">Consultant Ingénieur Développeur
                                        Logiciel</h3>
                                    <h4 class="text-sm text-gray-600 mb-3">ESCOKIVU SARL</h4>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li>• Conception & développement d’un système de gestion d’achats agricoles
                                            end‑to‑end.</li>
                                        <li>• Intégrations métiers: achats, logistique, finance, traçabilité, export (APIs &
                                            workflows).</li>
                                        <li>• Déploiement multi‑sites et accompagnement au changement.</li>
                                        <li>• Formation de 200+ agents sur Storeman et bonnes pratiques d’utilisation.</li>
                                        <li>• Contribution à l’évolution du système de gestion pour EscoUganda.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hidden md:block md:w-1/2 md:pl-8"></div>
                        </div>

                        <!-- Gestionnaire des Bases de Données & Dev GIS – IRI-UCBC -->
                        <div class="relative flex items-center">
                            <div
                                class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 bg-green-600 rounded-full border-4 border-white shadow-lg z-10">
                            </div>
                            <div class="ml-12 md:ml-0 md:w-1/2 md:pl-8">
                                <div class="bg-white p-6 rounded-lg shadow-md">
                                    <div class="text-sm text-green-600 font-medium mb-1">01/2020 – 01/2021 • Beni (RDC)
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-1">Gestionnaire des Bases de Données
                                        & Développeur GIS</h3>
                                    <h4 class="text-sm text-gray-600 mb-3">IRI‑UCBC</h4>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li>• Développement et déploiement d’un SIF + archivage (OICHA/BENI).</li>
                                        <li>• Opérations terrain: cartographie communautaire, 1 500+ parcelles recensées.
                                        </li>
                                        <li>• Formation des agents: collecte, géoréférencement, usage SIF.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hidden md:block md:w-1/2 md:pr-8 md:text-right"></div>
                        </div>

                        <!-- Co‑fondateur, Ingénieur Logiciel & Gestionnaire de Projet – UZASHOP -->
                        <div class="relative flex items-center">
                            <div
                                class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 bg-purple-600 rounded-full border-4 border-white shadow-lg z-10">
                            </div>
                            <div class="ml-12 md:ml-0 md:w-1/2 md:pr-8 md:text-right">
                                <div class="bg-white p-6 rounded-lg shadow-md">
                                    <div class="text-sm text-purple-600 font-medium mb-1">02/2019 – Présent • Beni (RDC)
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-1">Co‑fondateur, Ingénieur Logiciel &
                                        Gestionnaire de Projet</h3>
                                    <h4 class="text-sm text-gray-600 mb-3">UZASHOP</h4>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li>• Conception & développement d’un POS scalable adapté au contexte africain (200+
                                            entreprises).</li>
                                        <li>• Industrialisation: documentation technique, versioning, qualité logicielle.
                                        </li>
                                        <li>• Lead technique: encadrement d’ingénieurs, priorisation backlog, revues de
                                            code.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hidden md:block md:w-1/2 md:pl-8"></div>
                        </div>

                        <!-- Ingénieur Logiciel – AFRISOFT -->
                        <div class="relative flex items-center">
                            <div
                                class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 bg-rose-600 rounded-full border-4 border-white shadow-lg z-10">
                            </div>
                            <div class="ml-12 md:ml-0 md:w-1/2 md:pl-8">
                                <div class="bg-white p-6 rounded-lg shadow-md">
                                    <div class="text-sm text-rose-600 font-medium mb-1">02/2018 – 04/2020 • Beni (RDC)
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-1">Ingénieur Logiciel</h3>
                                    <h4 class="text-sm text-gray-600 mb-3">AFRISOFT</h4>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li>• Développement de 10+ applications Android orientées métier (gestion
                                            entreprises & ONG).</li>
                                        <li>• Contribution aux cycles complets: conception, implémentation, tests et
                                            livraison.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hidden md:block md:w-1/2 md:pr-8 md:text-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-blue-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="fade-in-up">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">
                        {{ __('messages.Contactez-moi') }}
                    </h2>
                    <p class="text-lg text-blue-100 max-w-2xl mx-auto">
                        {{ __('messages.Prêt à discuter de votre prochain projet ? N\'hésitez pas à me contacter !') }}
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Contact Information -->
                    <div>
                        <h3 class="text-2xl font-semibold mb-8">{{ __('messages.Informations de contact') }}</h3>

                        <div class="space-y-6">
                            <!-- Email -->
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-blue-700 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <div>
                                    <div class="font-medium">{{ __('messages.Email') }}</div>
                                    <div class="text-blue-200">fimbo.isso@uzashop.co</div>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-blue-700 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-phone text-xl"></i>
                                </div>
                                <div>
                                    <div class="font-medium">{{ __('messages.Téléphone') }}</div>
                                    <div class="text-blue-200">+243 997 643 592</div>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-blue-700 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <div>
                                    <div class="font-medium">{{ __('messages.Localisation') }}</div>
                                    <div class="text-blue-200">Beni, Nord-Kivu, RDC</div>
                                </div>
                            </div>

                            <!-- Availability -->
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-clock text-xl"></i>
                                </div>
                                <div>
                                    <div class="font-medium">{{ __('messages.Disponibilité') }}</div>
                                    <div class="text-blue-200">{{ __('messages.Lun - Ven: 8h00 - 18h00 (UTC+2)') }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="mt-12">
                            <h4 class="text-lg font-semibold mb-6">{{ __('messages.Suivez-moi') }}</h4>
                            <div class="flex space-x-4">
                                <a href="https://linkedin.com/in/justin-fimbo" target="_blank"
                                    class="w-12 h-12 bg-blue-700 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-200">
                                    <i class="fab fa-linkedin-in text-xl"></i>
                                </a>
                                <a href="https://github.com/justin-fimbo" target="_blank"
                                    class="w-12 h-12 bg-blue-700 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-200">
                                    <i class="fab fa-github text-xl"></i>
                                </a>
                                <a href="https://twitter.com/justin_fimbo" target="_blank"
                                    class="w-12 h-12 bg-blue-700 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-200">
                                    <i class="fab fa-twitter text-xl"></i>
                                </a>
                                <a href="https://wa.me/243997643592" target="_blank"
                                    class="w-12 h-12 bg-green-600 hover:bg-green-500 rounded-lg flex items-center justify-center transition-colors duration-200">
                                    <i class="fab fa-whatsapp text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div>
                        <h3 class="text-2xl font-semibold mb-8">{{ __('messages.Envoyez-moi un message') }}</h3>

                        <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                            @csrf

                            <!-- Name -->
                            <div>
                                <label for="name"
                                    class="block text-sm font-medium mb-2">{{ __('messages.Nom complet') }}</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-4 py-3 bg-blue-800 border border-blue-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent text-white placeholder-blue-300"
                                    placeholder="{{ __('messages.Votre nom complet') }}">
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email"
                                    class="block text-sm font-medium mb-2">{{ __('messages.Adresse email') }}</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 bg-blue-800 border border-blue-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent text-white placeholder-blue-300"
                                    placeholder="{{ __('messages.votre@email.com') }}">
                            </div>

                            <!-- Subject -->
                            <div>
                                <label for="subject"
                                    class="block text-sm font-medium mb-2">{{ __('messages.Sujet') }}</label>
                                <input type="text" id="subject" name="subject" required
                                    class="w-full px-4 py-3 bg-blue-800 border border-blue-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent text-white placeholder-blue-300"
                                    placeholder="{{ __('messages.Sujet de votre message') }}">
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="message"
                                    class="block text-sm font-medium mb-2">{{ __('messages.Message') }}</label>
                                <textarea id="message" name="message" rows="5" required
                                    class="w-full px-4 py-3 bg-blue-800 border border-blue-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent text-white placeholder-blue-300 resize-none"
                                    placeholder="{{ __('messages.Décrivez votre projet ou votre demande...') }}"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit"
                                class="w-full bg-orange-600 hover:bg-orange-700 text-white font-medium py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                                <i class="fas fa-paper-plane mr-2"></i>
                                {{ __('messages.Envoyer le message') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('head')
    <style>
        /* Blob animation */
        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }

            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
@endpush
