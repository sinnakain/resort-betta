<?php
require 'core/apartments.php';

function render_apartments_list()
{
    // TODO async SPA-style & preloader
    $persons_count = isset(get_query_params()['persons']) ? get_query_params()['persons'] : 0;

    $apartments = get_apartments_by_persons($persons_count);

    foreach ($apartments as $id => $apartment) {
        $title = $apartment['title'];
        $min_persons = $apartment['min_persons'];
        $max_persons = $apartment['max_persons'];
        $price = $apartment['price'];
        $description = $apartment['facilities']; // todo may be "description-short"

        $card_link = '/reservation/apartment/' . $id;

        ?>
        <div class="apartments__item">
            <div class="apartment apartment--reservation js-apartment">

                <div class="apartment__images">
                    <div class="apartment-places apartment__places apartment__places--desktop">
                        <div class="apartment-places__icon">

                            <div class="svg-icon svg-icon--counter-icon" aria-hidden="true">
                                <svg class="svg-icon__link">
                                    <use xlink:href="#counter-icon"></use>
                                </svg>
                            </div>

                        </div>
                        <div class="apartment-places__count">1-2</div>
                    </div>
                    <div class="apartment__images-counter">
                        <span class="apartment__images-counter-current js-apartment-current-slide">1</span>
                        <span class="apartment__images-counter-sep">из</span>
                        <span class="apartment__images-counter-all">5</span>
                    </div>
                    <div class="apartment__images-gallery js-apartment-images">

                        <picture class="apartment__image">
                            <source srcset="img/apartment-image@960.png" media="(max-width: 979px)" type="image/png">

                            <source srcset="img/apartment-image-resevation.png" media="(min-width: 980px)"
                                    type="image/png">
                            <img src="img/apartment-image-resevation.png" alt="">

                        </picture>

                        <picture class="apartment__image">
                            <source srcset="img/apartment-image@960.png" media="(max-width: 979px)" type="image/png">

                            <source srcset="img/apartment-image-resevation.png" media="(min-width: 980px)"
                                    type="image/png">
                            <img src="img/apartment-image-resevation.png" alt="">

                        </picture>

                        <picture class="apartment__image">
                            <source srcset="img/apartment-image@960.png" media="(max-width: 979px)" type="image/png">

                            <source srcset="img/apartment-image-resevation.png" media="(min-width: 980px)"
                                    type="image/png">
                            <img src="img/apartment-image-resevation.png" alt="">

                        </picture>

                        <picture class="apartment__image">
                            <source srcset="img/apartment-image@960.png" media="(max-width: 979px)" type="image/png">

                            <source srcset="img/apartment-image-resevation.png" media="(min-width: 980px)"
                                    type="image/png">
                            <img src="img/apartment-image-resevation.png" alt="">

                        </picture>

                        <picture class="apartment__image">
                            <source srcset="img/apartment-image@960.png" media="(max-width: 979px)" type="image/png">

                            <source srcset="img/apartment-image-resevation.png" media="(min-width: 980px)"
                                    type="image/png">
                            <img src="img/apartment-image-resevation.png" alt="">

                        </picture>

                    </div>
                </div>

                <div class="apartment__body">
                    <div class="apartment__body-head">
                        <div class="apartment__title">
                            <div class="apartment__title-text"><?= $title ?></div>
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

                                <div class="svg-icon svg-icon--check svg-icon--colored" aria-hidden="true">
                                    <svg class="svg-icon__link">
                                        <use xlink:href="#check"></use>
                                    </svg>
                                </div>
                                <?= $description ?>
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