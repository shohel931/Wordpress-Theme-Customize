<?php

// logo upload
function mytheme_logo($wp_customize){
  $wp_customize->add_section('mytheme_logo_section', array(
    'title' =>__('Logo', 'mytheme'),
    'description' => 'If you interested to change your logo, you can change it from here.',
  ));

  $wp_customize->add_setting('mytheme_logo', array(
    'default' => get_template_directory_uri().'/img/logo.png',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mytheme_logo', array(
    'label' => 'Upload Logo',
    'section' => 'mytheme_logo_section',
    'settings' => 'mytheme_logo'
  )));



  //* Footer Section
  $wp_customize-> add_section('footer_section', array(
    'title' =>__('Copyright Link', 'mytheme'),
    'description' => 'If you interested to update your footer section, you can do ithere.'
  ));

  $wp_customize-> add_setting('copyright_section', array(
    'default' => 'Terms & Conditions',
  ));

  $wp_customize-> add_control('copyright_section', array(
    'label' => 'Footer Section',
    'description' => 'If you interested to update your footer section, you can do it here.',
    'setting' => 'copyright_section',
    'section' => 'footer_section', 
  ));


    //* Footer Section
    $wp_customize-> add_section('footer', array(
      'title' =>__('Copyright', 'mytheme'),
      'description' => 'If you interested to update your footer section, you can do ithere.'
    ));
  
    $wp_customize-> add_setting('copyright', array(
      'default' => 'All Rights Reserved @ plowv.com',
    ));
  
    $wp_customize-> add_control('copyright', array(
      'label' => 'Footer Section',
      'description' => 'If you interested to update your footer section, you can do it here.',
      'setting' => 'copyright',
      'section' => 'footer', 
    ));
}
add_action('customize_register', 'mytheme_logo');

