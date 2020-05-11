<?php


function get_tags()
{

    return [
        'double_bed' => [
            'title' => 'Двуспальная кровать',
            'icon' => '#double_bed'
        ],
        'bed' => [
            'title' => 'Односпальная кровать',
            'icon' => '#bed'
        ]
    ];
}

function get_tag($tag_id)
{
    return get_tags()[$tag_id];
}

function render_tag($tag_id)
{
    $tag = get_tag($tag_id);

    $title = $tag['title'];
    $icon = $tag['icon'];

    ?>
    <div class="tag__item">
        <div class="svg-icon" aria-hidden="true">
            <svg class="svg-icon__link">
                <use xlink:href="<?= $icon; ?>"></use>
            </svg>
        </div>

        <span><?= $title; ?></span>
    </div>
    <?
}

function render_tags($tag_ids, $wrap_items = true)
{
    echo $wrap_items ? '<div class="tags__container">' : '';

    foreach($tag_ids as $k => $tag_id) {
        render_tag($tag_id);
    }

    echo $wrap_items ? '</div>' : '';
}

?>
