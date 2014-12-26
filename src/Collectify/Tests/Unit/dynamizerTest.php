<?php

namespace Collectify\Tests\Unit;


use Collectify\Services\Dynamizer;

class dynamizerTest extends \PHPUnit_Framework_TestCase
{
    public function testIfDynamizerCanDynamize()
    {
        $view = '{{ var }}';
        $parameters = array('var' => 'myVar');
        $result = 'myVar';

        $dynamizer = new Dynamizer();
        $dynamizer->setParameters($parameters);
        $dynamizer->setView($view);

        $dynamizedView = $dynamizer->dynamize();

        $this->assertEquals($dynamizedView, $result);
    }
}