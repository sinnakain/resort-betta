<nav class="app-header__nav">
    <ul>
        <?php
        $menu_items = config('nav_menu');
        $menu_size = sizeof(config('nav_menu'));

        $left_count = intdiv($menu_size, 2) + $menu_size % 2;


        $counter = 0;
        foreach ($menu_items as $path => $display_name) {



            // show logo
            if ($left_count == $counter) {
                echo '
                        </ul>
                        <a href="/" class="app-logo app-header__logo">
                            <img src="/img/app-logo.svg" alt="">
                        </a>
                        <ul>';

            }

            $is_current_page = get_current_page() === $path
                || (get_current_page() === 'home' && $path === '');

            $class_attr = $is_current_page ? ' class="is-active"' : '';

            echo '<li' . $class_attr . '><a href="/' . $path . '">' . $display_name . '</a></li>';

            $counter++;
        }
        ?>
    </ul>
</nav>





