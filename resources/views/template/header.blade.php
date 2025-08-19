<header class="p-4 bg-transparent">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&display=swap" rel="stylesheet">
    <nav class="flex justify-between items-center">
        <!-- Logo title aligned to the left -->
        <h1 class="ml-24 mt-0 text-[30px] text-[#f5deb3] font-['Fredoka',sans-serif]">
            Beige Pages
        </h1>

        <!-- nav links to the right -->
        <div class="flex items-center gap-8 mr-24 mt-2 mb-auto font-fredoka font-bold">
            @auth
                <a href="{{ url('/profile') }}" class="text-[#f5deb3] font-['Fredoka',sans-serif] no-underline">Profile</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="bg-[#4F709C] px-6 py-1 rounded-[15px] text-white font-bold no-underline hover:bg-[#3B5A82] transition-colors">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ url('/login') }}" class="text-[#f5deb3] no-underline text-lg">Login</a>
                <a href="{{ url('/register') }}" class="text-[#f5deb3] no-underline text-lg">Register</a>
            @endauth
        </div>
    </nav>
</header>
