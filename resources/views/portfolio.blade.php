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
            <div></div>
            <div style="animation-delay: -4s;"></div>
            <div style="animation-delay: -2s;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div>
                <!-- Enhanced Profile Picture -->
                <div class="mb-8 flex justify-center">
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
                        <div>
                            <i class="fas fa-check text-white text-xl"></i>
                            <div
                                class="absolute inset-0 rounded-full bg-gradient-to-r from-green-400 to-emerald-500 blur-md opacity-50">
                            </div>
                        </div>

                        <!-- Enhanced Floating Tech Icons -->
                        <div
                            class="absolute -top-4 -left-4 w-10 h-10 bg-gradient-to-r from-black to-gray-800 rounded-full flex items-center justify-center text-white text-sm">
                            <i class="fab fa-laravel"></i>
                        </div>
                        <div
                            class="absolute -top-4 -right-4 w-10 h-10 bg-gradient-to-r from-black to-gray-800 rounded-full flex items-center justify-center text-white text-sm">
                            <i class="fab fa-flutter"></i>
                        </div>
                        <div
                            class="absolute -bottom-4 -left-4 w-10 h-10 bg-gradient-to-r from-black to-gray-800 rounded-full flex items-center justify-center text-white text-sm">
                            <i class="fab fa-java"></i>
                        </div>
                    </div>
                </div>

                <!-- Simplified Main Title -->
                <h1 class="text-4xl md:text-6xl lg:text-8xl font-bold mb-8">
                    <span class="block text-white/90 font-light">{{ __('messages.Salut, je suis') }}</span>
                    <span class="block text-white font-black">Justin Fimbo</span>
                </h1>

                <!-- Simplified Subtitle -->
                <p class="text-xl md:text-2xl lg:text-3xl text-white/90 mb-8 max-w-3xl mx-auto font-medium">
                    {{ __('messages.Développeur & Entrepreneur innovant') }}
                </p>

                <!-- Simplified Description -->
                <div class="text-base md:text-lg text-white/80 mb-8 max-w-4xl mx-auto">
                    <div class="glass-morphism p-4 rounded-xl backdrop-blur-xl">
                        <p class="leading-relaxed">
                            {{ __('Expert en Laravel, Flutter & Java | PDG d\'UZASHOP | Créateur d\'ERP multisectoriels adaptés au contexte africain | Basé à Beni, RDC') }}
                        </p>
                    </div>
                </div>

                <!-- Simplified CTA Buttons -->
                <div class="flex flex-col sm:flex-row justify-center items-center gap-4 sm:gap-4">
                    <a href="{{ asset('files/Justin_Fimbo_CV.pdf') }}" download
                        class="btn-modern inline-flex items-center px-6 py-3">
                        <i class="fas fa-download mr-2"></i>
                        {{ __('messages.Télécharger CV') }}
                    </a>
                    <a href="#contact" class="btn-glass px-6 py-3 text-white inline-flex items-center">
                        <i class="fas fa-envelope mr-2"></i>
                        {{ __('messages.Me contacter') }}
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-12 max-w-3xl mx-auto">
                    <div class="text-center">
                        <div class="text-2xl md:text-3xl font-bold text-white mb-1">5+</div>
                        <div class="text-sm text-white/70">{{ __('messages.Années d\'expérience') }}</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl md:text-3xl font-bold text-white mb-1">50+</div>
                        <div class="text-sm text-white/70">{{ __('messages.Projets réalisés') }}</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl md:text-3xl font-bold text-white mb-1">20+</div>
                        <div class="text-sm text-white/70">{{ __('messages.Clients satisfaits') }}</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl md:text-3xl font-bold text-white mb-1">1</div>
                        <div class="text-sm text-white/70">{{ __('messages.Entreprise créée') }}</div>
                    </div>
                </div>
            </div>

            <!-- Scroll indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                <a href="#about" class="text-white/60 hover:text-white transition-colors duration-200">
                    <i class="fas fa-chevron-down text-xl"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div>
                <!-- Section Header -->
                <div class="text-center mb-8">
                    <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">
                        {{ __('messages.À propos de moi') }}
                    </h2>
                    <p class="text-base text-gray-700 max-w-2xl mx-auto">
                        {{ __('messages.Découvrez mon parcours et ma passion pour le développement informatique') }}
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                    <!-- Text Content -->
                    <div class="space-y-5">
                        <h3 class="text-xl font-semibold text-black mb-3">
                            {{ __('messages.Développeur informatique confirmé & Entrepreneur') }}
                        </h3>

                        <p class="text-gray-700 leading-relaxed text-sm">
                            {{ __('messages.Passionné par la technologie depuis mon plus jeune âge, j\'ai développé mes compétences en développement web et mobile pour devenir un expert reconnu en Laravel, Flutter et Java. Basé à Beni en République Démocratique du Congo, j\'ai fondé UZASHOP avec la vision de créer des solutions technologiques adaptées au contexte africain.') }}
                        </p>

                        <p class="text-gray-700 leading-relaxed text-sm">
                            {{ __('messages.Mon expertise se concentre sur la création d\'ERP multisectoriels qui répondent aux besoins spécifiques des entreprises africaines. De la santé à l\'hôtellerie, en passant par l\'agriculture, mes solutions intègrent la synchronisation hors ligne et des interfaces utilisateur intuitives pour maximiser l\'efficacité opérationnelle.') }}
                        </p>

                        <!-- Key Points -->
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-black mr-3 text-sm"></i>
                                <span
                                    class="text-gray-800 text-sm">{{ __('messages.Expert Laravel & Flutter avec 5+ années d\'expérience') }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-black mr-3 text-sm"></i>
                                <span class="text-gray-800 text-sm">{{ __('messages.PDG et fondateur d\'UZASHOP') }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-black mr-3"></i>
                                <span class="text-gray-700">{{ __('messages.Spécialiste des ERP multisectoriels') }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-black mr-3"></i>
                                <span
                                    class="text-gray-700">{{ __('messages.Solutions adaptées au contexte africain') }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-black mr-3"></i>
                                <span
                                    class="text-gray-700">{{ __('messages.Specialiste en Système d\'Information Foncière') }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-black mr-3"></i>
                                <span
                                    class="text-gray-700">{{ __('messages.Specialiste en Système d\'Information Géographique') }}</span>
                            </div>
                        </div>

                        <!-- Personal Info -->
                        <div class="bg-gray-50 p-4 rounded-lg mt-8">
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
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-4">
                                <div>
                                    <div class="content p-4">
                                        <div>
                                            <i class="fas fa-code text-white text-2xl"></i>
                                        </div>
                                        <h4 class="font-bold text-gray-900 mb-3 text-lg">
                                            {{ __('messages.Développement') }}</h4>
                                        <p class="text-gray-600 text-sm leading-relaxed">
                                            {{ __('messages.Applications web & mobiles modernes') }}</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="content p-4">
                                        <div>
                                            <i class="fas fa-chart-line text-white text-2xl"></i>
                                        </div>
                                        <h4 class="font-bold text-gray-900 mb-3 text-lg">{{ __('messages.Business') }}
                                        </h4>
                                        <p class="text-gray-600 text-sm leading-relaxed">
                                            {{ __('messages.Solutions ERP sur mesure') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-4 mt-8">
                                <div>
                                    <div class="p-4">
                                        <div>
                                            <i class="fas fa-mobile-alt text-white text-2xl"></i>
                                        </div>
                                        <h4 class="font-bold text-gray-900 mb-3 text-lg">{{ __('messages.Mobile') }}</h4>
                                        <p class="text-gray-600 text-sm leading-relaxed">
                                            {{ __('messages.Apps Flutter natives') }}</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="p-4">
                                        <div>
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
    <section id="skills" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div>
                <!-- Section Header -->
                <div class="text-center mb-8">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        {{ __('messages.Mes Compétences') }}
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        {{ __('messages.Technologies et outils que je maîtrise pour créer des solutions innovantes') }}
                    </p>
                </div>

                <!-- Enhanced Skills Grid -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-8">
                    <!-- Laravel -->
                    <div class="card-3d glass-morphism text-center hover-tilt  reveal-scale" style="--i: 1">
                        <div class="p-4">
                            <div>
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
                    <div class="card-3d gradient-border-animated text-center hover-tilt  reveal-scale" style="--i: 2">
                        <div class="content p-4">
                            <div>
                                <i class="fab fa-flutter text-white text-3xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-3 text-lg">Flutter</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">{{ __('messages.Apps mobiles') }}</p>
                            <div class="mt-4 w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-black to-gray-800 h-2 rounded-full" style="width: 90%">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Java -->
                    <div class="card-3d cyber-border text-center hover-tilt  reveal-scale" style="--i: 3">
                        <div class="cyber-border-content p-4">
                            <div>
                                <i class="fab fa-java text-white text-3xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-3 text-lg">Java</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">{{ __('messages.Android natif') }}</p>
                            <div class="mt-4 w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-gray-700 to-gray-800 h-2 rounded-full"
                                    style="width: 85%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- API REST -->
                    <div class="card-3d neumorphism text-center hover-tilt  reveal-scale" style="--i: 4">
                        <div class="p-4">
                            <div>
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
                    <div class="card-3d glass-morphism text-center hover-tilt  reveal-scale" style="--i: 5">
                        <div class="p-4">
                            <div>
                                <i class="fas fa-database text-white text-3xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-3 text-lg">MySQL</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">{{ __('messages.Base de données') }}</p>
                            <div class="mt-4 w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-black to-cyan-500 h-2 rounded-full" style="width: 88%">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Git -->
                    <div class="card-3d neumorphism text-center hover-tilt  reveal-scale" style="--i: 6">
                        <div class="p-4">
                            <div>
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
                    <div class="card-3d cyber-border-animated text-center hover-tilt  reveal-scale" style="--i: 7">
                        <div class="content p-4">
                            <div>
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
                    <div class="card-3d gradient-border text-center hover-tilt  reveal-scale" style="--i: 8">
                        <div class="gradient-border-content p-4">
                            <div>
                                <i class="fas fa-palette text-white text-3xl"></i>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-3 text-lg">UX/UI</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">{{ __('messages.Design utilisateur') }}</p>
                            <div class="mt-4 w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-black to-pink-500 h-2 rounded-full" style="width: 87%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Expertise Areas -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Backend Development -->
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <div class="text-center mb-6">
                            <div class="w-20 h-20 mx-auto mb-4 bg-gray-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-server text-black text-2xl"></i>
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
                    <div class="bg-white p-4 rounded-lg shadow-md">
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
                    <div class="bg-white p-4 rounded-lg shadow-md">
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
    <section id="projects" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div>
                <!-- Section Header -->
                <div class="text-center mb-8">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        {{ __('messages.Mes Projets') }}
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        {{ __('messages.Découvrez quelques-uns de mes projets les plus significatifs') }}
                    </p>
                </div>

                <!-- Projects Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    <!-- UZASHOP POS -->
                    <div
                        class="group bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                        <div
                            class="h-48 bg-gradient-to-br from-black via-gray-800 to-gray-900 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-black/20"></div>
                            <div class="relative z-10 transform group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-cash-register text-white text-5xl mb-2"></i>
                                <div class="text-white text-xs font-medium text-center">Point de Vente</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-xl font-bold text-gray-900">UZASHOP POS</h3>
                                <span class="px-2 py-1 bg-black text-white text-xs rounded-full">Flagship</span>
                            </div>
                            <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                                Système de point de vente révolutionnaire adapté au contexte africain avec synchronisation
                                hors ligne et gestion multicaisse.
                            </p>

                            <!-- Technologies -->
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full font-medium">Laravel</span>
                                <span
                                    class="px-3 py-1 bg-blue-100 text-blue-700 text-xs rounded-full font-medium">Flutter</span>
                                <span
                                    class="px-3 py-1 bg-green-100 text-green-700 text-xs rounded-full font-medium">MySQL</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-700 text-xs rounded-full font-medium">+200
                                    entreprises</span>
                            </div>

                            <!-- Actions -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <a href="#"
                                    class="flex items-center text-black hover:text-gray-700 text-sm font-semibold transition-colors">
                                    <i class="fas fa-eye mr-2"></i>{{ __('messages.Voir démo') }}
                                </a>
                                <a href="#"
                                    class="flex items-center text-gray-500 hover:text-gray-700 text-sm transition-colors">
                                    <i class="fab fa-github mr-2"></i>Code
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Système d'Information Foncière -->
                    <div
                        class="group bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                        <div
                            class="h-48 bg-gradient-to-br from-emerald-600 via-green-700 to-teal-800 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-black/20"></div>
                            <div class="relative z-10 transform group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-map-marked-alt text-white text-5xl mb-2"></i>
                                <div class="text-white text-xs font-medium text-center">SIG & Foncier</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-xl font-bold text-gray-900">SIF - GeoSpatial</h3>
                                <span class="px-2 py-1 bg-green-600 text-white text-xs rounded-full">Innovant</span>
                            </div>
                            <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                                Plateforme de gestion foncière avec cartographie interactive, résolution des conflits et
                                archivage numérique pour le secteur Sud-Lukuga.
                            </p>

                            <!-- Technologies -->
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full font-medium">Laravel</span>
                                <span
                                    class="px-3 py-1 bg-blue-100 text-blue-700 text-xs rounded-full font-medium">GIS</span>
                                <span
                                    class="px-3 py-1 bg-green-100 text-green-700 text-xs rounded-full font-medium">PostgreSQL</span>
                                <span
                                    class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs rounded-full font-medium">1500+
                                    parcelles</span>
                            </div>

                            <!-- Actions -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <a href="https://zeroconflit.org" target="_blank"
                                    class="flex items-center text-black hover:text-gray-700 text-sm font-semibold transition-colors">
                                    <i class="fas fa-external-link-alt mr-2"></i>ZeroConflit.org
                                </a>
                                <a href="#"
                                    class="flex items-center text-gray-500 hover:text-gray-700 text-sm transition-colors">
                                    <i class="fas fa-map mr-2"></i>Cartes
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Storeman ESCOKIVU -->
                    <div
                        class="group bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                        <div
                            class="h-48 bg-gradient-to-br from-orange-500 via-amber-600 to-yellow-700 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-black/20"></div>
                            <div class="relative z-10 transform group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-warehouse text-white text-5xl mb-2"></i>
                                <div class="text-white text-xs font-medium text-center">Supply Chain</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Storeman</h3>
                                <span class="px-2 py-1 bg-orange-600 text-white text-xs rounded-full">Enterprise</span>
                            </div>
                            <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                                Système de gestion d'achats agricoles intégrant logistique, finance, traçabilité et export
                                pour ESCOKIVU SARL.
                            </p>

                            <!-- Technologies -->
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full font-medium">Laravel</span>
                                <span
                                    class="px-3 py-1 bg-blue-100 text-blue-700 text-xs rounded-full font-medium">React</span>
                                <span
                                    class="px-3 py-1 bg-green-100 text-green-700 text-xs rounded-full font-medium">PostgreSQL</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-700 text-xs rounded-full font-medium">200+
                                    agents</span>
                            </div>

                            <!-- Actions -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <a href="#"
                                    class="flex items-center text-black hover:text-gray-700 text-sm font-semibold transition-colors">
                                    <i class="fas fa-chart-line mr-2"></i>Analytics
                                </a>
                                <a href="#"
                                    class="flex items-center text-gray-500 hover:text-gray-700 text-sm transition-colors">
                                    <i class="fas fa-users mr-2"></i>Formation
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- ERP Multisectoriel -->
                    <div
                        class="group bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                        <div
                            class="h-48 bg-gradient-to-br from-purple-600 via-indigo-700 to-blue-800 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-black/20"></div>
                            <div class="relative z-10 transform group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-building text-white text-5xl mb-2"></i>
                                <div class="text-white text-xs font-medium text-center">ERP Suite</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-xl font-bold text-gray-900">ERP Multisectoriel</h3>
                                <span class="px-2 py-1 bg-purple-600 text-white text-xs rounded-full">Suite</span>
                            </div>
                            <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                                Suite ERP complète pour santé, hôtellerie et agriculture avec modules interconnectés et
                                tableau de bord unifié.
                            </p>

                            <!-- Technologies -->
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full font-medium">Laravel</span>
                                <span
                                    class="px-3 py-1 bg-green-100 text-green-700 text-xs rounded-full font-medium">Vue.js</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs rounded-full font-medium">API
                                    REST</span>
                                <span
                                    class="px-3 py-1 bg-gray-100 text-gray-700 text-xs rounded-full font-medium">Multi-modules</span>
                            </div>

                            <!-- Actions -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <a href="#"
                                    class="flex items-center text-black hover:text-gray-700 text-sm font-semibold transition-colors">
                                    <i class="fas fa-play mr-2"></i>{{ __('messages.Voir démo') }}
                                </a>
                                <a href="#"
                                    class="flex items-center text-gray-500 hover:text-gray-700 text-sm transition-colors">
                                    <i class="fas fa-file-alt mr-2"></i>Docs
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Apps Portfolio -->
                    <div
                        class="group bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                        <div
                            class="h-48 bg-gradient-to-br from-cyan-500 via-blue-600 to-indigo-700 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-black/20"></div>
                            <div class="relative z-10 transform group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-mobile-alt text-white text-5xl mb-2"></i>
                                <div class="text-white text-xs font-medium text-center">Mobile Suite</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Apps Mobile</h3>
                                <span class="px-2 py-1 bg-blue-600 text-white text-xs rounded-full">Portfolio</span>
                            </div>
                            <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                                Collection de 10+ applications mobiles Android pour gestion d'entreprises et ONG
                                humanitaires développées chez AFRISOFT.
                            </p>

                            <!-- Technologies -->
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-blue-100 text-blue-700 text-xs rounded-full font-medium">Flutter</span>
                                <span
                                    class="px-3 py-1 bg-orange-100 text-orange-700 text-xs rounded-full font-medium">Java</span>
                                <span class="px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full font-medium">Laravel
                                    API</span>
                                <span class="px-3 py-1 bg-green-100 text-green-700 text-xs rounded-full font-medium">10+
                                    apps</span>
                            </div>

                            <!-- Actions -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <a href="#"
                                    class="flex items-center text-black hover:text-gray-700 text-sm font-semibold transition-colors">
                                    <i class="fab fa-google-play mr-2"></i>Play Store
                                </a>
                                <a href="#"
                                    class="flex items-center text-gray-500 hover:text-gray-700 text-sm transition-colors">
                                    <i class="fas fa-code mr-2"></i>Showcase
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- API Gateway -->
                    <div
                        class="group bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                        <div
                            class="h-48 bg-gradient-to-br from-gray-700 via-gray-800 to-black flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-black/20"></div>
                            <div class="relative z-10 transform group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-network-wired text-white text-5xl mb-2"></i>
                                <div class="text-white text-xs font-medium text-center">Microservices</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-xl font-bold text-gray-900">API Gateway</h3>
                                <span class="px-2 py-1 bg-gray-800 text-white text-xs rounded-full">Core</span>
                            </div>
                            <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                                Passerelle API centralisée pour l'écosystème UZASHOP avec authentification JWT, rate
                                limiting et monitoring avancé.
                            </p>

                            <!-- Technologies -->
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full font-medium">Laravel</span>
                                <span
                                    class="px-3 py-1 bg-red-100 text-red-700 text-xs rounded-full font-medium">Redis</span>
                                <span
                                    class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs rounded-full font-medium">JWT</span>
                                <span class="px-3 py-1 bg-green-100 text-green-700 text-xs rounded-full font-medium">Rate
                                    Limiting</span>
                            </div>

                            <!-- Actions -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <a href="#"
                                    class="flex items-center text-black hover:text-gray-700 text-sm font-semibold transition-colors">
                                    <i class="fas fa-book mr-2"></i>Documentation
                                </a>
                                <a href="#"
                                    class="flex items-center text-gray-500 hover:text-gray-700 text-sm transition-colors">
                                    <i class="fas fa-cogs mr-2"></i>API
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- View All Projects Button -->
                <div class="text-center mt-12">
                    <a href="#contact"
                        class="inline-flex items-center px-8 py-4 bg-black text-white rounded-full font-semibold text-lg hover:bg-gray-800 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        {{ __('messages.Voir tous mes projets') }}
                        <i class="fas fa-arrow-right ml-3"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div>
                <!-- Section Header -->
                <div class="text-center mb-8">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        {{ __('messages.Expérience & Réalisations') }}
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        {{ __('messages.Mon parcours professionnel et les étapes clés de ma carrière') }}
                    </p>
                </div>

                <!-- Experience Horizontal Layout -->
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8">
                    <!-- Gestionnaire des Projets – Congo Initiative-UCBC -->
                    <div
                        class="group bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-black">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-black rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-project-diagram text-white text-lg"></i>
                                </div>
                                <div>
                                    <span
                                        class="inline-block px-3 py-1 bg-green-100 text-green-700 text-xs rounded-full font-medium mb-2">Actuel</span>
                                    <div class="text-xs text-gray-500">06/2023 – Présent</div>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1">Project Manager</h3>
                        <h4 class="text-sm text-gray-600 mb-3">Congo Initiative‑UCBC • Nyunzu‑Kalemie</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Pilotage technico‑fonctionnel des projets</li>
                            <li>• 10+ propositions rédigées (4 financées)</li>
                            <li>• 10+ études de base supervisées</li>
                        </ul>
                    </div>

                    <!-- Expert SIF – Congo Initiative-UCBC -->
                    <div
                        class="group bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-blue-500">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marked-alt text-white text-lg"></i>
                                </div>
                                <div>
                                    <span
                                        class="inline-block px-3 py-1 bg-blue-100 text-blue-700 text-xs rounded-full font-medium mb-2">2022-2023</span>
                                    <div class="text-xs text-gray-500">05/2022 – 09/2023</div>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1">Expert SIF</h3>
                        <h4 class="text-sm text-gray-600 mb-3">Congo Initiative‑UCBC • Nyunzu‑Kalemie</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Architecture système d'archivage numérique</li>
                            <li>• Déploiement SIF opérationnel</li>
                            <li>• Registre conflits: <a href="https://zeroconflit.org" target="_blank"
                                    class="text-black underline">zeroconflit.org</a></li>
                            <li>• 10 cartes parcellaires (10 villages)</li>
                        </ul>
                    </div>
                    <!-- Consultant Ingénieur Développeur Logiciel – ESCOKIVU SARL -->
                    <div
                        class="group bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-orange-500">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-warehouse text-white text-lg"></i>
                                </div>
                                <div>
                                    <span
                                        class="inline-block px-3 py-1 bg-orange-100 text-orange-700 text-xs rounded-full font-medium mb-2">En
                                        cours</span>
                                    <div class="text-xs text-gray-500">05/2020 – Présent</div>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1">Consultant Développeur</h3>
                        <h4 class="text-sm text-gray-600 mb-3">ESCOKIVU SARL • Beni</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Système gestion achats agricoles end‑to‑end</li>
                            <li>• Intégrations: logistique, finance, traçabilité</li>
                            <li>• Formation 200+ agents sur Storeman</li>
                            <li>• Extension EscoUganda</li>
                        </ul>
                    </div>

                    <!-- Gestionnaire des Bases de Données & Dev GIS – IRI-UCBC -->
                    <div
                        class="group bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-green-500">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-database text-white text-lg"></i>
                                </div>
                                <div>
                                    <span
                                        class="inline-block px-3 py-1 bg-green-100 text-green-700 text-xs rounded-full font-medium mb-2">2020-2021</span>
                                    <div class="text-xs text-gray-500">01/2020 – 01/2021</div>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1">Gestionnaire BD & Dév GIS</h3>
                        <h4 class="text-sm text-gray-600 mb-3">IRI‑UCBC • Beni</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Déploiement SIF + archivage (OICHA/BENI)</li>
                            <li>• Cartographie: 1 500+ parcelles recensées</li>
                            <li>• Formation agents collecte & géoréférencement</li>
                        </ul>
                    </div>

                    <!-- Co‑fondateur, Ingénieur Logiciel & Gestionnaire de Projet – UZASHOP -->
                    <div
                        class="group bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-purple-500">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-rocket text-white text-lg"></i>
                                </div>
                                <div>
                                    <span
                                        class="inline-block px-3 py-1 bg-purple-100 text-purple-700 text-xs rounded-full font-medium mb-2">Fondateur</span>
                                    <div class="text-xs text-gray-500">02/2019 – Présent</div>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1">Co-fondateur & CTO</h3>
                        <h4 class="text-sm text-gray-600 mb-3">UZASHOP • Beni</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• POS scalable: 200+ entreprises</li>
                            <li>• Documentation technique & versioning</li>
                            <li>• Lead technique: encadrement équipe</li>
                            <li>• Priorisation backlog & revues code</li>
                        </ul>
                    </div>

                    <!-- Ingénieur Logiciel – AFRISOFT -->
                    <div
                        class="group bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-pink-500">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-pink-500 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-mobile-alt text-white text-lg"></i>
                                </div>
                                <div>
                                    <span
                                        class="inline-block px-3 py-1 bg-pink-100 text-pink-700 text-xs rounded-full font-medium mb-2">2018-2020</span>
                                    <div class="text-xs text-gray-500">02/2018 – 04/2020</div>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1">Ingénieur Logiciel</h3>
                        <h4 class="text-sm text-gray-600 mb-3">AFRISOFT • Beni</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• 10+ applications Android</li>
                            <li>• Gestion entreprises & ONG</li>
                            <li>• Cycles complets: conception → tests</li>
                            <li>• Technologies: Java, XML, SQLite</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-blue-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div>
                <!-- Section Header -->
                <div class="text-center mb-8">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">
                        {{ __('messages.Contactez-moi') }}
                    </h2>
                    <p class="text-lg text-blue-100 max-w-2xl mx-auto">
                        {{ __('messages.Prêt à discuter de votre prochain projet ? N\'hésitez pas à me contacter !') }}
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <!-- Contact Information -->
                    <div>
                        <h3 class="text-2xl font-semibold mb-8">{{ __('messages.Informations de contact') }}</h3>

                        <div class="space-y-4">
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
                                    class="w-12 h-12 bg-blue-700 hover:bg-black rounded-lg flex items-center justify-center transition-colors duration-200">
                                    <i class="fab fa-linkedin-in text-xl"></i>
                                </a>
                                <a href="https://github.com/justin-fimbo" target="_blank"
                                    class="w-12 h-12 bg-blue-700 hover:bg-black rounded-lg flex items-center justify-center transition-colors duration-200">
                                    <i class="fab fa-github text-xl"></i>
                                </a>
                                <a href="https://twitter.com/justin_fimbo" target="_blank"
                                    class="w-12 h-12 bg-blue-700 hover:bg-black rounded-lg flex items-center justify-center transition-colors duration-200">
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

                        <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
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
