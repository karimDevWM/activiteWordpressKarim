<?php 
function myOwnTheme_menus()
{
    $locations = array(
                        'primary' => "Desktop Primary Left Sidebar",
                        'footer' => "Footer Menu Item"
                    );
                    register_nav_menus($locations);
}
add_action('init', 'myOwnTheme_menus');
    
function activiteWordpress()
{
    wp_enqueue_style('activiteWordpress-assetsCss', get_template_directory_uri()."assets/css/main.css");
}

?>