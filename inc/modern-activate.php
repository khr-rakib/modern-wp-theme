<?php
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );

function my_theme_register_required_plugins() {	
	$plugins = array(
        array(
            'name' => 'Advanced Custom Fields',
            'slug' => 'advanced-custom-fields',
            'required' => true
        ),
        array(
            'name'      => 'Codestar Framework',
            'slug'      => 'codestart-framework',
            'source'    => 'https://github.com/Codestar/codestar-framework/archive/master.zip',
            'required'  => true
        ),
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => true
        ),
        array(
            'name'      => 'One Click Demo Import',
            'slug'      => 'one-click-demo-import',
            'required'  => true
        )
	);

	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.		
	);
	tgmpa( $plugins, $config );
}