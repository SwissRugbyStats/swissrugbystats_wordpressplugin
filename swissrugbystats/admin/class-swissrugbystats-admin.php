<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    swissrugbystats
 * @subpackage swissrugbystats/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    swissrugbystats
 * @subpackage swissrugbystats/admin
 * @author     Your Name <email@example.com>
 */
class swissrugbystats_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in swissrugbystats_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The swissrugbystats_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/swissrugbystats-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in swissrugbystats_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The swissrugbystats_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/swissrugbystats-admin.js', array( 'jquery' ), $this->version, false );

	}

    public function add_plugins_link_to_admin_toolbar( $wp_admin_bar ) {

        $args = array(
            'id'    => 'swissrugbystats',
            'title' => 'Swiss Rugby Stats',
            'parent'=> false,
        );

        $wp_admin_bar->add_node( $args );

	    $args = array(
            'id'    => 'swissrugbystats_main',
            'title' => 'Settings',
            'href'  => admin_url('./partials/swissrugbystats-admin-display.php'),
            'parent'=> 'swissrugbystats',
        );

	    $wp_admin_bar->add_node( $args );
    }


}
