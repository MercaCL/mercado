<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */



 			$titulo = get('descripcion_titulo');
 			$descripcion = get('descripcion_contenido');
 			$foto = get('foto_contenido');
 			$audio = get('audio_contenido');
 			$acciones = get('acciones_contenido');
 			$videos = get('videos_contenido');

 			$redes_sociales = get('redes_sociales_contenido');




?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php the_excerpt(); ?>

	<?php // twentyfifteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'content' );
			}




		?>
<div class="box-artista box">
<div class="box-top box">
	<div class="box-left box">
		<h3 class="box-title"><i class="fa fa-folder-o" aria-hidden="true"></i>Bio</h3>
		<div class="box-wrapper">

		<div class="box-txt"><?php echo $descripcion; ?></div>
	</div>
	</div>
	<div class="box-right box"><h3 class="box-title"><i class="fa fa-camera-retro" aria-hidden="true"></i>Fotos</h3><?php
      echo $foto;
?></div>
</div>

<div class="box-bottom box">
	<div class="box-left box"><h3 class="box-title"><i class="fa fa-file-audio-o" aria-hidden="true"></i>Audio</h3>
    <div class="box-wrapper"><?php
				echo $audio;
		?></div></div>
	<div class="box-right box"><h3 class="box-title"><i class="fa fa-play" aria-hidden="true"></i>Video</h3><?php
				echo $videos;
		?></div>
</div>
</div>


	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentyfifteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentyfifteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
