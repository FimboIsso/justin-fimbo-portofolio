@extends('layouts.app')

@section('title', 'Justin Fimbo - Développeur & Entrepreneur')
@section('description',
    'Portfolio de Justin Fimbo, développeur informatique confirmé et PDG d\'UZASHOP. Expert Laravel,
    Flutter, Java spécialisé dans les ERP africains.')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Animated Gradient Background -->
        <div class="absolute inset-0 gradient-shift"></div>
        <div class="absolute inset-0 bg-black/10"></div>

        <!-- 3D Floating Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="floating-element w-32 h-32 bg-white/10 rounded-full morphing-shape top-20 left-10"></div>
            <div class="floating-element w-24 h-24 bg-white/15 rounded-full morphing-shape top-40 right-20"
                style="animation-delay: -2s;"></div>
            <div class="floating-element w-40 h-40 bg-white/5 rounded-full morphing-shape bottom-32 left-1/4"
                style="animation-delay: -4s;"></div>
            <div class="floating-element w-28 h-28 bg-white/10 rounded-full morphing-shape bottom-20 right-1/3"
                style="animation-delay: -6s;"></div>

            <!-- Geometric Shapes -->
            <div class="absolute top-1/4 left-1/4 w-16 h-16 border border-white/20 rotate-45 float-animation"
                style="animation-delay: -1s;"></div>
            <div class="absolute top-3/4 right-1/4 w-12 h-12 border border-white/20 rotate-12 float-animation"
                style="animation-delay: -3s;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in-up">
                <!-- Profile Picture -->
                <div class="mb-8 flex justify-center">
                    <div class="relative">
                        <!-- Glowing Ring Effect -->
                        <div
                            class="absolute -inset-4 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 rounded-full blur-lg opacity-30 pulse-glow">
                        </div>

                        <!-- Main Profile Container -->
                        <div
                            class="relative w-48 h-48 md:w-56 md:h-56 rounded-full overflow-hidden border-4 border-white shadow-2xl float-animation">
                            <img src="{{ asset('images/justin-profile.svg') }}" alt="Justin Fimbo"
                                class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">

                            <!-- Overlay Gradient -->
                            <div class="absolute inset-0 bg-gradient-to-t from-transparent via-transparent to-white/10">
                            </div>
                        </div>

                        <!-- Status Badge -->
                        <div
                            class="absolute -bottom-2 -right-2 w-16 h-16 bg-gradient-to-r from-green-400 to-green-600 rounded-full border-4 border-white flex items-center justify-center shadow-lg pulse-glow">
                            <i class="fas fa-check text-white text-xl"></i>
                        </div>

                        <!-- Floating Tech Icons -->
                        <div class="absolute -top-4 -left-4 w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white text-xs float-animation"
                            style="animation-delay: -1s;">
                            <i class="fab fa-laravel"></i>
                        </div>
                        <div class="absolute -top-4 -right-4 w-8 h-8 bg-cyan-500 rounded-full flex items-center justify-center text-white text-xs float-animation"
                            style="animation-delay: -2s;">
                            <i class="fab fa-flutter"></i>
                        </div>
                        <div class="absolute -bottom-4 -left-4 w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center text-white text-xs float-animation"
                            style="animation-delay: -3s;">
                            <i class="fab fa-java"></i>
                        </div>
                    </div>
                </div>

                <!-- Main Title -->
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6">
                    <span class="block text-white/90 slide-in-left">{{ __('messages.Salut, je suis') }}</span>
                    <span class="block text-3d text-glow scale-in" style="animation-delay: 0.3s;">Justin Fimbo</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto slide-in-right"
                    style="animation-delay: 0.5s;">
                    {{ __('messages.Développeur & Entrepreneur innovant') }}
                </p>

                <!-- Description -->
                <p class="text-lg text-white/80 mb-12 max-w-4xl mx-auto fade-in-up" style="animation-delay: 0.7s;">
                    {{ __('Expert en Laravel, Flutter & Java | PDG d\'UZASHOP | Créateur d\'ERP multisectoriels adaptés au contexte africain | Basé à Beni, RDC') }}
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6 scale-in"
                    style="animation-delay: 0.9s;">
                    <a href="{{ asset('files/Justin_Fimbo_CV.pdf') }}" download class="btn-modern inline-flex items-center">
                        <i class="fas fa-download mr-2"></i>
                        {{ __('messages.Télécharger CV') }}
                    </a>
                    <a href="#contact"
                        class="glass-card px-6 py-3 text-white hover:bg-white/20 transition-all duration-300 inline-flex items-center border border-white/30 rounded-full">
                        <i class="fas fa-envelope mr-2"></i>
                        {{ __('messages.Me contacter') }}
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-16 max-w-4xl mx-auto">
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-blue-600 mb-2">5+</div>
                        <div class="text-sm md:text-base text-gray-600">{{ __('Années d\'expérience') }}</div>
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
                            {{ __('Passionné par la technologie depuis mon plus jeune âge, j\'ai développé mes compétences en développement web et mobile pour devenir un expert reconnu en Laravel, Flutter et Java. Basé à Beni en République Démocratique du Congo, j\'ai fondé UZASHOP avec la vision de créer des solutions technologiques adaptées au contexte africain.') }}
                        </p>

                        <p class="text-gray-600 leading-relaxed">
                            {{ __('Mon expertise se concentre sur la création d\'ERP multisectoriels qui répondent aux besoins spécifiques des entreprises africaines. De la santé à l\'hôtellerie, en passant par l\'agriculture, mes solutions intègrent la synchronisation hors ligne et des interfaces utilisateur intuitives pour maximiser l\'efficacité opérationnelle.') }}
                        </p>

                        <!-- Key Points -->
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                <span
                                    class="text-gray-700">{{ __('Expert Laravel & Flutter avec 5+ années d\'expérience') }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-blue-600 mr-3"></i>
                                <span class="text-gray-700">{{ __('PDG et fondateur d\'UZASHOP') }}</span>
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
                                    <span class="text-gray-600 ml-2">Beni, RDC</span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-700">{{ __('messages.Email:') }}</span>
                                    <span class="text-gray-600 ml-2">justin.fimbo@uzashop.com</span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-700">{{ __('messages.Entreprise:') }}</span>
                                    <span class="text-gray-600 ml-2">UZASHOP</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Visual Content -->
                    <div class="relative">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-4">
                                <div class="bg-blue-100 p-6 rounded-lg card-hover">
                                    <i class="fas fa-code text-blue-600 text-3xl mb-4"></i>
                                    <h4 class="font-semibold text-gray-900 mb-2">{{ __('messages.Développement') }}</h4>
                                    <p class="text-sm text-gray-600">
                                        {{ __('messages.Applications web & mobiles modernes') }}</p>
                                </div>
                                <div class="bg-orange-100 p-6 rounded-lg card-hover">
                                    <i class="fas fa-chart-line text-orange-600 text-3xl mb-4"></i>
                                    <h4 class="font-semibold text-gray-900 mb-2">{{ __('messages.Business') }}</h4>
                                    <p class="text-sm text-gray-600">{{ __('messages.Solutions ERP sur mesure') }}</p>
                                </div>
                            </div>
                            <div class="space-y-4 mt-8">
                                <div class="bg-green-100 p-6 rounded-lg card-hover">
                                    <i class="fas fa-mobile-alt text-green-600 text-3xl mb-4"></i>
                                    <h4 class="font-semibold text-gray-900 mb-2">{{ __('messages.Mobile') }}</h4>
                                    <p class="text-sm text-gray-600">{{ __('messages.Apps Flutter natives') }}</p>
                                </div>
                                <div class="bg-purple-100 p-6 rounded-lg card-hover">
                                    <i class="fas fa-rocket text-purple-600 text-3xl mb-4"></i>
                                    <h4 class="font-semibold text-gray-900 mb-2">{{ __('messages.Innovation') }}</h4>
                                    <p class="text-sm text-gray-600">{{ __('messages.Technologies de pointe') }}</p>
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

                <!-- Skills Grid -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-16">
                    <!-- Laravel -->
                    <div class="bg-white p-6 rounded-lg shadow-md card-hover text-center">
                        <div class="w-16 h-16 mx-auto mb-4 bg-red-100 rounded-lg flex items-center justify-center">
                            <i class="fab fa-laravel text-red-600 text-2xl"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Laravel</h3>
                        <p class="text-sm text-gray-600">{{ __('messages.Framework PHP') }}</p>
                    </div>

                    <!-- Flutter -->
                    <div class="bg-white p-6 rounded-lg shadow-md card-hover text-center">
                        <div class="w-16 h-16 mx-auto mb-4 bg-blue-100 rounded-lg flex items-center justify-center">
                            <i class="fab fa-flutter text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Flutter</h3>
                        <p class="text-sm text-gray-600">{{ __('messages.Apps mobiles') }}</p>
                    </div>

                    <!-- Java -->
                    <div class="bg-white p-6 rounded-lg shadow-md card-hover text-center">
                        <div class="w-16 h-16 mx-auto mb-4 bg-orange-100 rounded-lg flex items-center justify-center">
                            <i class="fab fa-java text-orange-600 text-2xl"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Java</h3>
                        <p class="text-sm text-gray-600">{{ __('messages.Android natif') }}</p>
                    </div>

                    <!-- API REST -->
                    <div class="bg-white p-6 rounded-lg shadow-md card-hover text-center">
                        <div class="w-16 h-16 mx-auto mb-4 bg-green-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-code text-green-600 text-2xl"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">API REST</h3>
                        <p class="text-sm text-gray-600">{{ __('messages.Services web') }}</p>
                    </div>

                    <!-- MySQL -->
                    <div class="bg-white p-6 rounded-lg shadow-md card-hover text-center">
                        <div class="w-16 h-16 mx-auto mb-4 bg-blue-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-database text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">MySQL</h3>
                        <p class="text-sm text-gray-600">{{ __('messages.Base de données') }}</p>
                    </div>

                    <!-- Git -->
                    <div class="bg-white p-6 rounded-lg shadow-md card-hover text-center">
                        <div class="w-16 h-16 mx-auto mb-4 bg-gray-100 rounded-lg flex items-center justify-center">
                            <i class="fab fa-git-alt text-gray-600 text-2xl"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Git</h3>
                        <p class="text-sm text-gray-600">{{ __('messages.Contrôle de version') }}</p>
                    </div>

                    <!-- Docker -->
                    <div class="bg-white p-6 rounded-lg shadow-md card-hover text-center">
                        <div class="w-16 h-16 mx-auto mb-4 bg-blue-100 rounded-lg flex items-center justify-center">
                            <i class="fab fa-docker text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Docker</h3>
                        <p class="text-sm text-gray-600">{{ __('messages.Conteneurisation') }}</p>
                    </div>

                    <!-- UX/UI -->
                    <div class="bg-white p-6 rounded-lg shadow-md card-hover text-center">
                        <div class="w-16 h-16 mx-auto mb-4 bg-purple-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-palette text-purple-600 text-2xl"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">UX/UI</h3>
                        <p class="text-sm text-gray-600">{{ __('messages.Design utilisateur') }}</p>
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
                        {{ __('Prêt à discuter de votre prochain projet ? N\'hésitez pas à me contacter !') }}
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
                                    <div class="text-blue-200">justin.fimbo@uzashop.com</div>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-blue-700 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-phone text-xl"></i>
                                </div>
                                <div>
                                    <div class="font-medium">{{ __('messages.Téléphone') }}</div>
                                    <div class="text-blue-200">+243 123 456 789</div>
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
                                <a href="https://wa.me/243123456789" target="_blank"
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
