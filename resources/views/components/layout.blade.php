<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel positions</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,400..600;1,100..600&display=swap"
        rel="stylesheet">
</head>

<body class="bg-black text-white font-hanken-grotesk pb-10">
    {{-- TODO: add your portfolio link in here --}}
    <div class="w-full h-8 bg-red-800/50 flex justify-center items-center">this is an portfolio project with randome
        fake data and links 👨‍💻</div>
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            @auth
                <div class="space-x-4 font-bold flex">
                    <a href="/jobs/create">Post a Job</a>
                    <form action="/login" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Log out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-4 font-bold">
                    <a class="'bg-blue-800 rounded font-bold'" href="/register">Register</a>
                    <a class="'bg-blue-800 rounded font-bold'" href="/login">login</a>
                </div>
            @endguest
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>


</body>

</html>
