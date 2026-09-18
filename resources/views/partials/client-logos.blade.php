@if ($clientLogos->isNotEmpty())
<section class="bg-konsit-cream pb-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <p class="text-center text-sm font-medium text-konsit-ink/50 mb-8">
            Dipercaya oleh {{ $clientLogos->count() >= 10 ? '200+' : $clientLogos->count() }} perusahaan di berbagai industri
        </p>

        <div class="relative overflow-hidden" style="mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent); -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);">
            <div class="flex w-max animate-konsit-marquee">
                @for ($i = 0; $i < 2; $i++)
                    <div class="flex items-center gap-16 pr-16">
                        @foreach ($clientLogos as $client)
                            @if ($client->logo_path)
                                <img src="{{ Storage::url($client->logo_path) }}" alt="{{ $client->name }}"
                                     class="h-8 shrink-0 object-contain grayscale opacity-40">
                            @else
                                <span class="shrink-0 text-xl font-bold text-konsit-navy/25 tracking-tight whitespace-nowrap">
                                    {{ $client->name }}
                                </span>
                            @endif
                        @endforeach
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>
@endif
