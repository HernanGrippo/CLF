(function() {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
     *
     *
	 */

    jQuery(document).ready(function($) {

        tinymce.create('tinymce.plugins.lgx_owl_carousel', {
            init: function(ed, url) {
                ed.addCommand('lgx_owl_add_shortcode', function() {
                    var content = '[lgx-carousel]';
                    tinymce.execCommand('mceInsertContent', false, content);
                });
                ed.addButton('lgx_owl_button', {title: 'Insert Carousel Shortcode', cmd: 'lgx_owl_add_shortcode', image: url + '/../img/owl-logo.png'});
            }
        });

        tinymce.PluginManager.add('lgx_owl_button', tinymce.plugins.lgx_owl_carousel);

    });

})();
