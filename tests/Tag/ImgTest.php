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

class ImgTest extends TestCase
{
    public function testCriarTagImgComSrc()
    {
        $img   = new Img(new Attributes, 'img/photo.png');

        $this->assertEquals('<img src="img/photo.png">', $img);
    }

    public function testCriarTagImgComSrcAtributosHtmlAdicionais()
    {
        $img   = new Img(new Attributes, 'img/photo.png');
        $attributes = [
           'class'  => 'image-responsive'
        ];

        $img->attributes($attributes);

        $this->assertEquals('<img src="img/photo.png" class="image-responsive">', $img);
    }
}