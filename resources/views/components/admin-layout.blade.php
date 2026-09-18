<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Admin' }} — KONSIT</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-konsit-cream text-konsit-ink font-sans antialiased" x-data="{ sidebarOpen: false }">

    <div class="flex min-h-screen">

        {{-- Sidebar --}}
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'"
               class="fixed lg:static z-40 inset-y-0 left-0 w-64 bg-konsit-navy text-white transition-transform duration-300 flex flex-col">

            <div class="px-6 py-6 border-b border-white/10">
                <span class="text-xl font-extrabold tracking-tight">KON<span class="text-konsit-teal-light">SIT</span></span>
                <p class="text-xs text-white/40 mt-0.5">Admin Panel</p>
            </div>

            <nav class="flex-1 px-4 py-6 space-y-1">
                @php
                    $links = [
                        ['route' => 'dashboard', 'label' => 'Dashboard'],
                        ['route' => 'admin.testimonials.index', 'label' => 'Testimoni'],
                        ['route' => 'admin.client-logos.index', 'label' => 'Logo Klien'],
                        ['route' => 'admin.solutions.index', 'label' => 'Solusi'],
                        ['route' => 'admin.articles.index', 'label' => 'Artikel Insights'],
                        ['route' => 'admin.settings.edit', 'label' => 'Info Kontak'],
                    ];
                @endphp

                @foreach ($links as $link)
                    @php $isActive = \Illuminate\Support\Facades\Route::has($link['route']) && request()->routeIs($link['route'].'*'); @endphp
                    <a href="{{ \Illuminate\Support\Facades\Route::has($link['route']) ? route($link['route']) : '#' }}"
                       class="block rounded-lg px-4 py-2.5 text-sm font-medium transition {{ $isActive ? 'bg-konsit-teal text-white' : 'text-white/70 hover:bg-white/5 hover:text-white' }}">
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </nav>

            <div class="px-4 py-6 border-t border-white/10">
                <a href="{{ url('/') }}" target="_blank"
                   class="block rounded-lg px-4 py-2.5 text-sm font-medium text-white/50 hover:text-white transition">
                    ← Lihat Landing Page
                </a>
            </div>
        </aside>

        <div x-show="sidebarOpen" @click="sidebarOpen = false" x-cloak
             class="fixed inset-0 bg-black/40 z-30 lg:hidden"></div>

        {{-- Konten utama --}}
        <div class="flex-1 flex flex-col min-w-0">

            {{-- Topbar --}}
            <header class="bg-white border-b border-konsit-navy/10 px-6 py-4 flex items-center justify-between">
                <button @click="sidebarOpen = true" class="lg:hidden text-konsit-navy">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <h1 class="text-lg font-bold text-konsit-navy">{{ $title ?? 'Dashboard' }}</h1>

                <div class="flex items-center gap-4">
                    <span class="text-sm text-konsit-ink/60 hidden sm:inline">{{ auth()->user()->name ?? '' }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm font-semibold text-konsit-navy hover:text-konsit-teal transition">
                            Keluar
                        </button>
                    </form>
                </div>
            </header>

            {{-- Flash message --}}
            @if (session('status'))
                <div class="mx-6 mt-6 rounded-lg bg-konsit-teal/10 border border-konsit-teal/30 px-4 py-3 text-sm text-konsit-teal font-medium">
                    {{ session('status') }}
                </div>
            @endif

            <main class="flex-1 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>

</body>
</html>
