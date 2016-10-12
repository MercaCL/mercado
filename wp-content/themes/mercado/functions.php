<?php

require get_stylesheet_directory() . '/inc/custom-header.php';

if ( ! isset( $content_width ) )
    $content_width = 1695;


function instafeed_scripts() {
	wp_enqueue_script(
		'instafeed',
		get_stylesheet_directory_uri() . '/js/instafeed.min.js',
		array( 'jquery' )
	);
}

add_action( 'wp_enqueue_scripts', 'instafeed_scripts' );



function global_scripts() {
	wp_enqueue_script(
		'global-script',
		get_stylesheet_directory_uri() . '/js/global.js',
		array( 'jquery' )
	);
}

add_action( 'wp_enqueue_scripts', 'global_scripts' );

function mercado_stylesheets(){
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css');

  wp_enqueue_script( 'twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20151204', true );

	wp_localize_script( 'twentyfifteen-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'twentyfifteen' ),
		'collapse' => __( 'collapse child menu', 'twentyfifteen' ),
	) );

}
add_action('wp_enqueue_scripts','mercado_stylesheets');


function mercado_widgets_init() {
register_sidebar(array(
        'name' => __('Footer Info', 'twentyfifteen'),
        'description' => __('Footer Info Area', 'twentyfifteen'),
        'id' => 'footer-info',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>'
    ));
}
add_action('widgets_init', 'mercado_widgets_init');


function mercado_header_setup() {
    $args = array( 'width' => 1920, 'height' => 1080 );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'mercado_header_setup' );






add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	// adds parent & child style.css files
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
    // adds child functions.js file and screenReaderText
    wp_enqueue_script( 'twentyfifteen-child-script', get_stylesheet_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160203', true );
    wp_localize_script( 'twentyfifteen-child-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'twentyfifteen-child' ),
		'collapse' => __( 'collapse child menu', 'twentyfifteen-child' ),
	) );

}

add_action( 'wp_print_scripts', 'theme_dequeue_scripts' );
function theme_dequeue_scripts() {
	// remove parent functions.js file and screenReaderText
    wp_dequeue_script( 'twentyfifteen-script' );
    wp_deregister_script( 'twentyfifteen-script' );
}


function hex2RGB($hexStr, $returnAsString = false, $seperator = ',') {
	$hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr); // Gets a proper hex string
	$rgbArray = array();
	if (strlen($hexStr) == 6) { //If a proper hex code, convert using bitwise operation. No overhead... faster
		$colorVal = hexdec($hexStr);
		$rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
		$rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
		$rgbArray['blue'] = 0xFF & $colorVal;
	} elseif (strlen($hexStr) == 3) { //if shorthand notation, need some string manipulations
		$rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
		$rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
		$rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
	} else {
		return false; //Invalid hex color code
	}
	return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray; // returns the rgb string or the associative array
}
function RGBtoHSL($rgb)    // RGB values:    0-255, 0-255, 0-255
{
$rgb = array();                                // HSL values:    0-360, 0-100, 0-100
$colorrgb_array = array_keys($rgb);
$R = $rgb[$colorrgb_array[0]];
$G = $rgb[$colorrgb_array[1]];
$B = $rgb[$colorrgb_array[2]];


    // Convert the RGB byte-values to percentages
    $R = ($R / 255);
    $G = ($G / 255);
    $B = ($B / 255);

    // Calculate a few basic values, the maximum value of R,G,B, the
    //   minimum value, and the difference of the two (chroma).
    $maxRGB = max($R, $G, $B);
    $minRGB = min($R, $G, $B);
    $chroma = $maxRGB - $minRGB;

    // Value (also called Brightness) is the easiest component to calculate,
    //   and is simply the highest value among the R,G,B components.
    // We multiply by 100 to turn the decimal into a readable percent value.
  //  $computedV = 100 * $maxRGB;
	$computedL = ($maxRGB + $minRGB) * 100 / 2;

    // Special case if hueless (equal parts RGB make black, white, or grays)
    // Note that Hue is technically undefined when chroma is zero, as
    //   attempting to calculate it would cause division by zero (see
    //   below), so most applications simply substitute a Hue of zero.
    // Saturation will always be zero in this case, see below for details.
    if ($chroma == 0)
        return array(0, 0, $computedL);

    // Saturation is also simple to compute, and is simply the chroma
    //   over the Value (or Brightness)
    // Again, multiplied by 100 to get a percentage.
    $computedS = 100 * ($chroma / $maxRGB);

    // Calculate Hue component
    // Hue is calculated on the "chromacity plane", which is represented
    //   as a 2D hexagon, divided into six 60-degree sectors. We calculate
    //   the bisecting angle as a value 0 <= x < 6, that represents which
    //   portion of which sector the line falls on.
    if ($R == $minRGB)
        $h = 3 - (($G - $B) / $chroma);
    elseif ($B == $minRGB)
        $h = 1 - (($R - $G) / $chroma);
    else // $G == $minRGB
        $h = 5 - (($B - $R) / $chroma);

    // After we have the sector position, we multiply it by the size of
    //   each sector's arc (60 degrees) to obtain the angle in degrees.
    $computedH = 60 * $h;

    return array($computedH, $computedS, $computedL);
}


function RGBtoHSV($rgb)    // RGB values:    0-255, 0-255, 0-255
{                                // HSV values:    0-360, 0-100, 0-100

$colorrgb_array = array_keys($rgb);
$R = $rgb[$colorrgb_array[0]];
$G = $rgb[$colorrgb_array[1]];
$B = $rgb[$colorrgb_array[2]];


    // Convert the RGB byte-values to percentages
    $R = ($R / 255);
    $G = ($G / 255);
    $B = ($B / 255);

    // Calculate a few basic values, the maximum value of R,G,B, the
    //   minimum value, and the difference of the two (chroma).
    $maxRGB = max($R, $G, $B);
    $minRGB = min($R, $G, $B);
    $chroma = $maxRGB - $minRGB;

    // Value (also called Brightness) is the easiest component to calculate,
    //   and is simply the highest value among the R,G,B components.
    // We multiply by 100 to turn the decimal into a readable percent value.
    $computedV = 100 * $maxRGB;
	// $computedL = ($maxRGB + $minRGB) * 100 / 2;

    // Special case if hueless (equal parts RGB make black, white, or grays)
    // Note that Hue is technically undefined when chroma is zero, as
    //   attempting to calculate it would cause division by zero (see
    //   below), so most applications simply substitute a Hue of zero.
    // Saturation will always be zero in this case, see below for details.
    if ($chroma == 0)
        return array(0, 0, $computedV);

    // Saturation is also simple to compute, and is simply the chroma
    //   over the Value (or Brightness)
    // Again, multiplied by 100 to get a percentage.
    $computedS = 100 * ($chroma / $maxRGB);

    // Calculate Hue component
    // Hue is calculated on the "chromacity plane", which is represented
    //   as a 2D hexagon, divided into six 60-degree sectors. We calculate
    //   the bisecting angle as a value 0 <= x < 6, that represents which
    //   portion of which sector the line falls on.
    if ($R == $minRGB)
        $h = 3 - (($G - $B) / $chroma);
    elseif ($B == $minRGB)
        $h = 1 - (($R - $G) / $chroma);
    else // $G == $minRGB
        $h = 5 - (($B - $R) / $chroma);

    // After we have the sector position, we multiply it by the size of
    //   each sector's arc (60 degrees) to obtain the angle in degrees.
    $computedH = 60 * $h;

    return array($computedH, $computedS, $computedV);
}
