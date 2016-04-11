<?php 
/*----------------------------------------------------------------------*/
/* function para envolver en un contendor a los subitems del menu
/*-----------------------------------------------------------------------*/

class Child_Wrap extends Walker_Nav_Menu
	{
	    function start_lvl(&$output, $depth = 0, $args = array())
	    {
	        $indent = str_repeat("\t", $depth);
	        $output .= "\n$indent<div class=\"container-submenu\"><ul class=\"sub-menu large-only-text-left\">\n";
	    }

	    function end_lvl(&$output, $depth = 0, $args = array())
	    {
	        $indent = str_repeat("\t", $depth);
	        $output .= "$indent</ul></div>\n";
	    }
	}


/*para el menu superior*/
class Child_Wrap2 extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class='sub-menu dropdown'>\n";
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
}