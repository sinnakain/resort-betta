<?php


function get_tags()
{

    return [
        'double_bed' => [
            'title' => 'Двуспальная кровать',
            'short_title' => null,
            'icon' => '#double_bed',
            'is_wide' => true
        ],
        'bed' => [
            'title' => 'Односпальная кровать',
            'short_title' => 'Кровать',
            'icon' => '#bed'
        ],
        '2x_bed' => [
            'title' => 'Односпальная кровать',
            'short_title' => 'Кровать',
            'icon' => '#bed',
            'before_span' => '2x '
        ],
        'sofa' => [
            'title' => 'Кресло-кровать',
            'short_title' => null,
            'icon' => '#sofa'
        ],
        'parking' => [
            'title' => 'Бесплатная парковка',
            'short_title' => 'Парковка',
            'icon' => '#parking'
        ],
        'bathroom' => [
            'title' => 'Ванная комната',
            'short_title' => 'Ванная',
            'icon' => '#bathroom'
        ],
        'wifi' => [
            'title' => 'Wi-Fi',
            'short_title' => null,
            'icon' => '#wifi'
        ],
        'conditioner' => [
            'title' => 'Кондиционер',
            'short_title' => null,
            'icon' => '#conditioner'
        ],
        'washer' => [
            'title' => 'Доступ к стиральной машине',
            'short_title' => null,
            'icon' => '#washer'
        ],
        'pet' => [
            'title' => 'Размещение с питомцами',
            'short_title' => null,
            'icon' => '#paw'
        ],
        'balcony' => [
            'title' => 'Балкон',
            'short_title' => null,
            'icon' => '#balcony'
        ],
        'loggia' => [
            'title' => 'Лоджия',
            'short_title' => null,
            'icon' => '#loggia'
        ],
        'veranda' => [
            'title' => 'Веранда',
            'short_title' => null,
            'icon' => '#veranda'
        ],
        'kitchen' => [
            'title' => 'Просторная кухня',
            'short_title' => null,
            'icon' => '#kitchen'
        ],
        'kitchen_2' => [
            'title' => 'Просторная кухня',
            'short_title' => null,
            'icon' => '#kitchen_2'
        ],
        'big_sofa' => [
            'title' => 'Двуспальный диван',
            'short_title' => null,
            'icon' => '#big_sofa',
            'is_wide' => true
        ],
        'big_sofa_2' => [
            'title' => 'Двуспальный диван',
            'short_title' => null,
            'icon' => '#big_sofa_2'
        ],
    ];
}

function get_tag($tag_id)
{
    return get_tags()[$tag_id];
}

function render_tag($tag_id, $short_title = false)
{
    $tag = get_tag($tag_id);

    $title = $tag['title'];

    if ($short_title) {
        $short_title = $tag['short_title'];
        if ($short_title != null) {
            $title = $short_title;
        }
    }

    $before_span = isset($tag['before_span']) ? $tag['before_span'] : "";


    $icon = $tag['icon'];
    $wide_style = isset($tag['is_wide']) && $tag['is_wide'] ? "svg-icon-wide" : "";

    ?>
    <div class="tag__item">

        <?= $before_span ? "<span>{$before_span}</span>" : "" ?>

        <div class="svg-icon <?= $wide_style ?>" aria-hidden="true">
            <svg class="svg-icon__link">
                <use xlink:href="<?= $icon; ?>"></use>
            </svg>
        </div>

        <span><?= $title; ?></span>
    </div>
    <?
}

function render_tags($tag_ids, $wrap_items = true, $short_title = false)
{
    echo $wrap_items ? '<div class="tags__container">' : '';

    foreach ($tag_ids as $k => $tag_id) {
        render_tag($tag_id, $short_title);
    }

    echo $wrap_items ? '</div>' : '';
}

?>
