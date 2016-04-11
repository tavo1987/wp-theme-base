

  <div class="bar-search">
      <form method="get" id="searchform" action="<?php echo esc_url(home_url()); ?>">         
         <input type="text" placeholder="Buscar…" value="<?php the_search_query(); ?>" name="s">
         <button type="submit" class="dashicons-before dashicons-search"  id="searchsubmit"></button>
      </form>  
  </div>
  