<div class="container-page-header">
    <div class="row">

      <div class="small-12 medium-12 large-12 columns">
      	
      	<?php if (is_single() || is_page()):?>
        	<h2 class="the_title"><?php echo the_title(); ?></h2>
        <?php else: ?>
        	<h2 class="the_title"><?php echo single_term_title(); ?></h2>
      	<?php endif; ?>

        <div class="breadcrumb"><?php the_breadcrumb(); ?></div>
      </div>
    </div>
</div>