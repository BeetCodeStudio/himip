<html>

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/style.css'; ?>">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <!-- Navigation Bar -->
    <div class="h-8"></div>
    <div class="fixed bg-blue-800 w-full top-0 z-10 shadow-md font-poppins">
        <header class="container mx-auto">
            <nav class="py-3 flex justify-between items-center">
                <!-- logo -->
                <a href="<?php echo esc_url(home_url('/')); ?>"  class="flex gap-3">
                    <img src="<?php echo  bloginfo('template_directory').'/img/himip_logo.png' ?>" class="h-10 w-full" alt="">
                </a>
                <!-- logo -->

                <!--  Desktop nav -->
                <div class="hidden md:flex">
                    <ul class="flex space-x-7">
                        <li>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-md font-semibold text-slate-300">Home</a>
                        </li>

                        <li x-data="{hover1: false}" class="" @mouseover="hover1 = true" @mouseover.away="hover1 = false">
                            <div class="relative ">
                                <button @click="hover1 = !hover1" class="text-md font-semibold text-slate-300 flex gap-2 justify-center items-center">Profil
                                    Jurusan</button>
                                <div class="origin-top-left absolute top-6 left-0 w-40 " x-show="hover1">
                                    <div class="h-3 bg-transparent">
                                    </div>
                                    <div class="rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                                        <a href="<?php echo esc_url(home_url('/sambutan-kajur')); ?>/" class="text-gray-700 hover:text-blue-800 block px-4 py-2 text-sm">Sambutan
                                            Ketua Jurusan</a>
                                        <a href="<?php echo esc_url(home_url('/visi-jurusan')); ?>/" class="text-gray-700 hover:text-blue-800 block px-4 py-2 text-sm">Sejarah
                                            dan Visi Misi Jurusan</a>
                                        <a href="<?php echo esc_url(home_url('/profil-dosen')); ?>" class="text-gray-700 hover:text-blue-800 block px-4 py-2 text-sm">Profil
                                            Dosen</a>
                                        <a href="<?php echo esc_url(home_url('/kurikulum')); ?>" class="text-gray-700 hover:text-blue-800 block px-4 py-2 text-sm">Kurikulum</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li x-data="{hover2: false}" class="" @mouseover="hover2 = true" @mouseover.away="hover2 = false">
                            <div class="relative ">
                                <button @click="hover2 = !hover2" class="text-md font-semibold text-slate-300 flex gap-2 justify-center items-center">Profil
                                    HIMIP

                                </button>
                                <div class="origin-top-left absolute top-6 left-0 w-40" x-show="hover2">
                                    <div class="h-3 bg-transparent">
                                    </div>
                                    <div class=" rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                                        <a href="<?php echo esc_url(home_url('/sambutan-bupati')); ?>" class="text-gray-700 hover:text-blue-800 block px-4 py-2 text-sm">Sambutan
                                            Bupati HIMIP</a>
                                        <a href="<?php echo esc_url(home_url('/visi')); ?>" class="text-gray-700 hover:text-blue-800 block px-4 py-2 text-sm">Visi
                                            Misi</a>
                                        <a href="<?php echo esc_url(home_url('/struktur-organisasi')); ?>" class="text-gray-700 hover:text-blue-800 block px-4 py-2 text-sm">Struktur
                                            HIMIP</a>
                                        <a href="<?php echo esc_url(home_url('/leadership')); ?>" class="text-gray-700 hover:text-blue-800 block px-4 py-2 text-sm">Leadership
                                            Insight</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/artikel')); ?>" class="text-md font-semibold text-slate-300">Dinding Kreatif
                                Mahasiswa</a>
                        </li>
                        <li x-data="{ hover3: false}" class="" @mouseover=" hover3 = true" @mouseover.away=" hover3 = false">
                            <div class="relative ">
                                <button class="text-md font-semibold text-slate-300 flex items-center justify-center gap-2">Kegiatan

                                </button>
                                <div class="origin-top-left absolute top-6 right-0 w-36 " x-show="hover3">
                                    <div class="h-3 bg-transparent">
                                    </div>
                                    <div class="rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                                        <a href="<?php echo esc_url(home_url('/upcoming-event')); ?>" class="text-gray-700 hover:text-blue-800 block px-4 py-2 text-sm">Upcoming
                                            Events</a>
                                        <a href="<?php echo esc_url(home_url('/press-release')); ?>" class="text-gray-700 hover:text-blue-800 block px-4 py-2 text-sm">Press
                                            Release</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--  Desktop nav -->

                <!--  mobile nav -->
                <div class="flex md:hidden" x-data="{open : false}">
                    <button @click="open = !open" class="flex items-center justify-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <div class="fixed top-14 left-0 w-full z-0">
                        <div x-show="open" @click.outside="open = !open" class="absolute top-0 w-full bg-slate-200 shadow-md p-5">
                            <ul class="text-lg">
                                <li class="flex">
                                    <a href="<?php echo esc_url(home_url('/')); ?>" class="w-full py-2 px-2  text-sm font-semibold  capitalize">Beranda</a>
                                </li>
                                <li class="flex flex-col text-slate-700" x-data="{ dropdown1 : false}">
                                    <button @click="dropdown1 = !dropdown1" class="w-full text-left py-2 px-2  text-sm font-semibold  capitalize">Profil
                                        Jurusan</button>
                                    <div x-show="dropdown1" class="flex flex-col">
                                        <a href="<?php echo esc_url(home_url('/sambutan-kajur')); ?>" class="hover:text-blue-800 block px-4 py-2 text-sm">Sambutan
                                            Ketua Jurusan</a>
                                        <a href="<?php echo esc_url(home_url('/visi-jurusan')); ?>" class=" hover:text-blue-800 block px-4 py-2 text-sm">Sejarah
                                            dan Visi Misi Jurusan</a>
                                        <a href="<?php echo esc_url(home_url('/profil-dosen')); ?>" class=" hover:text-blue-800 block px-4 py-2 text-sm">Profil
                                            Dosen</a>
                                        <a href="<?php echo esc_url(home_url('/kurikulum')); ?>" class=" hover:text-blue-800 block px-4 py-2 text-sm">Kurikulum</a>
                                    </div>
                                </li>
                                <li class="flex flex-col" x-data="{ open : false}">
                                    <button href="" @click="open = !open" class="w-full text-left py-2 px-2  text-sm font-semibold capitalize">Profil
                                        HIMIP</button>
                                    <div x-show="open" class="flex flex-col">
                                        <a href="<?php echo esc_url(home_url('/sambutan-bupati')); ?>" class="hover:text-blue-800 block px-4 py-2 text-sm">Sambutan
                                            Bupati HIMIP</a>
                                        <a href="<?php echo esc_url(home_url('/visi')); ?>" class=" hover:text-blue-800 block px-4 py-2 text-sm">Visi Misi</a>
                                        <a href="<?php echo esc_url(home_url('/struktur-organisasi')); ?>" class=" hover:text-blue-800 block px-4 py-2 text-sm">Struktur HIMIP</a>
                                        <a href="<?php echo esc_url(home_url('/leadership')); ?>" class=" hover:text-blue-800 block px-4 py-2 text-sm">Leadership Insight</a>
                                    </div>
                                </li>
                                <li class="" x-data="{open : false}">
                                    <button @click="open = !open" class="w-full py-2 px-2  text-left text-sm font-semibold capitalize">kegiatan</button>
                                    <div class="" x-show="open">
                                        <div class="">
                                            <a href="<?php echo esc_url(home_url('/upcoming-event')); ?>" class="text-gray-700 hover:text-blue-800 block px-4 py-2 text-sm">Upcoming Events</a>
                                            <a href="<?php echo esc_url(home_url('/press-release')); ?>" class="text-gray-700 hover:text-blue-800 block px-4 py-2 text-sm">Press
                                                Release</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--  mobile nav -->

            </nav>
        </header>

    </div>
    <!-- Navigation Bar End -->

</html>