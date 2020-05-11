<?php

require_once 'apartments_data.php';

function get_apartments_by_persons($count = 0)
{
    // FIXME Но ведь 1 может залететь в 2-3

    $result = get_apartments();

    if ($count == 0) {
        return $result;
    }

    foreach ($result as $k => $apartment) {
        $min_persons = $apartment['min_persons'];
        $max_persons = $apartment['max_persons'];


        // FIXME open revert
        if (!($min_persons <= $count && $count <= $max_persons)) {
            unset($result[$k]);
        }
    }

    return $result;
}

function get_apartment_by_id($apartment_id = 0)
{
    return get_apartments()[$apartment_id];
}

function get_apartment_images($apartment_id = 0)
{
    $relative_dir = '/img/apartments/apartment_' . $apartment_id;
    $image_dir = getcwd() . $relative_dir;

    if(is_dir($image_dir)) {
        $images = scandir($image_dir);

        if($images) {
            foreach ($images as $k => $image) {
                if (
                       strripos($image, 'jpeg')
                    || strripos($image, 'jpg')
                    || strripos($image, 'png')
                )
                {
                    $images[$k] = $relative_dir . '/' . $image;
                } else {
                    // remove non-image files
                    unset($images[$k]);
                }
            }

            return $images;
        }

        return Array();
    }
}

function get_see_also_items() {
    return [4, 6, 7];
}
