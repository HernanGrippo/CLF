<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://logichunt.com
 * @since      1.0.0
 *
 * @package    Lgx_Owl_Carousel
 * @subpackage Lgx_Owl_Carousel/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Lgx_Owl_Carousel
 * @subpackage Lgx_Owl_Carousel/public
 * @author     LogicHunt <info.logichunt@gmail.com>
 */
class Lgx_Owl_Carousel_Public {


	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private  $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private  $version;

	/**
	 * @var Lgx_Carousel_Settings_API
	 */
	private $settings_api;




	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;
		
		$this->settings_api = new Lgx_Carousel_Settings_API($plugin_name, $version);

		add_shortcode('lgx-carousel', array($this, 'lgx_carousel_shortcode_function' ));
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
		 * defined in Lgx_Owl_Carousel_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Lgx_Owl_Carousel_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style('owlcss', plugin_dir_url( __FILE__ ) . 'assets/lib/owl.carousel2/owl.carousel.css', array(), $this->version, 'all' );
		wp_enqueue_style('owltheme', plugin_dir_url( __FILE__ ) . 'assets/lib/owl.carousel2/owl.theme.default.min.css', array(), $this->version, 'all' );


		$animationcss_set   = trim($this->settings_api->get_option('lgxowl_settings_animationcss', 'lgxowl_style', 'no'));


		if($animationcss_set == 'yes'){
			wp_enqueue_style( 'lgx-animate',  plugin_dir_url( __FILE__ ) . 'assets/lib/animate/animate.css', array(), '20', 'all' );
		}

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'assets/css/lgx-owl-carousel-public.css', array(), $this->version, 'all' );

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
		 * defined in Lgx_Owl_Carousel_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Lgx_Owl_Carousel_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

        wp_enqueue_script('lgxowljs', plugin_dir_url( __FILE__ ) . 'assets/lib/owl.carousel2/owl.carousel.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'assets/js/lgx-owl-carousel-public.js', array( 'lgxowljs' ), $this->version, false );

		// Localize the script
		$translation_array = array(
			'owl_navigationTextL'    => plugin_dir_url( __FILE__ ). 'assets/img/arrow-left.png',
			'owl_navigationTextR'    => plugin_dir_url( __FILE__ ) . 'assets/img/arrow-right.png',
		);
		wp_localize_script( $this->plugin_name, 'lgxcarousel', $translation_array );

		wp_enqueue_script('jquery');
		wp_enqueue_script('owljs');
	}




	/**
	 * Plugin Output Function
	 * @param $atts
	 *
	 * @return string
	 *  @since 1.0.0
	 */

	public function lgx_output_function($params){
		
		//Query args
		$cats       = trim($params['cat'] );
		$order      = trim($params['order'] );
		$orderby    = trim( $params['orderby']);
		$limit      = intval(trim($params['limit']));


		//Carousel Style
		$color      = trim($params['color']);
		$bgcolor    = trim($params['bgcolor']);
		$bgopacity  = trim($params['bgopacity']);
		$bgimage    = trim( $params['bgimage']);
		$itembg     = trim($params['itembg']);



		//Data Attribute
		$data_attr                        = array();
		//$data_attr['item']                = intval($params['item']);
		$data_attr['margin']              = intval($params['margin']);
		$data_attr['loop']                = trim($params['loop']);
		$data_attr['nav']                 = trim($params['nav']);
		$data_attr['autoplay']            = trim($params['autoplay']);
		$data_attr['autoplaytimeout']     = intval(trim($params['autoplay_timeout']) );
		$data_attr['lazyload']            = trim($params['lazyload']);
		$data_attr['addclassactive']      = trim($params['add_active'] );
		$data_attr['autoplayhoverpause']  = trim($params['hover_pause']);
		$data_attr['video']               = trim($params['video']);
		$data_attr['animateout']          = trim( $params['animateout']);
		$data_attr['animatein']           = trim($params['animatein']);
		$data_attr['dots']                = trim($params['dots']);
		$data_attr['videoheight']         = trim($params['videoheight']);
		$data_attr['videowidth']          = trim($params['videowidth']);
		$data_attr['smartspeed']          = trim($params['smartspeed']);
		$data_attr['slidespeed']          = trim($params['slidespeed']);
		$data_attr['paginationspeed']     = trim($params['paginationspeed']);
		//
        $data_attr['itemlarge']           = intval($params['itemlarge']);
        $data_attr['itemdesk']            = intval($params['itemdesk']);
        $data_attr['itemtablet']          = intval($params['itemtablet']);
        $data_attr['itemmobile']          = intval($params['itemmobile']);

        $data_attr['navlarge']           = trim($params['navlarge']);
        $data_attr['navdesk']            = trim($params['navdesk']);
        $data_attr['navtablet']          = trim($params['navtablet']);
        $data_attr['navmobile']          = trim($params['navmobile']);



		// Apply Data Attribute
		$data_attr_str = '';
		foreach ($data_attr as $key => $value) {
			$data_attr_str .= ' data-' . $key . '="' . $value . '" ';
		}

		//Apply Style
		$lgx_section_style = ( $bgimage != '' ? 'style="background-image:url(' .$bgimage.');"' : '');
		$lgx_inner_style = 'style="background-color:' . Self::lgx_hex_to_rgba($bgcolor, $bgopacity).'; color:'.$color.';"';




		$carousel_args = array(
			'post_type'         => array( 'lgxcarousel' ),
			'post_status'       => array( 'publish' ),
			'order'             => $order,
			'orderby'           => $orderby,
			'posts_per_page'    => $limit
		);


		// Category to Array Convert
		if( !empty($cats) && $cats != '' ){
			$cats = trim($cats);
			$cats_arr   = explode(',', $cats);

			if(is_array($cats_arr) && sizeof($cats_arr) > 0){

				$carousel_args['tax_query'] = array(
					array(
						'taxonomy' => 'lgxcarouselcat',
						'field'    => 'slug',
						'terms'    => $cats_arr
					)
				);

			}
		}


		// The  Query
		$carousel_post = new WP_Query( $carousel_args );
		$carousel_item    = '';

		// The Loop
		if ( $carousel_post->have_posts() ) {
			while ( $carousel_post->have_posts() ) {

				$carousel_post->the_post();
				$id                   = get_the_ID();
				$post_content         = get_the_content();

				$thumb_bg            = '';

				if($itembg == 'yes'){
					if (has_post_thumbnail( $id )) {
						$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id( $id), true );
						$thumb_url      = $thumb_url[0];
						$thumb_bg = 'style="background-image:url(' .$thumb_url.');"';
					}
				}

				$carousel_item .= '<div class="item lgx-item" '. $thumb_bg .'>';
				$carousel_item .= do_shortcode($post_content) ;
				$carousel_item .=  '</div>';

			}
		} // Check post exist
		wp_reset_postdata();// Restore original Post Data


		//Output String
		$output  = '<div  class="lgx-carousel-section" ' . $lgx_section_style . ' >';
		$output .= '<div class="lgx-section-inner" ' . $lgx_inner_style . '>';
		$output .= '<div class="lgx-carousel-wrapper">';
		$output .= '<div class="lgx-carousel" ' . $data_attr_str . ' >' . $carousel_item . '</div>';
		$output .= '</div>';
		$output .= '</div>';
		$output .= '</div>';

		return $output;
	}


	/**
	 * Define Short Code Function
	 *
	 * @param $atts
	 *
	 * @return mixed
	 * @since 1.0.0
	 */

	public function lgx_carousel_shortcode_function($atts) {

		$cats_set       = trim($this->settings_api->get_option('lgxowl_settings_cat', 'lgxowl_basic', ''));

		$order_set      = $this->settings_api->get_option('lgxowl_settings_order', 'lgxowl_basic', 'DESC');

		$orderby_set    = $this->settings_api->get_option('lgxowl_settings_orderby', 'lgxowl_basic', 'orderby');

		$limit_set      = trim($this->settings_api->get_option('lgxowl_settings_limit', 'lgxowl_basic', -1));


		//Data Attribute

		$margin_set     = trim($this->settings_api->get_option('lgxowl_settings_margin', 'lgxowl_config', 10));


		$loop_set       = $this->settings_api->get_option('lgxowl_settings_loop', 'lgxowl_config', 'yes');
		$loop_set       = ( !empty($loop_set) && !is_null($loop_set) && ($loop_set == 'no') ) ? 'false' : 'true';

		$nav_set        =  $this->settings_api->get_option('lgxowl_settings_nav', 'lgxowl_config', 'yes');
		$nav_set        = ( !empty($nav_set) && !is_null($nav_set) && ($nav_set == 'no') ) ? 'false' : 'true';

		$autoplay_set   = trim($this->settings_api->get_option('lgxowl_settings_autoplay', 'lgxowl_config', 'yes'));
		$autoplay_set   = ( !empty($autoplay_set) && !is_null($autoplay_set) && ($autoplay_set == 'no') ) ? 'false' : 'true';

		$lazyload_set                       = trim($this->settings_api->get_option('lgxowl_settings_lazyload', 'lgxowl_config', 'no'));
		$lazyload_set   = ( !empty($lazyload_set) && !is_null($lazyload_set) && ($lazyload_set == 'yes')  ) ? 'true' : 'false';

		$add_active_set                     = trim($this->settings_api->get_option('lgxowl_settings_active', 'lgxowl_config', 'yes'));
		$add_active_set = ( !empty($add_active_set) && !is_null($add_active_set) && ($add_active_set == 'no') ) ? 'false' : 'true';

		$video_set                          = trim($this->settings_api->get_option('lgxowl_settings_video', 'lgxowl_config', 'no'));
		$video_set      = ( !empty($video_set) && !is_null($video_set) && ($video_set == 'yes') ) ? 'true' : 'false';

		$animateout_set = trim($this->settings_api->get_option('lgxowl_settings_animateout', 'lgxowl_config', 'false'));
		$animatein_set  = trim($this->settings_api->get_option('lgxowl_settings_animatein', 'lgxowl_config', 'false'));

		$smartspeed_set  = trim($this->settings_api->get_option('lgxowl_settings_smartspeed', 'lgxowl_config', '500'));
		$slidespeed_set  = trim($this->settings_api->get_option('lgxowl_settings_slidespeed', 'lgxowl_config', '200'));
		$paginationspeed_set  = trim($this->settings_api->get_option('lgxowl_settings_paginationspeed', 'lgxowl_config', '800'));
		$rewindspeed_set  = trim($this->settings_api->get_option('lgxowl_settings_rewindspeed', 'lgxowl_config', '1000'));


	

		$autoplay_timeout_set = trim($this->settings_api->get_option('lgxowl_settings_autoplay_timeout', 'lgxowl_config', 500));


		$hover_pause_set  = trim($this->settings_api->get_option('lgxowl_settings_hover_pause', 'lgxowl_config', 'no'));
		$hover_pause_set  = ( !empty($hover_pause_set) && !is_null($hover_pause_set) && ($animatein_set == 'yes')  ) ? 'true' : 'false';

		$dots_set         = trim($this->settings_api->get_option('lgxowl_settings_dots', 'lgxowl_config', 'yes'));
		$dots_set         = ( !empty($dots_set) && !is_null($dots_set) && ($dots_set == 'no') ) ? 'false' : 'true';
		$videoheight_set = trim($this->settings_api->get_option('lgxowl_settings_videoheight', 'lgxowl_config', 350));

		$videowidth_set = trim($this->settings_api->get_option('lgxowl_settings_videowidth', 'lgxowl_config', ''));
		if($videowidth_set == ''){
			$videowidth_set = 'false';
		}

        // Responsive
        $item_set_lagedesctop    = $this->settings_api->get_option('lgxowl_settings_largedesktop_item', 'lgxowl_responsive', 1);
        $nav_set_lagedesctop     =  $this->settings_api->get_option('lgxowl_settings_desktop_nav', 'lgxowl_responsive', 'yes');
        $nav_set_lagedesctop     = ( !empty($nav_set_lagedesctop) && !is_null($nav_set_lagedesctop) && ($nav_set_lagedesctop == 'no') ) ? 'false' : 'true';

        $item_set_desctop    = $this->settings_api->get_option('lgxowl_settings_desktop_item', 'lgxowl_responsive', 1);
        $nav_set_desctop     =  $this->settings_api->get_option('lgxowl_settings_desktop_nav', 'lgxowl_responsive', 'yes');
        $nav_set_desctop     = ( !empty($nav_set_desctop) && !is_null($nav_set_desctop) && ($nav_set_desctop == 'no') ) ? 'false' : 'true';


        $item_set_tablet    = $this->settings_api->get_option('lgxowl_settings_tablet_item', 'lgxowl_responsive', 1);
        $nav_set_tablet    =  $this->settings_api->get_option('lgxowl_settings_tablet_nav', 'lgxowl_responsive', 'yes');
        $nav_set_tablet    = ( !empty($nav_set_tablet) && !is_null($nav_set_tablet) && ($nav_set_tablet == 'no') ) ? 'false' : 'true';


        $item_set_mobile   = $this->settings_api->get_option('lgxowl_settings_mobile_item', 'lgxowl_responsive', 1);
        $nav_set_mobile    =  $this->settings_api->get_option('lgxowl_settings_mobile_nav', 'lgxowl_responsive', 'yes');
        $nav_set_mobile     = ( !empty($nav_set_mobile) && !is_null($nav_set_mobile) && ($nav_set_mobile == 'no') ) ? 'false' : 'true';



        //Style
		$color_set      = trim($this->settings_api->get_option('lgxowl_settings_color', 'lgxowl_style', '#333333'));

		$bgcolor_set    = trim($this->settings_api->get_option('lgxowl_settings_bgcolor', 'lgxowl_style', '#f1f1f1'));

		$bgopacity_set  = trim($this->settings_api->get_option('lgxowl_settings_bgopacity', 'lgxowl_style', 0.85));

		$bgimage_set    = trim($this->settings_api->get_option('lgxowl_settings_bgimage', 'lgxowl_style', ''));

		$itembg_set     = trim($this->settings_api->get_option('lgxowl_settings_itembg', 'lgxowl_style', 'no'));



		/*$option_arr = $this->option_arr;
		extract($option_arr);*/

        $att_values = shortcode_atts(array(
			'order'             => $order_set,
			'orderby'           => $orderby_set,
			'limit'             => $limit_set,
			'cat'               => $cats_set,
			'color'             => $color_set,
			'bgcolor'           => $bgcolor_set,
			'bgopacity'         => $bgopacity_set,
			'bgimage'           => $bgimage_set,
			'itembg'            => $itembg_set,
			'margin'            => $margin_set,
			'lazyload'          => $lazyload_set,
			'loop'              => $loop_set,
			'nav'               => $nav_set,
			'autoplay'          => $autoplay_set,
			'autoplay_timeout'  => $autoplay_timeout_set,
			'add_active'        => $add_active_set,
			'hover_pause'       => $hover_pause_set,
			'video'             => $video_set,
			'animateout'        => $animateout_set,
			'animatein'         => $animatein_set,
			'dots'              => $dots_set,
			'videoheight'       => $videoheight_set,
			'videowidth'       => $videowidth_set,
			'smartspeed'       => $smartspeed_set,
			'slidespeed'       => $slidespeed_set,
			'paginationspeed'   => $paginationspeed_set,
			'rewindspeed'       => $rewindspeed_set,
            'itemlarge'         => $item_set_lagedesctop,
            'itemdesk'         => $item_set_desctop,
            'itemtablet'       => $item_set_tablet,
            'itemmobile'       => $item_set_mobile,
            'navlarge'         => $nav_set_lagedesctop,
            'navdesk'         => $nav_set_desctop,
            'navtablet'       => $nav_set_tablet,
            'navmobile'       => $nav_set_mobile,
		), $atts, 'lgx-carousel');


        $output = '';

        // Output view override from active theme ans plugin

        if ( file_exists(get_template_directory() . '/logichunt/plugin-public.php')){

            require_once get_template_directory() . '/logichunt/plugin-public.php';

            $method_name =trim(str_replace("-","_",$this->plugin_name).'_views');

            if ( class_exists( 'LogicHuntPluginExtendedPublic' ) ) {

                $themeViews = new LogicHuntPluginExtendedPublic();

                if( method_exists($themeViews, $method_name)) {

                    $output = $themeViews->$method_name($att_values, $atts);

                }else {
                    $output = $this->lgx_output_function($att_values, $atts);
                }
            }

        } else{

            $output = $this->lgx_output_function($att_values, $atts);
        }

		return $output;
	}


	/**
	 *
	 */

	public function lgx_owl_hook_css() {

		$videoheight_set = trim($this->settings_api->get_option('lgxowl_settings_videoheight', 'lgxowl_config', 350));
		$videowidth_set = trim($this->settings_api->get_option('lgxowl_settings_videowidth', 'lgxowl_config', ''));

		if($videowidth_set == ''){
			$videowidth_set = '100%';
		}
		else{
			$videowidth_set = $videowidth_set.'px';
		}

		$output='<style> .lgx-carousel-section .lgx-carousel .owl-video-tn{height: '.$videoheight_set.'px; width: '.$videowidth_set.';} </style>';

		echo $output;

	}

	/**
	 *  Hex T RGBA  Color Converter
	 *
	 * @param $color
	 * @param bool $opacity
	 *
	 * @return string
	 */

        public static function lgx_hex_to_rgba($color, $opacity = false) {
		if ($color != 'transparent') {


			$default = 'rgb(0,0,0)';

			//Return default if no color provided
			if(empty($color))
				return $default;

			//Sanitize $color if "#" is provided
			if ($color[0] == '#' ) {
				$color = substr( $color, 1 );
			}

			//Check if color has 6 or 3 characters and get values
			if (strlen($color) == 6) {
				$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
			} elseif ( strlen( $color ) == 3 ) {
				$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
			} else {
				return $default;
			}

			//Convert hexadec to rgb
			$rgb =  array_map('hexdec', $hex);

			//Check if opacity is set(rgba or rgb)
			if($opacity){
				if(abs($opacity) > 1)
					$opacity = 1.0;
				$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
			} else {
				$output = 'rgb('.implode(",",$rgb).')';
			}

			//Return rgb(a) color string
			return $output;
		}
		else {
			return 'rgba(0,0,0,0)';
		}
	}


}
