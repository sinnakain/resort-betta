<?php
require_once 'core/apartments.php';
require_once 'core/tags.php';

function render_apartments_list()
{
    // TODO async SPA-style & preloader
    $persons_count = isset(get_query_params()['persons']) ? get_query_params()['persons'] : 0;

    $apartments = get_apartments_by_persons($persons_count);

    foreach ($apartments as $id => $apartment) {


        if(!isset($apartment['active']) || !$apartment['active']) {
            continue;
        }

        $title = $apartment['title'];
        $min_persons = $apartment['min_persons'];
        $max_persons = $apartment['max_persons'];
        $price = $apartment['price'];

        $facilities = $apartment['facilities']; // fixme change to tags
        $tags = $apartment['tags'];

        $apart_images = get_apartment_images($id);
        $img_count = $apart_images ? sizeof($apart_images) : 0;

        $card_link = '/reservation/apartment/' . $id;
        ?>
        <div class="apartments__item">
            <div class="apartment apartment--reservation js-apartment">

                <div class="apartment__images" <?= $img_count > 0 ? '' : 'hidden' ?>>
                    <div class="apartment-places apartment__places apartment__places--desktop">
                        <div class="apartment-places__icon">
                            <div class="svg-icon svg-icon--counter-icon" aria-hidden="true">
                                <svg class="svg-icon__link">
                                    <use xlink:href="#counter-icon"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="apartment__images-counter">
                        <span
                            class="apartment__images-counter-current js-apartment-current-slide"><?= $img_count > 0 ? 1 : 0 ?></span>
                        <span class="apartment__images-counter-sep">из</span>
                        <span class="apartment__images-counter-all"><?= $img_count ?></span>
                    </div>
                    <div class="apartment__images-gallery js-apartment-images">

                        <?
                        if ($img_count > 0) {
                            foreach ($apart_images as $k => $image) {
                                ?>
                                <picture class="apartment__image">
                                    <source srcset="<?= $image ?>" media="(max-width: 979px)" type="image/png">
                                    <source srcset="<?= $image ?>" media="(min-width: 980px)" type="image/png">
                                    <img src="<?= $image ?>" alt="">
                                </picture>
                                <?
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="apartment__body">
                    <div class="apartment__body-head">
                        <div class="apartment__title">
                            <a href="<?= $card_link ?>" class="apartment__title-text"><?= $title ?></a>
                            <div class="apartment-places apartment__places apartment__places--mobile">
                                <div class="apartment-places__icon">
                                    <div class="svg-icon svg-icon--counter-icon" aria-hidden="true">
                                        <svg class="svg-icon__link">
                                            <use xlink:href="#counter-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="apartment-places__count"><?= $min_persons . '-' . $max_persons ?></div>
                            </div>
                        </div>
                        <div class="apartment__price"><?= $price ?> Р/сутки</div>
                    </div>

                    <div class="apartment__body-hidden">
                        <div class="apartment__body-limit">
                            <div class="apartment__adds">
                                <? render_tags($tags, true, true); ?>
                            </div>
                            <div class="apartment__columns">
                                <div class="apartment__column apartment__column--more">
                                    <a href="<?= $card_link ?>" class="apartment__more">
                                        <span class="apartment__more-text">Подробнее</span>
                                        <span class="apartment__more-icon">
                                            <span class="svg-icon svg-icon--arrorw-right" aria-hidden="true">
                                                <svg class="svg-icon__link">
                                                  <use xlink:href="#arrorw-right"></use>
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="apartment__column apartment__column--price">
                                    <div class="apartment__price">
                                        <div class="apartment__price-num"><?= $price ?> Р</div>
                                        <div class="apartment__price-adds">за номер в сутки</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="apartment__order">
                        <a href="<?= $card_link ?>" class="button apartment__order-button">
                            <span class="button__text">Забронировать</span>
                        </a><!-- b:button -->
                    </div>
                </div>

            </div>
        </div>
        <?php
    }
}

?>
