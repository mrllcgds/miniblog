{{--Profile --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings | Beige Pages</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="m-0 p-0 min-h-screen bg-cover bg-center font-sans flex flex-col" 
      style="background-image: url('{{ asset('images/dashboard_bg.jpg') }}'); text-shadow: 1px 1px 3px black;">

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

    {{-- Profile Content --}}
    <main class="flex-grow flex flex-col items-center px-6 py-12 text-center">

        <h1 class="font-['Fredoka',sans-serif] text-[60px] text-[#f5deb3] mb-8 drop-shadow-lg">
            Profile Settings
        </h1>

        <div class="w-full max-w-4xl space-y-8">
            <div class="p-6 bg-white rounded-lg shadow-lg">
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="p-6 bg-white rounded-lg shadow-lg">
                @include('profile.partials.update-password-form')
            </div>

            <div class="p-6 bg-white rounded-lg shadow-lg">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </main>

    {{-- Footer --}}
    @include('template.footer')

</body>
</html>
