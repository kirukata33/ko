@if ($solutions->isNotEmpty())
<section id="solusi" class="bg-white py-16 sm:py-24 scroll-mt-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="max-w-2xl mb-12">
            <span class="text-sm font-semibold text-konsit-teal uppercase tracking-wide">Solusi Kami</span>
            <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-konsit-navy">
                Satu Mitra untuk Berbagai Kebutuhan Digital Bisnis Anda
            </h2>
        </div>

        @php
            $solutionTabs = $solutions->map(fn ($s) => [
                'label' => $s->label,
                'title' => $s->title,
                'desc' => $s->description,
                'cta' => $s->cta_text,
            ])->values();
        @endphp

        <div x-data='{ active: 0, tabs: @json($solutionTabs) }'
             class="grid lg:grid-cols-[280px_1fr] gap-8">

            {{-- Daftar tab --}}
            <div class="flex lg:flex-col gap-2 overflow-x-auto lg:overflow-visible pb-2 lg:pb-0">
                <template x-for="(tab, index) in tabs" :key="index">
                    <button @click="active = index"
                            :class="active === index ? 'bg-konsit-navy text-white' : 'bg-konsit-cream text-konsit-ink/70 hover:bg-konsit-navy/5'"
                            class="shrink-0 lg:shrink text-left rounded-xl px-5 py-3.5 text-sm font-semibold transition whitespace-nowrap lg:whitespace-normal">
                        <span x-text="tab.label"></span>
                    </button>
                </template>
            </div>

            {{-- Panel konten --}}
            <div class="rounded-2xl bg-konsit-cream p-8 lg:p-12 min-h-[280px]">
                <template x-for="(tab, index) in tabs" :key="index">
                    <div x-show="active === index" x-transition.opacity.duration.300ms>
                        <h3 class="text-2xl font-bold text-konsit-navy" x-text="tab.title"></h3>
                        <p class="mt-4 text-konsit-ink/70 leading-relaxed max-w-xl" x-text="tab.desc"></p>
                        <a href="#kontak" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-konsit-teal hover:text-konsit-navy transition">
                            <span x-text="tab.cta"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </template>
            </div>

        </div>
    </div>
</section>
@endif
