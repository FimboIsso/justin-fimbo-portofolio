<!-- Footer -->
<footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- About Section -->
            <div class="col-span-1 md:col-span-2">
                <div class="mb-4">
                    <h3 class="text-2xl font-bold gradient-text mb-2">Justin Fimbo</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        {{ __('messages.Développeur informatique confirmé et PDG d\'UZASHOP, basé à Beni, RDC. Expert en Laravel, Flutter et Java, spécialisé dans la création d\'ERP multisectoriels adaptés au contexte africain.') }}
                    </p>
                </div>

                <!-- Social Links -->
                <div class="flex space-x-4">
                    <a href="https://linkedin.com/in/justin-fimbo" target="_blank"
                        class="text-gray-400 hover:text-white transition-colors duration-200">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </a>
                    <a href="https://github.com/justin-fimbo" target="_blank"
                        class="text-gray-400 hover:text-white transition-colors duration-200">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="mailto:fimbo.isso@uzashop.co"
                        class="text-gray-400 hover:text-white transition-colors duration-200">
                        <i class="fas fa-envelope text-xl"></i>
                    </a>
                    <a href="https://twitter.com/justin_fimbo" target="_blank"
                        class="text-gray-400 hover:text-white transition-colors duration-200">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="https://wa.me/243997643592" target="_blank"
                        class="text-gray-400 hover:text-white transition-colors duration-200">
                        <i class="fab fa-whatsapp text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold mb-4">{{ __('messages.Liens rapides') }}</h4>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="#home" class="text-gray-400 hover:text-white transition-colors duration-200">
                            {{ __('messages.Accueil') }}
                        </a>
                    </li>
                    <li>
                        <a href="#about" class="text-gray-400 hover:text-white transition-colors duration-200">
                            {{ __('messages.À propos') }}
                        </a>
                    </li>
                    <li>
                        <a href="#skills" class="text-gray-400 hover:text-white transition-colors duration-200">
                            {{ __('messages.Compétences') }}
                        </a>
                    </li>
                    <li>
                        <a href="#projects" class="text-gray-400 hover:text-white transition-colors duration-200">
                            {{ __('messages.Projets') }}
                        </a>
                    </li>
                    <li>
                        <a href="#experience" class="text-gray-400 hover:text-white transition-colors duration-200">
                            {{ __('messages.Expérience') }}
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="text-gray-400 hover:text-white transition-colors duration-200">
                            {{ __('messages.Contact') }}
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-lg font-semibold mb-4">{{ __('messages.Contact') }}</h4>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-center text-gray-400">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        Beni, Nord-Kivu, RDC
                    </li>
                    <li class="flex items-center text-gray-400">
                        <i class="fas fa-phone mr-2"></i>
                        +243 997 643 592
                    </li>
                    <li class="flex items-center text-gray-400">
                        <i class="fas fa-envelope mr-2"></i>
                        fimbo.isso@uzashop.co
                    </li>
                    <li class="flex items-center text-gray-400">
                        <i class="fas fa-globe mr-2"></i>
                        www.uzashop.co
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="mt-8 pt-8 border-t border-gray-800">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-sm text-gray-400 mb-4 md:mb-0">
                    © {{ date('Y') }} Justin Fimbo. {{ __('messages.Tous droits réservés.') }}
                </div>

                <!-- Additional Links -->
                <div class="flex space-x-6 text-sm">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                        {{ __('messages.Politique de confidentialité') }}
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                        {{ __('messages.Conditions d\'utilisation') }}
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                        {{ __('messages.Mentions légales') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
