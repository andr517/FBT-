<?php
add_theme_support( 'post-thumbnails' );

function my_theme_enqueue_style() {

		wp_enqueue_style(
			'bulma',
				get_stylesheet_directory_uri() . '/css/bulma.css'
		);
		wp_enqueue_style(
			'stylesheet',
				get_stylesheet_uri()
		);
		wp_enqueue_style(
			'font-awesome',
				get_stylesheet_directory_uri() . '/css/font-awesome.css'
		);
		wp_enqueue_script(
			'script',
				get_stylesheet_directory_uri() . '/js/script.js', array ( 'jquery' ), false, true
		);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_style' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu1' => __( 'Header Menu 1' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>

<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function fbt_widgets_init() {

	register_sidebar( array(
		'name'          => 'header logo',
		'id'            => 'header-logo',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
			'name'          => __( 'Footer Left', 'fbt' ),
			'id'            => 'footer-1',
			'description' => 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
	) );

	register_sidebar( array(
			'name'          => __( 'Footer Middle', 'fbt' ),
			'id'            => 'footer-2',
			'description' 	=> 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
	) );

	register_sidebar( array(
			'name'          => __( 'Footer Right', 'fbt' ),
			'id'            => 'footer-3',
			'description' 	=> 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
	) );

	register_sidebar( array(
			'name'          => __( 'recent posts', 'fbt' ),
			'id'            => 'recent-posts',
			'description' 	=> 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'fbt_widgets_init' );
?>

<?php
require_once('navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'header-menu1' ),
) );
?>
