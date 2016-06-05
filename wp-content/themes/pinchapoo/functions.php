<?php
 
/* ------------------------------------------------------------------------ *
 * Setting Registration
 * ------------------------------------------------------------------------ */
 
/**
 * Initializes the theme options page by registering the Sections,
 * Fields, and Settings.
 *
 * This function is registered with the 'admin_init' hook.
 */
add_action( 'admin_menu', 'create_pinchapoo_settings_page');
function create_pinchapoo_settings_page() {
	
	  add_menu_page(
				'Pinchapoo Settings',
				'Pinchapoo',
				'manage_options',
				'pinchapoo_settings',
				'pinchapoo_settings_page_content',
				'dashicons-admin-plugins',
				 100
	  );
}

add_action('admin_init', 'pinchapoo_initialize_theme_options');
function pinchapoo_initialize_theme_options() {
	 
    // First, we register a section. This is necessary since all future options must belong to one. 
    add_settings_section(
        'pinchapoo_settings_section',         // ID used to identify this section and with which to register options
        'Pinchapoo Options',                  // Title to be displayed on the administration page
        'pinchapoo_general_options_callback', // Callback used to render the description of the section
        'pinchapoo_settings'                           // Page on which to add this section of options
    );
     
    add_settings_field( 
        'number_of_goods',                      // ID used to identify the field throughout the theme
        'Number of goods redistributed',                           // The label to the left of the option interface element
        'goods_counter_callback',   // The name of the function responsible for rendering the option interface
        'pinchapoo_settings',                          // The page on which this option will be displayed
        'pinchapoo_settings_section',         // The name of the section to which this field belongs
        array(                              // The array of arguments to pass to the callback. In this case, just a description.
            'Set this value to the number of goods distributed to display on the page.'
        )
    );
     
    add_settings_field( 
        'number_of_goods_desc',                      // ID used to identify the field throughout the theme
        'Number of goods redistributed description',                           // The label to the left of the option interface element
        'goods_counter_desc_callback',   // The name of the function responsible for rendering the option interface
        'pinchapoo_settings',                          // The page on which this option will be displayed
        'pinchapoo_settings_section',         // The name of the section to which this field belongs
        array(                              // The array of arguments to pass to the callback. In this case, just a description.
            'Set this value to be the suffix to the number of goods (ie: x goods redistributed).'
        )
    );
     
    add_settings_field( 
        'number_of_orgs',                     
        'Number of organisations supported',              
        'orgs_counter_callback',  
        'pinchapoo_settings',                          
        'pinchapoo_settings_section',         
        array(                              
          'Set this value to the number of organisations supported to display on the page.'
        )
    );
     
    add_settings_field( 
        'number_of_orgs_desc',                      // ID used to identify the field throughout the theme
        'Number of orgs supported description',                           // The label to the left of the option interface element
        'orgs_counter_desc_callback',   // The name of the function responsible for rendering the option interface
        'pinchapoo_settings',                          // The page on which this option will be displayed
        'pinchapoo_settings_section',         // The name of the section to which this field belongs
        array(                              // The array of arguments to pass to the callback. In this case, just a description.
            'Set this value to be the suffix to the number of organisations (ie: x organisations supported).'
        )
    );
     
    // Finally, we register the fields with WordPress
    unregister_setting(
        'general',
        'number_of_goods'
    );
     
    unregister_setting(
        'general',
        'number_of_orgs'
    );
    unregister_setting(
        'general',
        'number_of_goods_desc'
    );
    unregister_setting(
        'general',
        'number_of_orgs_desc'
    );
		register_setting(
        'pinchapoo_settings',
        'number_of_goods'
    );
     
    register_setting(
        'pinchapoo_settings',
        'number_of_orgs'
    );
    register_setting(
        'pinchapoo_settings',
        'number_of_goods_desc'
    );
    register_setting(
        'pinchapoo_settings',
        'number_of_orgs_desc'
    );
     
     
} // end sandbox_initialize_theme_options

function pinchapoo_settings_page_content() {
	echo '<div class="wrap">
		<h2>Pinchapoo</h2>
		<form method="post" action="options.php">
            ' . settings_fields( 'pinchapoo_settings' ) . '
            ' . do_settings_sections( 'pinchapoo_settings' ) .'
            ' . submit_button() . '
								
		</form>
	</div>';
}
 
/* ------------------------------------------------------------------------ *
 * Section Callbacks
 * ------------------------------------------------------------------------ */
 
function pinchapoo_general_options_callback() {
    echo '<p>Fill in configurable options for the Pinchapoo site</p>';
} // end sandbox_general_options_callback
 
/* ------------------------------------------------------------------------ *
 * Field Callbacks
 * ------------------------------------------------------------------------ */
 
function goods_counter_callback($args) {
 		echo '<input name="number_of_goods" id="number_of_goods" type="text" value="' . get_option( 'number_of_goods' ) . '" />';
     
}  

function goods_counter_desc_callback($args) {
 		echo '<input name="number_of_goods_desc" id="number_of_goods_desc" type="text" value="' . get_option( 'number_of_goods_desc' ) . '" />';
     
} 
 
function orgs_counter_callback($args) {     
	echo '<input name="number_of_orgs" id="number_of_orgs" type="text" value="' . get_option( 'number_of_orgs' ) . '" />';

} 

function orgs_counter_desc_callback($args) {
 		echo '<input name="number_of_orgs_desc" id="number_of_orgs_desc" type="text" value="' . get_option( 'number_of_orgs_desc' ) . '" />';
     
} 
 
?>