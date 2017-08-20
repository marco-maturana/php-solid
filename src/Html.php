<?php
/**
 * Created by PhpStorm.
 * User: Marco Aurelio Maturana Silveira
 * Date: 19/08/17
 * Time: 23:47
 */

namespace Solid\Html;


class Html
{
    /**
     * @param string $src Source of image to generate new <img> tag
     *
     * @return string Return a string with <img> tag
     */
    public function img(string $src) : string
    {
        return '<img src="' . $src . '">';
    }

    public function a(string $href, string $anchor) : string
    {
        return '<a href="' . $href . '">' . $anchor . '</a>';
    }
}