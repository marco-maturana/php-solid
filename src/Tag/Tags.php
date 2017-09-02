<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 22/08/17
 * Time: 22:42
 */

namespace Solid\Html\Tag;

use Solid\Html\AttributesContract;

abstract class Tags implements TagsContract
{
    protected $attrs;
    protected $optional_attrs;
    protected $attributesClass;

    public function __construct(AttributesContract $attibutes)
    {
        $this->attrs = func_get_args();

        foreach ($this->attrs as $key => &$value) {
            if (is_a($value, 'Solid\Html\Tag\TagsContract'))
                $value = (string)$value;

            if (is_a($value, 'Solid\Html\AttributesContract')) {
                $this->attributesClass = $attibutes;
                unset($this->attrs[$key]);
            }
        }

        $this->attrs = array_values($this->attrs);

        $this->validate();
    }

    public function attributes(array $attributes)
    {
        $this->attributesClass->setAttributes($attributes);
        $this->optional_attrs = (string) $this->attributesClass;
    }

}