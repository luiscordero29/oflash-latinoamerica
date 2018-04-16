<?php 
# Post Thumbnails
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    # new size
    add_image_size( 'post-especial', 90, 120, array( 'top', 'center') );  
}
# Listados de Widgets
add_action( 'widgets_init', 'syi_widgets_init' );
function syi_widgets_init()
{
    # TOPBANNER
    register_sidebar(
        array(
            'name'          => 'TOP BANNER',
            'id'            => 'widget-top-banner',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'name'          => 'SIDEBAR',
            'id'            => 'widget-sidebar',
            'description'   => 'WidGet Sidebar',
            'class'         => '',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<div class="widget-title">',
            'after_title'   => '</div>',
        )
    );

    register_sidebar(
        array(
            'name'          => 'FOOTER',
            'id'            => 'widget-footer',
            'description'   => 'WidGet Footer',
            'class'         => '',
            'before_widget' => '<div class="col"><section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section></div>',
            'before_title'  => '<div class="widget-title">',
            'after_title'   => '</div>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'COPYRIGHT',
            'id'            => 'widget-copyright',
            'description'   => 'WidGet Copyright',
            'class'         => '',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
}
# Oflash Class Body
if (!function_exists('oflash_body_id')) {
    function oflash_body_id()
    {
        $id = '';
        if ( is_home() ) {
            $id = 'blog';
        } else {
            global $post;
            $id = $post->post_name;
        }
        return $id;
    }
}
