<x-admin-layout :title="'Dashboard'">
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
        @php
            $stats = [
                ['label' => 'Testimoni', 'count' => \App\Models\Testimonial::count()],
                ['label' => 'Logo Klien', 'count' => \App\Models\ClientLogo::count()],
                ['label' => 'Solusi', 'count' => \App\Models\Solution::count()],
                ['label' => 'Artikel Insights', 'count' => \App\Models\Article::count()],
            ];
        @endphp

        @foreach ($stats as $stat)
            <div class="rounded-2xl bg-white border border-konsit-navy/10 p-6">
                <p class="text-sm text-konsit-ink/50">{{ $stat['label'] }}</p>
                <p class="mt-2 text-3xl font-extrabold text-konsit-navy">{{ $stat['count'] }}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-8 rounded-2xl bg-white border border-konsit-navy/10 p-8">
        <h2 class="text-lg font-bold text-konsit-navy">Selamat datang di Admin Panel KONSIT 👋</h2>
        <p class="mt-2 text-sm text-konsit-ink/60 max-w-xl">
            Gunakan menu di samping untuk mengelola konten landing page — testimoni, logo klien, solusi, artikel insights, dan info kontak.
        </p>
    </div>
</x-admin-layout>
