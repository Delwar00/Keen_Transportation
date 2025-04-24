<?php

new \Kirki\Panel(
	'keen_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Keen Option', 'Keen' ),
		'description' => esc_html__( 'My Panel Description.', 'Keen' ),
	]
);

// header info section 
function keen_header_info(){
    new \Kirki\Section(
        'keen_header_info',
        [
            'title'       => esc_html__( 'Header info', 'Keen' ),
            'description' => esc_html__( 'My Section Description.', 'Keen' ),
            'panel'       => 'keen_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Select(
        [
            'settings'    => 'header_default_setting',
            'label'       => esc_html__( 'Header Select', 'Keen' ),
            'section'     => 'keen_header_info',
            'default'     => 'header-style-1',
            'placeholder' => esc_html__( 'Choose default header', 'Keen' ),
            'choices'     => [
                'header-style-1' => esc_html__( 'Header Style 01', 'Keen' ),
                'header-style-2' => esc_html__( 'Header Style 02', 'Keen' ),
                'header-style-3' => esc_html__( 'Header Style 03', 'Keen' ),
                'header-style-4' => esc_html__( 'Header Style 04', 'Keen' ),
            ],
        ]
    );
}
Keen_header_info();


//footer panel
new \Kirki\Panel(
	'keen_panel_footer',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Keen Footer Option', 'Keen' ),
		'description' => esc_html__( 'My Panel Description.', 'Keen' ),
	]
);

// footer info section 
function keen_footer_info(){
    new \Kirki\Section(
        'keen_footer_info',
        [
            'title'       => esc_html__( 'Footer info', 'Keen' ),
            'description' => esc_html__( 'My Section Description.', 'Keen' ),
            'panel'       => 'keen_panel_footer',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings' => 'keen_footer_setting',
            'label'    => esc_html__( 'Footer Privacy Policy', 'Keen' ),
            'section'  => 'keen_footer_info',
            'default'  => esc_html__( '© Themazine Copyright 2021 All Right Reserved', 'Keen' ),
            'priority' => 10,
        ]
    );
}
keen_footer_info();