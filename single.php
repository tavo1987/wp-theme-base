   <?php get_header(); ?>
 	  	  	
   <div class="styles-theme">

      <!--INICIO BREADCRUMB-->
      <?php get_template_part('parts/breadcrumb'); ?>

      <div class="row">     
         <!--INICIO LOOP SINGLE-->
         <?php get_template_part('parts/loop','single'); ?>
      </div><!--FIN ROW-->

   </div><!--FIN STYLE THEME-->
   
   <?php get_footer(); ?>
   <!--<?php  get_sidebar()?>-->