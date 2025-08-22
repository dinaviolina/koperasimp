<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> | Koperasi </title>
    <link rel="icon" href="{{ asset('/img/logo.png') }}">
    <link href="https://icons8.com/icon/E4FAF4hA9ugF/help">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    @vite('resources/css/app.css')
</head>

<body>

    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container ">
            <div class="flex items-center justify-between relative">
                <div class=" flex items-center xl:px-8 py-2">
                    <!-- <img src="./dist/img/Logo Poltekbang.png" width="50" alt="" /> -->
                    <a href="/"><img src="{{ asset('img/LogoPoltekbang.png') }}" class="h-11 w-15" alt="Logo">
                    </a>
                    <div class="ml-1">
                        <a href="/" class="font-bold xl:text-lg md:text-lg  text-black">
                            KLINIK PRATAMA<br>
                            <span class="font-bold xl:text-lg md:text-lg text-xs text-black">POLITEKNIK PENERBANGAN
                                SURABAYA</span>
                        </a>
                    </div>
                </div>
                <div class="flex items-center px-8">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 origin-top-left"></span>
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-transparent shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:max-w-full lg:shadow-none lg:rounded-none  ">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="/"
                                    class="text-base font-normal text-black py-2 mx-6 flex group-hover:text-cornflower-blue-500">Home</a>
                            </li>
                            <div class="dropdownLayanan">
                                <li class="group">
                                    <button id="dropdownHoverButtonL" data-dropdown-toggle="dropdownHoverL"
                                        data-dropdown-trigger="hover">
                                        <span
                                            class="text-base text-black py-2 mx-6 flex group-hover:text-cornflower-blue-500 ">Layanan</span>
                                    </button>
                                </li>
                                <div id="dropdownHoverL"
                                    class="z-10 hidden bg-white shadow-xl divide-y divide-gray-100 rounded-lg  w-auto">
                                    <ul class="p-2 text-sm text-gray-700 " aria-labelledby="dropdownHoverButtonL">

                                        <li class=" hover:bg-gray-100 hover:w-auto relative">

                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <li class="group">
                                <a href="/home/dokter"
                                    class="text-base text-black py-2 mx-6 flex group-hover:text-cornflower-blue-500">Dokter</a>
                            </li>
                            <!-- <li class="group">
                <a href="/home/review" class="text-base text-black py-2 mx-6 flex group-hover:text-cornflower-blue-500">Review</a>
            </li> -->
                            <div class="dropdownTentang">
                                <li class="group">
                                    <button id="dropdownHoverButtonT" data-dropdown-toggle="dropdownHoverT"
                                        data-dropdown-trigger="hover">
                                        <span
                                            class="text-base text-black py-2 mx-6 flex group-hover:text-cornflower-blue-500 ">Tentang
                                            Klinik</span>
                                    </button>
                                </li>
                                <div id="dropdownHoverT"
                                    class="z-10 hidden bg-white shadow-xl divide-y divide-gray-100 rounded-lg  w-auto">
                                    <ul class="p-2 text-sm text-gray-700 " aria-labelledby="dropdownHoverButtonT">
                                        <li class=" hover:bg-gray-100 hover:w-auto relative">
                                            <a href="/home/visimisi" class="  flex items-center  rounded-md py-2 px-4 ">
                                                <span>Visi & Misi</span>
                                            </a>
                                        </li>
                                        <li class=" hover:bg-gray-100 hover:w-auto relative">
                                            <a href="/home/prestasi" class="  flex items-center  rounded-md py-2 px-4 ">
                                                <span>Prestasi</span>
                                            </a>
                                        </li>
                                        <li class=" hover:bg-gray-100 hover:w-auto relative">
                                            <a href="/home/struktur" class="  flex items-center  rounded-md py-2 px-4 ">
                                                <span>Struktur Organisasi</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @auth
                                <div class="dropdownProfile">
                                    <li class="group">
                                        <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover"
                                            data-dropdown-trigger="hover">
                                            <img src="{{ asset('img/orang.png') }}" alt=""
                                                class="w-9 h-9 rounded-full mx-6 flex p-1">
                                        </button>
                                    </li>
                                    <div id="dropdownHover"
                                        class="z-10 hidden bg-white shadow-xl divide-y divide-gray-100 rounded-lg  w-auto">
                                        @can('admin')
                                            <ul class="p-2 text-sm text-gray-700 " aria-labelledby="dropdownHoverButton">
                                                <li class=" hover:bg-gray-100 hover:w-auto relative">
                                                    <a href="/admin" class="  flex items-center  rounded-md py-2 px-4 ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                                        </svg>
                                                        <span>Dashboard</span>
                                                    </a>
                                                </li>
                                            @endcan
                                            <li class=" hover:bg-gray-100 hover:w-auto relative">
                                                <a href="/home/riwayat"
                                                    class="  flex items-center  rounded-md py-2 px-4 space-x-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="size-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                    </svg>
                                                    <span>Riwayat</span>
                                                </a>
                                            </li>
                                            <li class=" hover:bg-gray-100 hover:w-auto relative">
                                                <a href="/"
                                                    class="  flex items-center  rounded-md py-2 px-4  space-x-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="size-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                                    </svg>
                                                    <span>Profil</span>
                                                </a>
                                            </li>
                                            <li class="relative w-auto hover:bg-gray-100">
                                                p <a class="  flex items-center  rounded-md py-2 px-4 "
                                                    href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                                                    </svg>
                                                    <span class="ml-2">{{ __('Logout') }}</span>
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                @else
                                    <li>
                                        <div class="flex justify-end">
                                            <a href="/login"
                                                class="cursor-pointer bg-cornflower-blue-500 hover:bg-cornflower-blue-600 text-white  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5   focus:outline-none "
                                                ta">Login</a>
                                        </div>
                                    </li>
                                @endauth
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div>

        @yield('content')
    </div>


    @vite('resources/js/app.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('script')
</body>

</html>
