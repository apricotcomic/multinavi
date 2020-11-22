<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LandmarkControllerTest extends TestCase
{
    /**
     * LandmarkController test .
     *
     * @test
     * @return void
     */
    public function index_正常ケース ()
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('landmark.index'));

        $response->assertStatus(200);
    }
}
