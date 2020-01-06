<?php

/**
 * 
 * Make Custom Color section
 */

function customize_theme_colors( $wp_customize ){

    $wp_customize -> add_setting( 'color_setting',
        array(
            'default'   => '#f0f0ed',
            'transport' => 'refresh'
        )
     );
    $wp_customize -> add_setting( 'color_setting2',
        array(
            'default'   => '#007bff',
            'transport' => 'refresh'
        )
     );
    $wp_customize -> add_setting( 'color_setting_hover',
        array(
            'default'   => '#0056b3',
            'transport' => 'refresh'
        )
     );

     $wp_customize -> add_section(
        'color_section',
        array(
            'title' => 'Theme Color',
        )
     );

     $wp_customize -> add_control(
         new WP_Customize_Color_Control(
            $wp_customize, 'color_setting',
            array(
                'id'    => 'bg_color',
                'label' => 'Background Color',
                'section'  => 'color_section',
            )
         )
     );
     $wp_customize -> add_control(
         new WP_Customize_Color_Control(
            $wp_customize, 'color_setting2',
            array(
                'id'    => 'bg_color2',
                'label' => 'Text Color',
                'section'  => 'color_section',
            )
         )
     );
     $wp_customize -> add_control(
         new WP_Customize_Color_Control(
            $wp_customize, 'color_setting_hover',
            array(
                'id'    => 'bg_color2',
                'label' => 'Text Hover Color',
                'section'  => 'color_section',
            )
         )
     );

}
add_action( 'customize_register', 'customize_theme_colors' );




/**
 * Customizer working
 * 
 */
function color_action_function(){?>

    <style>
        body{
            
            background-color: <?php echo get_theme_mod( 'color_setting' ); ?> !important;
        }
 h6>a:hover {
    color:  <?php echo get_theme_mod( 'color_setting_hover' ); ?> !important;
}

h6>a {
    color:  <?php echo get_theme_mod( 'color_setting2' ); ?> !important;
}








    </style>

<?php }
add_action( 'wp_head', 'color_action_function' );







