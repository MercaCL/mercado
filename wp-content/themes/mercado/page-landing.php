<?php
/**
*
* Template Name: Landing
*
 */
get_header(); ?>
<?php
$color_principal = get('diseno_color_principal');
$color_principal = hex2RGB($color_principal);
$color_principal_array = array_keys($color_principal);

$color_principal_r = $color_principal[$color_principal_array[0]];
$color_principal_g = $color_principal[$color_principal_array[1]];
$color_principal_b = $color_principal[$color_principal_array[2]];

$colorhex = get('diseno_color_principal');

$colorrgb = hex2RGB($colorhex);

$colorrgb_array = array_keys($colorrgb);

$colorrgb_r = $colorrgb[$colorrgb_array[0]];
$colorrgb_g = $colorrgb[$colorrgb_array[1]];
$colorrgb_b = $colorrgb[$colorrgb_array[2]];


$colorhsl = RGBtoHSL($colorrgb);

$colorhsl_array = array_keys($colorhsl);

$colorhsl_h = $colorhsl[$colorhsl_array[0]];
$colorhsl_s = $colorhsl[$colorhsl_array[1]];
$colorhsl_l = $colorhsl[$colorhsl_array[2]];

$colorhsl_h = $colorhsl_h - 38;
$colorhsl_s = 24 - $colorhsl_s;
$colorhsl_l = $colorhsl_l - 60;

$colorhsl_s = 230 + $colorhsl_s;
$colorhsl_l = 110 - $colorhsl_l;


?>
<?php if(get('diseno_link_tipografia')) { echo get('diseno_link_tipografia'); } ?>
<?php if(get('diseno_link_tipografia_titulos')) { echo get('diseno_link_tipografia_titulos'); } ?>
<style type="text/css">
<?php if(get('diseno_import_tipografia')) { echo get('diseno_import_tipografia'); } ?>
<?php if(get('diseno_import_tipografia_titulos')) { echo get('diseno_import_tipografia_titulos'); } ?>
<?php if(get('diseno_css_tipografia')) { ?>
h1, h2, h3, h4, h5, h6, p, body, button, input, select, textarea, b, strong, input[type="button"], input[type="reset"], input[type="submit"], *::-moz-placeholder {
    font-family: <?php echo get('diseno_css_tipografia'); ?>;
}
<?php } ?>

<?php if(get('diseno_css_tipografia_titulos')) { ?>
h1, h2, h3, h4, h5, h6 {
    font-family: <?php echo get('diseno_css_tipografia_titulos'); ?>;
}
<?php } ?>

<?php if(get('diseno_ocultar_header_sitio')) { ?>
	.site-header {height:0;}
	<?php } ?>
<?php if(get('diseno_ocultar_tienda')) { ?>
	.cart-tab {
	    display: none;
	}
<?php } ?>
<?php if(get('diseno_color_principal')) { ?>
.social-navigation a,
body .theme-simple #mailmunch-optin-form input.submit,
button,
input[type="button"],
input[type="reset"],
input[type="submit"]  {
    background-color: <?php echo get('diseno_color_principal'); ?> !important;
		color:<?php echo get('diseno_color_texto_boton'); ?>;
	}
button.menu-toggle {
		background-color:transparent !important;
		color:<?php echo get('diseno_color_principal'); ?>;
}
.secondary-toggle::before {
	color:<?php echo get('diseno_color_principal'); ?>;
}
.main-navigation a:hover,
.main-navigation a:focus,
.site-header-menu .main-navigation a:hover,
.site-header-menu .main-navigation a:focus {
	color: <?php echo get('diseno_color_principal'); ?>;
}
<?php } ?>

<?php if(get('modulo_landing_color_barra_lateral')) { ?>
.modulo-landing-wrapper .modulo-landing .modulo_landing_barra_lateral_derecha {
	background-color:<?php echo get('modulo_landing_color_barra_lateral'); ?>;
}
<?php } ?>
<?php if(get('modulo_landing_padding_barra_lateral')) { ?>
.modulo-landing-wrapper .modulo-landing .modulo_landing_barra_lateral_derecha {
	padding:<?php echo get('modulo_landing_padding_barra_lateral'); ?>;
}
<?php } ?>
<?php if(get('diseno_tamano_tipografia')) { ?>
	.modulo-landing-wrapper .modulo-landing .modulo-landing-txt,
	.modulo-landing-wrapper .modulo-landing .sidebar-content,
  label,
  input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"], textarea,
  button,
  input[type="button"], input[type="reset"], input[type="submit"], .post-password-form input[type="submit"], .widecolumn #submit, .widecolumn .mu_register input[type="submit"]

  {
	    font-size:<?php echo get('diseno_tamano_tipografia'); ?>;
}
label {font-size: calc(<?php echo get('diseno_tamano_tipografia'); ?> - 1vmin);}
<?php } ?>
<?php if(get('diseno_tamano_titulos')) { ?>
	.modulo-landing-wrapper .modulo-landing .modulo-landing-titulo,
  .modulo-landing-wrapper .modulo-landing .modulo-landing-txt h2 {
	    font-size:<?php echo get('diseno_tamano_titulos'); ?>;
}
<?php } ?>
<?php if(get('diseno_color_texto')) { ?>
	.modulo-landing-wrapper .modulo-landing .modulo-landing-titulo,
  .modulo-landing-wrapper .modulo-landing .modulo-landing-txt h2,
  .modulo-landing-wrapper .modulo-landing,
  .widget-title {
	    color:<?php echo get('diseno_color_texto'); ?>;
}
<?php } ?>
<?php if(get('diseno_sombra_texto')) { ?>
.modulo-landing-wrapper .modulo-landing .modulo-landing-titulo,
.modulo-landing-wrapper .modulo-landing .modulo-landing-txt {
  text-shadow:0 0 8px <?php echo get('diseno_sombra_texto'); ?>;
}
<?php } ?>
<?php if(get('diseno_color_fondo')) { ?>
	.modulo-landing-wrapper {
	    background-color:<?php echo get('diseno_color_fondo'); ?>;
}
<?php } ?>
<?php if(get('modulo_landing_color_fondo')) { ?>
	.modulo-landing-wrapper .modulo-landing {
	    background-color:<?php echo get('modulo_landing_color_fondo'); ?>;
}
<?php } ?>
<?php if(get('diseno_boton_radio_esquina')) { ?>
button, input[type="button"], input[type="reset"], input[type="submit"] {
    border-radius: <?php echo get('diseno_boton_radio_esquina'); ?>;
    -moz-border-radius: <?php echo get('diseno_boton_radio_esquina'); ?>;
    -webkit-border-radius: <?php echo get('diseno_boton_radio_esquina'); ?>;
}
<?php } ?>
<?php if(get('modulo_landing_transparencia')) { ?>
.modulo-landing-ontop {
    -webkit-filter: opacity(<?php echo get('modulo_landing_transparencia'); ?>);
    -moz-filter: opacity(<?php echo get('modulo_landing_transparencia'); ?>);
     filter: opacity(<?php echo get('modulo_landing_transparencia'); ?>);
}
  <?php } ?>




<?php if(get('diseno_filtro_fotografias')) { ?>
  img{
      filter: brightness(50%) sepia(1) hue-rotate(<?php echo $colorhsl_h; ?>deg) saturate(<?php echo $colorhsl_s; ?>%) brightness(<?php echo $colorhsl_l; ?>%);
  -webkit-filter: brightness(50%) sepia(1) hue-rotate(<?php echo $colorhsl_h; ?>deg) saturate(<?php echo $colorhsl_s; ?>%) brightness(<?php echo $colorhsl_l; ?>%);
     -moz-filter: brightness(50%) sepia(1) hue-rotate(<?php echo $colorhsl_h; ?>deg) saturate(<?php echo $colorhsl_s; ?>%) brightness(<?php echo $colorhsl_l; ?>%);
       -o-filter: brightness(50%) sepia(1) hue-rotate(<?php echo $colorhsl_h; ?>deg) saturate(<?php echo $colorhsl_s; ?>%) brightness(<?php echo $colorhsl_l; ?>%);
      -ms-filter: brightness(50%) sepia(1) hue-rotate(<?php echo $colorhsl_h; ?>deg) saturate(<?php echo $colorhsl_s; ?>%) brightness(<?php echo $colorhsl_l; ?>%);
  }
<?php } ?>

</style>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
		/*	get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		*/

   // duplicate groups.

   // getGroupOrder us back an array of the order of groups
   // The parameter for this function is the name of a field belonging to the group
   $miembros = get_order_group('modulo_landing_titulo'); ?>
   <ul class="modulo-landing-wrapper">
  <?php foreach($miembros as $key=>$miembro){ ?>
    <?php
          $alturamaxima = get('modulo_landing_altura_maxima',$miembro);
          $alturaminima = get('modulo_landing_altura_minima',$miembro);
          $colortexto = get('modulo_landing_color_texto',$miembro);
    ?>
    <li id="<?php echo get('modulo_landing_anchor',$miembro); ?>" style="<?php if($colortexto) {  echo 'color:'.$colortexto.';'; } ?><?php if($alturamaxima) {  echo ' max-height:'.$alturamaxima.';'; } ?><?php if($alturamaxima) {  echo ' min-height:'.$alturaminima.';'; } ?>" class="modulo-landing<?php if(get('modulo_landing_mostrar_barra_lateral',$miembro)) : ?> con-sidebar<?php endif; ?><?php if (get('modulo_landing_alineacion',$miembro)) { echo ' ' . get('modulo_landing_alineacion',$miembro); } ?><?php if (get('modulo_landing_fondo_alineacion',$miembro)) { echo ' fondo-' . get('modulo_landing_fondo_alineacion',$miembro); } ?><?php if(get('diseno_ocultar_header_sitio',$miembro)) { echo ' sin-header'; } ?>">
<?php $slideshows = array(); $slideshows = get_field('modulo_landing_imagen_fondo',$miembro); ?>
<div id="slideshow">
<?php foreach ($slideshows as $sl_key=>$slideshow) { ?>
      <?php if(get('modulo_landing_imagen_fondo',$miembro,$slideshow)) { ?>
	 		 <div class="ml-background-img" style="<?php if(get('modulo_landing_imagen_fondo_repeat',$miembro)) { ?>background-repeat:repeat; background-size:none;<?php } else { ?>background-repeat:no-repeat;  background-size:<?php if (get('modulo_landing_fondo_tamano',$miembro)) { echo get('modulo_landing_fondo_tamano',$miembro); } ?>;<?php if(get('modulo_landing_fondo_fijo',$miembro)) { echo ' background-attachment: fixed;'; } } ?> background-image:url('<?php if(get('modulo_landing_imagen_fondo_repeat',$miembro)) { echo get_image('modulo_landing_imagen_fondo',$miembro, $sl_key, 0, null,NULL);  } else { echo get_image('modulo_landing_imagen_fondo',$miembro,$sl_key, 0, null,array('w' => 1920, 'h' => 1080)); } ?>');">
	 			 <?php if(get('modulo_landing_cuerpo',$miembro)) { ?><?php if(get('modulo_landing_mascara',$miembro)) { ?><div class="mascara"></div><?php } ?><?php } ?>
	 		 </div>
	 		<?php } ?>
<?php } ?>
</div>
	 <?php if(get('modulo_landing_imagen_fondo_url',$miembro)) { ?>
		 <div class="ml-background-url" style="<?php if(get('modulo_landing_imagen_fondo_repeat',$miembro)) { ?>background-repeat:repeat; background-size:none;<?php } else { ?>background-repeat:no-repeat; background-size:cover;<?php } ?> background-image:url('<?php echo get('modulo_landing_imagen_fondo_url',$miembro); ?>');">
			 <?php if(get('modulo_landing_cuerpo',$miembro)) { ?><?php if(get('modulo_landing_mascara',$miembro)) { ?><div class="mascara"></div><?php } ?><?php } ?>
		 </div>
		<?php } ?>
		<?php if(get('modulo_landing_video_fondo_url',$miembro)) : ?>
		<div class="ml-background-video">
			<video poster="<?php echo get_image('modulo_landing_imagen_fondo',$miembro, 1, 0, null, array('w' => 1920, 'h' => 1080)); ?>" id="bgvid" autoplay muted loop>
				<source src="<?php echo get('modulo_landing_video_fondo_url',$miembro); ?>" type="video/mp4">
			</video>
			<?php if(get('modulo_landing_cuerpo',$miembro)) { ?><?php if(get('modulo_landing_mascara',$miembro)) { ?><div class="mascara"></div><?php } ?><?php } ?>
		</div>

		<?php endif; ?>

	<div class="modulo-landing-ontop" style="<?php if(get('modulo_landing_ancho_maximo',$miembro)) { ?>max-width:<?php echo get('modulo_landing_ancho_maximo',$miembro);  } ?>;<?php if(get('modulo_landing_margin',$miembro)) { ?> margin:<?php echo get('modulo_landing_margin',$miembro); ?>;<?php } ?>">


	<?php if(get('modulo_landing_mostrar_barra_lateral',$miembro)) : ?>
		<div class="wrapper" style="<?php if(get('modulo_landing_ancho_barra_lateral',$miembro)) { ?>width: calc( 100% - <?php echo get('modulo_landing_ancho_barra_lateral',$miembro); ?>); <?php } ?>">
		<?php endif; ?>

		<?php $logos = get_field('modulo_landing_logo', $miembro); $cantidadlogos = count($logos);  ?>
			<ul class="modulo-landing-logo grilla-<?php echo $cantidadlogos; ?>"><?php foreach($logos as $numero => $logo) { ?><li class="logo grilla-<?php echo $cantidadlogos; ?>"><img src="<?php printf('%s', $logo['thumb'] ); ?>" /></li><?php } ?></ul>
			<h4 class="modulo-landing-titulo"><?php echo get('modulo_landing_titulo',$miembro); ?></h4>
			<div class="modulo-landing-txt"><?php echo get('modulo_landing_cuerpo',$miembro); ?></div>



			<?php echo get('modulo_landing_logo_catalogo',$miembro); ?>


		<?php if(get('modulo_landing_mostrar_barra_lateral',$miembro)) : ?>
		</div>
	<div class="modulo_landing_barra_lateral_derecha" style="<?php if(get('modulo_landing_ancho_barra_lateral',$miembro)) { ?>width: <?php echo get('modulo_landing_ancho_barra_lateral',$miembro); ?>; <?php } ?>">
		<h4 class="modulo-landing-titulo"><?php echo get('modulo_landing_titulo_barra_derecha',$miembro); ?></h4>
		<div class="modulo-landing-barra_lateral_derecha-logo"><?php echo get_image('modulo_landing_logo_sidebar',$miembro, 1, 1, null, array('w' => 150, 'h' => 150)); ?></div>
		<div class="sidebar-content">
		<?php echo get('modulo_landing_barra_lateral_derecha',$miembro); ?>
	</div>
		<?php if ( get('modulo_landing_mostrar_menu_redes_sociales',$miembro) ) { ?>
			<nav id="social-navigation" class="social-navigation" role="navigation">
				<?php
					// Social links navigation menu.
					wp_nav_menu( array(
						'theme_location' => 'social',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>',
					) );
				?>
			</nav><!-- .social-navigation -->
		<?php } ?>

	</div>
	<?php endif; ?>
	</div>
	</li>
 <?php    }  ?>
	</ul>

   <?php
		// End the loop.
		endwhile;
		?>






		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
