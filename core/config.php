<?php

/**
 * Website configuration
 *
 * @return mixed|null
 * @var string|null
 */
function config($key = '')
{
    $config = [
        'name' => 'Simple PHP Website',
        'site_url' => '',
        'pretty_uri' => true,
        'nav_menu' => [
            '' => 'Главная',
            'about-us' => 'О нас',
            'reservation' => 'Бронирование',
            'how-to-get' => 'Как добраться',
            'resort-betta' => 'Курорт “Бетта”',
            'contacts' => 'Контакты'
        ],
        'content_path' => 'pages',

        'social_vk_link' => 'https://vk.com/resort_betta',
        'social_insta_link' => 'https://instagram.com/resort_betta',
        'social_whatsapp_link' => 'https://wa.me/79998141435',

        'modules_path' => '/template/modules',

        // Page configuration todo remove this
        'pages_config' => [
            'home' => [
                'body_classname' => 'app--home',
                'modules' => ['reviews']
            ],
            'about-us' => [
                'body_classname' => 'app--about',
                'modules' => ['reviews']
            ],
            'reservation' => [
                'body_classname' => 'app--reservation',
                'modules' => ['reviews']
            ],
            'how-to-get' => [
                'body_classname' => 'app--how-to-get',
            ],
            'resort-betta' => [
                'body_classname' => 'app--resort-betta',
            ],
            'contacts' => [
                'body_classname' => 'app--contacts',
            ]
        ]
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
