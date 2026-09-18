<x-admin-layout :title="'Info Kontak'">

    <p class="text-sm text-konsit-ink/60 mb-6">Ubah email & nomor telepon yang tampil di section CTA (Kontak) landing page.</p>

    <div class="rounded-2xl bg-white border border-konsit-navy/10 p-8 max-w-xl">
        <form action="{{ route('admin.settings.update') }}" method="POST">
            @csrf
            @method('PUT')

            @if ($errors->any())
                <div class="mb-6 rounded-lg bg-red-50 border border-red-200 px-4 py-3">
                    <p class="text-sm font-semibold text-red-600 mb-1">Ada input yang perlu diperbaiki:</p>
                    <ul class="text-sm text-red-500 list-disc list-inside space-y-0.5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Email Kontak</label>
                    <input type="email" name="contact_email" value="{{ old('contact_email', $contactEmail) }}"
                           class="w-full rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-konsit-navy mb-1.5">Nomor Telepon</label>
                    <input type="text" name="contact_phone" value="{{ old('contact_phone', $contactPhone) }}"
                           class="w-full rounded-lg border border-konsit-navy/15 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-konsit-teal">
                </div>

                <div class="pt-2">
                    <button type="submit" class="inline-flex items-center rounded-full bg-konsit-navy px-6 py-2.5 text-sm font-semibold text-white hover:bg-konsit-navy-light transition">
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </form>
    </div>

</x-admin-layout>
