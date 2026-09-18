<x-admin-layout :title="'Edit Testimoni'">
    <div class="rounded-2xl bg-white border border-konsit-navy/10 p-8">
        <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST">
            @method('PUT')
            @include('admin.testimonials._form')
        </form>
    </div>
</x-admin-layout>
