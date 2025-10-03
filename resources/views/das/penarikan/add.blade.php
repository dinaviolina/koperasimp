<x-admin.layouts.nav />

<body class="bg-gray-50 dark:bg-gray-800 min-h-screen flex flex-col">
    <x-admin.layouts.navbar />
    <x-admin.layouts.sidebar />
    <x-admin.das.header-components :title="$title" />
    <x-admin.layouts.nav />


    <div class="bg-white border border-4 rounded-lg shadow relative ">
        <div class="flex items-start justify-between p-5 border-b rounded-t">
            <h3 class="text-xl font-semibold">
                {{ $title }}
            </h3>
            <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                data-modal-toggle="product-modal">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="p-6 space-y-6">
            <form action="/das/penarikan" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="slug" class="text-sm font-medium text-gray-900 block mb-2">Slug</label>
                        <input type="text" name="slug" id="slug"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5
                                        form-control @error('slug') is-invalid @enderror"
                            placeholder="Masukkan Slug">
                        @error('slug')
                            <div class="invalid-feedback">
                                <p class="text-red-700">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="kode_nasabah" class="text-sm font-medium text-gray-900 block mb-2">
                            Kode Nasabah</label>

                        <select name="kode_nasabah" id="kode_nasabah"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5
                                        form-control @error('kode_nasabah') is-invalid @enderror">
                            <option value="">Pilih Kode Nasabah</option>
                            {{-- @foreach ($nasabah as $n)
                                <option value="{{ $n->kode_nasabah }}">{{ $n->kode_nasabah }} - {{ $n->nama_nasabah }}
                                </option>
                            @endforeach --}}
                        </select>
                        @error('kode_nasabah')
                            <div class="invalid-feedback">
                                <p class="text-red-700">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="jumlah_simpanan" class="text-sm font-medium text-gray-900 block mb-2">Jumlah
                            Simpanan</label>
                        <input type="text" name="jumlah_simpanan" id="jumlah_simpanan"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5
                                         form-control @error('jumlah_simpanan') is-invalid @enderror"
                            placeholder="Masukkan Jumlah Simpanan">
                        @error('jumlah_simpanan')
                            <div class="invalid-feedback">
                                <p class="text-red-700">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="body" class="text-sm font-medium text-gray-900 block mb-2">Jumlah
                            Penarikan</label>
                        <input type="text" name="body" id="body"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5
                                        form-control @error('body') is-invalid @enderror"
                            placeholder="Masukkan Body">
                        @error('body')
                            <div class="invalid-feedback">
                                <p class="text-red-700">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="body" class="text-sm font-medium text-gray-900 block mb-2">Status</label>
                        <input type="text" name="body" id="body" readonly
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5
                                        form-control @error('body') is-invalid @enderror"
                            placeholder="Masukkan Body">
                        @error('body')
                            <div class="invalid-feedback">
                                <p class="text-red-700">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                </div>
                <x-button-save></x-button-save>
            </form>
        </div>
    </div>
    </div>
    </main>
    </div>
    </div>
    <script></script>

    <x-admin.footer></x-admin.footer>

    @stack('scripts')
</body>

</html>
