<!DOCTYPE html>
<html lang="en" class="h-full bg-[#1a1a1a] text-[#f5deb3]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Beige Pages</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="h-full flex flex-col items-center justify-center font-sans" style="font-family: 'Fredoka', sans-serif;">

{{-- Login Header --}}
<header class="fixed top-0 left-0 w-full p-4 bg-transparent z-50">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&display=swap" rel="stylesheet">
    <nav class="flex justify-between items-center">
        
        <!-- Logo title aligned to the left -->
        <h1 class="ml-24 mt-0 text-[30px] text-[#f5deb3] font-['Fredoka',sans-serif]">
            Beige Pages
        </h1>

        <!-- nav links to the right -->
        <div class="flex items-center gap-8 mr-24 mt-2 font-sans font-bold">
            <a href="{{ url('/') }}" class="text-[#f5deb3] no-underline text-lg">Home</a>
            <a href="{{ url('/register') }}" class="text-[#f5deb3] no-underline text-lg">Register</a>
        </div>
    </nav>
</header>

    <div class="max-w-sm w-full text-center">
        <h2 class="mb-6 text-2xl font-bold">Login to Your Account</h2>

        @if (session('status'))
            <div class="mb-4 text-green-500">
                {{ session('status') }}
            </div>
        @endif

        <form class="space-y-4" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- login errors -->
            @if ($errors->any())
            <div class="bg-red-100 text-red-700 px-4 py-2 rounded-lg">
                {{ $errors->first() }}
            </div>
            @endif

            
            <input type="email" name="email" placeholder="Email" class="w-full p-3 rounded-lg text-black" required>
            <input type="password" name="password" placeholder="Password" class="w-full p-3 rounded-lg text-black" required>

            <button type="submit" class="bg-[#f5deb3] text-[#1a1a1a] px-6 py-2 rounded-lg font-bold">
                Login
            </button>
        </form>

        <p class="mt-8 text-sm">
            Don’t have an account? <a href="{{ route('register') }}" class="underline">Register here</a>.
        </p>
    </div>
</body>
</html>
