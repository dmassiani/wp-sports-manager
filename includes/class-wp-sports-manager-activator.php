<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    WP_Sports_Manager
 * @subpackage WP_Sports_Manager/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    WP_Sports_Manager
 * @subpackage WP_Sports_Manager/includes
 * @author     Your Name <email@example.com>
 */
class WP_Sports_Manager_Activator {

	private $roles;

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/settings/class-wp-sports-manager-settings-roles.php';
		WP_Sports_Manager_Settings_Roles::add_roles();
	}

}
