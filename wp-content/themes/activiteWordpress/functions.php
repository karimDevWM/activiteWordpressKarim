<?php 
    // serve for overriding the wordpress core functionnalities. for example rendering and many other changes.
    // function activiteWordpress_support()
    // {
    //     // add dynamic title tag support
    //     add_theme_support('title-tag');
    //     add_theme_support('custom-logo');
    //     add_theme_support('post-thumbnails');
    // }
    // add_action('after_setup_theme', 'activiteWordpress_support');

    // // menu
    // function activiteWordpress_menus()
    // {
    //     $locations = array(
    //                         'primary' => "Desktop Primary Left Sidebar",
    //                         'footer' => "Footer Menu Item"
    //                     );
    //                     register_nav_menus($locations);
    // }
    // add_action('init', 'activiteWordpress_menus');



    // function activiteWordpress_register_styles()
    // {
    //     $version = wp_get_theme()->get('Version');
    //     wp_enqueue_style('myOwnTheme-style', get_template_directory_uri()."phantom/css/main.css", array('myOwnTheme-bootstrap'), $version, 'all');
    //     wp_enqueue_style('myOwnTheme-style', get_template_directory_uri()."assets/css/main.css", array('myOwnTheme-bootstrap'), $version, 'all');
    //     wp_enqueue_style('myOwnTheme-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '5.1.3', 'all');
    //     wp_enqueue_style('myOwnTheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    // }
    // add_action( 'wp_enqueue_scripts', 'activiteWordpress_register_styles');

    // function myOwnTheme_register_scripts()
    // {
    //     wp_enqueue_script('myOwnTheme-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    //     wp_enqueue_script('myOwnTheme-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    //     wp_enqueue_script('myOwnTheme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    //     wp_enqueue_script('myOwnTheme-main', get_template_directory_uri()."/assets/js/main.js", array(), '1.0', true);
    // }
    // add_action( 'wp_enqueue_scripts', 'myOwnTheme_register_scripts');

?>

<?php 
    function montheme_supports()
    {
        add_theme_support('title-tag');
        // pour supporter les images
        add_theme_support( 'post-thumbnails', array( 'post' ) ); 
        	
        add_image_size( 'custom-size', 790, 250 ); // 220 pixels wide by 180 pixels tall, hard crop mode

    }
    
    function montheme_register_assets()
    {
        wp_register_style('boostrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css%22");
        wp_register_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js", ['popper', 'jquery'], false, true);
        // systeme qui permet de faire les petite pop up
        wp_register_script('popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js", [], false, true);
        wp_deregister_script('jquery');
        wp_register_script('jquery', "https://code.jquery.com/ui/1.13.1/jquery-ui.min.js", [], false, true);
        wp_enqueue_style('bootstrap');
        wp_enqueue_script('bootstrap');
    }
    
    
    
    add_action('after_setup_theme', 'montheme_supports');
    // add_action('wp_enqueue_scripts', 'montheme_register_assets');
    
?>