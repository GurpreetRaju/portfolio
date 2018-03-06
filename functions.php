<?php
/*  Default Header Menu Register  */
add_theme_support( 'menus' );
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' , 'portfolio'));

}
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
  return is_array($var) ? array() : '';
}


add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );

/* Pagination */
function portfolio_paging_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav class="pagination col-md-12" role="navigation">
		<?php
		echo paginate_links( array(
						'base'         => @add_query_arg('paged','%#%'),
						'format'       => '%#%',
						'total'        => $wp_query->max_num_pages,
						'current'      => max( 1, get_query_var('paged') ),
						'show_all'     => False,
						'end_size'     => 1,
						'mid_size'     => 2,
						'prev_next'    => True,
						'prev_text'    => __('« Previous'),
						'next_text'    => __('Next »'),
						'type'         => 'plain',
						'add_args'     => False,
						'add_fragment' => '',
						'before_page_number' => '<span class="button">',
						'after_page_number' => '</span>'
						)
					);
		?>
	</nav><!-- .navigation -->
	<?php
}
function portfolio_widgets_init(){
register_sidebar(array(
	'name'          => __( 'Footer widgets area', 'portfolio' ),
	'id'            => 'footer_widgets',
	'description'   => 'Footer Widgets Area',
	'before_widget' => '<div id="%1$s" class="col-md-3 widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4 class="f-title">',
	'after_title'   => '</h4>' ));
}
add_action( 'widgets_init', 'portfolio_widgets_init' );


/* Adding theme options */
function portfolio_customizer($wp_customize){
	$wp_customize->add_section('portfolio_header',array(
		'title' => __('Header','portfolio'),
		'priority' => '30',
		'description' => 'Customize Header of theme'
	));
	$wp_customize->add_setting('header_logo',array(
		'default' => get_template_directory_uri().'/images/logo.png',
		'capability'     => 'edit_theme_options',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_control($wp_customize,'header_logo',array(
		'label' => __('Change Logo Image','portfolio'),
		'section' => 'portfolio_header',
		'settings' => 'header_logo'
	)));
	$wp_customize->add_setting('social_fb',array(
		'default' => 'http://www.facebook.com',
		'capability'     => 'edit_theme_options',
		'type' => 'theme_mod'
	));
	$wp_customize->add_setting('social_in',array(
		'default' => 'http://www.linkedin.com',
		'capability'     => 'edit_theme_options',
		'type' => 'theme_mod'
	));
	$wp_customize->add_setting('social_mail',array(
		'default' => '',
		'capability'     => 'edit_theme_options',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('social_fb',array(
		'label' => __('Change Facebook link','portfolio'),
		'section' => 'portfolio_header',
		'settings' => 'social_fb'
	));
	$wp_customize->add_control('social_in',array(
		'label' => __('Change linkedin link','portfolio'),
		'section' => 'portfolio_header',
		'settings' => 'social_in'
	));
	$wp_customize->add_control('social_mail',array(
		'label' => __('Change email link','portfolio'),
		'section' => 'portfolio_header',
		'settings' => 'social_mail'
	));
	/*   Footer Section    */
	$wp_customize->add_section('portfolio_footer',array(
		'title' => __('Footer','portfolio'),
		'description' => 'Customize Footer of theme'
	));
	$wp_customize->add_setting('copyright',array(
		'default' => 'Copyright 2015 Website',
		'capability'     => 'edit_theme_options',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('copyright',array(
		'label' => __('Change Copyright Text','portfolio'),
		'section' => 'portfolio_footer',
		'settings' => 'copyright'
	));
}

add_action('customize_register','portfolio_customizer');

function get_logo(){
	$logo = get_theme_mod('header_logo');
	if($logo=='') { echo get_stylesheet_directory_uri().'/images/logo.png';}
	else { echo $logo;}
}



?>
