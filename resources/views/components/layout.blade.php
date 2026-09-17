<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'KONSIT' }}</title>
    <meta name="description" content="{{ $description ?? 'KONSIT — Mitra transformasi digital untuk bisnis Anda.' }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-konsit-cream text-konsit-ink font-sans antialiased">

    @include('partials.navbar')

    <main>
        {{ $slot }}
    </main>

    @include('partials.footer')

</body>
</html>
