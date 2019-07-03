<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this -> get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Usuarios');
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
