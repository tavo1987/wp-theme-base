<?php get_header(); ?>

      <!--Inicio de container-->
      <section class="styles-theme">  	
        
         <!--INICIO BREADCRUMB-->
         <?php get_template_part('parts/breadcrumb'); ?>

        <!--Inicio loop-page-->
         <?php get_template_part('parts/loop','page'); ?>

      </section>
    <!--Fin de container-->
	
<?php get_footer(); ?>
<?php /*get_sidebar();*/?>