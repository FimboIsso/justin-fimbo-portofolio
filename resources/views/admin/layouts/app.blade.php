<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - {{ config('app.name', 'Portfolio') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/trix@2.1.1/dist/trix.css">
    <script src="https://unpkg.com/trix@2.1.1/dist/trix.umd.min.js" defer></script>
</head>

<body class="bg-gray-50 text-gray-900">
    <nav class="glass-nav fixed top-0 left-0 right-0 z-40">
        <div class="max-w-6xl mx-auto px-4 h-14 flex items-center justify-between">
            <a href="{{ route('admin.posts.index') }}" class="font-semibold">Admin • Blog</a>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button class="text-sm text-gray-700 hover:text-blue-600">Se déconnecter</button>
            </form>
        </div>
    </nav>
    <main class="max-w-6xl mx-auto px-4 pt-20 pb-12">
        @if (session('success'))
            <div class="mb-4 bg-green-50 text-green-700 px-4 py-3 rounded">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
            <div class="mb-4 bg-red-50 text-red-700 px-4 py-3 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield('content')
    </main>
</body>

</html>
