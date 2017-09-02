<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 22/08/17
 * Time: 22:47
 */

namespace Solid\Html\Tag;

use PHPUnit\Framework\TestCase;
use Solid\Html\Attributes;

class ATest extends TestCase
{
    public function testCriarTagAncora()
    {
        $a      = new A(new Attributes, 'http://www.example.com.br', 'meu site');

        $this->assertEquals('<a href="http://www.example.com.br">meu site</a>', $a);
    }

    public function testCriarTagAncoraAtributosHtmlAdicionais()
    {
        $a          = new A(new Attributes, '#', 'login');
        $attributes = [
            'class'=>'btn btn-default',
            'data-modal'=>'#login',
            'id'=>'login'];

        $a->attributes($attributes);

        $this->assertEquals('<a href="#" class="btn btn-default" data-modal="#login" id="login">login</a>',  $a);
    }
}