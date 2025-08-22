<x-layout>
    <div class="p-6">
        {{ $title }}
        {{-- <x-header>Usaha</x-header> --}}
    </div>
    @foreach ($usahas as $post)
        <article class="p-8 max-w-screen-md border-b border-gray-300">
            <a href="/usaha/detail/{{ $post['id'] }}" class="hover:underline">
                <h2>{{ $post['nama_usaha'] }}</h2>
            </a>
            <div>
                <a href="#" class="hover:underline">{{ $post['nama_usaha'] }} </a> | {{ $post['jenis_usaha'] }} |
                {{ $post->created_at->format('j F Y') }}
            </div>
            <p>{{ Str::limit($post['body'], 20) }}</p>
            <a href="/usaha/detail/{{ $post['slug'] }}">Read more &raquo;</a>
        </article>
    @endforeach

</x-layout>
