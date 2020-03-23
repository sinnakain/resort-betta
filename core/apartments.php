<?php

function get_apartments()
{
    return [
        0 => [
            'title' => 'Двухместный номер',
            'min_persons' => 2,
            'max_persons' => 3,
            'description' => 'Светлый компактный номер с балконом и видом на море.',
            'description-short' => '',

            'facilities' => 'Телевизор, холодильник на балконе, кондиционер, сан.узел, душ.',
            'rooms_count' => 1,
            'kitchen' => "общая, на первом этаже.",
            'bathroom' => true,
            'floor' => 2,
            'furniture' => 'двуспальная кровать, кресло-кровать, шкаф, прикроватные тумбочки, стулья, стол.',
            'price' => '1500-2000',
            'price_matrix' => [
                'Июнь' => '1500',
                'Июль' => '2000',
                'Август' => '2000',
                'Сентябрь' => '1500'
            ]
        ],
        1 => [
            'title' => 'Комната в отдельно стоящем коттедже',
            'min_persons' => 2,
            'max_persons' => 2,
            'description' => 'Комната для двоих в уютной деревянной обстановке.',
            'description-short' => '',

            'facilities' => 'Телевизор, холодильник, кондиционер, большой балкон, санузел, душ, кухня (встроенная плита, чайник, посуда).',
            'rooms_count' => 1,
            'kitchen' => true,
            'bathroom' => true,
            'floor' => 2,
            'furniture' => 'двуспальная кровать, кресло, шкаф для одежды, стол, стулья, кухонный гарнитур.',
            'price' => '2500-3000',
            'price_matrix' => [
                'Июнь' => '2500',
                'Июль' => '3000',
                'Август' => '3000',
                'Сентябрь' => '2500'
            ]
        ],
        2 => [
            'title' => 'Двухкомнатный номер без балкона',
            'min_persons' => 2,
            'max_persons' => 4,
            'description' => 'Это две компактные комнатки, где могут расположиться 3-4 человека.',
            'description-short' => '',

            'facilities' => 'Телевизор, холодильник, кондиционер, санузел, душ.',
            'rooms_count' => 2,
            'kitchen' => "общая, на первом этаже.",
            'bathroom' => true,
            'floor' => "2-3",
            'furniture' => 'двуспальная кровать, раскладной диван, шкаф для одежды, стол и стулья.',
            'price' => '2000-2800',
            'price_matrix' => [
                'Июнь' => '2000',
                'Июль' => '2800',
                'Август' => '2800',
                'Сентябрь' => '2000'
            ]
        ],
        3 => [
            'title' => 'Двухкомнатный номер без балкона',
            'min_persons' => 2,
            'max_persons' => 4,
            'description' => 'Две комнаты для 3-4 человек.',
            'description-short' => '',

            'facilities' => 'Телевизор, холодильник, кондиционер, санузел, душ.',
            'rooms_count' => 2,
            'kitchen' => "общая, на первом этаже.",
            'bathroom' => true,
            'floor' => "2-3",
            'furniture' => 'две односпальные кровати, диван раскладной, прикроватные тумбочки, шкаф для одежды.',
            'price' => '2000-2800',
            'price_matrix' => [
                'Июнь' => '2000',
                'Июль' => '2800',
                'Август' => '2800',
                'Сентябрь' => '2000'
            ]
        ],
        4 => [
            'title' => 'Однокомнатный номер с кухней',
            'min_persons' => 2,
            'max_persons' => 3,
            'description' => 'Благоустроенный номер-студия для 2-3 человек.',
            'description-short' => '',

            'facilities' => 'Телевизор, система кондиционирования, оборудованная кухня, холодильник, сейф, санузел, душ.',
            'rooms_count' => 1,
            'kitchen' => true,
            'bathroom' => true,
            'floor' => "1-3",
            'furniture' => 'двуспальная кровать, выдвижное кресло, тумбочки, шкаф для одежды, гладильная доска с утюгом, сушилка, обеденный стол и стулья.',
            'price' => '2500-3500',
            'price_matrix' => [
                'Июнь' => '2500',
                'Июль' => '3500',
                'Август' => '3500',
                'Сентябрь' => '2500'
            ]
        ],
        5 => [
            'title' => 'Двухкомнатный номер с балконом',
            'min_persons' => 3,
            'max_persons' => 4,
            'description' => 'Номер для 3-4 человек. Очень большой балкон со столом, холодильником и импровизированной кухней. Сплит-система в каждой комнате.',
            'description-short' => '',

            'facilities' => 'Телевизор, система кондиционирования, холодильник, санузел, душ.',
            'rooms_count' => 2,
            'kitchen' => "общая, на первом этаже.",
            'bathroom' => true,
            'floor' => "3",
            'furniture' => 'двуспальная кровать, диван раскладной, тумбочки, шкаф для одежды, стол и стулья.',
            'price' => '2600-3500',
            'price_matrix' => [
                'Июнь' => '2600',
                'Июль' => '3500',
                'Август' => '3500',
                'Сентябрь' => '2600'
            ]
        ],
        6 => [
            'title' => 'Двухкомнатный номер "Мини" с кухней',
            'min_persons' => 3,
            'max_persons' => 4,
            'description' => 'Две комнаты с оборудованной кухней для 3-4 человек. Номер распологается на первом этаже с отдельным входом.',
            'description-short' => '',

            'facilities' => 'Телевизор, система кондиционирования, холодильник, сейф, санузел, душ.',
            'rooms_count' => 2,
            'kitchen' => true,
            'bathroom' => true,
            'floor' => "1",
            'furniture' => 'двуспальная кровать, диван раскладной, прикроватные тумбочки, шкаф для одежды, обеденный стол и стулья.',
            'price' => '3000-4000',
            'price_matrix' => [
                'Июнь' => '3000',
                'Июль' => '4000',
                'Август' => '4000',
                'Сентябрь' => '3000'
            ]
        ],
        7 => [
            'title' => 'Двухкомнатный номер с изолированными спальными',
            'min_persons' => 4,
            'max_persons' => 4,
            'description' => 'Номер для 4 человек.<br>В прихожей номера находится оборудованная кухня.', // todo перефразировать
            'description-short' => '',

            'facilities' => 'телевизор, сейф, система кондиционирования, балкон, кухня (холодильник, встроенная плита, чайник, посуда), cанузел, душ.',
            'rooms_count' => 2,
            'kitchen' => true,
            'bathroom' => true,
            'floor' => "2",
            'furniture' => 'двуспальная кровать, две односпальных кровати, тумбочки, шкаф для одежды, сушилка.',
            'price' => '3500-4500',
            'price_matrix' => [
                'Июнь' => '3500',
                'Июль' => '4500',
                'Август' => '4500',
                'Сентябрь' => '3500'
            ]
        ],
        8 => [
            'title' => 'Двухкомнатный номер с верандой',
            'min_persons' => 2,
            'max_persons' => 5,
            'description' => 'В номере очень просторные комнаты. Номер предпочитают как 2-3 человек, так и 4-5 человек. Такие номера находятся на втором и третьем этажах. На балконах открывается отличный вид на море. В номере оборудованная кухня с холодильником, встроенной плитой и чайником, вся необходимая посуда.',
            'description-short' => '',

            'facilities' => 'Телевизор, сейф, система кондиционирования, кухня (холодильник, встроенная плита, чайник, посуда), cанузел, душ.',
            'rooms_count' => 2,
            'kitchen' => true,
            'bathroom' => true,
            'floor' => "2-3",
            'furniture' => 'двуспальная кровать, раскладной диван, выдвижное кресло, шкаф для одежды, сушилка, гладильная доска, утюг.',
            'price' => '3500-4500',
            'price_matrix' => [
                'Июнь' => '3500',
                'Июль' => '4500',
                'Август' => '4500',
                'Сентябрь' => '3500'
            ]
        ],
        9 => [
            'title' => 'Двухкомнатный номер "Мини" с беседкой',
            'min_persons' => 3,
            'max_persons' => 4,
            'description' => 'Это эксклюзивный номер с собственной беседкой, мангалом и большим столом. Ощущение двора обеспечивает отдельный вход на первом этаже. Стоянка для машины тоже индивидуальная.',
            'description-short' => '',

            'facilities' => 'Беседка, мангал, телевизор, сейф, система кондиционирования, оборудованная кухня, cанузел, душ.',
            'rooms_count' => 2,
            'kitchen' => true,
            'bathroom' => true,
            'floor' => "1",
            'furniture' => 'двуспальная кровать, раскладной диван, шкаф для одежды, сушилка, гладильная доска, утюг.',
            'price' => '3500-4500',
            'price_matrix' => [
                'Июнь' => '3500',
                'Июль' => '4500',
                'Август' => '4500',
                'Сентябрь' => '3500'
            ]
        ],
        10 => [
            'title' => 'Двухкомнатный номер с гостиной',
            'min_persons' => 3,
            'max_persons' => 5,
            'description' => 'Такие номера находятся в отдельно стоящем тихом дворике, их всего четыре. Они на первом и втором этажах. Во дворе зона отдыха представленная мангальной беседкой, качелями и столиками. В каждом номере две изолированные спальные и гостинная. Во дворе хоз. блок со стиральной машинкой.',
            'description-short' => '',

            'facilities' => 'Телевизор, сейф, система кондиционирования, оборудованная кухня, cанузел, душ.',
            'rooms_count' => 2,
            'kitchen' => true,
            'bathroom' => true,
            'floor' => "1-2",
            'furniture' => 'двуспальная кровать, две односпальные кровати, диван, обеденный стол, шкаф для одежды, сушилка, гладильная доска, утюг.',
            'price' => '3500-4500',
            'price_matrix' => [
                'Июнь' => '3500',
                'Июль' => '4500',
                'Август' => '4500',
                'Сентябрь' => '3500'
            ]
        ],
        11 => [
            'title' => 'Двухкомнатные апартаменты',
            'min_persons' => 4,
            'max_persons' => 6,
            'description' => 'Номер с большим балконом, который открывает вид на море или на горы. На балконе столик со стольями. Две изолированные спальные.',
            'description-short' => '',

            'facilities' => 'Телевизор, сейф, система кондиционирования, кухня (встроенная плита, микроволновая печь, холодильник, вся необходимая посуда), cанузел, душ.',
            'rooms_count' => 2,
            'kitchen' => true,
            'bathroom' => true,
            'floor' => "2-3",
            'furniture' => 'двуспальная кровать, две односпальные кровати, большой раскладной диван, обеденный стол, тумбы, шкафы для одежды, сушилки, гладильная доска, утюг.',
            'price' => '4000-5000',
            'price_matrix' => [
                'Июнь' => '4000',
                'Июль' => '5000',
                'Август' => '5000',
                'Сентябрь' => '4000'
            ]
        ],
        12 => [
            'title' => 'Трёхкомнатной номер с кухней',
            'min_persons' => 4,
            'max_persons' => 6,
            'description' => 'В номере находятся две изолированные спальные и большая гостиная. По спальным местам он вмещает 5-6 человек.<br>Два балкона с прекрасными видами.<br>Для большой семьи или компании.',
            'description-short' => '',

            'facilities' => 'Телевизор, сейф, система кондиционирования, кухня (встроенная плита, микроволновая печь, холодильник, вся необходимая посуда), cанузел, душ.',
            'rooms_count' => 3,
            'kitchen' => true,
            'bathroom' => true,
            'floor' => "3",
            'furniture' => 'столик со стульями на балконе, двуспальная кровать, две односпальные кровати, раскладной диван, обеденный стол, тумбы, шкафы для одежды, сушилки, гладильная доска, утюг.',
            'price' => '4500-5500',
            'price_matrix' => [
                'Июнь' => '4500',
                'Июль' => '5500',
                'Август' => '5500',
                'Сентябрь' => '4500'
            ]
        ],
        13 => [
            'title' => 'Трехэтажный дом под ключ с банным комплексом',
            'min_persons' => 8,
            'max_persons' => 20,
            'description' => 'Большая оборудованная кухня, хол, 7-спален, банный комплекс, каминный зал для корпоративных мероприятий.<br>Общая площадь дома – 500 м2.<br>Территория: на участке место для барбекю. Красивая беседка со столами и стульями, большой мангал с поленницей дров. Бассейн, в котором можно поплавать, после принятия бани.',
            'description-short' => '',

            'facilities' => 'Большая оборудованная кухня, хол, 7-спален, банный комплекс, каминный зал для корпоративных мероприятий.',
            'rooms_count' => 8,
            'kitchen' => "есть",
            'bathroom' => "есть",
            'floor' => "3",
            'furniture' => '',
            'price' => '4500-5500',
            'price_matrix' => [
                '01.05 - 31.05' => '15000',
                '01.06 - 30.06' => '15000',
                '01.07 - 31.07' => '20000',
                '01.08 - 31.08' => '20000',
                '01.09 - 30.09' => '15000',
            ]
        ],
    ];
}

function get_apartments_by_persons($count = 0)
{
    // FIXME Но ведь 1 может залететь в 2-3

    $result = get_apartments();

    if ($count == 0) {
        return $result;
    }

    foreach ($result as $k => $apartment) {
        $min_persons = $apartment['min_persons'];
        $max_persons = $apartment['max_persons'];


        // FIXME open revert
        if (!($min_persons <= $count && $count <= $max_persons)) {
            unset($result[$k]);
        }
    }

    return $result;
}

function get_apartment_by_id($apartment_id = 0)
{
    return get_apartments()[$apartment_id];
}

function get_apartment_images($apartment_id = 0)
{
    $relative_dir = '/img/apartments/apartment_' . $apartment_id;
    $image_dir = getcwd() . $relative_dir;

    if(is_dir($image_dir)) {
        $images = scandir($image_dir);

        if($images) {
            foreach ($images as $k => $image) {
                if (
                       strripos($image, 'jpeg')
                    || strripos($image, 'jpg')
                    || strripos($image, 'png')
                )
                {
                    $images[$k] = $relative_dir . '/' . $image;
                } else {
                    // remove non-image files
                    unset($images[$k]);
                }
            }

            return $images;
        }

        return Array();
    }
}
