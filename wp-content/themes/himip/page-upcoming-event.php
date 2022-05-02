<?php get_header(); ?>

<!-- Main Content -->
<div class="bg-blue-50 text-center py-20">
    <h2 class="title capitalize py-3">Upcoming Event</h2>
    <p class="petunjuk capitalize">event yang akan datang</p>
</div>
<div class="container flex flex-col space-y-3 py-10">



<!-- dinding -->
<section class="container text-gray-600 body-font">
    <div class=" pb-5">
        </h2>
        <div class="flex flex-wrap -m-4">
            <?php
            query_posts('category_name=upcoming-event&showposts=9');

            while (have_posts()) : the_post(); ?>
                <div class="p-4 w-full md:w-1/3">
                    <div class="h-full bg-white border-2 border-gray-300  rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36  h-40 w-full object-cover object-center" src="<?php the_post_thumbnail_url(); ?>">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Upcoming Event</h2>
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
   
</section>
<!-- dinding end -->

</div>

<!-- Main Content End -->
<script>
    w3.includeHTML();
</script>

<!-- Footer -->
<div w3-include-html="footer.html"></div>
<!-- Footer End -->


</body>

</html>