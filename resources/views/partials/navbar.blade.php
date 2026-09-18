<header x-data="{ open: false, scrolled: false }"
        @scroll.window="scrolled = (window.scrollY > 10)"
        :class="scrolled ? 'bg-konsit-navy/95 backdrop-blur shadow-lg' : 'bg-konsit-navy'"
        class="sticky top-0 z-50 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-18 py-4">

            <a href="{{ url('/') }}" class="flex items-center gap-2">
                <span class="text-2xl font-extrabold tracking-tight text-white">KON<span class="text-konsit-teal-light">SIT</span></span>
            </a>

            <nav class="hidden md:flex items-center gap-8">
                <a href="#solusi" class="text-sm font-medium text-white/80 hover:text-white transition">Solusi</a>
                <a href="#tentang" class="text-sm font-medium text-white/80 hover:text-white transition">Tentang Kami</a>
                <a href="#insights" class="text-sm font-medium text-white/80 hover:text-white transition">Insights</a>
                <a href="#kontak" class="text-sm font-medium text-white/80 hover:text-white transition">Kontak</a>
            </nav>

            <div class="hidden md:block">
                <a href="#kontak"
                   class="inline-flex items-center rounded-full bg-konsit-teal px-5 py-2.5 text-sm font-semibold text-white hover:bg-konsit-teal-light transition">
                    Konsultasi Gratis
                </a>
            </div>

            <button @click="open = !open" class="md:hidden text-white p-2" aria-label="Toggle menu">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div x-show="open" x-cloak x-transition class="md:hidden pb-6 flex flex-col gap-4">
            <a href="#solusi" class="text-white/80 hover:text-white text-sm font-medium">Solusi</a>
            <a href="#tentang" class="text-white/80 hover:text-white text-sm font-medium">Tentang Kami</a>
            <a href="#insights" class="text-white/80 hover:text-white text-sm font-medium">Insights</a>
            <a href="#kontak" class="text-white/80 hover:text-white text-sm font-medium">Kontak</a>
            <a href="#kontak" class="inline-flex justify-center rounded-full bg-konsit-teal px-5 py-2.5 text-sm font-semibold text-white">
                Konsultasi Gratis
            </a>
        </div>
    </div>
</header>
