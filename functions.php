<?php 


// setups




// includes

// $dir_path = get_template_directory();

include(get_template_directory_uri(). '/inc/enqueue.php');




// hooks

add_action('wp_enqueue_scripts', 'wd_enqueue');



// shortcode