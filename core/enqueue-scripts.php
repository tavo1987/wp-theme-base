<?php

	/*-----------------------------------------------------------------------------------*/
	/*  vincular estilos
	/*-----------------------------------------------------------------------------------*/

	function load_styles(){

		   /*esta funcion nos permite vincular los estilos de manera correcta*/
		   //wp_enqueue_style( $handle, $src, $deps, $ver, $media );

		   wp_enqueue_style( 'icons_css', 'https://fontastic.s3.amazonaws.com/rwWqKJciEFThHoEWFcVEdm/icons.css');

		   wp_enqueue_style( 'style_css', get_template_directory_uri() . '/css/style.min.css');
		}

      add_action('wp_enqueue_scripts','load_styles');


	/*-----------------------------------------------------------------------------------*/
	/*  vincular scripts
	/*-----------------------------------------------------------------------------------*/

	function load_scripts(){

	   /*esta funcion nos permite vincular los scritps de manera correcta*/
	   //wp_enqueue_script( $handle, $src, $depencias, $version, $donde se va deplegar el scrip en el footer="true" o head="false" o vacio= "false" );

		wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.min.js',
	    					array('jquery'),
		    					'',
		    					'true');
	}

	add_action('wp_enqueue_scripts','load_scripts');
