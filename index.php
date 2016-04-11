<?php get_header(); ?>

<!--Incio de main-->
<div class="container">

   <?php get_template_part('parts/breadcrumb'); ?>

   <div class="row">
      <!--INICIO LOOP INDEX-->
      <?php get_template_part('parts/loop','index'); ?>
   </div><!--FIN ROW-->

</div><!---FIN CONTAINER-->

<?php  /*get_sidebar()?*/?>


<?php get_footer(); ?>
