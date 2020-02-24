<div class="aside-nav js-aside-nav">
    <div class="aside-nav__overlay js-aside-nav-overlay"></div>
    <div class="aside-nav__inner aside-nav__inner--menu js-aside-nav-inner" data-nav="menu">
        <div class="aside-nav__header">
            <div class="aside-nav__close js-toggle-aside-nav">

                <div class="svg-icon svg-icon--close" aria-hidden="true">
                    <svg class="svg-icon__link">
                        <use xlink:href="#close"></use>
                    </svg>
                </div>

            </div>
        </div>

        <div class="aside-nav__content">
            <div class="aside-nav__scroller js-aside-nav-scroller" data-nav="menu">
                <div class="aside-nav__body">

                    <ul class="aside-nav__menu-list">

                        <?
                        foreach (config('nav_menu') as $path => $display_name) {
                            $is_current_page = get_current_page() === $path
                                || (get_current_page() === 'home' && $path === '');

                            $class_attr = $is_current_page ? ' class="is-active"' : '';

                            echo '<li' . $class_attr . '><a href="/' . $path . '">' . $display_name . '</a></li>';
                        }
                        ?>

                    </ul>
                </div>

                <div class="aside-nav__footer">


                    <div class="socials">
                        <div class="socials__items">

                            <div class="socials__item">
                                <a href="https://vk.com/resort_betta" target="_blank" class="socials__link">
                                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">

                                        <circle cx="21" cy="21" r="20.5"></circle>
                                        <path
                                                d="M30.0887 25.8599C29.4337 25.0742 28.6629 24.4037 27.9336 23.6917C27.2756 23.0499 27.2341 22.6776 27.763 21.9369C28.3403 21.1284 28.9611 20.351 29.5436 19.5462C30.0874 18.794 30.6432 18.0439 30.9293 17.1434C31.1108 16.5705 30.9503 16.3174 30.3628 16.2171C30.2616 16.1995 30.1569 16.1986 30.0539 16.1986L26.5681 16.1945C26.1388 16.1881 25.9015 16.3753 25.7497 16.7558C25.5447 17.2701 25.3334 17.784 25.0892 18.2804C24.5352 19.4057 23.9164 20.4935 23.0489 21.4145C22.8576 21.6177 22.646 21.8744 22.3264 21.7686C21.9265 21.6227 21.8086 20.9638 21.8153 20.7411L21.8118 16.7177C21.7343 16.143 21.6069 15.8867 21.0362 15.775L17.4153 15.7757C16.932 15.7757 16.6896 15.9624 16.4315 16.2647C16.2827 16.4394 16.2377 16.5527 16.5437 16.6106C17.1447 16.7246 17.4832 17.1135 17.5731 17.7161C17.7172 18.6789 17.7071 19.6456 17.6241 20.6122C17.5997 20.8945 17.5512 21.1761 17.4392 21.4396C17.2641 21.8539 16.9814 21.9382 16.61 21.6833C16.2738 21.4526 16.0376 21.127 15.8064 20.8001C14.938 19.5731 14.2451 18.2498 13.6802 16.8593C13.5169 16.4576 13.2354 16.2141 12.8097 16.2075C11.7639 16.1908 10.7179 16.1881 9.67212 16.2084C9.04287 16.2203 8.85524 16.5258 9.1115 17.0962C10.2505 19.6298 11.5184 22.093 13.1733 24.3369C14.0231 25.4885 14.9986 26.5051 16.2589 27.2255C17.6873 28.0422 19.2248 28.2879 20.8443 28.2122C21.6025 28.1767 21.8303 27.9795 21.8654 27.2237C21.8891 26.7066 21.9477 26.1925 22.2028 25.7278C22.4532 25.2719 22.8323 25.185 23.2694 25.4686C23.488 25.6107 23.6722 25.7915 23.8462 25.9821C24.273 26.449 24.6845 26.93 25.1275 27.3812C25.6831 27.9466 26.3413 28.2806 27.1689 28.2125L30.3726 28.2132C30.8888 28.1794 31.1564 27.5465 30.86 26.9704C30.6519 26.5668 30.3787 26.2075 30.0887 25.8599Z"></path>
                                    </svg>

                                </a>
                            </div>

                            <div class="socials__item">
                                <a href="https://www.instagram.com/resort_betta" target="_blank"
                                   class="socials__link">
                                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">

                                        <circle cx="21" cy="21" r="20.5"></circle>
                                        <path
                                                d="M30.0887 25.8599C29.4337 25.0742 28.6629 24.4037 27.9336 23.6917C27.2756 23.0499 27.2341 22.6776 27.763 21.9369C28.3403 21.1284 28.9611 20.351 29.5436 19.5462C30.0874 18.794 30.6432 18.0439 30.9293 17.1434C31.1108 16.5705 30.9503 16.3174 30.3628 16.2171C30.2616 16.1995 30.1569 16.1986 30.0539 16.1986L26.5681 16.1945C26.1388 16.1881 25.9015 16.3753 25.7497 16.7558C25.5447 17.2701 25.3334 17.784 25.0892 18.2804C24.5352 19.4057 23.9164 20.4935 23.0489 21.4145C22.8576 21.6177 22.646 21.8744 22.3264 21.7686C21.9265 21.6227 21.8086 20.9638 21.8153 20.7411L21.8118 16.7177C21.7343 16.143 21.6069 15.8867 21.0362 15.775L17.4153 15.7757C16.932 15.7757 16.6896 15.9624 16.4315 16.2647C16.2827 16.4394 16.2377 16.5527 16.5437 16.6106C17.1447 16.7246 17.4832 17.1135 17.5731 17.7161C17.7172 18.6789 17.7071 19.6456 17.6241 20.6122C17.5997 20.8945 17.5512 21.1761 17.4392 21.4396C17.2641 21.8539 16.9814 21.9382 16.61 21.6833C16.2738 21.4526 16.0376 21.127 15.8064 20.8001C14.938 19.5731 14.2451 18.2498 13.6802 16.8593C13.5169 16.4576 13.2354 16.2141 12.8097 16.2075C11.7639 16.1908 10.7179 16.1881 9.67212 16.2084C9.04287 16.2203 8.85524 16.5258 9.1115 17.0962C10.2505 19.6298 11.5184 22.093 13.1733 24.3369C14.0231 25.4885 14.9986 26.5051 16.2589 27.2255C17.6873 28.0422 19.2248 28.2879 20.8443 28.2122C21.6025 28.1767 21.8303 27.9795 21.8654 27.2237C21.8891 26.7066 21.9477 26.1925 22.2028 25.7278C22.4532 25.2719 22.8323 25.185 23.2694 25.4686C23.488 25.6107 23.6722 25.7915 23.8462 25.9821C24.273 26.449 24.6845 26.93 25.1275 27.3812C25.6831 27.9466 26.3413 28.2806 27.1689 28.2125L30.3726 28.2132C30.8888 28.1794 31.1564 27.5465 30.86 26.9704C30.6519 26.5668 30.3787 26.2075 30.0887 25.8599Z"></path>
                                    </svg>

                                </a>
                            </div>

                            <div class="socials__item">
                                <a href="#" target="_blank" class="socials__link">
                                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">

                                        <circle cx="21" cy="21" r="20.5"></circle>
                                        <path
                                                d="M30.0887 25.8599C29.4337 25.0742 28.6629 24.4037 27.9336 23.6917C27.2756 23.0499 27.2341 22.6776 27.763 21.9369C28.3403 21.1284 28.9611 20.351 29.5436 19.5462C30.0874 18.794 30.6432 18.0439 30.9293 17.1434C31.1108 16.5705 30.9503 16.3174 30.3628 16.2171C30.2616 16.1995 30.1569 16.1986 30.0539 16.1986L26.5681 16.1945C26.1388 16.1881 25.9015 16.3753 25.7497 16.7558C25.5447 17.2701 25.3334 17.784 25.0892 18.2804C24.5352 19.4057 23.9164 20.4935 23.0489 21.4145C22.8576 21.6177 22.646 21.8744 22.3264 21.7686C21.9265 21.6227 21.8086 20.9638 21.8153 20.7411L21.8118 16.7177C21.7343 16.143 21.6069 15.8867 21.0362 15.775L17.4153 15.7757C16.932 15.7757 16.6896 15.9624 16.4315 16.2647C16.2827 16.4394 16.2377 16.5527 16.5437 16.6106C17.1447 16.7246 17.4832 17.1135 17.5731 17.7161C17.7172 18.6789 17.7071 19.6456 17.6241 20.6122C17.5997 20.8945 17.5512 21.1761 17.4392 21.4396C17.2641 21.8539 16.9814 21.9382 16.61 21.6833C16.2738 21.4526 16.0376 21.127 15.8064 20.8001C14.938 19.5731 14.2451 18.2498 13.6802 16.8593C13.5169 16.4576 13.2354 16.2141 12.8097 16.2075C11.7639 16.1908 10.7179 16.1881 9.67212 16.2084C9.04287 16.2203 8.85524 16.5258 9.1115 17.0962C10.2505 19.6298 11.5184 22.093 13.1733 24.3369C14.0231 25.4885 14.9986 26.5051 16.2589 27.2255C17.6873 28.0422 19.2248 28.2879 20.8443 28.2122C21.6025 28.1767 21.8303 27.9795 21.8654 27.2237C21.8891 26.7066 21.9477 26.1925 22.2028 25.7278C22.4532 25.2719 22.8323 25.185 23.2694 25.4686C23.488 25.6107 23.6722 25.7915 23.8462 25.9821C24.273 26.449 24.6845 26.93 25.1275 27.3812C25.6831 27.9466 26.3413 28.2806 27.1689 28.2125L30.3726 28.2132C30.8888 28.1794 31.1564 27.5465 30.86 26.9704C30.6519 26.5668 30.3787 26.2075 30.0887 25.8599Z"></path>
                                    </svg>

                                </a>
                            </div>

                        </div>
                    </div><!-- socials -->
                </div>
            </div>
        </div>
    </div>
</div><!-- aside-nav -->