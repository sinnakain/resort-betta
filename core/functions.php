<?php

function page_head()
{
    $content_file = get_page_path() . '/head.phtml';
    echo file_get_contents($content_file);
}

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
    $path = getcwd() . '/' . config('content_path') . '/' ;
    $page_path = $path . get_current_page();

    if(is_dir($page_path)) {
        return $page_path;
    } else {
        return $path . '404';
    }
}

function get_current_page()
{
    $raw_page = get_page_raw();

    // FIXME HARDCODE
    // FIXME remove to route config!
    $apart_ex = '/reservation\/apartment\/\\d+/';
    if(preg_match($apart_ex, $raw_page)) {
        // remove apartment ID
        $apart_path = substr($raw_page, 0, strrpos($raw_page, '/'));
        return $apart_path;
    }

    return $raw_page;
}

function get_URL_page_params()
{
    $raw_page = get_page_raw();

    // FIXME HARDCODE
    // FIXME remove to route config!
    $apart_ex = '/reservation\/apartment\/\\d+/';
    if(preg_match($apart_ex, $raw_page)) {
        // get apartment ID
        $apart_id = substr($raw_page, strrpos($raw_page, '/') + 1, strlen($raw_page));
        return [ 0 => $apart_id];
    }
}

function get_page_raw()
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
