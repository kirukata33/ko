<x-admin-layout :title="'Edit Artikel'">
    <div class="rounded-2xl bg-white border border-konsit-navy/10 p-8">
        <form action="{{ route('admin.articles.update', $article) }}" method="POST">
            @method('PUT')
            @include('admin.articles._form')
        </form>
    </div>
</x-admin-layout>
