@csrf

@if ($errors->any())
    <div class="mb-6 max-w-2xl rounded-lg bg-red-50 border border-red-200 px-4 py-3">
        <p class="text-sm font-semibold text-red-600 mb-1">Ada input yang perlu diperbaiki:</p>
        <ul class="text-sm text-red-500 list-disc list-inside space-y-0.5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="space-y-6 max-w-2xl">
    <div>
        <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Tag / Kategori</label>
        <input type="text" name="tag" value="{{ old('tag', $article->tag ?? '') }}" placeholder="Contoh: Keamanan Siber"
               class="w-full rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">
        @error('tag') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Judul Artikel</label>
        <input type="text" name="title" value="{{ old('title', $article->title ?? '') }}"
               class="w-full rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">
        @error('title') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Ringkasan Singkat (opsional)</label>
        <textarea name="excerpt" rows="2"
                  class="w-full rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">{{ old('excerpt', $article->excerpt ?? '') }}</textarea>
    </div>

    <div>
        <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Isi Artikel (opsional)</label>
        <textarea name="body" rows="8"
                  class="w-full rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">{{ old('body', $article->body ?? '') }}</textarea>
        <p class="mt-1 text-xs text-konsit-ink/40">Belum ditampilkan sebagai halaman detail tersendiri di landing page — baru untuk disiapkan ke depannya.</p>
    </div>

    <div>
        <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Tanggal Terbit</label>
        <input type="date" name="published_at" value="{{ old('published_at', isset($article) ? $article->published_at?->format('Y-m-d') : now()->toDateString()) }}"
               class="w-52 rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">
    </div>

    <div class="flex items-center gap-2">
        <input type="checkbox" name="is_published" id="is_published" value="1"
               @checked(old('is_published', $article->is_published ?? true))
               class="rounded border-konsit-navy/30 text-konsit-teal focus:ring-konsit-teal">
        <label for="is_published" class="text-sm font-medium text-konsit-ink">Tayangkan di landing page</label>
    </div>

    <div class="flex items-center gap-3 pt-2">
        <button type="submit" class="inline-flex items-center rounded-full bg-konsit-navy px-6 py-2.5 text-sm font-semibold text-white hover:bg-konsit-navy-light transition">
            Simpan
        </button>
        <a href="{{ route('admin.articles.index') }}" class="text-sm font-semibold text-konsit-ink/50 hover:text-konsit-ink transition">
            Batal
        </a>
    </div>
</div>
