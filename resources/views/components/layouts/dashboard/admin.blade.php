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

{{-- Section Navbar --}}
<x-atoms.navbar></x-atoms.navbar>

<div class="bg-[#EEEEEE]">
<div class="container mx-auto pt-20 ">
    <aside id="logo-sidebar" class="fixed z-40 w-56 h-screen px-12 " aria-label="Sidebar">
        <div class="mx-auto h-full overflow-y-auto bg-[#F7F7F7] rounded-lg">
            <ul class="grid gap-2 pt-3 font-medium">
                <li class="flex items-center justify-center">
                    <a href="#" class="text-gray-900 hover:text-gray-100">
                        <span class="">Dashboard</span>
                    </a>
                </li>
                <li class="flex items-center justify-center">
                    <a href="#" class="text-gray-900 hover:text-gray-100">
                        <span class="">Dashboard</span>
                    </a>
                </li>
                <li class="flex items-center justify-center">
                    <a href="#" class="text-gray-900 hover:text-gray-100">
                        <span class="">Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    {{-- Section Body --}}
    <div id="main" class=" ml-48 bg-[#F7F7F7] p-3 mr-12 rounded-lg">
        {{ $slot }}
    </div>
</div>
</div>




{{-- Footer --}}
{{-- <x-atoms.footer></x-atoms.footer> --}}

</html>
