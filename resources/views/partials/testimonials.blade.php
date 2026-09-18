@if ($testimonials->isNotEmpty())
<section class="bg-konsit-navy py-16 sm:py-24">
    <div class="max-w-5xl mx-auto px-6 lg:px-8">
        @php
            $testimonialItems = $testimonials->map(fn ($t) => [
                'quote' => $t->quote,
                'name' => $t->name,
                'role' => $t->role,
            ])->values();
        @endphp

        <div x-data='{ active: 0, items: @json($testimonialItems) }'>

        <div class="flex items-center justify-between mb-10">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white">Kata Mereka Tentang KONSIT</h2>
            <div class="flex gap-2">
                <button @click="active = (active === 0) ? items.length - 1 : active - 1"
                        class="h-10 w-10 rounded-full border border-white/20 text-white/70 hover:bg-white/10 hover:text-white transition flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button @click="active = (active === items.length - 1) ? 0 : active + 1"
                        class="h-10 w-10 rounded-full border border-white/20 text-white/70 hover:bg-white/10 hover:text-white transition flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="relative min-h-[220px]">
            <template x-for="(item, index) in items" :key="index">
                <div x-show="active === index" x-transition.opacity.duration.400ms
                     class="rounded-2xl bg-konsit-navy-light p-6 sm:p-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-konsit-teal-light mb-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9.5 7C6.5 7 4 9.5 4 12.5S6.5 18 9.5 18c.3 0 .5-.2.5-.5s-.2-.5-.5-.5C7 17 5 15 5 12.5S7 8 9.5 8h.5c.3 0 .5-.2.5-.5V7c0-.3-.2-.5-.5-.5h-.5zM17.5 7c-3 0-5.5 2.5-5.5 5.5S14.5 18 17.5 18c.3 0 .5-.2.5-.5s-.2-.5-.5-.5c-2.5 0-4.5-2-4.5-4.5S15 8 17.5 8h.5c.3 0 .5-.2.5-.5V7c0-.3-.2-.5-.5-.5h-.5z"/>
                    </svg>
                    <p class="text-lg sm:text-xl text-white leading-relaxed" x-text="item.quote"></p>
                    <div class="mt-6">
                        <p class="font-semibold text-white" x-text="item.name"></p>
                        <p class="text-sm text-white/50" x-text="item.role"></p>
                    </div>
                </div>
            </template>
        </div>

        <div class="flex gap-2 mt-6">
            <template x-for="(item, index) in items" :key="index">
                <button @click="active = index"
                        :class="active === index ? 'bg-konsit-teal-light w-6' : 'bg-white/20 w-2'"
                        class="h-2 rounded-full transition-all"></button>
            </template>
        </div>

    </div>
    </div>
</section>
@endif
