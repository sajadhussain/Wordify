<?php 


if(function_exists('wd_enqueue')){

    function wd_enqueue(){


$url = get_template_directory_uri(  );

// registering style


wp_register_style( 'google_font',"https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700");
wp_register_style('wd_bootstrap',get_template_directory_uri(  '/extras/css/bootstrap.css'));
wp_register_style('wd_animate',get_template_directory_uri('/extras/css/animate.css'));
wp_register_style('wd_carousel',get_template_directory_uri('/extras/css/owl.carousel.min.css'));
wp_register_style('wd_ionicons',get_template_directory_uri('/extras/fonts/ionicons/css/ionicons.min.css'));
wp_register_style('wd_font-awesome',get_template_directory_uri('/extras/fonts/fontawesome/css/font-awesome.min.css'));
wp_register_style('wd_flaticon',get_template_directory_uri( '/extras/fonts/flaticon/font/flaticon.css' ));
wp_register_style('wd_style',get_template_directory_uri( '/extras/css/style.css'));



// enqueue style 


wp_enqueue_style('google_font');
wp_enqueue_style('wd_bootstrap');
wp_enqueue_style('wd_animate');
wp_enqueue_style('wd_carousel');
wp_enqueue_style('wd_ionicons');
wp_enqueue_style('wd_font-awesome');
wp_enqueue_style('wd_flaticon');
wp_enqueue_style('wd_style');


// register script

wp_register_script( 'wd_popper',get_template_directory_uri('/extras/js/popper.min.js', '', '1.1', true));
wp_register_script( 'wd_bootstrap',$url.'/extras/js/bootstrap.min.js','', '1.1', true);
wp_register_script( 'wd_owl_carousel',$url.'/extras/js/owl.carousel.min.js','', '1.1', true);
wp_register_script( 'wd_waypoints',$url.'/extras/js/jquery.waypoints.min.js','', '1.1', true);
wp_register_script( 'wd_stellar',$url.'/extras/js/jquery.stellar.min.js','', '1.1', true);
wp_register_script('wd_main', $url .'extras/js/main.js','', '1.1', true);




// enqueue script

wp_enqueue_script('jquery');
wp_enqueue_script('wd_popper');
wp_enqueue_script('wd_bootstrap');
wp_enqueue_script('wd_owl_carousel');
wp_enqueue_script('wd_waypoints');
wp_enqueue_script('wd_stellar');
wp_enqueue_script('wd_main');



}

}