<?php
/**
 * Created by PhpStorm.
 * User: Marco Aurélio Maturana Silveira
 * Date: 19/08/17
 * Time: 23:40
 */

namespace Solid\Html;

use PHPUnit\Framework\TestCase;

/**
 * Class HtmlTest
 * @package Solid\Html
 */
class HtmlTest extends TestCase
{
    /**
     * Test method for the Html class
     *
     * @author Marco Aurélio Maturana Silveira - 20/08/17 00:17
     */
    public function testCriarTagImgComSrc()
    {
        $html   = new Html;
        $img    = $html->img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png">', '<img src="img/photo.png">');
    }

    /**
     * Test method for create a html tag <a> whith a <img> tag
     *
     * @author Marco Aurélio Maturana Silveira - 20/08/17 00:31
     */
    public function testCriarTagComImgAncora()
    {
        $html   = new Html;
        $img    = $html->img('img/photo.png');

        $a      = $html->a('http://www.example.com.br', $img);

        $this->assertEquals('<a href="http://www.example.com.br"><img src="img/photo.png"></a>', $a);
    }

    public function testCriarTagAComClassEId()
    {
        $html   = new Html;

        $a      = $html->a('http://www.example.com.br', 'Meu Site');
        $a->attributes([
            'class' => 'btn btn-default'
        ]);

        $this->assertEquals('<a href="http://www.example.com.br" class="btn btn-default">Meu Site</a>', $a);
    }

    public function testCriarTagAComClassEIdComModoEstatico()
    {
        $a      = Html::a('http://www.example.com.br', 'Meu Site');
        $a->attributes([
            'class' => 'btn btn-default'
        ]);

        $this->assertEquals('<a href="http://www.example.com.br" class="btn btn-default">Meu Site</a>', $a);
    }
}
