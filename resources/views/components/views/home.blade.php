<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-center">
    <img src="img/logo.png" alt="Logo Koperasi" class="flex justify-center mx-auto w-72 h-72 object-cover">
    <h1 class="font-bold">KOPERASI DESA MERAH PUTIH</h1>
    <h3 class="font-semibold">Untuk Memperkuat Ekonomi Desa Gajah</h3>
</div>

<div class="w-full px-8">
    <div class="max-w-2xl mt-4 mx-auto shadow-lg rounded-md">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-0">
            <!-- Simpanan -->
            <div class="text-center bg-footer py-5 rounded-md hover:bg-kirim">
                <button class="text-white rounded-md px-4 py-2 transition" onclick="openModal('modelConfirm')">
                    Simpanan
                </button>
                <!-- Modal Input ID -->
                <div id="modelConfirm"
                    class="modal fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
                    <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">
                        <div class="flex justify-end p-2">
                            <button onclick="closeModal('modelConfirm')" type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-6 pt-0 text-center">
                            <svg class="w-20 h-20 text-kirim mx-auto" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="text-xl text-black font-bold mt-5 mb-6">Masukkan ID anda :</h3>
                            <input id="inputID" class="border border-gray-300 rounded-md p-2 w-full mb-6"
                                type="text" placeholder="Masukkan ID" required>
                            <br>
                            <button id="cek_simpanan"
                                class="text-white bg-kirim hover:bg-footer focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2">
                                Cek Simpanan
                            </button>
                            <a href="#" onclick="closeModal('modelConfirm')"
                                class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-cyan-200 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center">
                                Batal
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu Peminjaman -->
            <div class="text-center bg-footer py-5 rounded-md hover:bg-kirim">
                <button class="text-white rounded-md px-4 py-2 transition" onclick="openModal('modelConfirm')">
                    Peminjaman
                </button>
                <!-- Modal Input ID -->
                <div id="modelConfirm"
                    class="modal fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
                    <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">
                        <div class="flex justify-end p-2">
                            <button onclick="closeModal('modelConfirm')" type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-6 pt-0 text-center">
                            <svg class="w-20 h-20 text-kirim mx-auto" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="text-xl text-black font-bold mt-5 mb-6">Masukkan ID anda :</h3>
                            <input id="inputID" class="border border-gray-300 rounded-md p-2 w-full mb-6"
                                type="text" placeholder="Masukkan ID" required>
                            <br>
                            <button id="cek_simpanan"
                                class="text-white bg-kirim hover:bg-footer focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2">
                                Cek Simpanan
                            </button>
                            <a href="#" onclick="closeModal('modelConfirm')"
                                class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-cyan-200 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center">
                                Batal
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center bg-footer py-5 rounded-md hover:bg-kirim">
                <button class="text-white rounded-md px-4 py-2 transition" onclick="openModal('modelConfirm')">
                    Pembayaran
                </button>
                <!-- Modal Input ID -->
                <div id="modelConfirm"
                    class="modal fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
                    <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">
                        <div class="flex justify-end p-2">
                            <button onclick="closeModal('modelConfirm')" type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-6 pt-0 text-center">
                            <svg class="w-20 h-20 text-kirim mx-auto" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="text-xl text-black font-bold mt-5 mb-6">Masukkan ID anda :</h3>
                            <input id="inputID" class="border border-gray-300 rounded-md p-2 w-full mb-6"
                                type="text" placeholder="Masukkan ID" required>
                            <br>
                            <button id="cek_simpanan"
                                class="text-white bg-kirim hover:bg-footer focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2">
                                Cek Simpanan
                            </button>
                            <a href="#" onclick="closeModal('modelConfirm')"
                                class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-cyan-200 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center">
                                Batal
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center bg-footer py-5 rounded-md hover:bg-kirim">
                <button class="text-white rounded-md px-4 py-2 transition" onclick="openModal('modelConfirm')">
                    Penarikan
                </button>
                <!-- Modal Input ID -->
                <div id="modelConfirm"
                    class="modal fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
                    <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">
                        <div class="flex justify-end p-2">
                            <button onclick="closeModal('modelConfirm')" type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-6 pt-0 text-center">
                            <svg class="w-20 h-20 text-kirim mx-auto" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="text-xl text-black font-bold mt-5 mb-6">Masukkan ID anda :</h3>
                            <input id="inputID" class="border border-gray-300 rounded-md p-2 w-full mb-6"
                                type="text" placeholder="Masukkan ID" required>
                            <br>
                            <button id="cek_simpanan"
                                class="text-white bg-kirim hover:bg-footer focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2">
                                Cek Simpanan
                            </button>
                            <a href="#" onclick="closeModal('modelConfirm')"
                                class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-cyan-200 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center">
                                Batal
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Sukses -->
<div id="modalSukses"
    class="modal fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
    <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md p-6 text-center">
        <svg class="w-20 h-20 text-kirim mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
        </svg>
        <h3 class="text-xl font-bold mb-2">ID Terdaftar</h3>
        <p>Nama: <span id="nama"></span></p>
        <p>Saldo: <span id="saldo"></span></p>
        <button onclick="closeModal('modalSukses')" class="mt-4 bg-kirim text-white px-4 py-2 rounded">Tutup</button>
    </div>
</div>

<!-- Modal Error -->
<div id="modalError"
    class="modal fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
    <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md p-6 text-center">
        <img src="/path/to/error-image.png" alt="Error" class="w-20 h-20 mx-auto mb-4">
        <h3 class="text-xl font-bold mb-2">ID anda tidak terdaftar</h3>
        <p>Pastikan anda telah memperoleh ID dari admin</p>
        <button onclick="closeModal('modalError')" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Tutup</button>
    </div>
</div>

<script>
    document.getElementById('cek_simpanan').addEventListener('click', function() {
        const id = document.getElementById('inputID').value;
        if (id === "") return alert("Masukkan ID terlebih dahulu!");

        fetch(`/cek-simpanan/${id}`)
            .then(res => res.json())
            .then(data => {
                if (data.saldo !== "ID tidak ditemukan") {
                    document.getElementById('nama').innerText = data.nama;
                    document.getElementById('saldo').innerText = data.saldo;
                    openModal('modalSukses');
                } else {
                    openModal('modalError');
                }
            });
    });


    // Modal functions
    window.openModal = function(modalId) {
        document.getElementById(modalId).style.display = 'block';
        document.body.classList.add('overflow-y-hidden');
    }

    window.closeModal = function(modalId) {
        document.getElementById(modalId).style.display = 'none';
        document.body.classList.remove('overflow-y-hidden');
    }

    // Close all modals when press ESC
    document.onkeydown = function(event) {
        if (event.key === "Escape") {
            document.body.classList.remove('overflow-y-hidden');
            document.querySelectorAll('.modal').forEach(modal => modal.style.display = 'none');
        }
    };
    document.getElementById('cek_simpanan').addEventListener('click', function() {
        const kode_nasabah = document.getElementById('inputID').value; // input tetap pakai id="inputID"
        if (kode_nasabah === "") return alert("Masukkan kode nasabah terlebih dahulu!");

        fetch(`/cek-simpanan/${kode_nasabah}`)
            .then(res => res.json())
            .then(data => {
                if (data.saldo !== "ID tidak ditemukan") {
                    // document.getElementById('nama').innerText = data.nama;
                    // document.getElementById('saldo').innerText = data.saldo;
                    // openModal('modalSukses');
                    window.location.href = `/nasabah/simpanan/${kode_nasabah}`;
                } else {
                    openModal('modalError');
                }
            });
    });
</script>
