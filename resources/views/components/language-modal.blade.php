<!-- Language Switcher Modal -->
<div id="language-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg p-6 m-4 max-w-sm w-full transform transition-all">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-900">{{ __('messages.Choisir la langue') }}</h3>
            <button onclick="document.getElementById('language-modal').classList.add('hidden')"
                class="text-gray-400 hover:text-gray-600">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="space-y-2">
            <!-- French -->
            <a href="{{ route('language.switch', 'fr') }}"
                class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 {{ app()->getLocale() == 'fr' ? 'bg-blue-50 border border-blue-200' : '' }}">
                <div class="flex-shrink-0 mr-3">
                    <span class="text-2xl">🇫🇷</span>
                </div>
                <div class="flex-1">
                    <div class="text-sm font-medium text-gray-900">Français</div>
                    <div class="text-xs text-gray-500">French</div>
                </div>
                @if (app()->getLocale() == 'fr')
                    <i class="fas fa-check text-blue-600"></i>
                @endif
            </a>

            <!-- English -->
            <a href="{{ route('language.switch', 'en') }}"
                class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 {{ app()->getLocale() == 'en' ? 'bg-blue-50 border border-blue-200' : '' }}">
                <div class="flex-shrink-0 mr-3">
                    <span class="text-2xl">🇺🇸</span>
                </div>
                <div class="flex-1">
                    <div class="text-sm font-medium text-gray-900">English</div>
                    <div class="text-xs text-gray-500">Anglais</div>
                </div>
                @if (app()->getLocale() == 'en')
                    <i class="fas fa-check text-blue-600"></i>
                @endif
            </a>
        </div>
    </div>
</div>
