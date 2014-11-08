<?php

class Acf_Layout {

	protected static $instance = null;

	protected $plugin_screen_hook_suffix = null;

	private function __construct() {

		$this->plugin_slug = 'plugin-name';


		// Load admin style sheet and JavaScript.
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_styles' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );

	}

	public static function get_instance() {


		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}


	public function enqueue_admin_styles() {

			wp_enqueue_style( $this->plugin_slug .'-admin-styles', plugins_url( 'assets/css/styles.css', __FILE__ ), array() );

	}

	public function enqueue_admin_scripts() {

		wp_enqueue_script( $this->plugin_slug . '-admin-script', plugins_url( 'assets/js/admin.js', __FILE__ ), array( 'jquery' ) );


	}


}
