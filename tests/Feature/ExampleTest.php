<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_release_board_lists_each_release(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('ShipLog release board')
            ->assertSee('Customer export')
            ->assertSee('Invoice reminders')
            ->assertSee('Team permissions');
    }
}
