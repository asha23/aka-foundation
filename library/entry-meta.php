<?php
if(!function_exists('Foundation_entry_meta')) :
    function Foundation_entry_meta() {
        echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('Posted on %s at %s.', 'Foundation'), get_the_time('l, F jS, Y'), get_the_time()) .'</time>';
        echo '<p class="byline author">'. __('Written by', 'Foundation') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
    }
endif;
?>