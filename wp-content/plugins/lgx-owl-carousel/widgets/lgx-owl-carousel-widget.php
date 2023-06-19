<?php

/**
 * Lgx_Owl_Widget
 *
 * @link       http://logichunt.com
 * @since      1.0.0
 *
 * @package    Lgx_Owl_Carousel
 * @subpackage Lgx_Owl_Carousel/widget
 *
 * @author     LogicHunt <info.logichunt@gmail.com>
 */


class Lgx_Owl_Widget extends WP_Widget {


	public function __construct() {
		parent::__construct('Lgx_Owl_Widget', 'Owl Carousel Slider', array('description' => __('A LGX Owl Carousel Widget', 'lgxcarousel-domain')));
	}

	public function form($instance) {

		// Default Value
		$title      = isset($instance['title']) ? $instance['title'] : __('LGX Carousel Widget', 'lgxcarousel-domain');
		$category   = isset($instance['category']) ? $instance['category'] : '';
		$color      = isset($instance['color']) ? $instance['color'] : '#333333';
		$item       = isset($instance['item']) ? $instance['item'] : 1;
		$bgcolor    = isset($instance['bgcolor']) ? $instance['bgcolor'] : '#f1f1f1';
		$nav    = isset($instance['nav']) ? $instance['nav'] : 'false';


		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'lgxcarousel-domain'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Carousel Categories:(slug)', 'lgxcarousel-domain'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" type="text" value="<?php echo esc_attr($category); ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('color'); ?>"><?php _e('Color:', 'lgxcarousel-domain'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('color'); ?>" name="<?php echo $this->get_field_name('color'); ?>" type="color" value="<?php echo $color ;?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('bgcolor'); ?>"><?php _e('Background:', 'lgxcarousel-domain'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('bgcolor'); ?>" name="<?php echo $this->get_field_name('bgcolor'); ?>" type="color" value="<?php echo $bgcolor ;?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('nav'); ?>"><?php _e('Navigation:', 'lgxcarousel-domain'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('nav'); ?>" name="<?php echo $this->get_field_name('nav'); ?>" type="text" value="<?php echo $nav;?>" />
		</p>
	<?php
	}

	public function update($new_instance, $old_instance) {

		// Set Instance
		$instance               = array();
		$instance['title']      = strip_tags($new_instance['title']);
		$instance['category']   = strip_tags($new_instance['category']);
		$instance['color']      = strip_tags($new_instance['color']);
		$instance['bgcolor']    = strip_tags($new_instance['bgcolor']);
		$instance['nav']        = strip_tags($new_instance['nav']);

		return $instance;
	}

	public function widget($args, $instance) {
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);

		// Widget Output
		echo $before_widget;

		echo (!empty($title) ? $before_title . $title . $after_title : '');
		echo  do_shortcode('[lgx-carousel cat="'.$instance['category'].'" color="'.$instance['color'].'" bgcolor="'.$instance['bgcolor'].' nav="'.$instance['nav'].'"]');

		echo $after_widget;
	}
}