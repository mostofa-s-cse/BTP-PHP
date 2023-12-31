<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'BTP',
        'site_url' => 'http://localhost/php',
        'pretty_uri' => true,
        'nav_menu' => [
            '/' => 'Home',
            'about-us' => 'About Us',
            'services' => 'Our Service',
            'products'=>'Our Product',
            'contact' => 'Contact Us',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v1',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
