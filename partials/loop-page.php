
<div class="row text-justify">
	<div class="large-12 medium-12 small-12 columns">

		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>             
		  
		    <!--Para mostra los thumnails o imagen destacada -->
		    <article id="post-<?php the_ID(); ?>" <?php post_class('post-items');?>>
			    <div class="thumbnail">
			    	<?php 
			        	if ( has_post_thumbnail() )
			          	{
			            	the_post_thumbnail('full',array('class' =>'aligncenter'));
			          	}
			       	?>
			    </div>

				<!--Para mostar el contenido compelto de los post-->
			    <div class="the_content">        
			    	<?php the_content(); ?>
			  	</div>
			  	
		    </article><!--fin article-->

		<?php endwhile;?>

		<?php endif; ?>

	</div><!--FIN COLUMN-->
</div><!--FIN ROW-->