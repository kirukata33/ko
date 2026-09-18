<x-admin-layout :title="'Edit Solusi'">
    <div class="rounded-2xl bg-white border border-konsit-navy/10 p-8">
        <form action="{{ route('admin.solutions.update', $solution) }}" method="POST">
            @method('PUT')
            @include('admin.solutions._form')
        </form>
    </div>
</x-admin-layout>
