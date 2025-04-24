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

add_action( 'keen_multiple_header' , 'keen_header' );

//footer copyright 
function footer_copyright(){
    $footer_copyright = get_theme_mod('keen_footer_setting',__('© 2024 Keen All Rights Reserved.','Keen'));
    ?>
        <p><?php echo keen_kses($footer_copyright); ?></p>
    <?php
}

/**
* Sanitize SVG markup for front-end display.
*
* @param  string $svg SVG markup to sanitize.
* @return string 	  Sanitized markup.
*/
function keen_kses( $keen_custom_tag = '' ) {
	$keen_allowed_html = [
        'svg' => array(
            'class' => true,
            'aria-hidden' => true,
            'aria-labelledby' => true,
            'role' => true,
            'xmlns' => true,
            'width' => true,
            'height' => true,
            'viewbox' => true, // <= Must be lower case!
        ),
        'path'  => array( 
            'd' => true, 
            'fill' => true,  
            'stroke' => true,  
            'stroke-width' => true,  
            'stroke-linecap' => true,  
            'stroke-linejoin' => true,  
            'opacity' => true,  
        ),
		'a' => [
			'class'    => [],
			'href'    => [],
			'title'    => [],
			'target'    => [],
			'rel'    => [],
		],
         'b' => [],
         'blockquote'  =>  [
            'cite' => [],
         ],
         'cite'                      => [
            'title' => [],
         ],
         'code'                      => [],
         'del'                    => [
            'datetime'   => [],
            'title'      => [],
        ],
         'dd'                     => [],
         'div'                    => [
            'class'   => [],
            'title'   => [],
            'style'   => [],
         ],
         'dl'                     => [],
         'dt'                     => [],
         'em'                     => [],
         'h1'                     => [],
         'h2'                     => [],
         'h3'                     => [],
         'h4'                     => [],
         'h5'                     => [],
         'h6'                     => [],
         'i'                         => [
            'class' => [],
         ],
         'img'                    => [
            'alt'  => [],
            'class'   => [],
            'height' => [],
            'src'  => [],
            'width'   => [],
         ],
         'li'                     => array(
            'class' => array(),
         ),
         'ol'                     => array(
            'class' => array(),
         ),
         'p'                         => array(
            'class' => array(),
         ),
         'q'                         => array(
            'cite'    => array(),
            'title'   => array(),
         ),
         'span'                      => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
         ),
         'iframe'                 => array(
            'width'         => array(),
            'height'     => array(),
            'scrolling'     => array(),
            'frameborder'   => array(),
            'allow'         => array(),
            'src'        => array(),
         ),
         'strike'                 => array(),
         'br'                     => array(),
         'strong'                 => array(),
	];

	return wp_kses( $keen_custom_tag, $keen_allowed_html );
}