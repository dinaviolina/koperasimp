<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <title></title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <x-navbar></x-navbar>
        {{-- <x-header>Home Page</x-header> --}}
        <main>
            <section id="home">
                <x-views.home></x-views.home>
            </section>
        </main>
    </div>

    {{-- start home --}}

    {{-- end home --}}
    {{-- about us --}}
    <section id="about us" class="relative w-full z-20 py-8 overflow-hidden bg-white">
        {{-- class=" relative w-full z-20 py-8 overflow-hidden bg-white dark:bg-gray-800 md:pt-0 sm:pt-16 2xl:pt-16"> --}}
        <div class="w-full px-4">
            <div class="mx-auto text-center  relative z-10 ">
                <h2 class="font-extrabold text-green-600 text-4xl ">TENTANG</h2>
                <h2 class="font-bold text-black text-3xl mb-4 sm:text-4xl lg:text-5-xl">Home > Tentang</h2>
            </div>
        </div>
        <div class=" xl:w-10/12 mx-auto relative">
            <div class=" overflow-hidden mt-8">
                <div class="relative z-30 pb-8  sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                    {{-- <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                        fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                        <polygon points="50,0 100,0 50,100 0,100"></polygon>
                    </svg> --}}
                    <div class="pt-1"></div>
                    <main
                        class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28 relative z-20">
                        <div class="sm:text-center lg:text-left">
                            <h3
                                class="my-6 text-2xl tracking-tight font-extrabold text-gray-900 sm:text-3xl md:text-4xl">
                                Tentang Koperasi Desa Merah Putih
                            </h3>
                            <p>
                                Klinik Pratama adalah sebuah klinik yang terdapat di Politeknik Negeri Bangkalan yang
                                berdiri sejak tahun 2010.
                                Klinik Pratama Politeknik Negeri Bangkalan merupakan klinik yang melayani berbagai macam
                                layanan kesehatan yang
                                terdiri dari pelayanan kesehatan umum, pelayanan kesehatan gigi, pelayanan kesehatan
                                kebidanan, pelayanan kesehatan
                                keperawatan, pelayanan kesehatan farmasi, pelayanan kesehatan laboratorium, pelayanan
                                kesehatan radiologi, pelayanan kesehatan gizi,
                                pelayanan kesehatan kefarmasian, pelayanan kesehatan keperawatan. Kami berkomitmen untuk
                                memberikan perawatan yang berkualitas tinggi
                                dan memberikan pengalaman yang nyaman bagi pasien dan keluarga mereka .
                            </p>
                        </div>
                    </main>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 z-20">
                <img class="h-56 w-full object-cover object-top sm:h-72 md:h-96 lg:w-full lg:h-full"
                    src="{{ asset('img/landingpage/foto_bersama.jpg') }}" alt="foto about">
            </div>
        </div>
    </section>
    {{-- end about us --}}
    <section id="usaha" class="text-gray-700 body-font mt-10">
        <div class="flex justify-center text-3xl font-bold text-gray-800 text-center">
            Usaha
        </div>
        <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">

            {{-- <div class="border-b mb-5 flex justify-between text-sm">
                <div class="text-indigo-600 flex items-center pb-2 pr-2 border-b-2 border-indigo-600 uppercase">
                    <svg class="h-6 mr-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.005 455.005"
                        style="enable-background:new 0 0 455.005 455.005;" xml:space="preserve">
                        <g>
                            <path
                                d="M446.158,267.615c-5.622-3.103-12.756-2.421-19.574,1.871l-125.947,79.309c-3.505,2.208-4.557,6.838-2.35,10.343 c2.208,3.505,6.838,4.557,10.343,2.35l125.947-79.309c2.66-1.675,4.116-1.552,4.331-1.432c0.218,0.12,1.096,1.285,1.096,4.428 c0,8.449-6.271,19.809-13.42,24.311l-122.099,76.885c-6.492,4.088-12.427,5.212-16.284,3.084c-3.856-2.129-6.067-7.75-6.067-15.423 c0-19.438,13.896-44.61,30.345-54.967l139.023-87.542c2.181-1.373,3.503-3.77,3.503-6.347s-1.323-4.974-3.503-6.347L184.368,50.615 c-2.442-1.538-5.551-1.538-7.993,0L35.66,139.223C15.664,151.815,0,180.188,0,203.818v4c0,23.63,15.664,52.004,35.66,64.595 l209.292,131.791c3.505,2.207,8.136,1.154,10.343-2.35c2.207-3.505,1.155-8.136-2.35-10.343L43.653,259.72 C28.121,249.941,15,226.172,15,207.818v-4c0-18.354,13.121-42.122,28.653-51.902l136.718-86.091l253.059,159.35l-128.944,81.196 c-20.945,13.189-37.352,42.909-37.352,67.661c0,13.495,4.907,23.636,13.818,28.555c3.579,1.976,7.526,2.956,11.709,2.956 c6.231,0,12.985-2.176,19.817-6.479l122.099-76.885c11.455-7.213,20.427-23.467,20.427-37.004 C455.004,277.119,451.78,270.719,446.158,267.615z">
                            </path>
                            <path
                                d="M353.664,232.676c2.492,0,4.928-1.241,6.354-3.504c2.207-3.505,1.155-8.136-2.35-10.343l-173.3-109.126 c-3.506-2.207-8.136-1.154-10.343,2.35c-2.207,3.505-1.155,8.136,2.35,10.343l173.3,109.126 C350.916,232.303,352.298,232.676,353.664,232.676z">
                            </path>
                            <path
                                d="M323.68,252.58c2.497,0,4.938-1.246,6.361-3.517c2.201-3.509,1.14-8.138-2.37-10.338L254.46,192.82 c-3.511-2.202-8.139-1.139-10.338,2.37c-2.201,3.51-1.14,8.138,2.37,10.338l73.211,45.905 C320.941,252.21,322.318,252.58,323.68,252.58z">
                            </path>
                            <path
                                d="M223.903,212.559c-3.513-2.194-8.14-1.124-10.334,2.39c-2.194,3.514-1.124,8.14,2.39,10.334l73.773,46.062 c1.236,0.771,2.608,1.139,3.965,1.139c2.501,0,4.947-1.251,6.369-3.529c2.194-3.514,1.124-8.14-2.39-10.334L223.903,212.559z">
                            </path>
                            <path
                                d="M145.209,129.33l-62.33,39.254c-2.187,1.377-3.511,3.783-3.503,6.368s1.345,4.983,3.54,6.348l74.335,46.219 c1.213,0.754,2.586,1.131,3.96,1.131c1.417,0,2.833-0.401,4.071-1.201l16.556-10.7c3.479-2.249,4.476-6.891,2.228-10.37 c-2.248-3.479-6.891-4.475-10.37-2.228l-12.562,8.119l-60.119-37.38l48.2-30.355l59.244,37.147l-6.907,4.464 c-3.479,2.249-4.476,6.891-2.228,10.37c2.249,3.479,6.894,4.476,10.37,2.228l16.8-10.859c2.153-1.392,3.446-3.787,3.429-6.351 c-0.018-2.563-1.344-4.94-3.516-6.302l-73.218-45.909C150.749,127.792,147.647,127.795,145.209,129.33z">
                            </path>
                            <path
                                d="M270.089,288.846c2.187-3.518,1.109-8.142-2.409-10.329l-74.337-46.221c-3.518-2.188-8.143-1.109-10.329,2.409 c-2.187,3.518-1.109,8.142,2.409,10.329l74.337,46.221c1.232,0.767,2.601,1.132,3.953,1.132 C266.219,292.387,268.669,291.131,270.089,288.846z">
                            </path>
                            <path
                                d="M53.527,192.864c-2.187,3.518-1.109,8.142,2.409,10.329l183.478,114.081c1.232,0.767,2.601,1.132,3.953,1.132 c2.506,0,4.956-1.256,6.376-3.541c2.187-3.518,1.109-8.142-2.409-10.329L63.856,190.455 C60.338,188.266,55.714,189.346,53.527,192.864z">
                            </path>
                        </g>
                    </svg>
                    <a href="#" class="font-semibold inline-block"></a>Jenis Usaha</a>
                </div>
                <a href="/usaha">Lihat Semua</a>
            </div> --}}


            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">

                <!-- CARD 1 -->
                <div class="rounded overflow-hidden shadow-lg flex flex-col">
                    <a href="#"></a>
                    <div class="relative"><a href="#">
                            <img class="w-full"
                                src="https://images.pexels.com/photos/61180/pexels-photo-61180.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500"
                                alt="Sunset in the mountains">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                        </a>
                        <a href="#!">
                            <div
                                class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                                Cooking
                            </div>
                        </a>
                    </div>
                    <div class="px-6 py-4 mb-auto">
                        <a href="#"
                            class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">Simplest
                            Salad Recipe ever</a>
                        <p class="text-gray-500 text-sm">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                    <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                        <span href="#"
                            class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <svg height="13px" width="13px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-1">6 mins ago</span>
                        </span>

                        <span href="#"
                            class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                            <span class="ml-1">39 Comments</span>
                        </span>
                    </div>
                </div>



                <!-- CARD 2 -->
                <div class="rounded overflow-hidden shadow-lg flex flex-col">
                    <a href="#"></a>
                    <div class="relative"><a href="#">
                            <img class="w-full"
                                src="https://images.pexels.com/photos/1600727/pexels-photo-1600727.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500"
                                alt="Sunset in the mountains">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                        </a><a href="#!">
                            <div
                                class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                                Cooking
                            </div>
                        </a>
                    </div>
                    <div class="px-6 py-4 mb-auto">
                        <a href="#"
                            class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">Best
                            FastFood Ideas (Yummy)</a>
                        <p class="text-gray-500 text-sm">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                    <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                        <span href="#"
                            class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <svg height="13px" width="13px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-1"> 10 days ago</span>
                        </span>

                        <span href="#"
                            class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                            <span class="ml-1">0 Comments</span>
                        </span>
                    </div>
                </div>



                <!-- CARD 3 -->
                <div class="rounded overflow-hidden shadow-lg flex flex-col">
                    <a href="#"></a>
                    <div class="relative"><a href="#">
                            <img class="w-full"
                                src="https://images.pexels.com/photos/6086/food-salad-healthy-vegetables.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500"
                                alt="Sunset in the mountains">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                        </a><a href="#!">
                            <div
                                class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                                Cooking
                            </div>
                        </a>
                    </div>
                    <div class="px-6 py-4 mb-auto">
                        <a href="#"
                            class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">Why
                            to eat salad?</a>
                        <p class="text-gray-500 text-sm">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                    <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                        <span href="#"
                            class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <svg height="13px" width="13px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-1">16 hours ago</span>
                        </span>

                        <span href="#"
                            class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                            <span class="ml-1">9 Comments</span>
                        </span>
                    </div>
                </div>

            </div>

        </div>



        {{-- </div>
        <div class="container px-5 py-12 mx-auto">
            <div class="flex flex-wrap text-center justify-center">
                <div class="p-4 md:w-1/4 sm:w-1/2">
                    <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                        <div class="flex justify-center">
                            <img src="https://image3.jdomni.in/banner/13062021/58/97/7C/E53960D1295621EFCB5B13F335_1623567851299.png?output-format=webp"
                                class="w-32 mb-3">
                        </div>
                        <h2 class="title-font font-regular text-2xl text-gray-900">Latest Milling Machinery</h2>
                    </div>
                </div>

                <div class="p-4 md:w-1/4 sm:w-1/2">
                    <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                        <div class="flex justify-center">
                            <img src="https://image2.jdomni.in/banner/13062021/3E/57/E8/1D6E23DD7E12571705CAC761E7_1623567977295.png?output-format=webp"
                                class="w-32 mb-3">
                        </div>
                        <h2 class="title-font font-regular text-2xl text-gray-900">Reasonable Rates</h2>
                    </div>
                </div>

                <div class="p-4 md:w-1/4 sm:w-1/2">
                    <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                        <div class="flex justify-center">
                            <img src="https://image3.jdomni.in/banner/13062021/16/7E/7E/5A9920439E52EF309F27B43EEB_1623568010437.png?output-format=webp"
                                class="w-32 mb-3">
                        </div>
                        <h2 class="title-font font-regular text-2xl text-gray-900">Time Efficiency</h2>
                    </div>
                </div>

                <div class="p-4 md:w-1/4 sm:w-1/2">
                    <div class="px-4 py-6 transform transition duration-500 hover:scale-110">
                        <div class="flex justify-center">
                            <img src="https://image3.jdomni.in/banner/13062021/EB/99/EE/8B46027500E987A5142ECC1CE1_1623567959360.png?output-format=webp"
                                class="w-32 mb-3">
                        </div>
                        <h2 class="title-font font-regular text-2xl text-gray-900">Expertise in Industry</h2>
                    </div>
                </div>

            </div>
        </div> --}}
    </section>
    {{-- <section id="usaha" class=" relative w-full z-20  overflow-hidden bg-white ">
        <div class="w-full px-4">
            <div class="mx-auto text-center  relative z-10 ">
                <h2 class="font-extrabold text-green-600 text-4xl ">USAHA</h2>
                <h2 class="font-bold text-black text-3xl mb-4 sm:text-4xl lg:text-5-xl">Home > Jenis Usaha</h2>
            </div>
        </div>

        <div id="services" class=" bg-cover w-full flex justify-center items-center"
            style="background-image: url(&quot;https://kikimodev.com/static/media/bgheader.5609055ae782da0be362.webp&quot;);">

            <div class="w-full py-8 bg-white p-5 bg-opacity-40 backdrop-filter  backdrop-blur-lg">
                <div class="w-full px-4">
                    <div class="mx-auto text-center  relative z-10 ">
                        <h2 class="font-extrabold text-green-600 text-4xl ">USAHA</h2>
                        <h2 class="font-bold text-black text-3xl mb-4 sm:text-4xl lg:text-5-xl">Home > Jenis Usaha</h2>
                    </div>
                </div>
                <div class="w-10/12 mx-auto rounded-2xl bg-white p-5 bg-opacity-40 backdrop-filter backdrop-blur-lg">
                    <div>
                        <div
                            class="flex flex-wrap items-center overflow-x-auto overflow-y-hidden py-2 justify-center text-gray-800">

                            <div class="flex flex-col md:w-1/2 xl:w-1/2 p-4">
                                <div class="bg-white shadow-md rounded-3xl p-4 border border-gray-100">
                                    <div class="flex-none lg:flex">
                                        <div class="h-full w-full lg:h-full lg:w-full lg:mb-0 mb-3"><img
                                                src="https://apis.kikimodev.com/Portfolio/Portfolio_YAy5x1qwZW.png"
                                                alt="Work" class="w-full object-cover lg:h-full rounded-2xl">
                                        </div>
                                        <div class="flex-auto ml-3 justify-evenly py-2">
                                            <div class="flex flex-wrap">
                                                <div class="w-full flex-none text-xs text-blue-700 font-medium">
                                                    Kikimo Developers</div>
                                                <h3 class="flex-auto text-lg font-medium">Smart Alert SOS</h3>
                                            </div>
                                            <div class="flex py-4 text-sm text-gray-500">
                                                <div class="flex-1 inline-flex items-center"><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-5 w-5 mr-3 text-gray-400" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z">
                                                        </path>
                                                    </svg>
                                                    <p>Nairobi, Kenya</p>
                                                </div>
                                                <div class="flex-1 inline-flex items-center"><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-5 w-5 mr-2 text-gray-400" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                    <p>Posted 6 month(s) ago</p>
                                                </div>
                                            </div>
                                            <div class="flex space-x-3 text-sm font-medium"><a
                                                    class="mb-2 md:mb-0 bg-white px-4 py-2 shadow-sm tracking-wider border text-gray-600 rounded-full hover:bg-gray-100"
                                                    href="/work/36"><span>#WebDevelopment</span></a><button
                                                    class="mb-2 md:mb-0 bg-red-600 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800">View</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col md:w-1/2 xl:w-1/2 p-4">
                                <div class="bg-white shadow-md rounded-3xl p-4 border border-gray-100">
                                    <div class="flex-none lg:flex">
                                        <div class="h-full w-full lg:h-full lg:w-full lg:mb-0 mb-3"><img
                                                src="https://apis.kikimodev.com/Portfolio/Portfolio_rxL2KTMqyr.png"
                                                alt="Work" class="w-full object-cover lg:h-full rounded-2xl">
                                        </div>
                                        <div class="flex-auto ml-3 justify-evenly py-2">
                                            <div class="flex flex-wrap">
                                                <div class="w-full flex-none text-xs text-blue-700 font-medium">
                                                    Kikimo Developers</div>
                                                <h3 class="flex-auto text-lg font-medium">Sightloss Kenya Website
                                                    with admin panel</h3>
                                            </div>
                                            <div class="flex py-4 text-sm text-gray-500">
                                                <div class="flex-1 inline-flex items-center"><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-5 w-5 mr-3 text-gray-400" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z">
                                                        </path>
                                                    </svg>
                                                    <p>Nairobi, Kenya</p>
                                                </div>
                                                <div class="flex-1 inline-flex items-center"><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-5 w-5 mr-2 text-gray-400" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                    <p>Posted 6 month(s) ago</p>
                                                </div>
                                            </div>
                                            <div class="flex space-x-3 text-sm font-medium"><a
                                                    class="mb-2 md:mb-0 bg-white px-4 py-2 shadow-sm tracking-wider border text-gray-600 rounded-full hover:bg-gray-100"
                                                    href="/work/34"><span>#WebDevelopment</span></a><button
                                                    class="mb-2 md:mb-0 bg-red-600 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800">View</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col md:w-1/2 xl:w-1/2 p-4">
                                <div class="bg-white shadow-md rounded-3xl p-4 border border-gray-100">
                                    <div class="flex-none lg:flex">
                                        <div class="h-full w-full lg:h-full lg:w-full lg:mb-0 mb-3"><img
                                                src="https://apis.kikimodev.com/Portfolio/Portfolio_TMkWwDcLvo.png"
                                                alt="Work" class="w-full object-cover lg:h-full rounded-2xl">
                                        </div>
                                        <div class="flex-auto ml-3 justify-evenly py-2">
                                            <div class="flex flex-wrap">
                                                <div class="w-full flex-none text-xs text-blue-700 font-medium">
                                                    Kikimo Developers</div>
                                                <h3 class="flex-auto text-lg font-medium">Water Management System
                                                </h3>
                                            </div>
                                            <div class="flex py-4 text-sm text-gray-500">
                                                <div class="flex-1 inline-flex items-center"><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-5 w-5 mr-3 text-gray-400" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z">
                                                        </path>
                                                    </svg>
                                                    <p>Nairobi, Kenya</p>
                                                </div>
                                                <div class="flex-1 inline-flex items-center"><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-5 w-5 mr-2 text-gray-400" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                    <p>Posted 6 month(s) ago</p>
                                                </div>
                                            </div>
                                            <div class="flex space-x-3 text-sm font-medium"><a
                                                    class="mb-2 md:mb-0 bg-white px-4 py-2 shadow-sm tracking-wider border text-gray-600 rounded-full hover:bg-gray-100"
                                                    href="/work/33"><span>#WebDevelopment</span></a><button
                                                    class="mb-2 md:mb-0 bg-red-600 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800">View</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}
    <section class="relative w-full z-20 py-12 overflow-hidden bg-gray-200">
        {{-- <section class="py-10 bg-gray-50 sm:py-16 lg:py-24"> --}}
        <div class="px-4 mx-auto sm:px-6 lg:px-8 ">
            <div class=" mx-auto text-center">
                <h2 class=" font-bold leading-tight text-black sm:text-4xl lg:text-3xl">
                    SYARAT DAN KETENTUAN KOPERASI MERAH PUTIH
                </h2>
            </div>
            <div class="xl:w-10/12 mx-auto mt-8 space-y-4 md:mt-16">
                {{-- <div class="max-w-3xl mx-auto mt-8 space-y-4 md:mt-16"> --}}
                <div
                    class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button type="button" id="question1" data-state="closed"
                        class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black">How can I get started?</span>
                        <svg id="arrow1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="answer1" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>Getting started is easy! Sign up for an account, and you'll have access to our platform's
                            features. No credit card required for the initial signup.</p>
                    </div>
                </div>
                <div
                    class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button type="button" id="question2" data-state="closed"
                        class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black">What is the pricing structure?</span>
                        <svg id="arrow2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="answer2" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>Our pricing structure is flexible. We offer both free and paid plans. You can choose the
                            one
                            that
                            suits your needs and budget.</p>
                    </div>
                </div>
                <div
                    class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button type="button" id="question3" data-state="closed"
                        class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black">What kind of support do you
                            provide?</span>
                        <svg id="arrow3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="answer3" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>We offer comprehensive customer support. You can reach out to our support team through
                            various
                            channels, including email, chat, and a knowledge base.</p>
                    </div>
                </div>
                <div
                    class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button type="button" id="question4" data-state="closed"
                        class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black">Can I cancel my subscription
                            anytime?</span>
                        <svg id="arrow4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="answer4" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>Yes, you can cancel your subscription at any time without any hidden fees. We believe in
                            providing a hassle-free experience for our users.</p>
                    </div>
                </div>
            </div>
            {{-- <p class="text-center text-gray-600 textbase mt-9">
                Still have questions?
                <span
                    class="cursor-pointer font-medium text-tertiary transition-all duration-200 hover:text-tertiary focus:text-tertiary hover-underline">Contact
                    our support
                </span>
            </p> --}}
        </div>
        <script>
            // JavaScript to toggle the answers and rotate the arrows
            document.querySelectorAll('[id^="question"]').forEach(function(button, index) {
                button.addEventListener('click', function() {
                    var answer = document.getElementById('answer' + (index + 1));
                    var arrow = document.getElementById('arrow' + (index + 1));

                    if (answer.style.display === 'none' || answer.style.display === '') {
                        answer.style.display = 'block';
                        arrow.style.transform = 'rotate(0deg)';
                    } else {
                        answer.style.display = 'none';
                        arrow.style.transform = 'rotate(-180deg)';
                    }
                });
            });
        </script>
    </section>

    <section id="faq" class=" relative w-full z-20 py-8 overflow-hidden bg-white ">
        {{-- <div class="w-full px-4">
            <div class="mx-auto text-center  relative z-10 ">
                <h2 ABOUT class="font-extrabold text-black text-4xl ">Kenapa harus bergabung menjadi anggota aktif
                    koperasi merah putih?
                </h2>
            </div>
        </div> --}}
        <div class="py-24 px-8 max-w-5xl mx-auto flex flex-col md:flex-row gap-12">
            <div class="flex flex-col text-left basis-1/2">

                <p class="inline-block font-semibold text-primary mb-4">Insurance FAQ</p>
                <p class="sm:text-4xl text-3xl font-extrabold text-base-content">Frequently Asked Questions</p>
            </div>
            <ul class="basis-1/2">
                <h2 class="font-extrabold text-black text-4xl ">Kenapa harus bergabung menjadi anggota aktif
                    koperasi merah putih?
                </h2>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <img class="w-9 h-9" src="img/logo.png" alt="">
                        <span class="flex-1 text-base-content">How secure is my insurance information?</span>
                    </button>
                    <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                        style="transition: max-height 0.3s ease-in-out 0s;">
                        <div class="pb-5 leading-relaxed">
                            <div class="space-y-2 leading-relaxed">We prioritize the security of your insurance
                                information. We use advanced encryption and strict data protection measures to ensure
                                your data is safe and confidential.</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <img class="w-9 h-9" src="img/logo.png" alt="">

                        <span class="flex-1 text-base-content">How can I customize my insurance coverage?</span>
                    </div>
                    <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                        style="transition: max-height 0.3s ease-in-out 0s;">
                        <div class="pb-5 leading-relaxed">
                            <div class="space-y-2 leading-relaxed">Our insurance plans are customizable. You can
                                tailor
                                your coverage to meet your specific needs and budget.</div>
                        </div>
                    </div>
                </li>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-base-content">Is there a waiting period for insurance claims?</span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center transition duration-200 ease-out false"></rect>
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center rotate-90 transition duration-200 ease-out false">
                            </rect>
                        </svg>
                    </button>
                    <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                        style="transition: max-height 0.3s ease-in-out 0s;">
                        <div class="pb-5 leading-relaxed">
                            <div class="space-y-2 leading-relaxed">There may be a waiting period for certain insurance
                                claims, depending on the policy terms and conditions. Please refer to your policy
                                documents for details.</div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>



    {{-- <section id="komentar" class="bg-gray-100">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:py-20 lg:px-8">
            <div class="max-w-2xl lg:max-w-4xl mx-auto text-center ">
                <h2 class="font-extrabold text-black text-4xl ">Komentar
                </h2>
                <p class="mt-3 text-lg text-gray-500">Getting started is easy! Sign up for an account, and you'll have
                    access to our platform's
                    features. No credit card required for the initial signup.</p>
            </div>

            <div class="px-4 pb-5 sm:px-6 sm:pb-6  rounded-md bg-white xl:w-10/12 mx-auto m-5 ">
                <p class="p-2">Getting started is easy! Sign up for an account, and you'll have access to our
                    platform's
                    features. No credit card required for the initial signup.</p>
            </div>
            <div class="xl:w-10/12 mx-auto mb-5">
                <div class="my-3 ">
                    <h4 class="font-bold"> Komentar</h4>
                    {{-- <div class="px-4 pb-5 sm:px-6 sm:pb-6  bg-white mb-5 "> --}}
    {{-- <input type="article" name="komentar" id="komentar"
                        class="h-32 mt-1 w-full px-3 py-5 border  border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Tulis komentar Anda di sini...">
                </div>
            </div> --}}
    {{-- <div class="grid grid-cols-2 gap-4 mb-5">
                <div class="">
                    <label for="nama" class="block text-sm  text-black">Nama</label>
                    <input type="text" name="nama" id="nama"
                        class="h-16 mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                        placeholder="Masukkan nama Anda">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-black">Email</label>
                    <input type="email" name="email" id="email"
                        class="h-16  mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                        placeholder="Masukkan email Anda">
                </div>
            </div> --}}
    {{-- <button class="">
                <div class="flex justify-end mx-auto">
                    <button
                        class="px-4 py-2 bg-kirim text-white rounded-md hover:bg-footer focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Kirim Komentar
                    </button>
                </div>
            </button>
        </div>
    </section>  --}}
    <!-- Visit us section -->
    <section class="bg-gray-100">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:py-20 lg:px-8">
            <div class="max-w-2xl lg:max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-900" id="contactUs">Visit Our Location</h2>
                <p class="mt-3 text-lg text-gray-500">Let us serve you the best</p>
            </div>
            <div class="mt-8 lg:mt-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <div class="max-w-full mx-auto rounded-lg overflow-hidden">
                            <div class="border-t border-gray-200 px-6 py-4">
                                <h3 class="text-lg font-bold text-gray-900">Contact</h3>
                                <p class="mt-1 font-bold text-gray-600"><a href="tel:+123">Phone: +91
                                        123456789</a></p>
                                <a class="flex m-1" href="tel:+919823331842">
                                    <div class="flex-shrink-0">
                                        <div
                                            class="flex items-center justify-between h-10 w-30 rounded-md bg-indigo-500 text-white p-2">
                                            <!-- Heroicon name: phone -->
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d=" M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0
                002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97
                1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0
                01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125
                1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                            </svg>
                                            Call now
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="px-6 py-4">
                                <h3 class="text-lg font-medium text-gray-900">Our Address</h3>
                                <p class="mt-1 text-gray-600">Sale galli, 60 foot road, Latur</p>
                            </div>
                            <div class="border-t border-gray-200 px-6 py-4">
                                <h3 class="text-lg font-medium text-gray-900">Hours</h3>
                                <p class="mt-1 text-gray-600">Monday - Sunday : 2pm - 9pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg overflow-hidden order-none sm:order-first">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3785.7850672491236!2d76.58802159999999!3d18.402630699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcf83ca88e84341%3A0x841e547bf3ad066d!2zQmFwcGEgZmxvdXIgbWlsbCB8IOCkrOCkquCljeCkquCkviDgpKrgpYDgpKAg4KSX4KS_4KSw4KSj4KWALCDgpK7gpL_gpLDgpJrgpYAg4KSV4KS-4KSC4KSh4KSqIOCkhuCko-CkvyDgpLbgpYfgpLXgpL7gpK_gpL4!5e0!3m2!1sen!2sin!4v1713433597892!5m2!1sen!2sin"
                            class="w-full" width="600" height="450" style="border:0;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                </div>
            </div>
        </div>
    </section>


    <x-footer></x-footer>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
