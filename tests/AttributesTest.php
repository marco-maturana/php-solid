<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 20/08/17
 * Time: 15:13
 */

namespace Solid\Html;

use PHPUnit\Framework\TestCase;

class AttributesTest extends TestCase
{
    public function testCriarAtributosHtmlParaTags(){
        $attributes = new Attributes([
           'class'      => 'btn btn-default',
           'data-modal' => '#login',
           'id'         => 'login'
        ]);

        $this->assertEquals(' class="btn btn-default" data-modal="#login" id="login"', $attributes);
    }
}