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
        'site_url' => '',
        'pretty_uri' => true,
        'nav_menu' => [
            '' => 'Главная',
            'about-us' => 'О нас',
            'reservation' => 'Бронирование',
            'how-to-get' => 'Как добраться',
            'resort-betta' => 'Для гостей',
            'contacts' => 'Контакты'
        ],
        'content_path' => 'pages',

        'social_vk_link' => 'https://vk.com/resort_betta',
        'social_insta_link' => 'https://instagram.com/resort_betta',
        'social_whatsapp_link' => 'https://wa.me/79604896093',


        'display_phones' => [
            'phone_main' => '+7 (960) 489-60-93',
            'phone_second' => '+7 (988) 954-20-97',
            'phone_irina' => '+7 (918) 467-18-44'
        ],

        'contact_email' => 'admin@resort-betta.ru',

        'modules_path' => '/template/modules',

        // Page configuration todo remove this
        'pages_config' => [
            'home' => [
                'hero_image' => 'img/hero/hero-sea.png',
                'body_classname' => 'app--home',
                'modules' => ['reviews']
            ],
            'about-us' => [
                'hero_image' => '/img/hero/hero_apartments_main.jpg',
                'body_classname' => 'app--about',
                'modules' => ['reviews']
            ],
            'reservation' => [
                'hero_image' => '/img/hero/hero_veranda.jpg',
                'body_classname' => 'app--reservation',
                'modules' => ['reviews']
            ],
            'how-to-get' => [
                'hero_image' => '/img/hero/hero_k4.png',
                'body_classname' => 'app--how-to-get',
            ],
            'resort-betta' => [
                'hero_image' => '/img/hero/hero_mangal.jpg',
                'body_classname' => 'app--resort-betta',
            ],
            'contacts' => [
                'hero_image' => '/img/hero/hero_interior.jpg',
                'body_classname' => 'app--contacts',
            ],
            'reservation/apartment' => [
                'hero_image' => '/img/hero/hero_mangal.jpg',
                'body_classname' => 'app--card',
                'modules' => ['reviews']
            ]
        ],


        'comments' => [
            0 => [
                'name' => 'Олеся',
                'body' => 'Не знаю как для кого, но для себя я минусов не нашла совсем! Здесь есть все что нужно для комфортного отдыха как со всей своей семьей так и для большой или маленькой компании! Здесь очень уютно и комфортно, пляж море рядом что еще нужно! Лучшего другого места для отдыха я еще не встречала!',
                'ratio' => '100%'
            ],
            1 => [
                'name' => 'Сергей',
                'body' => 'Прекрасные номера. Чисто. Все необходимое есть, приятная обстановка. Мангал и принадлежности в свободном доступе. В нашем номере на 6-7 человек постоянно холодная и горячая вода. Мини кухня со всем необходимым (красивая посуда). Кондиционер. Телевизор + триколор. Балкон. Сушка для белья, сан.&nbsp;узел. Во дворе детская площадка. Свежий ремонт, очень красивый интерьер. Во дворе плитка, зеленая зона',
                'ratio' => '90%'
            ],
            2 => [
                'name' => 'Дмитрий',
                'body' => 'Отличное место, отдыхаем не в первый раз! Хорошие и просторные номера, брали номера с видом на море. Есть все для комфортного проживания',
                'ratio' => '95%'
            ],
            3 => [
                'name' => 'Юлия',
                'body' => 'Это лучшее место на нашем побережье. Если хочется уединения, то здесь его можно найти: повернуть в лево от пляжа и пройти вдоль берега. Приезжаем сюда уже больше 17 лет',
                'ratio' => '100%'
            ],
            4 => [
                'name' => 'Елена',
                'body' => 'Место очень уютное, спокойное, комфортное. Хочется вернутся обратно',
                'ratio' => '100%'
            ]
        ]
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
