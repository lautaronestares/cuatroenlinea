<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RowTest extends TestCase
{
    public function test_example()
    {
	$response = $this->get('/jugar/31523');
	$response->assertSee("grid-cols-7 grid-rows-6");

	$value = (preg_match_all('/<div class="bg-(?:gray|red|sky)/', $response->getContent()));
	$this->assertTrue($value===42, "Debería haber 42 celdas, pero hay ".$value."."); //el tablero debería contener 42 celdas grises, rojas o celestes
    }
}