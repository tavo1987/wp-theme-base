<?php get_header(); ?>

<div class="styles-theme">

      <div class="container-page-header">
        <div class="row">

          <div class="small-12 medium-12 large-12 columns">
            <h2 class="the_title">
              <?php

                /*texto mostrar*/
                _e( 'Resultado de búsqueda: ', 'theme');

                /*guardamos el término de bísuqeda*/
                $query = get_search_query();
                /*guardamos el termino de busqueda por taxonomia*/
                $tax = single_term_title('',false);

                /*limpiamos de espacions en blanco al inicio y al final*/
                trim($query);
                trim($tax);

                //valiaciones
                if($query != '' && $tax == ''):
                    echo '<strong class="text-search">"'.$query.'"</strong>';
                elseif ($query == '' && $tax != ''):
                    echo '<strong class="text-search">"'.$tax.'"</strong>';
                elseif ($query != '' && $tax != ''):
                    echo '<strong class="text-search">"'.$query.'"</strong>';
                else:
                  echo '<strong class="text-search">""</strong>';
                endif;
               ?>

            </h2>
            <div class="breadcrumb"><?php the_breadcrumb(); ?></div>
          </div>
        </div>
      </div>

      <div class="row text-justify">

         <div class="small-12 medium-12 large-12 columns">

              <div class="container-post">
               <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

                <!-- Inicio de los post
                    ======================================================================= -->
                  <article id="post-<?php the_ID(); ?>" <?php post_class('post-items');?>>

                      <!--Miniatura del typo-->
                      <div class="post-items__thumbnail">
                        <a href="<?php the_permalink();?>">
                         <?php
                           if ( has_post_thumbnail() ) {
                                 the_post_thumbnail('thumbnail');
                           }
                         ?>
                           <!--  <img src="//lorempixel.com/450/150/business/<?php /* rand(1,9)*/?>" alt=""> -->
                        </a>
                      </div>

                      <!--Titulo del post-->
                      <a class="post-items__title" href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

                      <!--inicio estracto  de los post-->
                      <div class="post-items__description">
                        <?php the_excerpt(); ?>
                      </div>

                      <!--Meta datos-->
                      <div class="post-items__meta">
                          <p class="post-items__meta__info">
                          <span class="icon-calendar"></span>
                            Publicado el <?php the_time('j/m/Y') ?> por: <?php the_author(); ?>
                          </p>

                        <!--   <?php /*if(has_category()): ?>
                            <p class="post-items__meta__category">Categoria: <?php the_category();?></p>
                          <?php endif; */?> -->

                          <ul class="post-items__meta__taxonomies">
                            <?php the_taxonomies('template= <li class="icon-tag">%s: %l.</li>');?>
                          </ul>
                      </div>
                  </article><!-- Fin de los post-->

                <?php endwhile; ?>

                  <div class="pagination">
                      <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
                  </div>

                <?php  else: ?>
                   <div class="the_content">
                     <h2>Lo sentimos, no han este término de búsqueda.</h2>
                   </div>
                <?php endif; ?>
            </div>

         </div>

    </div>


</div> <!-- Fin de main -->

<?php get_footer(); ?>
