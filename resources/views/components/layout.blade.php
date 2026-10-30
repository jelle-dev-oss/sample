<<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title', 'My website')</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

<body class="min-h-screen bg-gray-100">
    <div class="flex flex-col min-h-screen">
        <header class="bg-white shadow">
            <div class="container mx-auto px-4 py-6">
                <h1 class="text-2xl font-bold text-gray-800">My Website</h1>
            </div>
        </header>

        <main class="flex-grow container mx-auto px-4 py-6">
            @yield('content')
        </main>

        <footer class="bg-white shadow mt-auto">
            <div class="container mx-auto px-4 py-6 text-center text-gray-600">
                &copy; {{ date('Y') }} My Website. All rights reserved.
            </div>
        </footer>
    </div>

</body>
</html>