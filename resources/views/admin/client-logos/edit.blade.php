<x-admin-layout :title="'Edit Logo Klien'">
    <div class="rounded-2xl bg-white border border-konsit-navy/10 p-8">
        <form action="{{ route('admin.client-logos.update', $logo) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @include('admin.client-logos._form')
        </form>
    </div>
</x-admin-layout>
