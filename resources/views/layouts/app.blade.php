<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'InnovQube') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-100 bg-background">
    <nav class="bg-primary text-white p-4">
        <div class="container mx-auto flex justify-between">
            <a href="{{ url('/') }}" class="text-xl font-bold">{{ config('app.name') }}</a>
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}" class="mr-4">Dashboard</a>
                    <a href="{{ route('profile.edit') }}" class="mr-4">Profile</a> <!-- Add Profile Link -->
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="mr-4">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        </div>
    </nav>
    <main class="container mx-auto py-6 ">
        @yield('content')
    </main>
    @livewireScripts
</body>
</html>