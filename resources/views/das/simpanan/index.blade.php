<x-admin.layouts.nav>
    {{-- <x-slot name="title">Dashboard</x-slot> --}}
</x-admin.layouts.nav>

<body class="bg-gray-50  min-h-screen flex flex-col">
    <x-admin.layouts.navbar />
    <x-admin.layouts.sidebar />
    <div class="fixed  inset-0 z-10 hidden bg-gray-900/50 " id="sidebarBackdrop"></div>
    {{-- <div id="main-content" class=" pt-16 relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900"> --}}
    <div id="main-content" class=" relative w-max-full h-screen overflow-y-auto bg-gray-50 lg:ml-64  ">
        <main class="flex-grow ">
            <div class="px-6 pt-6 mb-24">
                <div class="mb-4">
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                            <li class="inline-flex items-center">
                                <a href="#"
                                    class="inline-flex items-center text-gray-700 hover:text-primary-600 ">
                                    <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                        </path>
                                    </svg>
                                    Admin
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="#"
                                        class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 ">Dashboard</a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500"
                                        aria-current="page">Simpanan</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl ">All Simpanan</h1>
                </div>
                <div class="sm:flex">
                    <div class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 ">
                        <form class="lg:pr-3" action="#" method="GET">
                            <label for="users-search" class="sr-only">Search</label>
                            <div class="relative mt-1 lg:w-64 xl:w-96">
                                <input type="text" name="email" id="users-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                    placeholder="Search for users">
                            </div>
                            {{-- </form>
                        <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                    </path>
                                </svg>
                            </a>
                        </div> --}}
                    </div>
                    <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                        <a href="/simpanan/add">
                            <button type="button" data-modal-target="add-user-modal" data-modal-toggle="add-user-modal"
                                class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Add
                            </button>
                        </a>
                        <a href="#"
                            class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Export PDF
                        </a>
                        <a href="#"
                            class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Export Excel
                        </a>
                    </div>
                </div>
                <div
                    class="bg-white p-6 mt-6 w-full h-full overflow-x-auto shadow-md sm:rounded-lg dark:bg-gray-800 dark:border-gray-700">
                    <table class="table-auto  w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="border-b bg-gray-50 dark:bg-gray-700 dark:border-gray-600 ">
                            <tr>
                                <th>No</th>
                                <th>Kode Simpanan</th>
                                <th>Nama Nasabah</th>
                                <th>Jumlah Simpanan</th>
                                <th>Pembayaran</th>
                                <th>Status</th>
                                <th>Bukti </th>
                                <th>Tanggal</th>
                                <th>Verifikasi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($simpanan as $item)
                                <tr>
                                    <td>{{ $simpanan->firstItem() + $loop->index }}</td>
                                    <td>{{ $item->kode_simpanan }}</td>
                                    <td><a href="">{{ $item->nasabah->nama }}</a></td>
                                    <td>{{ $item->jumlah_simpanan }}</td>
                                    <td>{{ $item->jenis_simpanan }}</td>
                                    <td>
                                        @php
                                            $statusColor = [
                                                'diajukan' => 'bg-yellow-400',
                                                'disetujui' => 'bg-green-400',
                                                'ditolak' => 'bg-red-400',
                                            ];
                                            $currentStatusColor = $statusColor[$item->status] ?? '';
                                        @endphp
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full {{ $currentStatusColor }} mr-2"></div>
                                            {{ $item->status }}
                                        </div>
                                    </td>
                                    <td><img src="
                                        {{ asset('storage/' . $item->bukti_simpanan) }}"
                                            alt="bukti simpanan" class="cursor-pointer object-cover w-32 h-32"
                                            onclick="openModal('{{ asset('storage/' . $item->bukti_simpanan) }}')"></td>

                                    <td>
                                        <div class="flex items-center">

                                            {{ $item->created_at->format('d M Y') }}
                                        </div>
                                    </td>
                                    <td class="p-4 space-x-2 whitespace-nowrap">
                                        @if ($item->status === 'diajukan')
                                            <form action="{{ route('simpanan.setujui', $item->id) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                <button type="submit"
                                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-green-600 hover:bg-green-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-4 h-4 mr-2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m4.5 12.75 6 6 9-13.5" />
                                                    </svg>
                                                    Setujui
                                                </button>
                                            </form>
                                            <form action="{{ route('simpanan.tolak', $item->id) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                <button type="submit"
                                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-red-600 hover:bg-red-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-4 h-4 mr-2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M6 18 18 6M6 6l12 12" />
                                                    </svg>
                                                    Tolak
                                                </button>
                                            </form>
                                        @elseif ($item->status === 'disetujui')
                                            <span
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-lg bg-green-500 text-white">
                                                ✔ Disetujui
                                            </span>
                                        @elseif ($item->status === 'ditolak')
                                            <span
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-lg bg-red-500 text-white">
                                                ✘ Ditolak
                                            </span>
                                        @endif

                                    </td>
                                    <td class="p-4 space-x-2 whitespace-nowrap">

                                        <button type="button" data-modal-target="edit-user-modal"
                                            data-modal-toggle="edit-user-modal"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-castletonGreen hover:bg-primary-800 focus:ring-4 focus:ring-primary-300  ">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                </path>
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Edit
                                        </button>
                                        <button type="button"
                                            data-modal-target="delete-simpanan-{{ $simpanan->id }}"
                                            data-modal-toggle="delete-simpanan-{{ $simpanan->id }}"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white 
               bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2
               0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011
               2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2
               0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102
               0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                            </svg>
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-between items-center mt-6">
                    <!-- Info -->
                    <div class="text-sm text-gray-600">
                        Showing {{ $simpanan->firstItem() }} to {{ $simpanan->lastItem() }} of
                        {{ $simpanan->total() }} results
                    </div>

                    <!-- Custom Pagination -->
                    <nav>
                        <ul class="flex items-center -space-x-px h-8 text-sm">
                            {{-- Previous Page --}}
                            @if ($simpanan->onFirstPage())
                                <li>
                                    <span
                                        class="flex items-center justify-center px-3 h-8 text-gray-400 bg-gray-100 border border-gray-300 rounded-s-lg">
                                        <svg class="w-2.5 h-2.5" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                    </span>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $simpanan->previousPageUrl() }}"
                                        class="flex items-center justify-center px-3 h-8 text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">
                                        <svg class="w-2.5 h-2.5" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                    </a>
                                </li>
                            @endif

                            {{-- Page Numbers --}}
                            @foreach ($simpanan->getUrlRange(1, $simpanan->lastPage()) as $page => $url)
                                <li>
                                    <a href="{{ $url }}"
                                        class="flex items-center justify-center px-3 h-8 leading-tight 
                              {{ $page == $simpanan->currentPage()
                                  ? 'z-10 text-blue-600 border border-blue-300 bg-blue-50'
                                  : 'text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700' }}">
                                        {{ $page }}
                                    </a>
                                </li>
                            @endforeach

                            {{-- Next Page --}}
                            @if ($simpanan->hasMorePages())
                                <li>
                                    <a href="{{ $simpanan->nextPageUrl() }}"
                                        class="flex items-center justify-center px-3 h-8 text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
                                        <svg class="w-2.5 h-2.5" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                    </a>
                                </li>
                            @else
                                <li>
                                    <span
                                        class="flex items-center justify-center px-3 h-8 text-gray-400 bg-gray-100 border border-gray-300 rounded-e-lg">
                                        <svg class="w-2.5 h-2.5" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                    </span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>







                <div id="imgModal"
                    class="fixed inset-0 bg-black bg-opacity-70 hidden justify-center items-center z-50"
                    onclick="closeModal()">
                    <img id="modalImg" src="" class="max-h-full max-w-full rounded">
                </div>
                <div id="delete-simpanan-{{ $simpanan->id }}" tabindex="-1" aria-hidden="true"
                    class="hidden fixed top-0 left-0 right-0 z-50 flex justify-center items-center w-full h-full bg-black/50">
                    <div class="bg-white rounded-lg shadow p-6 w-full max-w-md">
                        <h3 class="mb-4 text-lg font-semibold text-gray-900">Apakah Anda yakin?</h3>
                        <p class="mb-6 text-sm text-gray-500">Data ini akan dihapus secara permanen.</p>
                        <div class="flex justify-end gap-3">
                            <button data-modal-hide="delete-simpanan-{{ $simpanan->id }}"
                                class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded hover:bg-gray-300">
                                Batal
                            </button>
                            <form action="{{ route('simpanan.destroy', $simpanan->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded hover:bg-red-700">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <script>
                    function openModal(src) {
                        document.getElementById('modalImg').src = src;
                        document.getElementById('imgModal').classList.remove('hidden');
                        document.getElementById('imgModal').classList.add('flex');
                    }

                    function closeModal() {
                        document.getElementById('imgModal').classList.add('hidden');
                        document.getElementById('imgModal').classList.remove('flex');
                    }
                </script>
            </div>
        </main>
    </div>

    </div>
    <x-admin.footer></x-admin.footer>



    </div>

    </div>
    {{-- end sidebar --}}



    @stack('scripts')
</body>

</html>
