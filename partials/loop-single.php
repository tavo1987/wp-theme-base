

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
   <div class="small-12 medium-12 large-12 columns">
      <article id="post-<?php the_ID(); ?>" <?php post_class('post-items');?>>
      
         <div class="meta">
            <span class="icon-calendar"> Publicado: <?php the_time('j/m/Y') ?></span>
            <span class="the_author" >por <?php the_author(); ?></span>
           <?php the_category();?>
         </div>

         <div class="thumbnail">
           <?php if(has_post_thumbnail()){
                 the_post_thumbnail('full');
               } 
           ?>
         </div>

         <div class="the_content">
         <!--Para mostar el comtenido compelto de los post-->
           <?php the_content(); ?>

            <div class="meta">
              <span class="icon-calendar"> Publicado: <?php the_time('j/m/Y') ?></span>
              <span class="the_author" >por <?php the_author(); ?></span><br>
              <?php the_category();?>
            </div>                    
         </div>
         
         <!--INICIO COMENTARIOS-->
         <div class="row">
            <div class="large-8 columns">
              <?php comments_template();?> 
            </div>          
         </div>

     </article><!--FIN DE ARTICLE-->
   </div><!--FIN DE COLUMN-->

  <!--Para mostar entradas relacionadas-->
<?php endwhile;?>

<?php endif; ?>