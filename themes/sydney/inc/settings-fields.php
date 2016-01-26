<?php 
// create custom settings menu
add_action('admin_menu', 'shortcode_settings_create_menu');

function shortcode_settings_create_menu() {

	//create new top-level menu
	add_menu_page('Shortcodes', 'Shorcodes', 'administrator', __FILE__, 'theme_shortcodes_page' );

	//call register settings function
	add_action( 'admin_init', 'theme_shortcodes_settings' );
}


function theme_shortcodes_settings() {
	//register our settings
	register_setting( 'shortcode-settings-group', 'team_shortcode' );
	register_setting( 'shortcode-settings-group', 'calendar_shortcode_id' );

}

function theme_shortcodes_page() {
?>
<div class="wrap">
<h2>Shortcodes</h2>

<form method="post" action="options.php">
	<?php settings_fields( 'shortcode-settings-group' ); ?>
	<?php do_settings_sections( 'shortcode-settings-group' ); ?>

	<table class="form-table">
		<tr valign="top">
		<th scope="row">Team Shortcode Name</th>
		<td><input type="text" name="team_shortcode" value="<?php echo esc_attr( get_option('team_shortcode') ); ?>" /></td>
		</tr>
		 
		<tr valign="top">
		<th scope="row">Calendar Shortcode ID</th>
		<td><input type="text" name="calendar_shortcode_id" value="<?php echo esc_attr( get_option('calendar_shortcode_id') ); ?>" /></td>
		</tr>
		</tr>
	</table>
	<?php submit_button(); ?>

</form>
</div>
<?php } 
 ?>