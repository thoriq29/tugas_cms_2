<?php

class GoGreeen{
    public function __construct(){
        add_action('wp_enqueue_scripts', array($this, 'resource'));
        add_action('init', array($this, 'init'));
    }

    public function init(){
        register_post_type('news', [
            'label' => 'News',
            'public' => true,
            'menu_position' => 2,
            'supports' => ['title', 'editor', 'thumbnail']
        ]);

        add_theme_support('post-thumbnails');
    }

    public function resource(){
        wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
        wp_enqueue_style('mobile', get_template_directory_uri() . '/css/mobile.css', array(), '1.0.0', '(max-width: 380px)');
        wp_enqueue_style('tablet', get_template_directory_uri() . '/css/tablet.css', array(), '1.0.0', '(max-width: 728px)');
        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
    }
}

$theme = new GoGreeen();