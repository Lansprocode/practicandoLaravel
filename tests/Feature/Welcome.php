<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class Welcome extends TestCase
{
    /** @test */

    function it_welcomes_users_with_nickname()
    {
    	$this->get('saludo/luis/lans')
    	assertStatus(200)
    	assertSee('Bienvenido Luis, tu apodo es Lans');
    }

     /** @test */

    function it_welcomes_users_without_nickname()
    {
    	$this->get('saludo/luis')
    	->aseertStatus(200)
    	->assertSee('Bienvenido Luis');
    }
}
