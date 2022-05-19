<?php get_header(); ?>
<!-- Main Content -->
<!-- foto pengurus -->
<div class="h-[40rem] bg-cover bg-bottom bg-fixed" style="background-image: url(<?php echo  bloginfo('template_directory') . '/img/himipcandradimuka.jpg' ?>);">
    <div class="top-0 left-0 h-full w-full flex flex-col items-center justify-center space-y-3 text-white text-center bg-slate-600/80">
        <img class="h-20" src="<?php echo  bloginfo('template_directory') . '/img/AllLogo.png' ?>" alt="">
        <p class="text-4xl font-extrabold font-poppins">HIMPUNAN MAHASISWA ILMU PEMERINTAHAN<br> FISIP UNRI 2022 <br> -</p>
        <p class="text-3xl font-semibold font-poppins">HIMIP CANDRADIMUKA</p>
    </div>
</div>
<!-- foto pengurus end -->


<!-- about himip -->
<div class="container py-10 md:py-20 flex flex-col">
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="space-y-5 text-center md:text-left order-3 md:order-2 items-center justify-center flex flex-col">
            <!-- <p class="text-xl uppercase font-semibold text-blue-900">HIMIPCANDRADIMUKA</p> -->
            <!-- <h2 class="text-5xl font-bold w-full">About</h2> -->
            <h2 class="title w-full">HIMIP Candradimuka</h2>
            <p class=" text-justify">HIMIP FISIP UNRI merupakan organisasi Himpunan Mahasiswa Ilmu
                Pemerintahan yang dibentuk dengan tujuan untuk menjadi wadah pengembangan diri mahasiswa dalam
                berorganisasi serta berlandaskan kepada asas kekeluargaan.
            </p>
            <p class=" text-justify"> HIMIP FISIP UNRI menjadi pelopor pembentukan karakter dan
                kemampuan mahasiswa Ilmu Pemerintahan dalam bidang intelektual, sosial, dan ketaqwaan, sehingga
                mampu memberikan kontribusi bagi universitas dan masyarakat.
            </p>
        </div>
        <div class="md:p-10 p-0 order-2">
            <div class="w-full h-full flex justify-center items-center">
                <div class="w-60 h-60 bg-center bg-auto" style="background-image: url(<?php echo  bloginfo('template_directory') . '/img/LogoCandradimuka.png' ?>);"></div>
            </div>
        </div>
    </div>
</div>
<!-- about himip end -->
<!-- video -->
<div class="container ">
    <div class="rounded-md border-2 border-gray-300 bg-slate-100 p-5">
        <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/KtODBLuG5gU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
<!-- video end -->

<?php
query_posts('category_name=upcoming-event&showposts=1');

if (have_posts()) :

while (have_posts()) : the_post();
?>
    <!-- upcoming -->
    <section class="container flex flex-col items-center text-center py-5">
        <h2 class="subtitle py-10">Upcoming Event
        </h2>



        <div class="w-full grid grid-cols-1 md:grid-cols-2">
            <div class="bg-black rounded-t-md md:rounded-none md:rounded-l-md shadow-md h-full w-full pt-3 mb-5">
                <img class="lg:h-48 md:h-36 h-40 w-full object-cover object-center" src=" <?php the_post_thumbnail(); ?>" alt="">


            </div>
            <div class="bg-slate-100 p-10 rounded-b-md md:rounded-none md:rounded-r-md border-2 border-gray-300 text-zinc-900 flex flex-col space-y-3 justify-center text-center md:text-left w-full font-semibold">
                <!-- <p class="uppercase font-semibold text-green-700">Upcoming Events</p> -->
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Upcoming Events</h2>

                <h2 class="text-2xl font-semibold capitalize">
                    <?php the_title();
                    ?>

                </h2>
                <ul class="font-normal leading-relaxed text-justify">
                    <p><?php the_excerpt(); ?></p>
                </ul>
                <a href="<?php the_permalink();
                            ?>" class=" hover:text-blue-900 inline-flex justify-center md:justify-start items-center">Read
                    More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <div class="text-center mt-2 leading-none flex justify-center w-full py-4">
                    <span class=" mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">

                        <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg><?php the_time('d F Y'); ?>
                    </span>
                    <span class=" inline-flex items-center leading-none text-sm">
                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                            </path>
                        </svg><?php echo get_comments_number($post->ID) ?>
                    </span>
                </div>

            </div>
        </div>

        <a href="<?php echo esc_url(home_url('/upcoming-event')); ?>" class="button-min">
            See More
        </a>
    </section>
    <!-- upcoming end -->
<?php

endwhile;

else : ?>
    <section class="container flex flex-col items-center text-center py-5">
        <h2 class="subtitle py-10">Upcoming Event
        </h2>
        <p>No content posted yet!</p>
    </section>
    
<?php
endif;
rewind_posts();

query_posts('category_name=press-release&showposts=1');

if (have_posts()) :
while (have_posts()) : the_post();
?>
    <!--  pressrealese -->
    <section class="container flex flex-col items-center text-center py-5">
        <h2 class="subtitle pb-10">Prees Release</h2>

        <div class="w-full grid grid-cols-1 md:grid-cols-2">
            <div class="bg-black rounded-t-md md:rounded-none md:rounded-l-md shadow-md h-full w-full pt-3 mb-5">
                <img class="lg:h-48 md:h-36 h-40 w-full object-cover object-center" src="<?php the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="bg-slate-100 p-10 rounded-b-md md:rounded-none md:rounded-r-md border-2 border-gray-300 text-zinc-900 flex flex-col space-y-3 justify-center text-center md:text-left w-full font-semibold">
                <!-- <p class="uppercase font-semibold text-green-700">Upcoming Events</p> -->
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Press Release</h2>

                <h2 class="text-2xl font-semibold capitalize">
                    <?php the_title(); ?>

                </h2>
                <p><?php the_excerpt(); ?></p>

                <a href="<?php the_permalink(); ?>" class=" hover:text-blue-900 inline-flex justify-center md:justify-start items-center">Read
                    More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <div class="text-center mt-2 leading-none flex justify-center w-full py-4">
                    <span class=" mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">

                        <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg><?php the_time('d F Y'); ?>
                    </span>
                    <span class=" inline-flex items-center leading-none text-sm">
                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                            </path>
                        </svg><?php
                                echo get_comments_number($post->ID)

                                ?>
                    </span>
                </div>

            </div>
        </div>

        <a href="<?php echo esc_url(home_url('/press-release')); ?>" class="button-min">
            See More
        </a>
    </section>
    <!--  pressrealese -->
<?php
endwhile;
else : ?>
    <section class="container flex flex-col items-center text-center py-5">
        <h2 class="subtitle py-10">Press Release
        </h2>
        <p>No content posted yet!</p>
    </section>
    
<?php
endif;
rewind_posts();

?>

<!-- dinding -->
<section class="container text-gray-600 body-font">
    <div class=" pb-5">
        <h2 class="subtitle py-10">Dinding Kreatif Mahasiswa
        </h2>
        <div class="flex flex-wrap -m-4">
            <?php
            query_posts('category_name=dinding-kreatif&showposts=3');

            while (have_posts()) : the_post(); ?>
                <div class="p-4 w-full md:w-1/3">
                    <div class="h-full bg-white border-2 border-gray-300  rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36  h-40 w-full object-cover object-center" src="<?php the_post_thumbnail_url(); ?>">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Dinding Kreatif Mahasiswa</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><?php the_title(); ?></h1>
                            <p class="leading-relaxed mb-3"><?php the_excerpt(); ?></p>
                            <div class="flex items-center flex-wrap ">
                                <a href="<?php the_permalink(); ?>" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Read More
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>

                            </div>
                            <div>
                                <span class=" mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">

                                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg><?php the_time('d F Y'); ?>
                                </span>
                                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                        </path>
                                    </svg><?php echo get_comments_number($post->ID) ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>

        </div>

    </div>
    <div class="w-full text-center py-5">
        <a href="<?php echo esc_url(home_url('/artikel')); ?>" class="button-min">
            See More
        </a>
    </div>
</section>
<!-- dinding end -->

<!-- spotify -->
<div class="container ">
    <h2 class="subtitle py-10">Podcast</h2>
    <iframe src="https://open.spotify.com/embed-podcast/episode/06kX4u0WKge8I7fcUNkj7f" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
</div>
<!-- spotify end -->

<!-- contact us -->
<div class="container  pt-10  flex flex-col items-center py-10 space-y-5">
    <h2 class="subtitle py-10">Contact Us</h2>
    <div class="grid items-center md:items-start w-full grid-cols-1 md:grid-cols-3 gap-5">
        <div class="flex flex-col gap-5">

            <div class="flex items-center gap-5">
                <div class="flex items-center gap-5 bg-blue-800 rounded-full p-2 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <p class="text-black font-semibold hover:text-blue-800"> Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28292 </p>
            </div>
        </div>
        <div class="space-y-5">
            <a href="https://www.facebook.com/himip.unri.37" class="flex items-center gap-5">
                <div class="flex items-center gap-5 bg-blue-800 rounded-full p-2 text-white">
                    <svg class="h-5 w-5" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                        <title>Facebook</title>
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                    </svg>
                </div>
                <p class="text-black font-semibold hover:text-blue-800">Himip Unri</p>
            </a>
            <a href="https://twitter.com/himip_unri" class="flex items-center gap-5">
                <div class="flex items-center gap-5 bg-blue-800 rounded-full p-2 text-white">

                    <svg class="w-5 h-5" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                        <title>Twitter</title>
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                    </svg>
                </div>
                <p class="text-black font-semibold hover:text-blue-800">@Himip_Unri</p>
            </a>
            <a href="https://www.instagram.com/himip_unri/" class="flex items-center gap-5">
                <div class="flex items-center gap-5 bg-blue-800 rounded-full p-2 text-white">

                    <svg class="w-5 h-5" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                        <title>Instagram</title>
                        <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                    </svg>
                </div>
                <p class="text-black font-semibold hover:text-blue-800">himip_unri </p>
            </a>

        </div>
        <div class="space-y-5">
            <a href="https://www.youtube.com/channel/UCl_xhbSN-Xy3-D46BRFMr3Q" class="flex items-center gap-5">
                <div class="flex items-center gap-5 bg-blue-800 rounded-full p-2 text-white">

                    <svg class="w-5 h-5" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                        <title>YouTube</title>
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                    </svg>
                </div>
                <p class="text-black font-semibold hover:text-blue-800">HIMIP UNRI</p>
            </a>
            <a href="https://line.me/ti/p/@XiF3460b" class="flex items-center gap-5">
                <div class="flex items-center gap-5 bg-blue-800 rounded-full p-2 text-white">

                    <svg class="h-5 w-5" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                        <title>LINE</title>
                        <path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.346 0 .627.285.627.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63.346 0 .628.285.628.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.282.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314" />
                    </svg>
                </div>
                <p class="text-black font-semibold hover:text-blue-800">Line </p>
            </a>
            <a href="https://vt.tiktok.com/ZSdR4kGop/" class="flex items-center gap-5">
                <div class="flex items-center gap-5 bg-blue-800 rounded-full p-2 text-white">

                    <svg class="h-5 w-5" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                        <title>TikTok</title>
                        <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                    </svg>
                </div>
                <p class="text-black font-semibold hover:text-blue-800">himipunri</p>
            </a>

        </div>


    </div>
</div>
<!-- contact us end -->
<!-- Main Content End -->
<?php get_footer(); ?>