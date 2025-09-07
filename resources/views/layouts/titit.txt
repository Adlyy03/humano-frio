<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Landing Page')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 dark:bg-gray-800">

    {{-- Navbar --}}
    <x-navbar />

    {{-- Konten utama --}}
    <main>
        {{-- Hero --}}
        @include('components.hero')

        {{-- Bagian Tim / Anggota --}}
        @include('components.anggota')

        {{-- Timeline Cerita --}}
        @include('components.timeline')

        {{-- Skill --}}
        @include('components.skill')
    </main>


        @include('components.p')

    {{-- Footer --}}
    @include('components.footer')

</body>
</html>
