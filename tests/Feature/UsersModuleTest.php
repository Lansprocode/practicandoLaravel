<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersModuleTest extends TestCase
{

    /** @test */

    public function it_show_the_users()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Listado de usuarios')
        ->assertSee('Joel')
        ->assertSee('Luis');
    }

    /** @test */

    public function it_shows_a_default_if_the_users_is_empty()
    {
        $this->get('/usuarios?empty')
        ->assertStatus(200)
        ->aseertSee('No hay usuarios registrados');
    }


    /** @test */

    function it_loads_the_users_details_page()
    {
    	$this->get('/usuarios/5')
    	->assertStatus(200)
    	->assertSee("Mostrando detalle del usuario: 5");
    }

    /** @test */

    function it_loads_the_new_users_page()
    {
        //$this->withoutExceptionHandling();

    	$this->get('/usuarios/nuevo')
    	->assertStatus(200)
    	->assertSee('Crear nuevo usuario');	
    }


}
