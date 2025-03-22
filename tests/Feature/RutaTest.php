<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RutaTest extends TestCase
{
    /** @test */
    public function la_pagina_de_inicio_se_carga_correctamente()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Bienvenido'); 
    }

    /** @test */
    public function la_ruta_de_usuarios_funciona()
    {
        $response = $this->get('/usuarios');
        $response->assertStatus(200);
        $response->assertSee('Bienvenido al módulo de usuarios');
    }

    /** @test */
    public function la_ruta_de_usuario_por_id_funciona()
    {
        $response = $this->get('/usuarios/5');
        $response->assertStatus(200);
        $response->assertSee('Bienvenido al perfil del usuario con ID: 5');
    }

    /** @test */
    public function la_ruta_de_cursos_funciona()
    {
        $response = $this->get('/cursos');
        $response->assertStatus(200);
        $response->assertSee('Bienvenido al módulo de cursos');
    }

    /** @test */
    public function la_ruta_de_curso_por_id_funciona()
    {
        $response = $this->get('/cursos/10');
        $response->assertStatus(200);
        $response->assertSee('Bienvenido al curso con ID: 10');
    }
}
