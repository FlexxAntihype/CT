<?php
 
 
 //<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
 //<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 //<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 
 
 
 

 add_action('wp_enqueue_scripts', function(){

    wp_enqueue_style('fonts-one','https://fonts.googleapis.com/css2?family=Mulish:wght@700;800&display=swap');
    wp_enqueue_style('fonts-two','https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
    wp_enqueue_style('fonts-three','https://fonts.googleapis.com/css2?family=Lemon&display=swap');
    wp_enqueue_style('fonts-four','https://fonts.googleapis.com/css2?family=Marcellus&display=swap');
    wp_enqueue_style('fonts-five','https://fonts.googleapis.com/css2?family=Marcellus&family=Mulish:wght@400;800&display=swap');
    wp_enqueue_style('fonts-six','https://fonts.googleapis.com/css2?family=Mulish:wght@800&display=swap');
    wp_enqueue_style('fonts-gstatic','https://fonts.gstatic.com');
    wp_enqueue_style('bootstrap5','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('fonts-google','https://fonts.googleapis.com');

    
    wp_enqueue_style('hero',get_template_directory_uri().'/assets/scss/style.css');
    wp_enqueue_style('vars',get_template_directory_uri().'/assets/scss/mobil.css');
    wp_enqueue_style('base',get_template_directory_uri().'/assets/scss/styletwo.css');

    wp_enqueue_script('script',get_template_directory_uri(). '/assets/js/script.js', array(),'null',true);

    
});


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>