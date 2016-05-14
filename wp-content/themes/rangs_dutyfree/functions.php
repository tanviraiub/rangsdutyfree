<?php

//post limit words functions
	function limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));
}

/* WordPress 3.0 Menu Editor ********************************************/

	// add menu support and fallback menu if menu doesn't exist
	add_action('init', 'wpj_register_menu');
	
	function wpj_register_menu() {
		if (function_exists('register_nav_menu')) {
			register_nav_menu( 'main-menu', __( 'Main Menu') );
		}
	}
	/*function wpj_default_menu() {
		echo '<ul id="nav">';
		if ('page' != get_option('show_on_front')) {
			echo '<li><a href="'. home_url() . '/">Home</a></li>';
		}
		wp_list_pages('title_li=');
		echo '</ul>';
	}
	register_nav_menu( 'menu_footer', __( 'Footer Menu', 'bottommenu' ) );*/
	
	
	if (class_exists('MultiPostThumbnails')) { 
	new MultiPostThumbnails(array ( 
			'label' => 'Secondary Image', 
			'id' => 'secondary-image', 
			'post_type' => 'post' )
	);
	new MultiPostThumbnails(array(
			'label' => 'Tertiary Image',
			'id' => 'tertiary-image', )
	 );
	new MultiPostThumbnails(array(
			'label' => 'Quaternary Image',
			'id' => 'quaternary-image', )
	);
	}
	add_image_size('post-secondary-image-thumbnail', 176, 58, true);
	add_image_size('post-tertiary-image-thumbnail', 176, 58, true);
	add_image_size('post-quaternary-image-thumbnail', 176, 58, true);
	

add_action('admin_menu', 'liton_myplugin_add_page');
function liton_myplugin_add_page() {
add_options_page( 'My Plugin', 'My Plugin', 'manage_options', 'liton_myplugin',
'liton_myplugin_option_page');
}

// Draw the option page
function liton_myplugin_option_page() {
?>
<div class="wrap">
<?php screen_icon(); ?>
<h2>My plugin</h2>
<form action="options.php" method="post">
<?php settings_fields('liton_myplugin_options'); ?>
<?php do_settings_sections('liton_myplugin'); ?>
<input name="Submit" type="submit" value="Save"/>
</form></div>
<?php
}
// Register and define the settings
add_action('admin_init', 'liton_myplugin_admin_init');
function liton_myplugin_admin_init()
{
register_setting( 'liton_myplugin_options',
'liton_myplugin_options',
'liton_myplugin_validate_options' );
add_settings_section( 'liton_myplugin_main', 'My Plugin
Settings',
'liton_myplugin_section_text', 'liton_myplugin' );
add_settings_field( 'liton_myplugin_text_string', 'Enter text
here',
'liton_myplugin_setting_input', 'liton_myplugin',
'liton_myplugin_main' );
}
// Draw the section header
function liton_myplugin_section_text() {
echo '<p>Enter your settings here.</p>';
}
// Display and fill the form field
function liton_myplugin_setting_input() {
// get option 'text_string' value from the database
$options = get_option( 'liton_myplugin_options' );
$text_string = $options['text_string'];
// echo the field
echo "<input id='text_string'
name='liton_myplugin_options[text_string]'
type='text' value='$text_string' />";
}
// Validate user input (we want text only)
function liton_myplugin_validate_options( $input ) {
$valid = array();
$valid['text_string'] = preg_replace(
'/[^a-zA-Z]/',
'',
$input['text_string'] );
return $valid;
}

	
  /* php code in widget area ********************************************/

	add_filter('widget_text','execute_php',100);
	function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;

}

?>
