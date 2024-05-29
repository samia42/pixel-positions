<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-grotesk">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src ={{Vite::asset('resources/images/logo.svg')}} >
                </a>

            </div>
            <div class="space-x-6 font-bold">
                <a herf="#">Jobs</a>
                <a herf="#">Careers</a>
                <a herf="#">Salaries</a>
                <a herf="#">Companies</a>
            </div>
            @auth
            <div class="space-x-6 font-bold flex">
                <a href="/jobs/create">Post a job</a>
                <form method="POST" action="/logout">
                    @csrf
                    @method("DELETE")
                    <button>Logout</button>
                </form>
            </div>
            @endauth
            @guest
                <div class="space-x-6 font-bold">
                    <a href='/register'>Sign Up</a>
                    <a href='/login'>Login</a>
                </div>
            @endguest

        </nav>
        <main class="mt-10 max-w-[986px] m-auto">
            {{$slot}}
        </main>
    </div>

</body>
</html>
