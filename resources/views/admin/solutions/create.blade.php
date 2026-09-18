<x-admin-layout :title="'Tambah Solusi'">
    <div class="rounded-2xl bg-white border border-konsit-navy/10 p-8">
        <form action="{{ route('admin.solutions.store') }}" method="POST">
            @include('admin.solutions._form')
        </form>
    </div>
</x-admin-layout>
