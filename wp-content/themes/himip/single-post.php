<?php get_header(); ?>

<div class="flex flex-row">

    <div class="bg-slate-100 border-2 border-gray-300 rounded-md w-3/4 m-4 shadow-md p-10">
    
    <h1 class="subtitle">
        <?php the_title(); ?>
    </h1>
    
    <?php the_content(); 
    ?>
    
    <?php 
    //Get only the approved comments
    $args = array(
        'status' => 'approve'
    );
     
    // The comment Query
    $comments_query = new WP_Comment_Query;
    $comments = $comments_query->query( $args );
     
    // Comment Loop
    if ( $comments ) {
     foreach ( $comments as $comment ) {
     echo '<p>' . $comment->comment_content . '</p>';
     }
    } else {
     echo 'No comments found.';
    }
    
    ?>
    </div>
    
    <div class="bg-slate-100 border-2 border-gray-300 rounded-md w-1/4 ml-4 mr-10 my-4 shadow-md p-10 h-auto">
        <p class="subtitle">category</p>
    </div>
</div>