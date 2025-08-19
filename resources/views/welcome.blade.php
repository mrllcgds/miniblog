<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Beige Pages</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="m-0 p-0 min-h-screen bg-cover bg-center font-sans flex flex-col" 
      style="background-image: url('{{ asset('images/miniblog_bg_initial.jpg') }}'); text-shadow: 1px 1px 3px black;">

    {{-- Header --}}
    @include('template.header')
    

    {{-- Main welcome content --}}
    <main class="flex-grow flex flex-col justify-center items-center text-center px-6">
       

        <h1 class="font-['Fredoka',sans-serif] text-[80px] text-[#f5deb3] mb-2 drop-shadow-lg">
            Welcome to Beige Pages!
        </h1>

        <p class="font-sans font-bold text-[#fdf5e6] text-[30px] mb-4 drop-shadow-md">
            Explore posts, share your thoughts...
        </p>

        <p class="font-sans text-[#fdf5e6] text-[20px] max-w-xl drop-shadow-sm mb-6">
            Join today and start posting!
        </p>

        @auth
            <a href="{{ route('posts.index') }}" 
               class="mt-5 bg-[#4F709C] px-6 py-3 rounded-[15px] text-white font-bold no-underline hover:bg-[#3B5A82] transition-colors">
               Go to Blog
            </a>
            <form action="{{ route('logout') }}" method="POST" class="mt-4">
                @csrf
                <button type="submit" 
                        class="bg-transparent border-none text-[#f5deb3] cursor-pointer font-bold hover:underline">
                    Logout
                </button>
            </form>
        @else
            <div class="flex gap-4 mt-6">
                <a href="{{ route('login') }}" 
                   class="bg-[#4F709C] px-6 py-3 rounded-[15px] text-white font-bold no-underline hover:bg-[#3B5A82] transition-colors">
                   Login
                </a>
                <a href="{{ route('register') }}" 
                   class="bg-[#4F709C] px-6 py-3 rounded-[15px] text-white font-bold no-underline hover:bg-[#3B5A82] transition-colors">
                   Get Started
                </a>
            </div>
        @endauth
    </main>

    @include('template.footer')
    
</body>
</html>
