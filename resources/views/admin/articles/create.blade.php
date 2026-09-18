<x-admin-layout :title="'Tambah Artikel'">
    <div class="rounded-2xl bg-white border border-konsit-navy/10 p-8">
        <form action="{{ route('admin.articles.store') }}" method="POST">
            @include('admin.articles._form')
        </form>
    </div>
</x-admin-layout>
