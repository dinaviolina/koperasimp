<x-admin.layouts.nav />

<body class="bg-gray-50 dark:bg-gray-800 min-h-screen flex flex-col">
    <x-admin.layouts.navbar />
    <x-admin.layouts.sidebar />
    <x-admin.das.header-components :title="$title" />
    <div class="sm:flex">
        <div class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
            <form class="lg:pr-3" action="#" method="GET">
                <label for="users-search" class="sr-only">Search</label>
                <div class="relative mt-1 lg:w-64 xl:w-96">
                    <input type="text" name="email" id="users-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Search for users">
                </div>
        </div>
        <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
            <a href="/das/penarikan/create">
                <button type="button" data-modal-target="add-user-modal" data-modal-toggle="add-user-modal"
                    class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-kirim hover:bg-footer focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Add
                </button>
                <a href="#"
                    class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-gray-800  dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                    <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Export PDF
                </a>
                <a href="#"
                    class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-gray-800  dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
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
    @if (session()->has('success'))
        <div class="bg-green-200 px-6 py-4 min-w-full mx-2 my-4 rounded-md text-lg flex items-center mx-auto ">
            <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                <path fill="currentColor"
                    d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                </path>
            </svg>
            <span class="text-green-800 font-medium text-sm">{{ session('success') }}</span>
        </div>
    @endif
    {{-- test  --}}
    {{-- <div class="bg-red-200 min-w-full px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto ">
    <svg viewBox="0 0 24 24" class="text-red-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
        <path fill="currentColor"
            d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z">
        </path>
    </svg>
    <span class="text-red-800 font-medium text-sm"> Your email address is invalid. </span>
</div> --}}
    <div class=" mt-6 ">
        {{-- < class="bg-white p-6 mt-6 w-full h-full overflow-x-auto shadow-md sm:rounded-lg dark:bg-gray-800 dark:border-gray-700"> --}}
        <table class="min-w-full divide-y bg-white divide-gray-200 table-auto ">
            <thead class="bg-gray-100 ">
                <tr>
                    <th scope="col" class="p-4 text-sm font-medium text-left text-gray-500 uppercase ">
                        No
                    </th>
                    <th scope="col" class="p-4 text-sm font-medium text-left text-gray-500 uppercase ">
                        Kode Pinjaman
                    </th>
                    <th scope="col" class="p-4 text-sm font-medium text-left text-gray-500 uppercase ">
                        No Anggota
                    </th>
                    <th scope="col" class="p-4 text-sm font-medium text-left text-gray-500 uppercase ">
                        Jumlah Pinjaman
                    </th>
                    <th scope="col" class="p-4 text-sm font-medium text-left text-gray-500 uppercase ">
                        Cicilan
                    </th>
                    <th scope="col" class="p-4 text-sm font-medium text-left text-gray-500 uppercase ">
                        Sisa
                    </th>
                    <th scope="col" class="p-4 text-sm font-medium text-left text-gray-500 uppercase ">
                        Jatuh Tempo
                    </th>
                    <th scope="col" class="p-4 text-sm font-medium text-left text-gray-500 uppercase ">
                        Tanggal Pengajuan
                    </th>
                    {{-- <th scope="col" class="p-4 text-sm font-medium text-left text-gray-500 uppercase ">
                        Updated At
                    </th> --}}
                    {{-- <th scope="col" class="p-4 text-sm font-medium text-left text-gray-500 uppercase ">
                        Actions
                    </th> --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-4 text-xs font-medium text-left text-gray-500  ">1</td>
                    <td class="p-4 text-xs font-medium text-left text-gray-500 hover:underline"><a href="">Kode
                            Pinjaman</a>
                    </td>
                    <td class="p-4 text-xs font-medium text-left text-gray-500  "><a href="">AG001</a></td>
                    <td class="p-4 text-xs font-medium text-left text-gray-500  ">Rp 5.000.000</td>
                    <td class="p-4 text-xs font-medium text-left text-gray-500  ">12 Bulan</td>
                    <td class="p-4 text-xs font-medium text-left text-gray-500  ">Rp 10.000</td>
                    <td class="p-4 text-xs font-medium text-left text-gray-500  ">2024-12-01</td>
                    <td class="p-4 text-xs font-medium text-left text-gray-500  ">2024-06-01</td>

                </tr>
            </tbody>
        </table>
    </div>
    <x-admin.footer></x-admin.footer>
    @stack('scripts')
</body>

</html>
