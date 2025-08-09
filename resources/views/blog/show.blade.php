@extends('layouts.app')

@section('title', (app()->getLocale() == 'en' ? $article['title_en'] : $article['title']) . ' - Blog Justin Fimbo')
@section('description', app()->getLocale() == 'en' ? substr($article['content_en'], 0, 160) :
    substr($article['content'], 0, 160))

@section('content')
    <!-- Article Hero -->
    <section class="relative pt-24 pb-12 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 via-purple-600 to-pink-600"></div>
        <div class="absolute inset-0 bg-black/20"></div>

        <!-- Floating shapes -->
        <div class="absolute top-20 left-10 w-32 h-32 bg-white/10 rounded-full morphing-shape"></div>
        <div class="absolute bottom-20 right-10 w-24 h-24 bg-white/10 rounded-full morphing-shape"
            style="animation-delay: -4s;"></div>

        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="fade-in-up">
                <!-- Breadcrumb -->
                <nav class="mb-8">
                    <ol class="flex items-center space-x-2 text-sm text-white/80">
                        <li><a href="{{ route('portfolio.index') }}"
                                class="hover:text-white transition-colors">{{ __('messages.Accueil') }}</a></li>
                        <li><i class="fas fa-chevron-right text-xs"></i></li>
                        <li><a href="{{ route('blog.index') }}"
                                class="hover:text-white transition-colors">{{ __('messages.Blog') }}</a></li>
                        <li><i class="fas fa-chevron-right text-xs"></i></li>
                        <li class="text-white">{{ __('messages.Article') }}</li>
                    </ol>
                </nav>

                <!-- Article Meta -->
                <div class="flex flex-wrap items-center gap-4 mb-6">
                    <div class="flex flex-wrap gap-2">
                        @foreach ($article['tags'] as $tag)
                            <span class="px-3 py-1 bg-white/20 backdrop-blur-sm text-white text-sm rounded-full">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>

                    <div class="flex items-center text-white/80 text-sm">
                        <i class="fas fa-clock mr-2"></i>
                        {{ $article['reading_time'] }} {{ __('messages.min de lecture') }}
                    </div>

                    <div class="flex items-center text-white/80 text-sm">
                        <i class="fas fa-calendar mr-2"></i>
                        {{ date('d M Y', strtotime($article['published_at'])) }}
                    </div>
                </div>

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                    {{ app()->getLocale() == 'en' ? ($article['title_en'] ?: $article['title']) : $article['title'] }}
                </h1>

                <!-- Author -->
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                        <span class="text-white font-bold">JF</span>
                    </div>
                    <div class="ml-4">
                        <p class="text-white font-medium">{{ $article['author'] }}</p>
                        <p class="text-white/80 text-sm">{{ __('messages.Développeur & Entrepreneur') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Main Content -->
                <article class="lg:flex-1">
                    @if (!empty($article['image']))
                        <div class="mb-6 rounded-xl overflow-hidden shadow">
                            <img src="/{{ $article['image'] }}" alt="{{ $article['title'] }}"
                                class="w-full h-64 object-cover">
                        </div>
                    @endif
                    <div class="prose prose-lg max-w-none">
                        {!! app()->getLocale() == 'en' ? $article['content_en'] : $article['content'] !!}
                    </div>

                    <!-- Article Footer -->
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <!-- Share Buttons -->
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('messages.Partager cet article') }}
                            </h3>
                            <div class="flex space-x-4">
                                @php($url = urlencode(url()->current()))
                                @php($title = urlencode(app()->getLocale() == 'en' ? ($article['title_en'] ?: $article['title']) : $article['title']))
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" target="_blank"
                                    class="flex items-center justify-center w-10 h-10 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition-colors duration-200">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ $url }}&text={{ $title }}"
                                    target="_blank"
                                    class="flex items-center justify-center w-10 h-10 bg-blue-400 text-white rounded-full hover:bg-blue-500 transition-colors duration-200">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $url }}&title={{ $title }}"
                                    target="_blank"
                                    class="flex items-center justify-center w-10 h-10 bg-blue-700 text-white rounded-full hover:bg-blue-800 transition-colors duration-200">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://wa.me/?text={{ $title }}%20-%20{{ $url }}"
                                    target="_blank"
                                    class="flex items-center justify-center w-10 h-10 bg-green-600 text-white rounded-full hover:bg-green-700 transition-colors duration-200">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Author Bio -->
                        <div class="glass-card p-6">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-white font-bold text-lg">JF</span>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-lg font-semibold text-gray-900 mb-2">{{ $article['author'] }}</h4>
                                    <p class="text-gray-600 text-sm mb-3">
                                        {{ __('messages.Développeur informatique confirmé et PDG d\'UZASHOP, spécialisé dans la création d\'ERP multisectoriels adaptés au contexte africain.') }}
                                    </p>
                                    <div class="flex space-x-3">
                                        <a href="https://linkedin.com/in/justin-fimbo" target="_blank"
                                            class="text-gray-400 hover:text-blue-600 transition-colors duration-200">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="https://github.com/justin-fimbo" target="_blank"
                                            class="text-gray-400 hover:text-gray-900 transition-colors duration-200">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        <a href="mailto:justin.fimbo@uzashop.com"
                                            class="text-gray-400 hover:text-red-600 transition-colors duration-200">
                                            <i class="fas fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Sidebar -->
                <aside class="lg:w-80 space-y-8">
                    <!-- Related Articles -->
                    <div class="glass-card p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('messages.Articles similaires') }}</h3>
                        <div class="space-y-4">
                            @forelse($related ?? [] as $r)
                                <a href="{{ route('blog.show', $r['slug']) }}" class="flex space-x-3 group">
                                    <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0">
                                        @if (!empty($r['image']))
                                            <img src="/{{ $r['image'] }}" alt="{{ $r['title'] }}"
                                                class="w-full h-full object-cover group-hover:scale-105 transition-transform" />
                                        @else
                                            <div class="w-full h-full bg-gradient-to-br from-blue-500 to-purple-500"></div>
                                        @endif
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h4 class="text-sm font-medium text-gray-900 line-clamp-2 mb-1">
                                            {{ app()->getLocale() == 'en' ? ($r['title_en'] ?: $r['title']) : $r['title'] }}
                                        </h4>
                                        <p class="text-xs text-gray-500">
                                            {{ date('d M Y', strtotime($r['published_at'] ?? date('Y-m-d'))) }}</p>
                                    </div>
                                </a>
                            @empty
                                <p class="text-sm text-gray-500">
                                    {{ __('messages.Aucun article similaire pour le moment') }}</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="gradient-border">
                        <div class="gradient-border-content text-center">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">{{ __('messages.Newsletter') }}</h3>
                            <p class="text-gray-600 text-sm mb-4">{{ __('messages.Recevez mes derniers articles') }}</p>
                            <form class="space-y-3">
                                <input type="email" placeholder="{{ __('messages.Votre email') }}"
                                    class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <button type="submit" class="w-full btn-modern text-sm py-2">
                                    {{ __('messages.S\'abonner') }}
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Table of Contents -->
                    <div class="neumorphism p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('messages.Table des matières') }}</h3>
                        <nav class="space-y-2">
                            <a href="#section1"
                                class="block text-sm text-gray-600 hover:text-blue-600 transition-colors duration-200">
                                1. {{ __('messages.Connectivité Internet Limitée') }}
                            </a>
                            <a href="#section2"
                                class="block text-sm text-gray-600 hover:text-blue-600 transition-colors duration-200">
                                2. {{ __('messages.Adaptation aux Pratiques Locales') }}
                            </a>
                            <a href="#section3"
                                class="block text-sm text-gray-600 hover:text-blue-600 transition-colors duration-200">
                                3. {{ __('messages.Formation et Adoption') }}
                            </a>
                        </nav>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- Navigation to other articles -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <a href="{{ route('blog.index') }}"
                    class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium transition-colors duration-200">
                    <i class="fas fa-arrow-left mr-2"></i>
                    {{ __('messages.Retour au blog') }}
                </a>

                <div class="flex items-center gap-4">
                    @if (!empty($prev))
                        <a href="{{ route('blog.show', $prev['slug']) }}"
                            class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium transition-colors duration-200">
                            <i class="fas fa-arrow-left mr-2"></i>
                            {{ __('messages.Article précédent') }}
                        </a>
                    @endif
                    @if (!empty($next))
                        <a href="{{ route('blog.show', $next['slug']) }}"
                            class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium transition-colors duration-200">
                            {{ __('messages.Article suivant') }}
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

@push('head')
    <style>
        .prose h3 {
            color: #1f2937;
            font-weight: 600;
            font-size: 1.25rem;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .prose p {
            margin-bottom: 1rem;
            line-height: 1.7;
            color: #4b5563;
        }

        .prose ul {
            margin: 1rem 0;
            padding-left: 1.5rem;
        }

        .prose li {
            margin-bottom: 0.5rem;
            color: #4b5563;
        }
    </style>
@endpush
