<x-admin.layouts.nav>
    <x-slot name="title">Dashboard</x-slot>
</x-admin.layouts.nav>

<body class="bg-gray-50 dark:bg-gray-800 min-h-screen flex flex-col">
    <x-admin.layouts.navbar />
    <x-admin.layouts.sidebar />
    <div class="fixed  inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>
    {{-- <div id="main-content" class=" pt-16 relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900"> --}}
    <div id="main-content" class=" relative w-max-full h-screen overflow-y-auto  bg-gray-50 lg:ml-64 dark:bg-gray-900">
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
                                        aria-current="page">Nasabah</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
                {{-- <div class="bg-white p-6 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Tambah Nasabah</h1>

                </div> --}}
                <div class="bg-white border border-4 rounded-lg shadow relative ">
                    <div class="flex items-start justify-between p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold">
                            Tambah Nasabah
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
                        <form action="/dashboard/nasabah" method="POST">
                            @csrf
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="slug"
                                        class="text-sm font-medium text-gray-900 block mb-2">Slug</label>
                                    <input disable readonly type="text" name="slug" id="slug"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="Masukkan Slug">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="kode_nasabah" class="text-sm font-medium text-gray-900 block mb-2">Kode
                                        Nasabah</label>
                                    <input type="text" name="kode_nasabah" id="kode_nasabah"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="Masukkan Kode Nasabah">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nama"
                                        class="text-sm font-medium text-gray-900 block mb-2">Nama</label>
                                    <input type="text" name="nama" id="nama"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5
                                        form-control @error('nama') is-invalid @enderror"
                                        placeholder="Masukkan Nama Lengkap" value="{{ old('nama') }}">
                                    @error('nama')
                                        <div class="invalid-feedback ">
                                            <p class="text-red-700">
                                                {{ $message }}
                                            </p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="NIK"
                                        class="text-sm font-medium text-gray-900 block mb-2">NIK</label>
                                    <input type="text" name="NIK" id="NIK" form-control
                                        @error('NIK') is-invalid @enderror
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="Masukkan NIK">
                                    @error('NIK')
                                        <div class="invalid-feedback ">
                                            <p class="text-red-700">
                                                {{ $message }}
                                            </p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="alamat"
                                        class="text-sm font-medium text-gray-900 block mb-2">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" form-control
                                        @error('alamat') is-invalid @enderror
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="Masukkan Alamat">
                                    @error('alamat')
                                        <div class="invalid-feedback ">
                                            <p class="text-red-700">
                                                {{ $message }}
                                            </p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="telepon" class="text-sm font-medium text-gray-900 block mb-2">No.
                                        HP</label>
                                    <input type="text" name="telepon" id="telepon" form-control
                                        @error('telepon') is-invalid @enderror
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="3522101109550004">
                                    </input>
                                    @error('telepon')
                                        <div class="invalid-feedback ">
                                            <p class="text-red-700">
                                                {{ $message }}
                                            </p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="jenis_kelamin"
                                        class="text-sm font-medium text-gray-900 block mb-2">Jenis
                                        Kelamin</label>
                                    <select name="jenis_kelamin"
                                        class="text-sm font-medium  block mb-2 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5 form-control @error('jenis_kelamin') is-invalid @enderror"
                                        id="jenis_kelamin">

                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki"
                                            {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                                        </option>
                                        <option value="Perempuan"
                                            {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan
                                        </option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <div class="invalid-feedback ">
                                            <p class="text-red-700">
                                                {{ $message }}
                                            </p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tanggal_bergabung"
                                        class="text-sm font-medium text-gray-900 block mb-2">Tanggal
                                        Bergabung</label>
                                    <input type="date" name="tanggal_bergabung" id="tanggal_bergabung"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5
                                        form-control @error('tanggal_bergabung') is-invalid @enderror">
                                    @error('tanggal_bergabung')
                                        <div class="invalid-feedback ">
                                            <p class="text-red-700">
                                                {{ $message }}
                                            </p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="saldo"
                                        class="text-sm font-medium text-gray-900 block mb-2">Saldo</label>
                                    <input disabled type="text" name="saldo" id="saldo" value="0"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="Default 0">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="pinjaman" class="text-sm font-medium text-gray-900 block mb-2">
                                        Pinjaman</label>
                                    <input disabled type="text" name="pinjaman" id="pinjaman" value="0"
                                        class=" shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="Default 0">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="pinjaman" class="text-sm font-medium text-gray-900 block mb-2">
                                        Status</label>
                                    <input disabled type="text" name="pinjaman" id="pinjaman"
                                        value="Tidak Aktif"
                                        class=" shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="Default Tidak Aktif">
                                </div>
                                {{-- <div class="col-span-6 sm:col-span-3">
                                    <label for="pinjaman" class="text-sm font-medium text-gray-900 block mb-2">
                                        Role</label>
                                    <input disabled type="text" name="pinjaman" id="pinjaman" value="Nasabah"
                                        class=" shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="Default Nasabah">
                                </div> --}}
                            </div>

                            <div class="p-6 border-t border-gray-200 rounded-b">
                                <button
                                    class=" bg-kirim hover:bg-footer focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                    type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </main>
    </div>

    </div>
    <script>
        const nama = document.querySelector('#nama');
        const slug = document.querySelector('#slug');

        nama.addEventListener('change', function() {
            fetch('/dashboard/nasabah/checkSlug?nama=' + nama.value)

                .then(response => response.json())
                .then(data =>
                    slug.value = data.slug);

            const kodeNasabah = document.querySelector('#kode_nasabah');
            fetch('/dashboard/nasabah/generateKode')
                .then(response => response.json())
                .then(data => {
                    kodeNasabah.value = data.kode_nasabah;
                })
        });
    </script>
    <x-admin.footer></x-admin.footer>

    @stack('scripts')
</body>

</html>
