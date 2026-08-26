<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <nav class="bg-white border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <a href="{{ route('dashboard') }}" class="text-xl font-bold text-gray-800">
                            Parijs Website
                        </a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('news.index') }}" class="text-gray-700 hover:text-gray-900">Nieuws</a>
                        @auth
                            @if(auth()->user()->email === 'admin@ehb.be')
                                <a href="{{ route('admin.users') }}" class="text-gray-700 hover:text-gray-900">Admin panel</a>
                            @endif
                            <a href="{{ route('profile.show', auth()->user()->id) }}" class="text-gray-700 hover:text-gray-900">Mijn profiel</a>
                            <form action="{{ route('logout') }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="text-gray-700 hover:text-gray-900">Uitloggen</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900">Inloggen</a>
                            <a href="{{ route('register') }}" class="text-gray-700 hover:text-gray-900">Registreren</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>