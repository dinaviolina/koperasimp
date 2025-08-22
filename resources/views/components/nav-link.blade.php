@props(['active' => false])


<a {{ $attributes }} aria-current="{{ $active ? 'page' : false }}"
    class=" {{ $active ? 'text-white bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 text-sm font-medium rounded-md">{{ $slot }}</a>
