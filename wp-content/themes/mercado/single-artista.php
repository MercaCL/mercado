<?php
/**
 * The template for displaying all Artista single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();
$marquesina = get('masrquesina_slide');
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>


		<div class="modulo-marquesina">
		<div class="slideshow">
		<ul id="slideshow-overflow">

	<?php	$marquesinas = get_order_group('marquesina_imagen'); ?>

			<?php


			foreach ($marquesinas as $keym => $marquesina) {

		$image_title = get('marquesina_titulo',$marquesina);
		$image_descripcion = get('marquesina_descripcion',$marquesina);
		// $image_url = wp_get_attachment_url( $image_id );
		$image_url = get_image('marquesina_imagen',$marquesina,1,0,NULL,array( 'w' => 1290 , 'h' => 1080));





		?><li class="slide">
			<div class="slideshow-background" style="background-image:url('<?php echo $image_url; ?>');"><img class="" src="<?php echo $image_url; ?>" alt="<?php echo $image_title; ?>" /></div>
		<div class="slideshow-wrapper">
			<h2 class="slideshow-headline"><?php echo $image_title; ?></h2>
			<div class="slideshow-paragraph"><?php echo $image_descripcion; ?></div>
		</div>
		<div class=""></div>
			</li><?php
					}
		?></ul>
			</div>
		</div><!--modulo-marquesina-->


		<?php	// Include the single post content template.
			get_template_part( 'content', 'artista' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}






			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php // get_sidebar( 'artista' ); ?>

</div><!-- .content-area -->

<?php get_sidebar('artista'); ?>
<?php get_footer(); ?>
