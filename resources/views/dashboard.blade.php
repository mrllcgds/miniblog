<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Beige Pages</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="m-0 p-0 min-h-screen bg-cover bg-center font-sans flex flex-col" 
    style="
        background-image: url('{{ asset('images/dashboard_bg.jpg') }}'); 
        background-size: cover;
        background-position: center;
        text-shadow: 1px 1px 3px black;
    ">

    {{-- Header --}}
    @include('template.header')

    {{-- Dashboard content --}}

    <main class="flex-grow flex flex-col justify-center items-center text-center px-6">
        <h1 class="font-['Fredoka',sans-serif] text-[80px] text-[#F5DEB3] drop-shadow-lg">
            Welcome back!
        </h1>

        <p class="font-sans font-bold text-[#F5DEB3] text-[30px] mb-4 drop-shadow-md">
            {{ __("You're logged in!") }}
        </p>

        <div class="flex gap-4 mt-6">
            <a href="{{ route('posts.index') }}" 
               class="bg-[#4F709C] px-6 py-3 rounded-[15px] text-white font-bold no-underline hover:bg-[#3B5A82] transition-colors">
               Go to Posts
            </a>
        </div>

        {{-- User info below button --}}
        <div class="mt-14 text-[#f5deb3] font-bold text-lg">
            <p class="text-[30px] font-['Fredoka',sans-serif]">What's up, {{ auth()->user()->name }}?</p>
            <p class="mt-3">You're using {{ auth()->user()->email }} for this account.</p>
        </div>

    </main>

    {{-- Footer --}}
    @include('template.footer')

</body>
</html>
