<?php

function render_phones($class_name = "contacts__item-link")
{
    $display_phones = config('display_phones');

    foreach ($display_phones as $name => $phone) { ?>
        <div class="<?= $class_name ?>">
            <a href="tel:<?= $phone ?>"><?= $phone ?></a>
        </div>
    <? }
} ?>
