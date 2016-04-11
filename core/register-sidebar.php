<?php

/*------------------------------------------------------------*/
/*  Registrar Sidebars
/*------------------------------------------------------------*/
function theme_register_sidebar(){


    register_sidebar(array(
        'name' => 'Main Sidebar',
        'id' => 'main_sidebar',
        'description'   => 'Sidebar Principal',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
        register_sidebar(array(
        'name' => 'Sidebar Secundario',
        'id' => 'second_sidebar',
        'description'   => ' Side bar secundario',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

}
add_action( 'widgets_init', 'theme_register_sidebar');
