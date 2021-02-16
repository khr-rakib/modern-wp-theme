<?php

if( class_exists( 'CSF' ) ) {
  // Set a unique slug-like ID
  $prefix = 'modern_framework';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'Modern Options',
    'menu_slug'  => 'modern-options',
    'menu_position' => 50,
    'framework_title' => 'Modern Framework'
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Header',
    'fields' => array(
      //
      // A text field
      array(
        'id'    => 'header_logo',
        'type'  => 'media',
        'title' => 'Header Logo',

      ),
      array(
        'id'    => 'header_email',
        'type'  => 'text',
        'title' => 'Header Left Email',
      ),
      array(
        'id'    => 'header_phone',
        'type'  => 'text',
        'title' => 'Header Left Phone',
      ),
    array(
        'id' => 'header_icons',
        'title'=> __('Header Icons', 'modern'),
        'type' => 'group',
        'button_title' => __('Add New Social Box', 'modern'),
        'fields' => array(
            array(
                'id' => 'social_title',
                'type' => 'text',
                'title' => 'Social Title'
            ),
            array(
                'id' => 'social_link',
                'type' => 'text',
                'title' => __('Social Link', 'modern')
            ),
            array(
                'id' => 'social_icon',
                'type' => 'icon',
                'title' => __('Social Icon', 'modern')
            )
        )
    )
)


    )
  );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'About Us',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

}
