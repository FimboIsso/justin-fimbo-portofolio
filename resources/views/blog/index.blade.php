@extends('layouts.app')

@section('title', 'Blog - Justin Fimbo')
@section('description', 'Articles de blog sur le développement, les technologies et l\'entrepreneuriat par Justin Fimbo,
    développeur et PDG d\'UZASHOP.')

@section('content')
    <!-- Blog Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <div class="gradient-shift absolute inset-0"></div>
            <div class="absolute inset-0 bg-black/20"></div>

            <!-- Floating Elements -->
            <div class="floating-element w-20 h-20 bg-white/10 rounded-full top-20 left-10"></div>
            <div class="floating-element w-32 h-32 bg-white/10 rounded-full top-40 right-20"></div>
            <div class="floating-element w-16 h-16 bg-white/10 rounded-full bottom-32 left-1/4"></div>
            <div class="floating-element w-24 h-24 bg-white/10 rounded-full bottom-20 right-1/3"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div >
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6">
                    <span class="text-glow">{{ __('messages.Mon Blog') }}</span>
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    {{ __('messages.Découvrez mes articles sur le développement, les technologies et l\'entrepreneuriat') }}
                </p>
                <div class="flex justify-center">
                    <a href="#articles" class="btn-modern inline-flex items-center">
                        <i class="fas fa-scroll mr-2"></i>
                        {{ __('messages.Lire les articles') }}
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#articles" class="text-white/70 hover:text-white transition-colors duration-200">
                <i class="fas fa-chevron-down text-2xl"></i>
            </a>
        </div>
    </section>

    <!-- Blog Articles Section -->
    <section id="articles" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Featured Articles -->
            <div class="mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8 text-center">
                    {{ __('messages.Articles en vedette') }}
                </h2>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-8">
                    @foreach ($articles->where('featured', true) as $article)
                        <article class="glass-card p-0 overflow-hidden card-hover">
                            <div class="relative h-64 md:h-80 overflow-hidden">
                                <img src="{{ asset($article['image']) }}"
                                    alt="{{ app()->getLocale() == 'en' ? $article['title_en'] : $article['title'] }}"
                                    class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black/20"></div>

                                <!-- Article Badge -->
                                <div class="absolute top-4 left-4">
                                    <span class="bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                        {{ __('messages.Article vedette') }}
                                    </span>
                                </div>

                                <!-- Reading Time -->
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white/20 backdrop-blur-sm text-white px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-clock mr-1"></i>
                                        {{ $article['reading_time'] }} min
                                    </span>
                                </div>
                            </div>

                            <div class="p-4">
                                <div class="flex flex-wrap gap-2 mb-3">
                                    @foreach ($article['tags'] as $tag)
                                        <span class="px-2 py-1 bg-gray-100 text-black text-xs font-medium rounded-full">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>

                                <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2">
                                    {{ app()->getLocale() == 'en' ? $article['title_en'] : $article['title'] }}
                                </h3>

                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    {{ app()->getLocale() == 'en' ? $article['excerpt_en'] : $article['excerpt'] }}
                                </p>

                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div
                                            class="w-10 h-10 bg-gradient-to-r from-black to-purple-500 rounded-full flex items-center justify-center">
                                            <span class="text-white font-bold text-sm">JF</span>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-gray-900">{{ $article['author'] }}</p>
                                            <p class="text-xs text-gray-500">
                                                {{ date('d M Y', strtotime($article['published_at'])) }}</p>
                                        </div>
                                    </div>

                                    <a href="{{ route('blog.show', $article['slug']) }}"
                                        class="inline-flex items-center text-black hover:text-gray-800 font-medium text-sm transition-colors duration-200">
                                        {{ __('messages.Lire plus') }}
                                        <i class="fas fa-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>

            <!-- All Articles -->
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8 text-center">
                    {{ __('messages.Tous les articles') }}
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($articles as $article)
                        <article class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                            <div class="relative h-48 overflow-hidden">
                                <img src="{{ asset($article['image']) }}"
                                    alt="{{ app()->getLocale() == 'en' ? $article['title_en'] : $article['title'] }}"
                                    class="w-full h-full object-cover">

                                <!-- Reading Time -->
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white/20 backdrop-blur-sm text-white px-2 py-1 rounded-full text-xs">
                                        {{ $article['reading_time'] }} min
                                    </span>
                                </div>
                            </div>

                            <div class="p-4">
                                <div class="flex flex-wrap gap-1 mb-3">
                                    @foreach (array_slice($article['tags'], 0, 3) as $tag)
                                        <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>

                                <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2">
                                    {{ app()->getLocale() == 'en' ? $article['title_en'] : $article['title'] }}
                                </h3>

                                <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                    {{ app()->getLocale() == 'en' ? $article['excerpt_en'] : $article['excerpt'] }}
                                </p>

                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div
                                            class="w-8 h-8 bg-gradient-to-r from-black to-purple-500 rounded-full flex items-center justify-center">
                                            <span class="text-white font-bold text-xs">JF</span>
                                        </div>
                                        <div class="ml-2">
                                            <p class="text-xs text-gray-500">
                                                {{ date('d M Y', strtotime($article['published_at'])) }}</p>
                                        </div>
                                    </div>

                                    <a href="{{ route('blog.show', $article['slug']) }}"
                                        class="text-black hover:text-gray-800 text-sm font-medium transition-colors duration-200">
                                        {{ __('messages.Lire') }} →
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>

            <!-- Newsletter Subscription -->
            <div class="mt-16">
                <div class="gradient-border max-w-4xl mx-auto">
                    <div class="gradient-border-content text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">
                            {{ __('messages.Restez informé') }}
                        </h3>
                        <p class="text-gray-600 mb-6">
                            {{ __('messages.Recevez les derniers articles directement dans votre boîte mail') }}
                        </p>

                        <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                            <input type="email" placeholder="{{ __('messages.Votre adresse email') }}"
                                class="flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <button type="submit" class="btn-modern whitespace-nowrap">
                                {{ __('messages.S\'abonner') }}
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
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endpush
