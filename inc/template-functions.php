<?php 

// Keen Header
function keen_header(){
    $header_deafult_style = get_theme_mod( 'header_default_setting', 'header-style-1' );
    // $header_option = function_exists('get_field') ? get_field('header_style') : null;

    // if($header_option == 'header-style-1'){
    //     get_template_part( 'template-parts/header/header-1' );
    // }
    // elseif($header_option == 'header-style-2'){
    //     get_template_part( 'template-parts/header/header-2' );
    // }
    // elseif($header_option == 'header-style-3'){
    //     get_template_part( 'template-parts/header/header-3' );
    // }
    // elseif($header_option == 'header-style-4'){
    //     get_template_part( 'template-parts/header/header-4' );
    // }
    
    // else{
        if($header_deafult_style == 'header-style-1'){
            get_template_part( 'template-parts/header/header-1' );
        }
        elseif($header_deafult_style == 'header-style-2'){
            get_template_part( 'template-parts/header/header-2' );
        }
        elseif($header_deafult_style == 'header-style-3'){
            get_template_part( 'template-parts/header/header-3' );
        }
        elseif($header_deafult_style == 'header-style-4'){
            get_template_part( 'template-parts/header/header-4' );
        }
      
    // }
}

add_action( 'harry_header_before' , 'keen_header' );

