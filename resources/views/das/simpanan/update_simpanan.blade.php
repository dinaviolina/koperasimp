<x-admin.layouts.nav>
    {{-- <x-slot name="title">Dashboard</x-slot> --}}
</x-admin.layouts.nav>

<body class="bg-gray-50 dark:bg-gray-800 min-h-screen flex flex-col">
    <x-admin.layouts.navbar />
    <x-admin.layouts.sidebar />
    <div class="fixed  inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>
    {{-- <div id="main-content" class=" pt-16 relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900"> --}}
    <div id="main-content" class=" relative w-max-full h-screen overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
        <main class="flex-grow ">

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
                                    <a href="/simpanan"
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
                                        aria-current="page">Simpanan</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
                {{-- <div class="bg-white p-6 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Tambah Simpanan</h1>

                </div> --}}
                <div class="bg-white border border-4 rounded-lg shadow relative ">
                    <div class="flex items-start justify-between p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold">
                            Edit Simpanan
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
                        <form action="{{ route('dashboard.simpanan.update', $simpanan->kode_simpanan) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="product-name"
                                        class="text-sm font-medium text-gray-900 block mb-2">Nama</label>
                                    <input type="text" name="product-name" id="product-name"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="Masukkan Nama Lengkap"
                                        value="{{ old('nama', $simpanan->nasabah->nama) }}">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            <p class="text-red-700">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="category" class="text-sm font-medium text-gray-900 block mb-2">Jumlah
                                        Simpanan</label>
                                    <input type="text" name="category" id="category"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="Electronics"
                                        value="{{ old('jumlah_simpanan', 'Rp ' . $simpanan->jumlah_simpanan) }}">
                                    @error('jumlah_simpanan')
                                        <div class="invalid-feedback">
                                            <p class="text-red-700">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="jenis_simpanan"
                                        class="text-sm font-medium text-gray-900 block mb-2">Pilihan
                                        Pembayaran</label>
                                    <select name="jenis_simpanan" id="jenis_simpanan"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                                        <option value="">Jenis Pembayaran</option>
                                        <option value="transfer"
                                            {{ old('jenis_simpanan', $simpanan->jenis_simpanan) == 'transfer' ? 'selected' : '' }}>
                                            Transfer

                                        </option>
                                        <option value="tunai"
                                            {{ old('jenis_simpanan', $simpanan->jenis_simpanan) == 'tunai' ? 'selected' : '' }}>
                                            Tunai

                                        </option>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="status"
                                        class="text-sm font-medium text-gray-900 block mb-2">Status</label>
                                    <select name="status" id="status"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                                        <option value="">Status</option>
                                        <option value="diajukan"
                                            {{ old('status', $simpanan->status) == 'diajukan' ? 'selected' : '' }}>
                                            Diajukan</option>
                                        <option value="disetujui"
                                            {{ old('status', $simpanan->status) == 'disetujui' ? 'selected' : '' }}>
                                            Disetujui</option>
                                        <option value="ditolak"
                                            {{ old('status', $simpanan->status) == 'ditolak' ? 'selected' : '' }}>
                                            Ditolak</option>
                                    </select>
                                </div>
                                <div class="col-span-6">
                                    <label for="dropzone-file" class="text-sm font-medium text-gray-900 block mb-2">
                                        Bukti Simpanan
                                    </label>

                                    {{-- Tampilkan gambar bukti jika ada --}}
                                    @if ($simpanan->bukti_simpanan)
                                        <img src="{{ asset('storage/' . $simpanan->bukti_simpanan) }}"
                                            alt="Bukti Simpanan" class="mb-2 w-48 h-auto border rounded">
                                    @endif

                                    <input type="file" name="bukti_simpanan" id="dropzone-file"
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer
               focus:outline-none focus:ring-2 focus:ring-cyan-600 focus:border-cyan-600 
               dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500" />

                                    @error('bukti_simpanan')
                                        <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="py-6 border-t border-gray-200 rounded-b">
                                <button
                                    class="text-white bg-kirim hover:bg-footer focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                    type="submit">Update data</button>
                            </div>
                        </form>

                    </div>
                </div>
        </main>
    </div>

    </div>

    <x-admin.footer></x-admin.footer>

    @stack('scripts')
</body>

</html>
