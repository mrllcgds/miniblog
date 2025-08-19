{{-- resources/views/auth/register.blade.php --}}
<!DOCTYPE html>
<html lang="en" class="h-full bg-[#1a1a1a] text-[#f5deb3]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Beige Pages</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="h-full flex flex-col items-center justify-center font-sans" style="font-family: 'Fredoka', sans-serif;">

    {{-- Header --}}
    <header class="fixed top-0 left-0 w-full p-4 bg-transparent z-50">
        <nav class="flex justify-between items-center">
            <!-- Logo title -->
            <h1 class="ml-24 mt-0 text-[30px] text-[#f5deb3] font-['Fredoka',sans-serif]">
                Beige Pages
            </h1>

            <!-- Navigation links -->
            <div class="flex items-center gap-8 mr-24 mt-2 font-sans font-bold">
                <a href="{{ url('/') }}" class="text-[#f5deb3] no-underline text-lg">Home</a>
                <a href="{{ url('/login') }}" class="text-[#f5deb3] no-underline text-lg">Login</a>
            </div>
        </nav>
    </header>

    {{-- Registration Form --}}
    <div class="max-w-sm w-full text-center mt-20">
        <h2 class="mb-6 text-2xl font-bold">Create Your Account</h2>

        <form class="space-y-4" method="POST" action="{{ route('register') }}">
            @csrf

            {{-- Name --}}
            <input type="text" name="name" placeholder="Name"
                class="w-full p-3 rounded-lg text-black"
                value="{{ old('name') }}" required autofocus>

            @error('name')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            {{-- Email --}}
            <input type="email" name="email" placeholder="Email"
                class="w-full p-3 rounded-lg text-black"
                value="{{ old('email') }}" required>

            @error('email')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            {{-- Password --}}
            <input type="password" name="password" placeholder="Password"
                class="w-full p-3 rounded-lg text-black" required>

            @error('password')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            {{-- Confirm Password --}}
            <input type="password" name="password_confirmation" placeholder="Confirm Password"
                class="w-full p-3 rounded-lg text-black" required>

            @error('password_confirmation')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            {{-- Submit Button --}}
            <button type="submit"
                class="bg-[#f5deb3] text-[#1a1a1a] px-6 py-2 rounded-lg font-bold">
                Register
            </button>
        </form>

        <p class="mt-4 text-sm">
            Already have an account? <a href="{{ route('login') }}" class="underline">Login here</a>.
        </p>
    </div>
</body>
</html>
