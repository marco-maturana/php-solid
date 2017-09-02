<?php
/**
 * Created by PhpStorm.
 * User: Marco Aurélio Maturana Silveira
 * Date: 20/08/17
 * Time: 15:09
 */

namespace Solid\Html;


class Attributes implements AttributesContract
{
    private $attributes;

    public function __construct(array $attributes = null)
    {
        if ($attributes)
            $this->attributes   = $attributes;
    }

    public function setAttributes(array $attributes)
    {
        $this->attributes   = $attributes;
    }

    public function __toString() : string
    {
        $result     = [];

        foreach ($this->attributes as $key=>$value)
            $result[] = $key . '="' . $value . '"';

        return ' ' . implode(' ', $result);
    }
}