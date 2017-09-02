<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 22/08/17
 * Time: 23:00
 */

namespace Solid\Html\Tag;


class A extends Tags
{
    public function validate()
    {
        if(!isset($this->attrs[0]))
            throw new \Exception('Attribute href not found');

        if(!is_string($this->attrs[0]))
            throw new \Exception('Attribute href must be string');

        if(!isset($this->attrs[1]))
            throw new \Exception('Attribute anchor text not found');

        if(!is_string($this->attrs[1]))
            throw new \Exception('Attribute anchor text must be string');
    }

    public function __toString() : string
    {
        return '<a href="' . $this->attrs[0] . '"' . $this->optional_attrs . '>' . $this->attrs[1] . '</a>';
    }
}