<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} | GoBlog</title>
    <meta name="description" content="Get started, join with anti GoBlog army.">

    @vite('resources/css/app.css')
</head>

<body class="h-full">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <a href="/">
                <img class="mx-auto h-20 w-auto" src="{{ Vite::asset('resources/images/logo.svg') }}"
                    alt="Your Company"></a>
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
                @if (request()->is('login'))
                    Let's rock. Login first!
                @else
                    Join now. Write then
                @endif
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            {{ $slot }}

            @if (request()->is('login'))
                <p class="mt-10 text-center text-sm text-gray-500">
                    Not a member?
                    <a href="/signup" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Register
                        now</a>
                </p>
            @else
                <p class="mt-10 text-center text-sm text-gray-500">
                    Already have an account?
                    <a href="/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Login
                        here</a>
                </p>
            @endif
        </div>
    </div>

</body>

</html>
