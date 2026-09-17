{{-- Placeholder wordmark klien — ganti dengan logo asli perusahaan klien KONSIT nanti --}}
<section class="bg-konsit-cream pb-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <p class="text-center text-sm font-medium text-konsit-ink/50 mb-8">
            Dipercaya oleh 200+ perusahaan di berbagai industri
        </p>

        <div class="relative overflow-hidden" style="mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent); -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);">
            <div class="flex w-max animate-konsit-marquee">
                @for ($i = 0; $i < 2; $i++)
                    <div class="flex items-center gap-16 pr-16">
                        @foreach (['Nexora', 'Vantar Group', 'Brightlane', 'Cakra Industri', 'Meridian Co', 'Pilar Utama', 'Alira Tech'] as $name)
                            <span class="shrink-0 text-xl font-bold text-konsit-navy/25 tracking-tight whitespace-nowrap">
                                {{ $name }}
                            </span>
                        @endforeach
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>
