<?php

namespace Tests\Feature;

use App\Models\FloorData;
use App\Models\LandmarkData;
use App\Models\ShopData;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FloorControllerTest extends TestCase
{
    /**
     * FloorController index test .
     *
     * @test
     * @return void
     */
    public function index_正常ケース ()
    {
        $user = User::factory()->create();

        $landmark = LandmarkData::factory()->create();
        FloorData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('floor.index',$landmark->id));

        $response->assertStatus(200);
    }

    /**
     * FloorController create test .
     *
     * @test
     * @return void
     */
    public function create_正常ケース ()
    {
        $user = User::factory()->create();

        $landmark = LandmarkData::factory()->create();
        FloorData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('floor.create',$landmark->id));

        $response->assertStatus(200);
    }

    /**
     * FloorController store test .
     *
     * @test
     * @return void
     */
    public function store_正常ケース ()
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->post(route('floor.store',
                [
                    'landmark_coordinate_id' => '1',
                    'name' => 'test floor name',
                    'file' => 'floor_map.png',
                    'x1' => '111',
                    'x2' => '115',
                    'y1' => '55',
                    'y2' => '60',
                    'z' => '33',
                    'start_date' => date('Y-m-d'),
                    'end_date' => '9999/12/31',
                ])
            );
        $response->assertStatus(302);
    }

    /**
     * FloorController show test .
     *
     * @test
     * @return void
     */
    public function show_正常ケース ()
    {
        $user = User::factory()->create();
        LandmarkData::factory()->create();
        $floor = FloorData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('floor.show',$floor->id));

        $response->assertStatus(200);
    }

    /**
     * FloorController edit test .
     *
     * @test
     * @return void
     */
    public function edit_正常ケース ()
    {
        $user = User::factory()->create();
        LandmarkData::factory()->create();
        $floor = FloorData::factory()->create();
        ShopData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('floor.edit',$floor->id));

        $response->assertStatus(200);
    }

    /**
     * LandmarkController update test .
     *
     * @test
     * @return void
     */
    public function update_正常ケース ()
    {
        $user = User::factory()->create();
        LandmarkData::factory()->create();
        $floor = FloorData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->put(route('floor.update',
                [$floor->id,
                'id' => '1',
                'name' => 'test floor name',
                'file' => 'floor_update.png',
                'landmark_coordinate_id' => '1',
                'x1' => '111',
                'x2' => '115',
                'y1' => '55',
                'y2' => '60',
                'z' => '33',
                'start_date' => date('Y-m-d'),
                'end_date' => '9999/12/31',
                ])
            );

        $response->assertStatus(302);
    }

    /**
     * LandmarkController destroy test .
     *
     * @test
     * @return void
     */
    public function destroy_正常ケース ()
    {
        $user = User::factory()->create();
        LandmarkData::factory()->create();
        $floor = FloorData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->delete(route('floor.destroy',$floor->id));

        $response->assertStatus(302);
    }
}
