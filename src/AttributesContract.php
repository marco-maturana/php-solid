<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 01/09/17
 * Time: 23:41
 */

namespace Solid\Html;


interface AttributesContract
{
    public function __toString(): string;
    public function setAttributes(array $attributes);
}