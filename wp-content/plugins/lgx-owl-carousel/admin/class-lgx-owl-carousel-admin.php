<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://logichunt.com
 * @since      1.0.0
 *
 * @package    Lgx_Owl_Carousel
 * @subpackage Lgx_Owl_Carousel/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Lgx_Owl_Carousel
 * @subpackage Lgx_Owl_Carousel/admin
 * @author     LogicHunt <info.logichunt@gmail.com>
 */
class Lgx_Owl_Carousel_Admin {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * @var Lgx_Carousel_Settings_API
     */
    private $settings_api;

    /**
     * The plugin plugin_base_file of the plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      string plugin_base_file The plugin plugin_base_file of the plugin.
     */
    protected $plugin_base_file;


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
        $this->settings_api = new Lgx_Carousel_Settings_API($plugin_name, $version);

        $this->plugin_base_file = plugin_basename(plugin_dir_path(__FILE__).'../' . $this->plugin_name . '.php');

    }




    /**
     * Initialize Owl Widget
     * @since 1.0.0
     */

    public function lgx_owl_widgets_init(){


        require_once( plugin_dir_path( __FILE__ ) . '../widgets/lgx-owl-carousel-widget.php' );

        register_widget( 'Lgx_Owl_Widget' );
    }





    /**
     * Declare Custom Post Type For Carousal
     * @since 1.0.0
     */

    public function lgxcarousel_initialize() {


        //custom post type labels
        $labels_default = array(
            'name'               => _x('Owl Carousels', 'Owl Carousels', 'lgxcarousel-domain'),
            'singular_name'      => _x('Owl Carousel', 'Owl Carousel', 'lgxcarousel-domain'),
            'menu_name'          => __('Owl Carousel', 'lgxcarousel-domain'),
            'all_items'          => __('All Items', 'lgxcarousel-domain'),
            'view_item'          => __('View Item', 'lgxcarousel-domain'),
            'add_new_item'       => __('Add New Carousel Item', 'lgxcarousel-domain'),
            'add_new'            => __('Add New', 'lgxcarousel-domain'),
            'edit_item'          => __('Edit Carousel Item', 'lgxcarousel-domain'),
            'update_item'        => __('Update Carousel Item', 'lgxcarousel-domain'),
            'search_items'       => __('Search Carousel', 'lgxcarousel-domain'),
            'not_found'          => __('No Carousel items found', 'lgxcarousel-domain'),
            'not_found_in_trash' => __('No Carousel items found in trash', 'lgxcarousel-domain')
        );


        //custom post type setup
        $args_default = array(
            'label'               => __('Carousel Slider', 'lgxcarousel-domain'),
            'description'         => __('OWL Carousel Slider Post Type', 'lgxcarousel-domain'),
            'labels'              => $labels_default,
            'supports'            => array('title', 'editor', 'thumbnail'),
            'taxonomies'          => array(''),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_icon'           => plugins_url('/lgx-owl-carousel/admin/assets/img/owl-logo.png'),
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 25,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );


        // Output view override from active theme ans plugin
        if ( file_exists(get_template_directory() . '/logichunt/plugin-admin.php')){

            require_once get_template_directory() . '/logichunt/plugin-admin.php';

            $method_name =trim(str_replace("-","_",$this->plugin_name).'_admin_post_args');

            if ( class_exists( 'LogicHuntPluginExtendedAdmin' ) ) {

                $themeViews = new LogicHuntPluginExtendedAdmin();

                if( method_exists($themeViews, $method_name)) {

                    $args_lgxcarousel = $themeViews->$method_name();

                }else {

                    $args_lgxcarousel = $args_default;

                }
            }

        } else{

            $args_lgxcarousel = $args_default;
        }



        //declare custom post type lgxcarousel
        register_post_type( 'lgxcarousel', $args_lgxcarousel);


        // Register Taxonomy
        $lgxcarousel_cat_args = array(
            'hierarchical'   => true,
            'label'          => __('Categories', 'lgxcarousel-domain'),
            'show_ui'        => true,
            'query_var'      => true,
            'show_admin_column' => true,
            'singular_label' => __('Category', 'lgxcarousel-domain'),
        );
        register_taxonomy('lgxcarouselcat', array('lgxcarousel'), $lgxcarousel_cat_args);


    }




    /**
     * Register the administration menu for this plugin into the WordPress Dashboard menu.
     *
     * @since    1.0.0
     */
    public function add_plugin_admin_menu() {

        //overview
        /*$this->plugin_screen_hook_suffix            = add_menu_page(
            __('LGX Content Slider', 'lgxcontentslider-domain'), __('LGX Content Slider', 'lgxcontentslider-domain'), 'manage_options', 'lgxcontentsildersettings', array($this, 'display_plugin_admin_settings')
        );*/
        $this->plugin_screen_hook_suffix  = add_submenu_page('edit.php?post_type=lgxcarousel', __('Carousel Slider Settings', 'lgxcarousel-domain'), __('Carousel Settings', 'lgxcarousel-domain'), 'manage_options', 'lgxcarouselsettings', array($this, 'display_plugin_admin_settings'));

    }


    /**
     * Add support link to plugin description in /wp-admin/plugins.php
     *
     * @param  array  $plugin_meta
     * @param  string $plugin_file
     *
     * @return array
     */
    public function support_link($plugin_meta, $plugin_file) {

        if ($this->plugin_base_file == $plugin_file) {
            $plugin_meta[] = sprintf(
                '<a href="%s">%s</a>', 'http://themearth.com/', __('Support', 'lgxcarousel-domain')
            );
        }

        return $plugin_meta;
    }



    public function display_plugin_admin_settings() {
        /*	$test = $this->settings_api->get_option('lgxowl_settings_cat', 'lgxowl_config', 'test');
            var_dump($test);*/

        global $wpdb;

        $plugin_data = get_plugin_data(plugin_dir_path(__DIR__) . '/../' . $this->plugin_base_file);

        include('partials/admin-settings-display.php');
    }

    /**
     * Settings init
     */
    public function setting_init() {
        //set the settings
        $this->settings_api->set_sections($this->get_settings_sections());
        $this->settings_api->set_fields($this->get_settings_fields());

        //initialize settings
        $this->settings_api->admin_init();

        //$role = get_role('administrator');
    }


    /**
     * Setings Sections
     * @return array|mixed|void
     */

    public function get_settings_sections() {

        $sections = array(
            array(
                'id'    => 'lgxowl_basic',
                'title' => __('Basic Settings', 'lgxcarousel-domain'),
                'desc' => '<p class="lgx-update"><strong>'. __('This is default global value for LGX Owl Carousel. But every carousel will be override from shortcode params and widget options.', 'lgxcarousel-domain') .'<p><strong>'
            ),

            array(
                'id'    => 'lgxowl_responsive',
                'title' => __('Responsive Settings', 'lgxcarousel-domain'),
                'desc' => '<p class="lgx-update"><strong>'. __('This is default global value for LGX Owl Carousel. But every carousel will be override from shortcode params and widget options.', 'lgxcarousel-domain') .'<p><strong>'
            ),

            array(
                'id'    => 'lgxowl_style',
                'title' => __('Style Settings', 'lgxcarousel-domain'),
                'desc' => '<p class="lgx-update"><strong>'. __('This is default global value for LGX Owl Carousel. But every carousel will be override from shortcode params and widget options.', 'lgxcarousel-domain') .'<p><strong>'
            ),

            array(
                'id'    => 'lgxowl_config',
                'title' => __('Owl Options Settings', 'lgxcarousel-domain'),
                'desc' => '<p class="lgx-update"><strong>'. __('This is default global value for LGX Owl Carousel. But every carousel will be override from shortcode params and widget options. For details about owl carousel options, ', 'lgxcarousel-domain') .' <a href="http://www.owlcarousel.owlgraphic.com/docs/api-options.html" rel="nofollow" target="_blank">'.__('See here', 'lgxcarousel-domain').'</a><p><strong>'
            )
        );

        $sections = apply_filters('lgx_owl_settings_sections', $sections);

        return $sections;
    }

    /**
     * Returns all the settings fields
     *
     * @return array settings fields
     */
    public  function get_settings_fields() {

        $hidden_class = '';
        $lgxwp_image_name = 'custom';
        $hidden_class = '';
        if ($lgxwp_image_name != 'custom') $hidden_class = '  hidden ';

        $lgxwp_bg_imgsrc = $this->settings_api->get_option('lgxowl_settings_bgimage', 'lgxowl_style');


        $settings_fields = array(

            'lgxowl_basic' => array(
                array(
                    'name'     => 'lgxowl_settings_cat',
                    'label'    => __('Default Categories(slug)', 'lgxcarousel-domain'),
                    'desc'     => __('Please input category slug with comma( , ). Example: category_one, category_two ', 'lgxcarousel-domain'),
                    'type'     => 'text',
                    'default'  => '',
                    'desc_tip' => true,
                ),

                array(
                    'name'             => 'lgxowl_settings_order',
                    'label'            => __('Item Order', 'lgxcarousel-domain'),
                    'desc'             => __('Direction to sort item.', 'lgxcarousel-domain'),
                    'type'             => 'select',
                    'default'          => 'DESC',
                    'options'          => array(
                        'ASC' => __( 'Ascending', 'lgxcarousel-domain' ),
                        'DESC'   => __( 'Descending', 'lgxcarousel-domain' ),
                    ),
                ),


                array(
                    'name'             => 'lgxowl_settings_orderby',
                    'label'            => __('Item Order By', 'lgxcarousel-domain'),
                    'desc'             => __('Sort retrieved item.', 'lgxcarousel-domain'),
                    'type'             => 'select',
                    'default'          => 'date',
                    'options'          => array(
                        'date'      => __( 'Date', 'lgxcarousel-domain' ),
                        'ID'        => __( 'ID', 'lgxcarousel-domain' ),
                        'title'     => __( 'Title', 'lgxcarousel-domain' ),
                        'modified'  => __( 'Modified', 'lgxcarousel-domain' ),
                        'rand'      => __( 'Random', 'lgxcarousel-domain' ),
                    ),
                ),

                array(
                    'name'     => 'lgxowl_settings_limit',
                    'label'    => __('Item Limit', 'lgxcarousel-domain'),
                    'desc'     => __('Please input total number of item, that want to display front end. -1 means all published post.', 'lgxcarousel-domain'),
                    'type'     => 'number',
                    'default'  => '-1',
                    'desc_tip' => true,
                ),


            ),// Single

            //Responsive Settings
            'lgxowl_responsive' => array(

                // View Port Large Desktop
                array(
                    'name'     => 'lgxowl_settings_largedesktop_item',
                    'label'    => __('Item in Large Desktops', 'lgxcarousel-domain'),
                    'desc'     => __('Item in Large Desktops Devices (1200px and Up)', 'lgxcarousel-domain'),
                    'type'     => 'number',
                    'default'  => '1',
                    'desc_tip' => true,
                ),

                array(
                    'name'     => 'lgxowl_settings_largedesktop_nav',
                    'label'         => __('Show Nav(Large Desktops)', 'lgxcarousel-domain'),
                    'desc'          => __( 'Show Nav in Large Desktops', 'lgxcarousel-domain' ),
                    'type'          => 'radio',
                    'tooltip'       => __('Enabled by default','lgxcarousel-domain'),
                    'required'      => false,
                    'default'       => 'yes',
                    'options' => array(
                        'yes' => __('yes','lgxcarousel-domain'),
                        'no' => __('No','lgxcarousel-domain')
                    )
                ),

                // View Port Desktop
                array(
                    'name'     => 'lgxowl_settings_desktop_item',
                    'label'    => __('Item in Desktops', 'lgxcarousel-domain'),
                    'desc'     => __('Item in Desktops Devices (Desktops 992px).', 'lgxcarousel-domain'),
                    'type'     => 'number',
                    'default'  => '1',
                    'desc_tip' => true,
                ),

                array(
                    'name'     => 'lgxowl_settings_desktop_nav',
                    'label'         => __('Show Nav(Desktops)', 'lgxcarousel-domain'),
                    'desc'          => __( 'Show Nav in Desktops', 'lgxcarousel-domain' ),
                    'type'          => 'radio',
                    'tooltip'       => __('Enabled by default','lgxcarousel-domain'),
                    'required'      => false,
                    'default'       => 'yes',
                    'options' => array(
                        'yes' => __('yes','lgxcarousel-domain'),
                        'no' => __('No','lgxcarousel-domain')
                    )
                ),

                // View Port Tab
                array(
                    'name'     => 'lgxowl_settings_tablet_item',
                    'label'    => __('Item in Tablets', 'lgxcarousel-domain'),
                    'desc'     => __('Item in Tablets Devices (768px and Up)', 'lgxcarousel-domain'),
                    'type'     => 'number',
                    'default'  => '1',
                    'desc_tip' => true,
                ),

                array(
                    'name'     => 'lgxowl_settings_tablet_nav',
                    'label'         => __('Enabled largedesktop Nav', 'lgxcarousel-domain'),
                    'desc'          => __( 'Show Nav(Tablet)', 'lgxcarousel-domain' ),
                    'type'          => 'radio',
                    'tooltip'       => __('Show Nav in Large Tablet','lgxcarousel-domain'),
                    'required'      => false,
                    'default'       => 'yes',
                    'options' => array(
                        'yes' => __('yes','lgxcarousel-domain'),
                        'no' => __('No','lgxcarousel-domain')
                    )
                ),


                // View Port Mobile
                array(
                    'name'     => 'lgxowl_settings_mobile_item',
                    'label'    => __('Item in Mobile', 'lgxcarousel-domain'),
                    'desc'     => __('Item in Mobile Devices (Less than 768px)', 'lgxcarousel-domain'),
                    'type'     => 'number',
                    'default'  => '1',
                    'desc_tip' => true,
                ),

                array(
                    'name'     => 'lgxowl_settings_mobile_nav',
                    'label'         => __('Show Nav(Mobile)', 'lgxcarousel-domain'),
                    'desc'          => __( 'Show next/prev buttons.', 'lgxcarousel-domain' ),
                    'type'          => 'radio',
                    'tooltip'       => __('Show Nav in Mobile"','lgxcarousel-domain'),
                    'required'      => false,
                    'default'       => 'yes',
                    'options' => array(
                        'yes' => __('yes','lgxcarousel-domain'),
                        'no' => __('No','lgxcarousel-domain')
                    )
                ),


            ),

            // Style Settings
            'lgxowl_style' => array(

                array(
                    'name'    => 'lgxowl_settings_color',
                    'label'   => __('Text Color', 'lgxcarousel-domain'),
                    'desc'    => __('Please select Carousel Text color.', 'lgxcarousel-domain'),
                    'type'    => 'color',
                    'default' => '#333333'
                ),

                array(
                    'name'    => 'lgxowl_settings_bgcolor',
                    'label'   => __('Background  Color', 'lgxcarousel-domain'),
                    'desc'    => __('Please select Carousel Background color.', 'lgxcarousel-domain'),
                    'type'    => 'color',
                    'default' => '#f1f1f1'
                ),

                array(
                    'name'     => 'lgxowl_settings_bgopacity',
                    'label'    => __('Background Color Opacity', 'lgxcarousel-domain'),
                    'desc'     => __('Please Input a value within 0 to 1, e.g. 0 , .25, .5, .8, 1 ', 'lgxcarousel-domain'),
                    'type'     => 'text',
                    'default'  => 0.85,
                    'desc_tip' => true,
                ),

                array(
                    'name'        => 'lgxowl_settings_bgimage',
                    'label'   => __('Background  Image Url', 'lgxcarousel-domain'),
                    'type'        => 'textimg',
                    'size'        => 'lgxowl_settings_bgimage_url',
                    'default'     => '',
                    'desc'        => '<span class="lgxwp_bg_img ' . $hidden_class . '"><img class="' . (($lgxwp_bg_imgsrc == '') ? 'hidden' : '') . '" style="width:30px; height:20px; padding-left:10px;" id="lgxwp_bg_previousimg" src="' . $lgxwp_bg_imgsrc . '" alt="img"/></span>',
                    'desc_tip'    => true,
                    'placeholder' => __('Upload Background Img', 'lgxcarousel-domain')
                ),

                array(
                    'name'     => 'lgxowl_settings_itembg',
                    'label'   => __('Enabled Single Background', 'lgxcarousel-domain'),
                    'desc'    => __('Set featured Image as Item Background.', 'lgxcarousel-domain'),
                    'type'          => 'radio',
                    'tooltip'       => __('Disabled by default','lgxcarousel-domain'),
                    'required'      => false,
                    'default'       => 'no',
                    'options' => array(
                        'yes' => __('Yes','lgxcarousel-domain'),
                        'no' => __('No','lgxcarousel-domain')
                    )
                ),

                array(
                    'name'     => 'lgxowl_settings_animationcss',
                    'label'         => __('Enabled Animate CSS', 'lgxcarousel-domain'),
                    'desc'          => __( 'This required for CSS3 Animation.', 'lgxcarousel-domain' ),
                    'type'          => 'radio',
                    'tooltip'       => __('Disabled by default','lgxcarousel-domain'),
                    'required'      => false,
                    'default'       => 'no',
                    'options' => array(
                        'yes' => __('Yes','lgxcarousel-domain'),
                        'no' => __('No','lgxcarousel-domain')
                    )
                ),

            ),// Single

            // OWL CONFIG
            'lgxowl_config'   => array(

                array(
                    'name'     => 'lgxowl_settings_margin',
                    'label'    => __('Margin', 'lgxcarousel-domain'),
                    'desc'     => __('margin-right(px) on item.', 'lgxcarousel-domain'),
                    'type'     => 'number',
                    'default'  => '10',
                    'desc_tip' => true,
                ),

                array(
                    'name'     => 'lgxowl_settings_loop',
                    'label'         => __('Enabled Loop', 'lgxcarousel-domain'),
                    'desc'          => __( 'Infinity loop. Duplicate last and first items to get loop illusion.', 'lgxcarousel-domain' ),
                    'type'          => 'radio',
                    'tooltip'       => __('Enabled by default','lgxcarousel-domain'),
                    'required'      => false,
                    'default'       => 'yes',
                    'options' => array(
                        'yes' => __('Yes','lgxcarousel-domain'),
                        'no' => __('No','lgxcarousel-domain')
                    )
                ),


                array(
                    'name'     => 'lgxowl_settings_nav',
                    'label'         => __('Enabled Nav', 'lgxcarousel-domain'),
                    'desc'          => __( 'Show next/prev buttons.', 'lgxcarousel-domain' ),
                    'type'          => 'radio',
                    'tooltip'       => __('Enabled by default','lgxcarousel-domain'),
                    'required'      => false,
                    'default'       => 'yes',
                    'options' => array(
                        'yes' => __('yes','lgxcarousel-domain'),
                        'no' => __('No','lgxcarousel-domain')
                    )
                ),

                array(
                    'name'     => 'lgxowl_settings_dots',
                    'label'         => __('Enabled Dots', 'lgxcarousel-domain'),
                    'desc'          => __( 'Show dots navigation.', 'lgxcarousel-domain' ),
                    'type'          => 'radio',
                    'tooltip'       => __('Enabled by default','lgxcarousel-domain'),
                    'required'      => false,
                    'default'       => 'yes',
                    'options' => array(
                        'yes' => __('yes','lgxcarousel-domain'),
                        'no' => __('No','lgxcarousel-domain')
                    )
                ),

                array(
                    'name'     => 'lgxowl_settings_autoplay',
                    'label'         => __('Enabled Autoplay', 'lgxcarousel-domain'),
                    'desc'          => __( 'Carousel item autoplay by default.', 'lgxcarousel-domain' ),
                    'type'          => 'radio',
                    'tooltip'       => __('Enabled by default','lgxcarousel-domain'),
                    'required'      => false,
                    'default'       => 'yes',
                    'options' => array(
                        'yes' => __('Yes','lgxcarousel-domain'),
                        'no' => __('No','lgxcarousel-domain')
                    )
                ),

                array(
                    'name'     => 'lgxowl_settings_autoplay_timeout',
                    'label'    => __('Autoplay Timeout', 'lgxcarousel-domain'),
                    'desc'     => __('autoplayTimeout', 'lgxcarousel-domain'),
                    'type'     => 'number',
                    'default'  => '5000',
                    'desc_tip' => true,
                ),

                array(
                    'name'     => 'lgxowl_settings_hover_pause',
                    'label'         => __('Autoplay Hover Pause', 'lgxcarousel-domain'),
                    'desc'          => __('Pause on mouse hover.', 'lgxcarousel-domain' ),
                    'type'          => 'radio',
                    'tooltip'       => __('Disabled by default','lgxcarousel-domain'),
                    'required'      => false,
                    'default'       => 'no',
                    'options' => array(
                        'yes' => __('Yes','lgxcarousel-domain'),
                        'no' => __('No','lgxcarousel-domain')
                    )
                ),


                array(
                    'name'     => 'lgxowl_settings_lazyload',
                    'label'         => __('Enabled Lazyload', 'lgxcarousel-domain'),
                    'desc'          => __('Lazy load images. data-src and data-src-retina for highres. Also load images into background inline style if element is not <img>', 'lgxcarousel-domain' ),
                    'type'          => 'radio',
                    'tooltip'       => __('Disabled by default','lgxcarousel-domain'),
                    'required'      => false,
                    'default'       => 'no',
                    'options' => array(
                        'yes' => __('Yes','lgxcarousel-domain'),
                        'no' => __('No','lgxcarousel-domain')
                    )
                ),
                array(
                    'name'     => 'lgxowl_settings_add_active',
                    'label'         => __('Enabled Active Class', 'lgxcarousel-domain'),
                    'desc'          => __( 'Add Active class in current item.', 'lgxcarousel-domain' ),
                    'type'          => 'radio',
                    'tooltip'       => __('Enabled by default','lgxcarousel-domain'),
                    'required'      => false,
                    'default'       => 'yes',
                    'options' => array(
                        'yes' => __('Yes','lgxcarousel-domain'),
                        'no' => __('No','lgxcarousel-domain')
                    )
                ),

                array(
                    'name'     => 'lgxowl_settings_video',
                    'label'         => __('Enabled Video', 'lgxcarousel-domain'),
                    'desc'          => __( 'Enable fetching YouTube/Vimeo videos.', 'lgxcarousel-domain' ),
                    'type'          => 'radio',
                    'tooltip'       => __('Disabled by default','lgxcarousel-domain'),
                    'required'      => false,
                    'default'       => 'no',
                    'options' => array(
                        'yes' => __('Yes','lgxcarousel-domain'),
                        'no' => __('No','lgxcarousel-domain')
                    )
                ),

                array(
                    'name'     => 'lgxowl_settings_animateout',
                    'label'    => __('AnimateOut Class', 'lgxcarousel-domain'),
                    'desc'     => __('Please input CSS3 animate class ( Please Enabled Animate CSS form Style tab). eg.slideOutDown', 'lgxcarousel-domain'),
                    'type'     => 'text',
                    'default'  => '',
                    'desc_tip' => true,
                ),

                array(
                    'name'     => 'lgxowl_settings_animatein',
                    'label'    => __('AnimateIn Class', 'lgxcarousel-domain'),
                    'desc'     => __('Please input CSS3 animate class( Please Enabled Animate CSS form Style tab). eg: flipInX', 'lgxcarousel-domain'),
                    'type'     => 'text',
                    'default'  => '',
                    'desc_tip' => true,
                ),

                array(
                    'name'     => 'lgxowl_settings_autoplay_smartspeed',
                    'label'    => __('Smart Speed', 'lgxcarousel-domain'),
                    'desc'     => __('Set Smart Speed', 'lgxcarousel-domain'),
                    'type'     => 'number',
                    'default'  => '5000',
                    'desc_tip' => true,
                ),

                array(
                    'name'     => 'lgxowl_settings_autoplay_slidespeed',
                    'label'    => __('Slide Speed', 'lgxcarousel-domain'),
                    'desc'     => __('Set Slide Speed', 'lgxcarousel-domain'),
                    'type'     => 'number',
                    'default'  => '200',
                    'desc_tip' => true,
                ),


                array(
                    'name'     => 'lgxowl_settings_autoplay_paginationspeed',
                    'label'    => __('Pagination Speed', 'lgxcarousel-domain'),
                    'desc'     => __('Set Pagination Speed', 'lgxcarousel-domain'),
                    'type'     => 'number',
                    'default'  => '800',
                    'desc_tip' => true,
                ),

                array(
                    'name'     => 'lgxowl_settings_autoplay_rewindspeed',
                    'label'    => __('Rewind Speed', 'lgxcarousel-domain'),
                    'desc'     => __('Set Rewind Speed', 'lgxcarousel-domain'),
                    'type'     => 'number',
                    'default'  => '1000',
                    'desc_tip' => true,
                ),

                array(
                    'name'     => 'lgxowl_settings_videoheight',
                    'label'    => __('Set video height', 'lgxcarousel-domain'),
                    'desc'     => __('Please Input a number to Set video height', 'lgxcarousel-domain'),
                    'type'     => 'number',
                    'default'  => 350,
                    'desc_tip' => true,
                ),

                array(
                    'name'     => 'lgxowl_settings_videowidth',
                    'label'    => __('Set video Width', 'lgxcarousel-domain'),
                    'desc'     => __('Please Input a number to Set video Width', 'lgxcarousel-domain'),
                    'type'     => 'number',
                    'default'  => '',
                    'desc_tip' => true,
                ),


            ),//single


        );//Filed

        $settings_fields = apply_filters('lgx_owl_settings_fields', $settings_fields);

        return $settings_fields;
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
         * defined in Lgx_Owl_Carousel_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Lgx_Owl_Carousel_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'assets/css/lgx-owl-carousel-admin.css', array(), $this->version, 'all' );

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
         * defined in Lgx_Owl_Carousel_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Lgx_Owl_Carousel_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'assets/js/lgx-owl-carousel-admin.js', array( 'jquery' ), $this->version, false );


        $translation_array = array(
            'add_leftimg_title'  => __('Add Previous Arrow Image', 'wpnextpreviouslinkaddon'),
            'add_rightimg_title' => __('Add Next Arrow Image', 'wpnextpreviouslinkaddon'),
        );
        wp_localize_script($this->plugin_name, 'wpnpaddon', $translation_array);
    }



    public function lgx_owl_register_tinymce_plugin($plugin_array) {
        $plugin_array['lgx_owl_button'] = plugin_dir_url( __FILE__ ) . 'assets/js/lgx-owl-carousel-tinymce.js';
        return $plugin_array;
    }

    public function lgx_owl_add_tinymce_button($buttons) {
        $buttons[] = "lgx_owl_button";
        return $buttons;
    }

}
