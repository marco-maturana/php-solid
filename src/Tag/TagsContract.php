<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 22/08/17
 * Time: 22:44
 */

namespace Solid\Html\Tag;


interface TagsContract
{
    public function validate();

    public function __toString(): string ;
}