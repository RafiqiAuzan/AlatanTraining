@props(['class' => ''])

<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="icon" href="img/alatanlogo.png" type="image/ico">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web\css\all.min.css') }}">
        <link href="/flaticon-uicons/src/uicons/css/all/all.css" rel="stylesheet">
        <!-- Styles -->
        @vite('resources/css/app.css')
</head>

{{-- Section Body --}}
<div id="main" class="">
    {{ $slot }}
</div>

{{-- Footer --}}
<x-atoms.footer></x-atoms.footer>

</html>