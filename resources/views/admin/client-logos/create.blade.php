<x-admin-layout :title="'Tambah Logo Klien'">
    <div class="rounded-2xl bg-white border border-konsit-navy/10 p-8">
        <form action="{{ route('admin.client-logos.store') }}" method="POST" enctype="multipart/form-data">
            @include('admin.client-logos._form')
        </form>
    </div>
</x-admin-layout>
