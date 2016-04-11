

<div class="small-12 columns">
      
   <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
     
      <div id="post-<?php the_ID(); ?>" <?php post_class('post-items'); ?>>

        <!--Miniatura del typo-->
         <div class="post-items__thumbnail">
            <?php if ( has_post_thumbnail()):?>

              <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>">
                   <?php the_post_thumbnail('thumbnail');?>
              </a>
            <?php endif; ?>
             
         </div>

         <a class="post-items__title" href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
         
         <div class="post-items__description">
            <?php the_excerpt(); ?>
         </div>

        <!--Meta datos-->
         <div class="post-items__meta">
            <p class="post-items__meta__info">
               <span class="icon-calendar"></span>
               Publicado el <?php the_time('j/m/Y') ?> por: <?php the_author(); ?>
            </p>

            <?php the_taxonomies('template= <li class="icon-tag">%s: %l.</li>');?>

            <p>
               <?php if (the_tags()): ?>
                  <?php the_tags(); ?>
               <?php endif ?>
            </p>
            
         </div>
      </div><!--FIN POST-->

   <?php endwhile; ?>

   <!---INICIO PAGINATION-->
   <?php wp_link_pages(); ?>
   <?php get_template_part('parts/pagination'); ?>

   <?php  else: ?>
      <div class="the_content">
        <h2>Lo sentimos  no hay post</h2>
      </div>
   <?php endif; ?>
</div><!--FIN COLUMNS-->
