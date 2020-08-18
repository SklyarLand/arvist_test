<?php


namespace App\Core;


/**
 * Class View
 * @package App\Core
 * Стандартный класс представления
 */
class View
{
    /**
     * @var
     */

    /**
     * @param $content_view
     * @param $template_view
     * @param null $data
     */
    function generate($content_view, $template_view, $data = null)
    {
        if ($data != null) {
            extract($data);
        }
        include dirname(__FILE__)."/../views/layouts/$template_view";
    }
}