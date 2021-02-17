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
    'id'  => 'about_us'
  ) );

  CSF::createSection($prefix, [
    'id'  => 'about_top',
    'title' => "About Top",
    'parent' => 'about_us',
    'fields' => [
      [
        'id' => 'about_sub_heading',
        'type' => 'text',
        'title' => 'About Sub Heading'
      ],
      [
        'id' => 'about_heading',
        'type' => 'text',
        'title' => 'About Heading'
      ],
      [
        'id' => 'about_short_description',
        'type' => 'textarea',
        'title' => 'About Short Description'
      ],
    ]
  ]);

  CSF::createSection($prefix, [
    'id'  => 'about_bottom',
    'title' => "About Bottom",
    'parent' => 'about_us',
    'fields' => [
      [
        'id'  => 'about_title',
        'title' => 'About Title',
        'type'  => 'text'
      ],
      [
        'id'  => 'about_description',
        'title' => 'About Description',
        'type' => 'textarea'
      ],
      [
        'id'  => 'about_button_text',
        'title' => 'About Button Text',
        'type'  => 'text'
      ],
      [
        'id' => 'about_button_link',
        'title' => 'About Button Link',
        'type' => 'text'
      ],
      [
        'id' => 'our_plans',
        'title' => 'Our Plans',
        'type'  => 'group',
        'fields' => [
          [
            'id' => 'our_plan_icon',
            'type'  => 'icon',
            'title' => 'Our Plan Icon'
          ],
          [
            'id' => 'our_plan_name',
            'type' => 'text',
            'title' => 'Our Plan Name'
          ],
          [
            'id' => 'our_plan_shortdesc',
            'type' => 'textarea',
            'title' => 'Our Plan Short Description'
          ]
        ]
      ]
    ]
  ]);

  // faq & team section
  CSF::createSection($prefix, [
    'id'  => 'faq_&_skills',
    'title' => 'FAQ & Skills',    
  ]);

  CSF::createSection($prefix, [
    'id'  => 'faq',
    'title' => 'FAQ',
    'parent'    => 'faq_&_skills',
    'fields' => [
      [
        'id' => 'faq_group',
        'title' => "Add Faq's",
        'type' => 'group',
        'fields' => [
          [
            'id' => 'faq_title',
            'title' => 'Faq Title',
            'type' => 'text'
          ],
          [
            'id' => 'faq_desc',
            'title' => 'Faq Description',
            'type' => 'textarea'
          ]
        ]
      ]
    ]
  ]);


  CSF::createSection($prefix, [
    'id'  => 'skills',
    'title' => 'Skills',
    'parent'    => 'faq_&_skills',
    'fields' => [
      
    ]
  ]);











}
