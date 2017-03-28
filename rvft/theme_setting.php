<?php
add_action('admin_menu', 'setup_theme_admin_menus');
function setup_theme_admin_menus() {
	$menu_name = _x('Settings', 'rvft');
	// __ skriver ej ut texten
	// _e skriver ut texten
	// _x Wp bestämmer själv om det ska skrivas ut utifrån kontext
	// fed16 kallas för text domain, används för att översätta teman
	$page_title = _x('Theme settings', 'rvft');
	add_menu_page($page_title, $menu_name, 'manage_options', 'rvft_settings', 'rvft_settings_page');
}
function rvft_settings_page() {
	?>
	<div class="wrap">
		<h1><?php _e('Theme_settings', 'rvft'); ?></h1>

		<?php
		$gaid = "";
		if(isset($_POST['submit'])) {
			$new_gaid = esc_attr($_POST['gaid']);
			update_option('gaid', $new_gaid);
			?>
			<div id="settings-error-settings_updated" class="updated settings-error notice is-dismissable">
				<p><strong><?php _e('Settings saved.', 'fed16'); ?></strong></p>
				<button type="button" class="notice-dismiss"></button>
			</div>
			<?php
		}
		$gaid = get_option('gaid');
		?>

		<form method="post">
			<h2><?php _e('Google Analytics Tracking Code', 'rvft'); ?></h2>
			<table>
				<tbody>
					<tr>
						<th scope="row"><label for="gaid"><?php _e('GA Tracking ID', 'rvft'); ?></label></th>

						<td>
							<input type="text" name="gaid" id="gaid" value="<?php echo $gaid; ?>">
						</td>
					</tr>
				</tbody>
			</table>

			<p class="submit">
				<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save changes', 'rvft'); ?>">
			</p>
		</form>
	</div>
	<?php
}