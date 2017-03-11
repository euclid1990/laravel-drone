<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasic1()
    {
        $this->visit('/')
             ->see('Frontend');
    }

    public function testBasic2()
    {
        $this->assertEquals('foo', 'fooo');
    }
}
