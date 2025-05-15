<?php

namespace Tests\Feature;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_an_event()
    {
        $event = Event::create([
            'name' => 'Evento de prueba',
            'date' => '2025-06-01',
            'location' => 'Córdoba',
        ]);

        $this->assertDatabaseHas('events', [
            'name' => 'Evento de prueba',
            'location' => 'Córdoba',
        ]);
    }
}
