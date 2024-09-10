<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>
    <meta name="description" content="You have never been this close to each other, get a close experience while blogging with your audience or favorite writers. Get to know each other better through writing">

    @vite('resources/css/app.css')
</head>

<body >
    <x-navbar.navbar/>
    {{ $slot }}
</body>

</html>
