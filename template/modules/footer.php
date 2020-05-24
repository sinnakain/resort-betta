<footer class="app-footer">
    <div class="app-footer__container container">
        <div class="app-footer__nav">
            <ul>
                <?
                    $menu_items = config('nav_menu');
                    $menu_size = sizeof($menu_items);

                    $left_count = floor($menu_size / 2) + $menu_size % 2;

                    $current_page = get_current_page();

                    $counter = 0;
                    foreach ($menu_items as $path => $display_name) {

                        // reopen ul tag
                        if ($left_count == $counter) {
                            echo '</ul><ul>';
                        }

                        $is_current_page = $current_page === $path || ($current_page === 'home' && $path === '');

                        $class_attr = $is_current_page ? ' class="is-active"' : '';

                        echo '<li' . $class_attr . '><a href="/' . $path . '">' . $display_name . '</a></li>';

                        $counter++;
                    }
                ?>
            </ul>
        </div>

        <a href="index.html" class="app-logo app-footer__logo">
            <img src="/img/app-logo.svg" alt="">
        </a>

        <div class="app-footer__phones">
            <div class="app-footer__phone-icon">

                <div class="svg-icon svg-icon--phone-icon" aria-hidden="true">
                    <svg class="svg-icon__link">
                        <use xlink:href="#phone-icon"></use>
                    </svg>
                </div>

            </div>
            <div class="app-footer__phone-items">
                <?php
                    render_phones('app-footer__phone');
                ?>
            </div>
        </div>


        <div class="socials app-footer__socials">
            <div class="socials__items">

                <div class="socials__item">
                    <a href="<?= config('social_vk_link') ?>" target="_blank" class="socials__link">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                             xmlns="http://www.w3.org/2000/svg">

                            <circle cx="21" cy="21" r="20.5"></circle>
                            <path
                                    d="M30.0887 25.8599C29.4337 25.0742 28.6629 24.4037 27.9336 23.6917C27.2756 23.0499 27.2341 22.6776 27.763 21.9369C28.3403 21.1284 28.9611 20.351 29.5436 19.5462C30.0874 18.794 30.6432 18.0439 30.9293 17.1434C31.1108 16.5705 30.9503 16.3174 30.3628 16.2171C30.2616 16.1995 30.1569 16.1986 30.0539 16.1986L26.5681 16.1945C26.1388 16.1881 25.9015 16.3753 25.7497 16.7558C25.5447 17.2701 25.3334 17.784 25.0892 18.2804C24.5352 19.4057 23.9164 20.4935 23.0489 21.4145C22.8576 21.6177 22.646 21.8744 22.3264 21.7686C21.9265 21.6227 21.8086 20.9638 21.8153 20.7411L21.8118 16.7177C21.7343 16.143 21.6069 15.8867 21.0362 15.775L17.4153 15.7757C16.932 15.7757 16.6896 15.9624 16.4315 16.2647C16.2827 16.4394 16.2377 16.5527 16.5437 16.6106C17.1447 16.7246 17.4832 17.1135 17.5731 17.7161C17.7172 18.6789 17.7071 19.6456 17.6241 20.6122C17.5997 20.8945 17.5512 21.1761 17.4392 21.4396C17.2641 21.8539 16.9814 21.9382 16.61 21.6833C16.2738 21.4526 16.0376 21.127 15.8064 20.8001C14.938 19.5731 14.2451 18.2498 13.6802 16.8593C13.5169 16.4576 13.2354 16.2141 12.8097 16.2075C11.7639 16.1908 10.7179 16.1881 9.67212 16.2084C9.04287 16.2203 8.85524 16.5258 9.1115 17.0962C10.2505 19.6298 11.5184 22.093 13.1733 24.3369C14.0231 25.4885 14.9986 26.5051 16.2589 27.2255C17.6873 28.0422 19.2248 28.2879 20.8443 28.2122C21.6025 28.1767 21.8303 27.9795 21.8654 27.2237C21.8891 26.7066 21.9477 26.1925 22.2028 25.7278C22.4532 25.2719 22.8323 25.185 23.2694 25.4686C23.488 25.6107 23.6722 25.7915 23.8462 25.9821C24.273 26.449 24.6845 26.93 25.1275 27.3812C25.6831 27.9466 26.3413 28.2806 27.1689 28.2125L30.3726 28.2132C30.8888 28.1794 31.1564 27.5465 30.86 26.9704C30.6519 26.5668 30.3787 26.2075 30.0887 25.8599Z"></path>
                        </svg>

                    </a>
                </div>

                <div class="socials__item">
                    <a href="<?= config('social_insta_link') ?>" target="_blank" class="socials__link">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                             xmlns="http://www.w3.org/2000/svg">

                            <circle cx="21" cy="21" r="20.5"></circle>
                            <svg xmlns="http://www.w3.org/2000/svg" height="25pt" viewBox="-200 -180 711 691.9"
                                 width="25pt">
                                <path
                                        d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0"></path>
                                <path
                                        d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0"></path>
                                <path
                                        d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0"></path>
                            </svg>
                        </svg>

                    </a>
                </div>

                <div class="socials__item">
                    <a href="<?= config('social_whatsapp_link') ?>" target="_blank" class="socials__link">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                             xmlns="http://www.w3.org/2000/svg">

                            <circle cx="21" cy="21" r="20.5"></circle>
                            <svg height="26pt" viewBox="-230 -220 900 900" width="26pt"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="m544.386719 93.007812c-59.875-59.945312-139.503907-92.9726558-224.335938-93.007812-174.804687 0-317.070312 142.261719-317.140625 317.113281-.023437 55.894531 14.578125 110.457031 42.332032 158.550781l-44.992188 164.335938 168.121094-44.101562c46.324218 25.269531 98.476562 38.585937 151.550781 38.601562h.132813c174.785156 0 317.066406-142.273438 317.132812-317.132812.035156-84.742188-32.921875-164.417969-92.800781-224.359376zm-224.335938 487.933594h-.109375c-47.296875-.019531-93.683594-12.730468-134.160156-36.742187l-9.621094-5.714844-99.765625 26.171875 26.628907-97.269531-6.269532-9.972657c-26.386718-41.96875-40.320312-90.476562-40.296875-140.28125.054688-145.332031 118.304688-263.570312 263.699219-263.570312 70.40625.023438 136.589844 27.476562 186.355469 77.300781s77.15625 116.050781 77.132812 186.484375c-.0625 145.34375-118.304687 263.59375-263.59375 263.59375zm144.585938-197.417968c-7.921875-3.96875-46.882813-23.132813-54.148438-25.78125-7.257812-2.644532-12.546875-3.960938-17.824219 3.96875-5.285156 7.929687-20.46875 25.78125-25.09375 31.066406-4.625 5.289062-9.242187 5.953125-17.167968 1.984375-7.925782-3.964844-33.457032-12.335938-63.726563-39.332031-23.554687-21.011719-39.457031-46.960938-44.082031-54.890626-4.617188-7.9375-.039062-11.8125 3.476562-16.171874 8.578126-10.652344 17.167969-21.820313 19.808594-27.105469 2.644532-5.289063 1.320313-9.917969-.664062-13.882813-1.976563-3.964844-17.824219-42.96875-24.425782-58.839844-6.4375-15.445312-12.964843-13.359374-17.832031-13.601562-4.617187-.230469-9.902343-.277344-15.1875-.277344-5.28125 0-13.867187 1.980469-21.132812 9.917969-7.261719 7.933594-27.730469 27.101563-27.730469 66.105469s28.394531 76.683594 32.355469 81.972656c3.960937 5.289062 55.878906 85.328125 135.367187 119.648438 18.90625 8.171874 33.664063 13.042968 45.175782 16.695312 18.984374 6.03125 36.253906 5.179688 49.910156 3.140625 15.226562-2.277344 46.878906-19.171875 53.488281-37.679687 6.601563-18.511719 6.601563-34.375 4.617187-37.683594-1.976562-3.304688-7.261718-5.285156-15.183593-9.253906zm0 0"
                                      fill-rule="evenodd"/>
                            </svg>
                        </svg>

                    </a>
                </div>

            </div>
        </div>
    </div>
</footer>
