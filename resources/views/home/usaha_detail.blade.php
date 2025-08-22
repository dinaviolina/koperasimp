<x-layout>
    <div class="p-6">
        {{ $title }}
        {{-- <x-header>Usaha</x-header> --}}
    </div>

    <article class="p-8 max-w-screen-md border-b border-gray-300">
        <a href="/usaha/detail/{{ $usaha['id'] }}" class="hover:underline">
            <h2>{{ $usaha['title'] }}</h2>
        </a>

        <div>
            <a href="#" class="hover:underline">{{ $usaha['nama_usaha'] }} </a> | {{ $usaha['jenis_usaha'] }} |
        </div>
        <p>{{ Str::limit($usaha['body'], 20) }}</p>
        <a href="/usaha/detail">&laquo; Back to usaha </a>
    </article>
</x-layout>
