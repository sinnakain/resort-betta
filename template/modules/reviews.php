<div class="reviews">
    <div class="reviews__container container">
        <div class="reviews__header">Отзывы</div>

        <div class="reviews__items js-reviews-slider">


            <?
            $comments = config('comments');

            foreach ($comments as $i => $comment_item) {
                ?>
                <div class="reviews__item">
                    <div class="reviews__name"><?= $comment_item['name'] ?></div>
                    <div class="reviews__text">«<?= $comment_item['body'] ?>»
                    </div>
                    <div class="rating reviews__rating js-rating" data-value="<?= $comment_item['ratio'] ?>">
                        <div class="rating__stars">
                            <div class="rating__stars-fill js-rating-fill"></div>
                        </div>
                    </div>
                </div>
                <?
            }
            ?>
        </div>

        <div class="reviews__counter">
            <div class="reviews__counter-current js-reviews-slider-current">1</div>
            <div class="reviews__counter-sep">/</div>
            <div class="reviews__counter-all"><?= sizeof(config('comments')) ?></div>
        </div>
    </div>
</div><!-- reviews -->