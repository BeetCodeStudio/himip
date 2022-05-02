<?php


function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpb_comment_count() { 
    $comments_count = wp_count_comments();
    $message =  'There are <strong>'.  $comments_count->approved . '</strong> comments posted by our users.';
     
    return $message; 
    }
?>