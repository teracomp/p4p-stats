<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://teracomp.net
 * @since      1.0.0
 *
 * @package    P4p_Stats
 * @subpackage P4p_Stats/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    P4p_Stats
 * @subpackage P4p_Stats/public
 * @author     Dave Phillips <teracomp@gmail.com>
 */
class P4p_Stats_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->p4p_stats_options = get_option($this->plugin_name); // todo
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in P4p_Stats_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The P4p_Stats_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/p4p-stats-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in P4p_Stats_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The P4p_Stats_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/p4p-stats-public.js', array( 'jquery' ), $this->version, false );

	}
/*
    public function wp_cbf_cleanup() {

        if($this->wp_cbf_options['cleanup']){


            remove_action( 'wp_head', 'rsd_link' );                 // RSD link
            remove_action( 'wp_head', 'feed_links_extra', 3 );            // Category feed link
            remove_action( 'wp_head', 'feed_links', 2 );                // Post and comment feed links
            remove_action( 'wp_head', 'index_rel_link' );
            remove_action( 'wp_head', 'wlwmanifest_link' );
            remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );        // Parent rel link
            remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );       // Start post rel link
            remove_action( 'wp_head', 'rel_canonical', 10, 0 );
            remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
            remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // Adjacent post rel link
            remove_action( 'wp_head', 'wp_generator' );               // WP Version
            remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
            remove_action( 'wp_print_styles', 'print_emoji_styles' );


        }
    }   
	
	
    // Cleanup head
    public function wp_cbf_remove_x_pingback($headers) {
        if(!empty($this->wp_cbf_options['cleanup'])){
            unset($headers['X-Pingback']);
            return $headers;
        }
    }

    // Remove Comment inline CSS
    public function wp_cbf_remove_comments_inline_styles() {
        if(!empty($this->wp_cbf_options['comments_css_cleanup'])){
            global $wp_widget_factory;
            if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' ) ) {
                remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
            }

            if ( isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments']) ) {
                remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
            }
        }
    }

    // Remove gallery inline CSS
    public function wp_cbf_remove_gallery_styles($css) {
        if(!empty($this->wp_cbf_options['gallery_css_cleanup'])){
            return preg_replace( "!<style type='text/css'>(.*?)</style>!s", '', $css );
        }

    }


    // Add post/page slug
    public function wp_cbf_body_class_slug( $classes ) {
        if(!empty($this->wp_cbf_options['body_class_slug'])){
            global $post;
            if(is_singular()){
                $classes[] = $post->post_name;
            }
        }
                return $classes;
    }
    
    // Load jQuery from CDN if available
    public function wp_cbf_cdn_jquery(){
        if(!empty($this->wp_cbf_options['jquery_cdn'])){
            if(!is_admin()){
                            if(!empty($this->wp_cbf_options['cdn_provider'])){
                                $link = $this->wp_cbf_options['cdn_provider'];
                            }else{
                                $link = 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js';
                            }
                            $try_url = @fopen($link,'r');
                            if( $try_url !== false ) {
                                wp_deregister_script( 'jquery' );
                                wp_register_script('jquery', $link, array(), null, false);
                            }
            }
        }
    }*/

}
