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
        <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Label Tab</label>
        <input type="text" name="label" value="{{ old('label', $solution->label ?? '') }}" placeholder="Contoh: Human Capital"
               class="w-full rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">
        <p class="mt-1 text-xs text-konsit-ink/40">Teks pendek yang muncul di tombol tab.</p>
        @error('label') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Judul</label>
        <input type="text" name="title" value="{{ old('title', $solution->title ?? '') }}" placeholder="Contoh: Human Capital Management"
               class="w-full rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">
        @error('title') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Deskripsi</label>
        <textarea name="description" rows="4"
                  class="w-full rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">{{ old('description', $solution->description ?? '') }}</textarea>
        @error('description') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Teks Tombol (CTA)</label>
        <input type="text" name="cta_text" value="{{ old('cta_text', $solution->cta_text ?? '') }}" placeholder="Pelajari Human Capital"
               class="w-full rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">
    </div>

    <div>
        <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Urutan Tampil</label>
        <input type="number" name="sort_order" value="{{ old('sort_order', $solution->sort_order ?? 0) }}"
               class="w-32 rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">
    </div>

    <div class="flex items-center gap-2">
        <input type="checkbox" name="is_published" id="is_published" value="1"
               @checked(old('is_published', $solution->is_published ?? true))
               class="rounded border-konsit-navy/30 text-konsit-teal focus:ring-konsit-teal">
        <label for="is_published" class="text-sm font-medium text-konsit-ink">Tayangkan di landing page</label>
    </div>

    <div class="flex items-center gap-3 pt-2">
        <button type="submit" class="inline-flex items-center rounded-full bg-konsit-navy px-6 py-2.5 text-sm font-semibold text-white hover:bg-konsit-navy-light transition">
            Simpan
        </button>
        <a href="{{ route('admin.solutions.index') }}" class="text-sm font-semibold text-konsit-ink/50 hover:text-konsit-ink transition">
            Batal
        </a>
    </div>
</div>
