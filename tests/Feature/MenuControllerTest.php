<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MenuControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function Menu_正常ログイン()
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('multinavi.menu'));

        $response->assertStatus(200);
    }
}
