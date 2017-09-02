<?php
/**
 * Created by PhpStorm.
 * User: Marco Aurelio Maturana Silveira
 * Date: 19/08/17
 * Time: 23:47
 */

namespace Solid\Html;

/**
 * Class Html
 * @package Solid\Html
 */
class Html
{
    public function __call($name, $arguments)
    {
        return $this->createTags($name, $arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return self::createTags($name, $arguments);
    }

    protected static function createTags(string $name, array $arguments)
    {
        $class      = "\\Solid\Html\\Tag\\" . ucfirst($name);

        array_unshift($arguments, new Attributes());

        $reflection = new \ReflectionClass($class);
        return $reflection->newInstanceArgs($arguments);
    }
}