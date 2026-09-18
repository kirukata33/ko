@csrf

@if ($errors->any())
    <div class="mb-6 max-w-xl rounded-lg bg-red-50 border border-red-200 px-4 py-3">
        <p class="text-sm font-semibold text-red-600 mb-1">Ada input yang perlu diperbaiki:</p>
        <ul class="text-sm text-red-500 list-disc list-inside space-y-0.5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="space-y-6 max-w-xl">
    <div>
        <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Nama Klien</label>
        <input type="text" name="name" value="{{ old('name', $logo->name ?? '') }}"
               class="w-full rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">
        @error('name') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Logo (opsional)</label>

        @if (isset($logo) && $logo->logo_path)
            <img src="{{ Storage::url($logo->logo_path) }}" class="h-10 object-contain mb-3">
        @endif

        <input type="file" name="logo" accept="image/*"
               class="w-full text-sm text-konsit-ink/70 file:mr-4 file:rounded-full file:border-0 file:bg-konsit-teal/10 file:text-konsit-teal file:px-4 file:py-2 file:text-sm file:font-semibold">
        <p class="mt-1 text-xs text-konsit-ink/40">Kalau tidak diisi, nama klien tetap ditampilkan sebagai teks berjalan seperti sekarang.</p>
        @error('logo') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Urutan Tampil</label>
        <input type="number" name="sort_order" value="{{ old('sort_order', $logo->sort_order ?? 0) }}"
               class="w-32 rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">
    </div>

    <div class="flex items-center gap-2">
        <input type="checkbox" name="is_published" id="is_published" value="1"
               @checked(old('is_published', $logo->is_published ?? true))
               class="rounded border-konsit-navy/30 text-konsit-teal focus:ring-konsit-teal">
        <label for="is_published" class="text-sm font-medium text-konsit-ink">Tayangkan di landing page</label>
    </div>

    <div class="flex items-center gap-3 pt-2">
        <button type="submit" class="inline-flex items-center rounded-full bg-konsit-navy px-6 py-2.5 text-sm font-semibold text-white hover:bg-konsit-navy-light transition">
            Simpan
        </button>
        <a href="{{ route('admin.client-logos.index') }}" class="text-sm font-semibold text-konsit-ink/50 hover:text-konsit-ink transition">
            Batal
        </a>
    </div>
</div>
