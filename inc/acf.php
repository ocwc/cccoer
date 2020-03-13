<?php

$home = new StoutLogic\AcfBuilder\FieldsBuilder('home');
$home
    ->addRepeater('highlights', [
        'min' => 0,
        'max' => 3,
        'layout' => 'block',
    ])
        ->addText('title')
        ->addUrl('link')
        ->addImage('image')
        ->addText('button_text', ['label' => 'Button text'])
        ->addUrl('button_link', ['button' => 'Button link'])
        ->addRadio('background_color')
            ->addChoice('green')
            ->addChoice('blue')
            ->addChoice('yellow')
            ->addChoice('red')
            ->setDefaultValue('green')

    ->setLocation('options_page', '==', 'theme-homepage-settings');

add_action('acf/init', function() use ($home) {
    acf_add_local_field_group($home->build());
});
