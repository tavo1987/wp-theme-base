<?php 
/*-----------------------------------------------------------------------------------*/
/*  Funcion para anadir los breadcrumbs
/*-----------------------------------------------------------------------------------*/

function the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
        echo home_url();
        echo '">';
        echo 'Atrás';
        echo "</a>";

		if (is_category() || is_single() || is_page() || is_tax()) {

            if(is_category() || is_tax()){
                echo " » <span>";
                	single_term_title();
                echo "</span>";
            }

            elseif(is_page()) {
            	echo " » <span>";
                	the_title();
                echo "</span>";
            }

            elseif (is_single()) {
                echo " » <span>";
                	the_title();
                echo "</span>";
            }
        }
        elseif(is_search())
        {
        	echo " » <span>Resultados de búsqueda</span>";	
        }
    }
}// fin breadcrumb