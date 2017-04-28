<?php

namespace Example\Controllers\Home;

use PHPUnit\Framework\TestCase;
use Sifo\Bootstrap;

class HomeControllerTest extends TestCase
{
    public static function setUpBeforeClass()
    {
        define('ROOT_PATH', dirname(__FILE__, 6));
        $_SERVER['HTTP_HOST'] = 'localhost';
        Bootstrap::$instance = 'example';
    }

    /** @test */
    public function shouldSetCorrectlyLayout()
    {
        $controller = new HomeController();
        $controller->build();

        $layout = str_replace(dirname($controller->getLayout(), 2), '', $controller->getLayout());

        $this->assertEquals('/home/index.tpl', $layout);
    }
}
