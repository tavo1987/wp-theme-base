<?php


// Theme support options
require_once(get_template_directory().'/core/theme-support.php');

// WP Head and other cleanup core
require_once(get_template_directory().'/core/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/core/enqueue-scripts.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/core/register-sidebar.php');


// Register custom menus and menu walkers
/*require_once(get_template_directory().'/functions/menu.php'); */
require_once(get_template_directory().'/core/menu-walkers.php');

//breadcrumbs
require_once(get_template_directory().'/core/breadcrumbs.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/core/pagination.php');



/*============================================================================================================*/
/*	OEMBED SIZE OPTIONS EL TAMAÑO DEl IFRAME,EMBED,IMAGE ETC QUE PEGEMOS EN EL EDITOR VA A TENER 680px DE ANCHO
/*============================================================================================================*/

   if ( ! isset( $content_width ) ) {
   	$content_width = 680;
   }
?>
