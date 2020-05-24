<nav class="app-header__nav">
    <ul>
        <?php
        $menu_items = config('nav_menu');
        $menu_size = sizeof($menu_items);

        $left_count = floor($menu_size / 2) + $menu_size % 2;

        $current_page = get_current_page();

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

            $is_current_page = $current_page === $path || ($current_page === 'home' && $path === '');

            $class_attr = $is_current_page ? ' class="is-active"' : '';

            echo '<li' . $class_attr . '><a href="/' . $path . '">' . $display_name . '</a></li>';

            $counter++;
        }
        ?>
    </ul>
</nav>





