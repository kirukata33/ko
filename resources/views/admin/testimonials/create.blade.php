<x-admin-layout :title="'Tambah Testimoni'">
    <div class="rounded-2xl bg-white border border-konsit-navy/10 p-8">
        <form action="{{ route('admin.testimonials.store') }}" method="POST">
            @include('admin.testimonials._form')
        </form>
    </div>
</x-admin-layout>
