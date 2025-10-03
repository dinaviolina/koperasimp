<x-admin.layouts.nav />

<body class="bg-gray-50 dark:bg-gray-800 min-h-screen flex flex-col">
    <x-admin.layouts.navbar />
    <x-admin.layouts.sidebar />
    <div class="fixed  inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>
    {{-- <div id="main-content" class=" pt-16 relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900"> --}}
    <div id="main-content" class=" relative w-max-full h-screen overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
        <main class="flex-grow ">
            {{-- class="p-4  bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700"> --}}
            {{-- <div class="w-full mb-1"> --}}
            <div class="px-6 pt-6">
                <div class="mb-4">
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                            <li class="inline-flex items-center">
                                <a href="#"
                                    class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
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
                                    <a href="/nasabah"
                                        class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Dashboard</a>
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
                                        aria-current="page">Usaha</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
                {{-- <div class="bg-white p-6 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Tambah Usaha</h1>
                </div> --}}
                <div class="bg-white border border-4 rounded-lg shadow relative ">
                    <div class="flex items-start justify-between p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold">
                            Edit Usaha
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                            data-modal-toggle="product-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-6 space-y-6">
                        <form action="/das/usaha/{{ $usaha->slug }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="slug"
                                        class="text-sm font-medium text-gray-900 block mb-2">Slug</label>
                                    <input type="text" name="slug" id="slug"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5
                                        form-control @error('slug') is-invalid @enderror"
                                        value="{{ $usaha->slug }}" readonly>
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            <p class="text-red-700">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nama_usaha" class="text-sm font-medium text-gray-900 block mb-2">
                                        Nama Usaha</label>
                                    <input type="text" name="nama_usaha" id="nama_usaha"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5
                                        form-control @error('nama_usaha') is-invalid @enderror"
                                        value="{{ old('nama_usaha', $usaha->nama_usaha) }}">
                                    @error('nama_usaha')
                                        <div class="invalid-feedback">
                                            <p class="text-red-700">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="jenis_usaha" class="text-sm font-medium text-gray-900 block mb-2">Jenis
                                        Usaha</label>
                                    <input type="text" name="jenis_usaha" id="jenis_usaha"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5
                                         form-control @error('jenis_usaha') is-invalid @enderror"
                                        value="{{ old('jenis_usaha', $usaha->jenis_usaha) }}">
                                    @error('jenis_usaha')
                                        <div class="invalid-feedback">
                                            <p class="text-red-700">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="body"
                                        class="text-sm font-medium text-gray-900 block mb-2">Body</label>
                                    <input type="text" name="body" id="body"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5
                                        form-control @error('body') is-invalid @enderror"
                                        value="{{ old('body', $usaha->body) }}">
                                    @error('body')
                                        <div class="invalid-feedback">
                                            <p class="text-red-700">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="pt-6 border-t border-gray-200 rounded-b">
                                <button
                                    class="text-white bg-kirim hover:bg-footer focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                    type="submit">Edit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
    </div>
    <script>
        const nama_usaha = document.querySelector('#nama_usaha');
        const slug = document.querySelector('#slug');

        nama_usaha.addEventListener('input', function() {
            fetch('/das/usaha/checkSlug?nama_usaha=' + encodeURIComponent(nama_usaha.value))
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        });
    </script>

    <x-admin.footer></x-admin.footer>
    @stack('scripts')
</body>

</html>
