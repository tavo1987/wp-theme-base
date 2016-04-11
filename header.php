<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- Definir viewport para dispositivos web móviles -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/favicon.ico" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>


<body <?php body_class();?> >

   <!--Icono de subir-->
   <span class="top icon-arrow-up"></span>
   <!--Icono de subir-->

	<!--Inicio de header-->
	<header>
   	<div class="header">
      	<!--inicio de logo-->
         <div class="logo">
            <h1>
               <a href="<?php echo home_url(); ?>" title="<?php bloginfo('description')?>">
                  <img  src="<?php header_image(); ?>" 
                        height="<?php echo get_custom_header()->height; ?>" 
                        width="<?php echo get_custom_header()->width; ?>" 
                        alt="<?php bloginfo('name');?>" 
                        title="<?php bloginfo('description')?>" />
               </a>

               Header
         	</h1>
        	</div><!--Fin de logo-->
     
         <!--Inicio menu-->
         <?php get_template_part('partials/menu','main');?>
         <!--Fin menu-->

   	</div><!--FIN CLASS HEADER-->
   </header>
