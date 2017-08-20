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

        $this->assertEquals('<img src="img/photo.png">', $img);
    }

    public function testCriarTagComImgAncora()
    {
        $html   = new Html;
        $img    = $html->img('img/photo.png');

        $a      = $html->a('http://www.example.com.br', $img);

        $this->assertEquals('<a href="http://www.example.com.br"><img src="img/photo.png"></a>', $a);
    }
}
