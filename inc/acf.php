<?php

$home = new StoutLogic\AcfBuilder\FieldsBuilder( 'home' );
$home
    ->addRepeater( 'highlights', [
        'min'    => 0,
        'max'    => 3,
        'layout' => 'block',
    ] )
    ->addText( 'title' )
    ->addUrl( 'link' )
    ->addImage( 'image' )
    ->addText( 'button_text', [ 'label' => 'Button text' ] )
    ->addUrl( 'button_link', [ 'button' => 'Button link' ] )
    ->addRadio( 'background_color' )
    ->addChoice( 'green' )
    ->addChoice( 'blue' )
    ->addChoice( 'yellow' )
    ->addChoice( 'red' )
    ->setDefaultValue( 'green' )
    ->setLocation( 'options_page', '==', 'theme-homepage-settings' );

$options = new StoutLogic\AcfBuilder\FieldsBuilder( 'cccoer-home', [
    'title' => 'Home page settings'
] );
$options
    ->addRepeater( 'options-featured', [
        'label'  => 'Featured',
        'min'    => 0,
        'max'    => 1,
        'layout' => 'block',
    ] )
    ->addText( 'title' )
    ->addUrl( 'link' )
    ->addImage( 'image' )
    ->addText( 'description' );

$options
    ->addRepeater( 'options-testimonials', [
        'label' => 'Testimonials',
        'min'    => 1,
        'max'    => 6,
        'layout' => 'block',
    ] )
    ->addTextarea( 'text' )
    ->addText( 'name' )
    ->addText( 'title' )
    ->setLocation( 'options_page', '==', 'theme-homepage-settings' );

add_action( 'acf/init', function() use ( $home, $options) {
    acf_add_local_field_group( $home->build() );
    acf_add_local_field_group( $options->build() );
} );
