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
        <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Nama</label>
        <input type="text" name="name" value="{{ old('name', $testimonial->name ?? '') }}"
               class="w-full rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">
        @error('name') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Jabatan & Perusahaan</label>
        <input type="text" name="role" value="{{ old('role', $testimonial->role ?? '') }}" placeholder="Contoh: Direktur Operasional, Nexora"
               class="w-full rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">
        @error('role') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Kutipan Testimoni</label>
        <textarea name="quote" rows="4"
                  class="w-full rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">{{ old('quote', $testimonial->quote ?? '') }}</textarea>
        @error('quote') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Urutan Tampil</label>
        <input type="number" name="sort_order" value="{{ old('sort_order', $testimonial->sort_order ?? 0) }}"
               class="w-32 rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">
        <p class="mt-1 text-xs text-konsit-ink/40">Angka lebih kecil tampil lebih dulu.</p>
    </div>

    <div class="flex items-center gap-2">
        <input type="checkbox" name="is_published" id="is_published" value="1"
               @checked(old('is_published', $testimonial->is_published ?? true))
               class="rounded border-konsit-navy/30 text-konsit-teal focus:ring-konsit-teal">
        <label for="is_published" class="text-sm font-medium text-konsit-ink">Tayangkan di landing page</label>
    </div>

    <div class="flex items-center gap-3 pt-2">
        <button type="submit" class="inline-flex items-center rounded-full bg-konsit-navy px-6 py-2.5 text-sm font-semibold text-white hover:bg-konsit-navy-light transition">
            Simpan
        </button>
        <a href="{{ route('admin.testimonials.index') }}" class="text-sm font-semibold text-konsit-ink/50 hover:text-konsit-ink transition">
            Batal
        </a>
    </div>
</div>
