<?php get_header(); ?>

<!--Incio de main-->
<div class="styles-theme">


 <?php get_template_part('parts/breadcrumb'); ?>


	<div class="row text-justify">

		<div class="small-12 medium-12 large-12 columns">

				<div class="container-post">
				 <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

					<!-- Inicio de los post
							======================================================================= -->
						<div id="post-<?php the_ID(); ?>" <?php post_class('post-items');?>>

								<!--Miniatura del typo-->
								<div class="post-items__thumbnail">
										<?php if ( has_post_thumbnail()):?>

											<a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>">
													 <?php the_post_thumbnail('thumbnail');?>
											</a>
										<?php endif; ?>
										 <!--  <img src="//lorempixel.com/450/150/business/<?php /* rand(1,9)*/?>" alt=""> -->
								</div>

								<!--Titulo del post-->
								<a class="post-items__title" href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

								<!--inicio extracto  de los post-->
								<div class="post-items__description">
									<?php the_excerpt(); ?>
								</div>

								<!--Meta datos-->
								<div class="post-items__meta">
										<p class="post-items__meta__info">
											<span class="icon-calendar"></span>
											Publicado el <?php the_time('j/m/Y') ?> por: <?php the_author(); ?>
										</p>

										<ul class="post-items__meta__taxonomies">
											<?php the_taxonomies('template= <li class="icon-tag">%s: %l.</li>');?>
										</ul>
								</div>
						</div><!-- FIN POST ITEMS-->


					<?php endwhile; ?>
						<!---INICIO PAGINATION-->
						<?php get_template_part('parts/pagination'); ?>
					<?php  else: ?>
					<div class="the_content">
						<?php _e('Lo sentimos, no hay resultados con este término de búsqueda.', "TEXT_DOMAIN"); ?>
					</div>
					<?php endif; ?>

			</div><!--CONTAINER POST-->

		</div><!--FIN COLUMNS-->

	</div><!---FIN ROW-->

</div><!---FIN STYLE THEME-->



<!--<?php  get_sidebar()?>-->

<?php get_footer(); ?>
