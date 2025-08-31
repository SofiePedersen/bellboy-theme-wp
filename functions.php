<?php
// Her looper jeg mine menu-punkter ud
register_nav_menus(array(
    'main_menu' => 'Main Menu',
    'footer_menu' => 'Footer Menu'
));

// Forsøg på at oprette et custom faneblad (Cpt - Custom Post Type)
function register_projects_post_type() {
    // Opretter en CPT kaldt project
    register_post_type('project', array(
        // Opretter navnene på mine custom posts
        'labels' => array(
            'name' => __('Projects'),
            'singular_name' => __('Project')
        ),
        // public true betyder besøgende kan se postet, 
        // var den sat til false ville kun en admin kunne se den
        'public' => true,
        // rewrite gør det muligt at styre hvordan URL'en skal se ud (navn)
        'rewrite' => array('slug' => 'projekter'),
        // has_archive gør at der automatisk oprettes et archive page når den er sat til true.
        // I dette tilfælde vil jeg gerne have archive på projekter-siden.
        'has_archive' => 'projekter',
        // supports er hvilke features jeg gerne vil have tilgængeligt når jeg redigere min post
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        //icon in admin sidebar
        'menu_icon' => 'dashicons-portfolio'
    ));
}
// WordPress hook - 
// "Hooks are a system WordPress uses to let developers “hook into” or tap into the execution flow at specific points."
add_action('init', 'register_projects_post_type');
?>