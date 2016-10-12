<?php
/**
 * The template for the artista widget areas on posts and pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

if ( ! is_active_sidebar( 'sidebar-artista' ) ) {
	return;
}

// If we get this far, we have widgets. Let's do this.
?>
<aside id="artista-widgets" class="sidebar artista-widgets" role="complementary">

<?php
$titulo_sidebar = get('descripcion_titulo');
$descripcion_sidebar = get('descripcion_contenido');
$foto_sidebar = get('foto_contenido');
$audio_sidebar = get('audio_contenido');
$acciones_sidebar = get('acciones_contenido');
$videos_sidebar = get('videos_contenido');
$marquesina_sidebar = get('masrquesina_slide');
$redes_sociales_sidebar = get('redes_sociales_contenido');
?>
<div class="box-sidebar">
<h3 class="box-title"><i class="fa fa-check-square-o" aria-hidden="true"></i>Acciones</h3>
<div class="box-wrapper"><?php echo $acciones_sidebar; ?></div>
</div>
<div class="box-sidebar">
<h3 class="box-title"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Redes Sociales</h3>
<div class="box-wrapper">
<?php echo $redes_sociales_sidebar; ?>
</div>
</div>
	<?php if ( is_active_sidebar( 'sidebar-artista' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-artista' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>
</aside><!-- .content-bottom-widgets -->
