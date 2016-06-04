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
add_action('admin_init', 'pinchapoo_initialize_theme_options');
function pinchapoo_initialize_theme_options() {
 
    // First, we register a section. This is necessary since all future options must belong to one. 
    add_settings_section(
        'pinchapoo_settings_section',         // ID used to identify this section and with which to register options
        'Pinchapoo Options',                  // Title to be displayed on the administration page
        'pinchapoo_general_options_callback', // Callback used to render the description of the section
        'general'                           // Page on which to add this section of options
    );
     
    add_settings_field( 
        'number_of_goods',                      // ID used to identify the field throughout the theme
        'Number of goods redistributed',                           // The label to the left of the option interface element
        'goods_counter_callback',   // The name of the function responsible for rendering the option interface
        'general',                          // The page on which this option will be displayed
        'pinchapoo_settings_section',         // The name of the section to which this field belongs
        array(                              // The array of arguments to pass to the callback. In this case, just a description.
            'Set this value to the number of goods distributed to display on the page.'
        )
    );
     
    add_settings_field( 
        'number_of_orgs',                     
        'Number of organisations supported',              
        'orgs_counter_callback',  
        'general',                          
        'pinchapoo_settings_section',         
        array(                              
          'Set this value to the number of organisations supported to display on the page.'
        )
    );
     
    // Finally, we register the fields with WordPress
    register_setting(
        'general',
        'number_of_goods'
    );
     
    register_setting(
        'general',
        'number_of_orgs'
    );
     
     
} // end sandbox_initialize_theme_options
 
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
     
    // Note the ID and the name attribute of the element match that of the ID in the call to add_settings_field
    $html = '<input type="text" id="number_of_orgs" name="number_of_orgs" value="' . get_option('number_of_orgs') . '/>'; 
     
    // Here, we will take the first argument of the array and add it to a label next to the checkbox
    $html .= '<label for="number_of_orgs"> '  . $args[0] . '</label>'; 
     
    echo $html;
     
} 
 
function orgs_counter_callback($args) {
     
    // Note the ID and the name attribute of the element match that of the ID in the call to add_settings_field
    $html = '<input type="text" id="number_of_goods" name="number_of_goods" value="' . get_option('number_of_goods') . '/>'; 
     
    // Here, we will take the first argument of the array and add it to a label next to the checkbox
    $html .= '<label for="number_of_goods"> '  . $args[0] . '</label>'; 
     
    echo $html;
     
} 
 
?>