<?php 

/*--------------------------------------------------------------------------------
/* $paginacion
/*-------------------------------------------------------------------------------.*/

	//Paginación de entradas
	function wp_corenavi() {
		global $wp_query, $wp_rewrite;
		$pages = "";
		$max = $wp_query->max_num_pages;

		if (!$current = get_query_var('paged')) $current = 1;
		$a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
		$a['total'] = $max;
		$a['current'] = $current;
		$a['type']= 'list';
		

		$total = 1; //1 – muestra el texto “Página N de N”, 0 – para no mostrar nada
		$a['mid_size'] = 1; //cuantos enlaces a mostrar a izquierda y derecha del actual
		$a['end_size'] = 1; //cuantos enlaces mostrar al comienzo y al fin
		$a['prev_text'] = '&laquo;'; //texto para el enlace “Página siguiente”
		$a['next_text'] = '&raquo;'; //texto para el enlace “Página anterior”

		//if ($max > 1) echo "<div class='navigation'>";
		if ($total == 1 && $max > 1) $pages = '<span class="pagination__info">Página ' . $current . ' de ' . $max . '</span>';
				echo $pages . paginate_links($a);
		//if ($max > 1) echo '</div>';
	}
