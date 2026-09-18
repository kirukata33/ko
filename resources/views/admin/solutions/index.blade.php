<x-admin-layout :title="'Solusi'">

    <div class="flex items-center justify-between mb-6">
        <p class="text-sm text-konsit-ink/60">Kelola kategori & isi tab Solusi di landing page.</p>
        <a href="{{ route('admin.solutions.create') }}"
           class="inline-flex items-center rounded-full bg-konsit-navy px-5 py-2.5 text-sm font-semibold text-white hover:bg-konsit-navy-light transition">
            + Tambah Solusi
        </a>
    </div>

    <div class="rounded-2xl bg-white border border-konsit-navy/10 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-konsit-cream text-konsit-ink/60 text-xs uppercase tracking-wide">
                <tr>
                    <th class="text-left px-6 py-3">Label Tab</th>
                    <th class="text-left px-6 py-3">Judul</th>
                    <th class="text-left px-6 py-3">Urutan</th>
                    <th class="text-left px-6 py-3">Status</th>
                    <th class="text-right px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-konsit-navy/5">
                @forelse ($solutions as $item)
                    <tr>
                        <td class="px-6 py-4 font-semibold text-konsit-navy">{{ $item->label }}</td>
                        <td class="px-6 py-4 text-konsit-ink/70">{{ $item->title }}</td>
                        <td class="px-6 py-4 text-konsit-ink/50">{{ $item->sort_order }}</td>
                        <td class="px-6 py-4">
                            @if ($item->is_published)
                                <span class="inline-flex rounded-full bg-konsit-teal/10 text-konsit-teal px-3 py-1 text-xs font-semibold">Tayang</span>
                            @else
                                <span class="inline-flex rounded-full bg-konsit-ink/10 text-konsit-ink/50 px-3 py-1 text-xs font-semibold">Draft</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right space-x-3">
                            <a href="{{ route('admin.solutions.edit', $item) }}" class="text-konsit-navy hover:text-konsit-teal font-semibold">Edit</a>
                            <form action="{{ route('admin.solutions.destroy', $item) }}" method="POST" class="inline"
                                  onsubmit="return confirm('Hapus solusi {{ $item->label }}?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 font-semibold">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-10 text-center text-konsit-ink/40">Belum ada data solusi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</x-admin-layout>
