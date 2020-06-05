<div class="apartments__body">
    <div class="apartments__body-inside">
        <div class="apartments__body-container">
            <div class="apartments__items">
                <?
                require_once 'core/apartments.php';

                // todo refactoring
                $path_params = get_URL_page_params();
                $apart_id = isset($url_params[0]) ? $url_params[0] : -1;

                $see_also_items = get_see_also_items($apart_id);

                foreach ($see_also_items as $k => $apart_id) {
                    $apartment = get_apartment_by_id($apart_id);

                    $title = isset($apartment['title_offer']) ? $apartment['title_offer'] : $apartment['title'];

                    $min_persons = $apartment['min_persons'];
                    $max_persons = $apartment['max_persons'];

                    $price = $apartment['price'];
                    $facilities = $apartment['facilities'];

                    $apart_images = get_apartment_images($apart_id);
                    $main_image = array_shift($apart_images); // todo null check

                    $apartment_href = '/reservation/apartment/' . $apart_id;
                    ?>

                    <div class="apartments__item">
                        <div class="apartment js-apartment">
                            <div class="apartment__images">

                                <div class="apartment-places apartment__places apartment__places--desktop">
                                    <div class="apartment-places__icon">
                                        <div class="svg-icon svg-icon--counter-icon" aria-hidden="true">
                                            <svg class="svg-icon__link">
                                                <use xlink:href="#counter-icon"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="apartment-places__count"><?= $min_persons . '-' . $max_persons ?></div>
                                </div>

                                <div class="apartment__images-gallery js-apartment-images">
                                    <picture class="apartment__image">
                                        <source srcset="<?= $main_image; /* todo add 980px image */ ?>"
                                                media="(max-width: 979px)"
                                                type="image/png">

                                        <source srcset="<?= $main_image; ?>" media="(min-width: 980px)"
                                                type="image/png">
                                        <img src="<?= $main_image; ?>" alt="">
                                    </picture>
                                </div>
                            </div>

                            <div class="apartment__body">
                                <div class="apartment__body-head">
                                    <div class="apartment__title">
                                        <div class="apartment__title-text"><?= $title; ?></div>

                                        <div class="apartment-places apartment__places apartment__places--mobile">
                                            <div class="apartment-places__icon">
                                                <div class="svg-icon svg-icon--counter-icon"
                                                     aria-hidden="true">
                                                    <svg class="svg-icon__link">
                                                        <use xlink:href="#counter-icon"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div
                                                class="apartment-places__count"><?= $min_persons . '-' . $max_persons ?></div>
                                        </div>
                                    </div>
                                    <div class="apartment__price"><?= $price; ?> Р/сутки</div>
                                </div>

                                <div class="apartment__body-hidden">
                                    <div class="apartment__body-limit">
                                        <div class="apartment__adds">

                                            <div class="svg-icon svg-icon--check svg-icon--colored"
                                                 aria-hidden="true">
                                                <svg class="svg-icon__link">
                                                    <use xlink:href="#check"></use>
                                                </svg>
                                            </div>
                                            <?

                                            if (is_string($facilities)) {
                                                echo $facilities;
                                            } elseif (is_array($facilities) && count($facilities) > 0) {


                                                foreach ($facilities as $i => $facility) {
                                                    if($i == 0) {
                                                        $facility = mb_strtoupper(mb_substr($facility, 0, 1))
                                                            . mb_substr($facility,  1);
                                                    };


                                                    echo $facility . ', ';
                                                }

                                            }
                                            ?>
                                        </div>
                                        <div class="apartment__columns">
                                            <div class="apartment__column apartment__column--more">
                                                <a href="<?= $apartment_href; ?>"
                                                   class="apartment__more">
                                                    <span class="apartment__more-text">Подробнее</span>
                                                    <span class="apartment__more-icon">
                                                        <span class="svg-icon svg-icon--arrorw-right"
                                                              aria-hidden="true">
                                                          <svg class="svg-icon__link">
                                                            <use xlink:href="#arrorw-right"></use>
                                                          </svg>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="apartment__column apartment__column--price">
                                                <div class="apartment__price">
                                                    <div class="apartment__price-num"><?= $price; ?> Р</div>
                                                    <div class="apartment__price-adds">за номер в сутки
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="apartment__order">
                                    <a href="<?= $apartment_href; ?>" class="button apartment__order-button">
                                        <span class="button__text">Забронировать</span>
                                    </a><!-- b:button -->
                                </div>
                            </div>
                        </div><!-- apartment -->
                    </div>
                <? } ?>
            </div>
        </div>
    </div>
</div>
