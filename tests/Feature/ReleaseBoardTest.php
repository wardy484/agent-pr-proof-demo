<?php

namespace Tests\Feature;

use Tests\TestCase;

class ReleaseBoardTest extends TestCase
{
    public function test_the_release_board_lists_every_release_by_default(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertViewHas('selectedStatus', 'all')
            ->assertSee('ShipLog release board')
            ->assertSee('Customer export')
            ->assertSee('Invoice reminders')
            ->assertSee('Team permissions')
            ->assertSee('aria-current="page"', false);
    }

    public function test_the_release_board_can_be_filtered_by_status(): void
    {
        $response = $this->get('/?status=shipped');

        $response
            ->assertOk()
            ->assertViewHas('selectedStatus', 'shipped')
            ->assertSee('Customer export')
            ->assertDontSee('Invoice reminders')
            ->assertDontSee('Team permissions')
            ->assertSee('aria-current="page"', false);
    }

    public function test_an_unknown_status_falls_back_to_every_release(): void
    {
        $response = $this->get('/?status=unknown');

        $response
            ->assertOk()
            ->assertViewHas('selectedStatus', 'all')
            ->assertSee('Customer export')
            ->assertSee('Invoice reminders')
            ->assertSee('Team permissions');
    }
}
