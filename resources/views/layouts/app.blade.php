<!DOCTYPE html>
<html lang="en" class="min-h-full bg-[#1a1a1a] text-[#f5deb3]" style="font-family: 'Fredoka', sans-serif;">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Beige Pages</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="//unpkg.com/alpinejs" defer></script>

</head>
<body class="min-h-screen flex flex-col bg-cover bg-center" style="text-shadow: 1px 1px 3px black;">

    {{-- Header --}}
    <header class="flex justify-between items-center px-24 py-9 bg-transparent">
        <h1 class="text-3xl font-bold text-[#f5deb3]">Beige Pages</h1>
        <nav class="flex items-center gap-8 font-bold text-[#f5deb3]">
            @auth
                <a href="{{ route('posts.index') }}" class="hover:underline py-2">Home</a>
                <a href="{{ route('profile') }}" class="hover:underline py-2">Profile</a>
                <a href="{{ route('posts.create') }}" class="hover:underline py-2">Create Post</a>
                <a href="{{ url('/profile-settings') }}" class="hover:underline py-2">Settings</a>

                <form action="{{ route('logout') }}" method="POST" class="inline-flex items-center">
                    @csrf
                    <button type="submit" 
                        class="hover:underline cursor-pointer bg-[#4F709C] px-6 py-2 rounded-[15px] text-white font-bold no-underline hover:bg-[#3B5A82] transition-colors">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="hover:underline py-2">Login</a>
                <a href="{{ route('register') }}" class="hover:underline py-2">Register</a>
            @endauth
        </nav>
    </header>


    {{-- Main Content --}}
    <main class="flex-grow px-6 py-8 max-w-7xl mx-auto">
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-600 text-white rounded shadow">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="text-center py-4 text-[#f5deb3] text-sm drop-shadow-sm">
        &copy; {{ date('Y') }} Beige Pages. All rights reserved.
    </footer>

</body>
</html>
