<?php
//function nav_menu($sep = ' | ')
//{
//    $nav_menu = '';
//    $nav_items = config('nav_menu');
//    foreach ($nav_items as $uri => $name) {
//        $class = str_replace('page=', '', $_SERVER['QUERY_STRING']) == $uri ? ' active' : '';
//        $url = config('site_url') . '/' . (config('pretty_uri') || $uri == '' ? '' : '?page=') . $uri;
//
//        $nav_menu .= '<a href="' . $url . '" title="' . $name . '" class="item ' . $class . '">' . $name . '</a>' . $sep;
//    }
//
//    echo trim($nav_menu, $sep);
//}

/**
 * Displays page title. It takes the data from
 * URL, it replaces the hyphens with spaces and
 * it capitalizes the words.
 */
function page_title()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';

    echo ucwords(str_replace('-', ' ', $page));
}

/**
 * Displays page content. It takes the data from
 * the static pages inside the pages/ directory.
 * When not found, display the 404 error page.
 */
function page_content()
{
    $content_file = get_page_path() . '/content.phtml';

    if (file_exists($content_file)) {
        require $content_file;
    }
}

function page_modules() {
    $active_modules = page_config('modules');
    if(!isset($active_modules)) {
        return;
    }

    foreach($active_modules as $i => $module) {
        $module_file = getcwd() . config('modules_path') . '/' . $module . '.php';

        if(file_exists($module_file)) {
            require $module_file;
        }
    }
}

function page_head()
{
    $content_file = get_page_path() . '/head.phtml';
    echo file_get_contents($content_file);
}

function page_config($config_key = '', $default_value = null) {
    $page_config = config('pages_config');
    $current_page = get_current_page();

    if(isset($page_config[$current_page][$config_key])) {
        return $page_config[$current_page][$config_key];
    } else {
        return $default_value;
    }
}


function get_page_path()
{
    $path = getcwd() . '/' . config('content_path') . '/' . get_current_page();

    if(is_dir($path)) {
        return $path;
    } else {
        return getcwd() . '/' . config('content_path') . '/' . '404';
    }
}

function get_current_page()
{
    return isset($_GET['page']) ? $_GET['page'] : 'home';
}

function get_query_params() {
    if(isset($_SERVER['REQUEST_URI'])) {
        $parts = parse_url($_SERVER['REQUEST_URI']);

        if(isset($parts['query'])) {
            parse_str($parts['query'], $query);
            return $query;
        }
    }

    return Array();
}

/**
 * Starts everything and displays the template.
 */
function init()
{
    require 'template/template.php';
}
