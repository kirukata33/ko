<section id="kontak" class="py-16 sm:py-24 scroll-mt-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="relative overflow-hidden rounded-3xl bg-konsit-navy px-8 py-16 sm:px-16 sm:py-20">
            <div class="pointer-events-none absolute -top-16 -right-16 h-64 w-64 rounded-full bg-konsit-teal/20 blur-3xl"></div>

            <div class="relative flex flex-col lg:flex-row items-center justify-between gap-10">
                <div class="text-center lg:text-left max-w-xl">
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
                        Diskusikan Dulu, Wujudkan Kemudian
                    </h2>
                    <p class="mt-4 text-white/70 leading-relaxed">
                        Ceritakan tantangan bisnis Anda, tim KONSIT akan bantu rancang solusi yang paling sesuai — tanpa komitmen di awal.
                    </p>
                    <a href="mailto:{{ $contactEmail }}"
                       class="mt-8 inline-flex items-center rounded-full bg-konsit-teal px-8 py-3.5 text-sm font-semibold text-white hover:bg-konsit-teal-light transition">
                        Mulai Konsultasi Gratis
                    </a>
                </div>

                <div class="shrink-0 rounded-2xl bg-white/5 border border-white/10 px-8 py-8 w-full max-w-xs">
                    <p class="text-xs font-semibold text-white/40 uppercase tracking-wide mb-4">Hubungi Langsung</p>
                    <div class="space-y-3 text-sm">
                        <p class="text-white/80">{{ $contactEmail }}</p>
                        <p class="text-white/80">{{ $contactPhone }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
