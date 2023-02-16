<?php
/**
 * Garden Lite Theme Customizer
 *
 * @package Garden Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function garden_lite_customize_register( $wp_customize ) {
	function garden_lite_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}

	$wp_customize->get_setting( 'blogname' )->garden_lite         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->garden_lite  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
	    'selector' => '.site-name-desc a',
	    'render_callback' => 'garden-lite_customize_partial_blogname',
	) );

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
	    'selector' => '.site-name-desc p',
	    'render_callback' => 'garden-lite_customize_partial_blogdescription',
	) );

	/*========================
	==	Theme Colors Start
	========================*/

	$wp_customize->add_setting('color_scheme', array(
		'default' => '#3db64a',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => __('Color Scheme','garden-lite'),
			'description'	=> __('Select color from here.','garden-lite'),
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);

	$wp_customize->add_setting('gardentpheadbg-color', array(
		'default' => '#102e19',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'gardentpheadbg-color',array(
			'description'	=> __('Select background color for Top header / Header Information.','garden-lite'),
			'section' => 'colors',
			'settings' => 'gardentpheadbg-color'
		))
	);

	$wp_customize->add_setting('gardenheaderbg-color', array(
		'default' => '#ffffff',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'gardenheaderbg-color',array(
			'description'	=> __('Select background color for header.','garden-lite'),
			'section' => 'colors',
			'settings' => 'gardenheaderbg-color'
		))
	);

	$wp_customize->add_setting('gardenfooter-color', array(
		'default' => '#3db64a',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'gardenfooter-color',array(
			'description'	=> __('Select background color for footer.','garden-lite'),
			'section' => 'colors',
			'settings' => 'gardenfooter-color'
		))
	);

	/*========================
	==	Theme Colors End
	========================*/

	/*========================
	==	Top Header Start
	========================*/
	$wp_customize->add_section(
        'garder_head_info',
        array(
            'title' => __('Header Information', 'garden-lite'),
            'priority' => null,
			'description'	=> __('Add header information here.','garden-lite'),	
        )
    );

	$wp_customize->add_setting( 'garden-call-txt', array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('garden-call-txt',array(
		'type'	=> 'text',
		'label'	=> __('Add text here.','garden-lite'),
		'section'	=> 'garder_head_info'
	));

	$wp_customize->add_setting( 'garden-phn-num', array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('garden-phn-num',array(
		'type'	=> 'text',
		'label'	=> __('Add Phone Number here.','garden-lite'),
		'section'	=> 'garder_head_info'
	));

	$wp_customize->add_setting( 'garden-wrk-txt', array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('garden-wrk-txt',array(
		'type'	=> 'text',
		'label'	=> __('Add text here.','garden-lite'),
		'section'	=> 'garder_head_info'
	));

	$wp_customize->add_setting( 'garden-wrk-hrs', array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('garden-wrk-hrs',array(
		'type'	=> 'text',
		'label'	=> __('Add Working Hours here.','garden-lite'),
		'section'	=> 'garder_head_info'
	));

	$wp_customize->add_setting('facebook',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$wp_customize->add_control('facebook',array(
		'type'	=> 'url',
		'label'	=> __('Add facebook link here.','garden-lite'),
		'section'	=> 'garder_head_info'
	));

	$wp_customize->add_setting('twitter',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$wp_customize->add_control('twitter',array(
		'type'	=> 'url',
		'label'	=> __('Add twitter link here.','garden-lite'),
		'section'	=> 'garder_head_info'
	));

	$wp_customize->add_setting('instagram',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$wp_customize->add_control('instagram',array(
		'type'	=> 'url',
		'label'	=> __('Add instagram link here.','garden-lite'),
		'section'	=> 'garder_head_info'
	));

	$wp_customize->add_setting('linkedin',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$wp_customize->add_control('linkedin',array(
		'type'	=> 'url',
		'label'	=> __('Add linkedin link here.','garden-lite'),
		'section'	=> 'garder_head_info'
	));

	$wp_customize->add_setting('google',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$wp_customize->add_control('google',array(
		'type'	=> 'url',
		'label'	=> __('Add google plus link here.','garden-lite'),
		'section'	=> 'garder_head_info'
	));

	$wp_customize->add_setting('garden_tophide',array(
		'default' => true,
		'sanitize_callback' => 'garden_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'garden_tophide', array(
	   'settings' => 'garden_tophide',
	   'section'   => 'garder_head_info',
	   'label'     => __('Check this to hide Header Information.','garden-lite'),
	   'type'      => 'checkbox'
	));	
	/*========================
	==	Top Header End
	========================*/

	/*========================
	==	Slider Start
	========================*/
	$wp_customize->add_section(
        'garden_main_slider',
        array(
            'title' => __('Setting Up Slider', 'garden-lite'),
            'priority' => null,
			'description'	=> __('Recommended image size (1600x800). Slider will work only when you select the static front page.','garden-lite'),	
        )
    );

    $wp_customize->add_setting('slidersubttl',array(
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('slidersubttl',array(
			'type'	=> 'text',
			'label'	=> __('Add slider sub title here','garden-lite'),
			'section'	=> 'garden_main_slider'
	));
	
	$wp_customize->add_setting('slider-setting1',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('slider-setting1',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide one:','garden-lite'),
			'section'	=> 'garden_main_slider'
	));	
	
	$wp_customize->add_setting('slider-setting2',array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('slider-setting2',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide two:','garden-lite'),
			'section'	=> 'garden_main_slider'
	));	
	
	$wp_customize->add_setting('slider-setting3',array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('slider-setting3',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide three:','garden-lite'),
			'section'	=> 'garden_main_slider'
	));	
	
	$wp_customize->add_setting('slider_more_text',array(
		'default'	=> __('','garden-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('slider_more_text',array(
		'label'	=> __('Add slider link button text.','garden-lite'),
		'section'	=> 'garden_main_slider',
		'setting'	=> 'slider_more_text',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('hide_slider',array(
		'default' => true,
		'sanitize_callback' => 'garden_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	)); 

	$wp_customize->add_control( 'hide_slider', array(
	   'settings' => 'hide_slider',
	   'section'   => 'garden_main_slider',
	   'label'     => __('Check this to hide slider.','garden-lite'),
	   'type'      => 'checkbox'
    ));
	/*========================
	==	Slider End
	========================*/


	/*========================
	==	First Section Start
	========================*/

	$wp_customize->add_section(
        'garden_first_section',
        array(
            'title' => __('Setting Up First Section', 'garden-lite'),
            'priority' => null,
			'description'	=> __('Select page for setting up first section. This section will be displayed only when you select the static front page.','garden-lite'),	
        )
    );

    $wp_customize->add_setting('grdn_secfrs_subttl',array(
		'default'	=> __('','garden-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('grdn_secfrs_subttl',array(
		'label'	=> __('Add sub title here','garden-lite'),
		'section'	=> 'garden_first_section',
		'setting'	=> 'grdn_secfrs_subttl',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('grdn_secfrst',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('grdn_secfrst',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for this section','garden-lite'),
		'section'	=> 'garden_first_section'
	));

	$wp_customize->add_setting('grdn_secfrs_read',array(
		'default'	=> __('','garden-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('grdn_secfrs_read',array(
		'label'	=> __('Add read more button text.','garden-lite'),
		'section'	=> 'garden_first_section',
		'setting'	=> 'grdn_secfrs_read',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('grdn_hide_fsec',array(
		'default' => true,
		'sanitize_callback' => 'garden_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'grdn_hide_fsec', array(
	   'settings' => 'grdn_hide_fsec',
	   'section'   => 'garden_first_section',
	   'label'     => __('Check this to hide section.','garden-lite'),
	   'type'      => 'checkbox'
     ));

	/*========================
	==	First Section End
	========================*/

	/*========================
	==	Second Section Start
	========================*/

	$wp_customize->add_section(
        'garden_second_section',
        array(
            'title' => __('Setting Up Second Section', 'garden-lite'),
            'priority' => null,
			'description'	=> __('Select pages for setting up second section. This section will be displayed only when you select the static front page.','garden-lite'),	
        )
    );

    $wp_customize->add_setting('grdn_sectwo_title',array(
		'default'	=> __('','garden-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('grdn_sectwo_title',array(
		'label'	=> __('Add sub title here','garden-lite'),
		'section'	=> 'garden_second_section',
		'setting'	=> 'grdn_sectwo_title',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('grdn_sectwo1',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('grdn_sectwo1',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for 1st column','garden-lite'),
			'section'	=> 'garden_second_section'
	));

	$wp_customize->add_setting('grdn_sectwo2',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('grdn_sectwo2',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for 2nd column','garden-lite'),
			'section'	=> 'garden_second_section'
	));

	$wp_customize->add_setting('grdn_hide_tsec',array(
			'default' => true,
			'sanitize_callback' => 'garden_lite_sanitize_checkbox',
			'capability' => 'edit_theme_options',
	)); 

	$wp_customize->add_control( 'grdn_hide_tsec', array(
		   'settings' => 'grdn_hide_tsec',
    	   'section'   => 'garden_second_section',
    	   'label'     => __('Check this to hide section.','garden-lite'),
    	   'type'      => 'checkbox'
     ));

	/*========================
	==	Second Section End
	========================*/
}
add_action( 'customize_register', 'garden_lite_customize_register' );	

function garden_lite_css(){
		?>
        <style>
        		.header-info,
        		.header-info:before,
        		.caption-inner h4,
        		.caption-inner a.slide-button,
        		.header-info:after{
        			background-color:<?php echo esc_attr(get_theme_mod('gardentpheadbg-color','#102e19')); ?>;
        		}
        		.section_head,
        		.section_head::before,
        		.section_head::after{
        			border-color:<?php echo esc_attr(get_theme_mod('gardentpheadbg-color','#102e19')); ?>;
        		}
				a, 
				.tm_client strong,
				.postmeta a:hover,
				#sidebar ul li a:hover,
				.blog-post h3.entry-title,
				a.blog-more:hover,
				#commentform input#submit,
				input.search-submit,
				.blog-date .date,
				.cell-icon,
				.caption-inner h4,
				.caption-inner a.slide-button,
				.introduction h5,
				.sitenav ul li.current_page_item a,
				.sitenav ul li a:hover, 
				.sitenav ul li.current_page_item ul li a:hover,
				.site-name-desc p{
					color:<?php echo esc_attr(get_theme_mod('color_scheme','#3db64a')); ?>;
				}
				#header,
				.header-info,
				.header-info:before,
				.header-info:after{
					border-color: <?php echo esc_attr(get_theme_mod('color_scheme','#3db64a')); ?>;
				}
				h3.widget-title,
				.nav-links .current,
				.nav-links a:hover,
				p.form-submit input[type="submit"],
				.social a:hover,
				.sitenav ul li:before,
				a.intro-btn,
				.section_head::before,
				.section_head::after{
					background-color:<?php echo esc_attr(get_theme_mod('color_scheme','#3db64a')); ?>;
				}
				#header,
				.sitenav ul li a,
				.sitenav ul li.menu-item-has-children:hover > ul,
				.sitenav ul li.menu-item-has-children:focus > ul,
				.sitenav ul li.menu-item-has-children.focus > ul{
					background-color:<?php echo esc_attr(get_theme_mod('gardenheaderbg-color','#ffffff')); ?>;
				}
				.copyright-wrapper{
					background-color:<?php echo esc_attr(get_theme_mod('gardenfooter-color','#3db64a')); ?>;
				}				
		</style>
	<?php }
add_action('wp_head','garden_lite_css');

function garden_lite_customize_preview_js() {
	wp_enqueue_script( 'garden-lite-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'garden_lite_customize_preview_js' );