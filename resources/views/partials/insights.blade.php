@if ($articles->isNotEmpty())
<section id="insights" class="bg-konsit-cream py-16 sm:py-24 scroll-mt-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="flex items-end justify-between mb-12 flex-wrap gap-4">
            <div>
                <span class="text-sm font-semibold text-konsit-teal uppercase tracking-wide">Insights</span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-konsit-navy">
                    Wawasan & Update Terbaru
                </h2>
            </div>
            <a href="#" class="inline-flex items-center gap-2 text-sm font-semibold text-konsit-navy hover:text-konsit-teal transition">
                Lihat Semua Artikel
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach ($articles as $post)
                <article class="group cursor-pointer">
                    <div class="aspect-[4/3] rounded-2xl bg-konsit-navy/5 overflow-hidden relative flex items-center justify-center group-hover:bg-konsit-teal/10 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-konsit-navy/20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                        </svg>
                    </div>
                    <span class="mt-5 inline-block text-xs font-semibold text-konsit-teal uppercase tracking-wide">{{ $post->tag }}</span>
                    <h3 class="mt-2 text-lg font-bold text-konsit-navy leading-snug group-hover:text-konsit-teal transition">
                        {{ $post->title }}
                    </h3>
                    <p class="mt-2 text-sm text-konsit-ink/50">{{ $post->published_at?->translatedFormat('d F Y') }}</p>
                </article>
            @endforeach
        </div>

    </div>
</section>
@endif
