<?php

namespace Tests\Feature;

use App\Models\FloorData;
use App\Models\LandmarkData;
use App\Models\ShopData;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShopControllerTest extends TestCase
{
    /**
     * ShopController index test .
     *
     * @test
     * @return void
     */
    public function index_正常ケース ()
    {
        $user = User::factory()->create();

        $landmark = LandmarkData::factory()->create();
        $floor = FloorData::factory()->create();
        ShopData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('shop.index',[$landmark->id,
                                        $floor->id]));

        $response->assertStatus(200);
    }

    /**
     * ShopController create test .
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
            ->get(route('shop.create',$landmark->id));

        $response->assertStatus(200);
    }

    /**
     * ShopController store test .
     *
     * @test
     * @return void
     */
    public function store_正常ケース ()
    {
        $user = User::factory()->create();

        $landmark = LandmarkData::factory()->create();
        $floor = FloorData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->post(route('shop.store',
                [
                    'landmark_coordinate_id' => $landmark->id,
                    'floor_coordinate_id' => $floor->id,
                    'name' => 'test shop name',
                    'about' => 'all about shop',
                    'floor' => $floor->id,
                    'x1' => '111',
                    'x2' => '115',
                    'y1' => '55',
                    'y2' => '60',
                    'x_point' => '33',
                    'y_point' => '44',
                    'start_date' => date('Y-m-d'),
                    'end_date' => '9999/12/31',
                ])
            );
        $response->assertStatus(302);
    }

    /**
     * ShopController show test .
     *
     * @test
     * @return void
     */
    public function show_正常ケース ()
    {
        $user = User::factory()->create();
        LandmarkData::factory()->create();
        FloorData::factory()->create();
        $shop = ShopData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('shop.show',$shop->id));

        $response->assertStatus(200);
    }

    /**
     * ShopController edit test .
     *
     * @test
     * @return void
     */
    public function edit_正常ケース ()
    {
        $user = User::factory()->create();
        LandmarkData::factory()->create();
        FloorData::factory()->create();
        $shop = ShopData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('shop.edit',$shop->id));

        $response->assertStatus(200);
    }

    /**
     * ShopController update test .
     *
     * @test
     * @return void
     */
    public function update_正常ケース ()
    {
        $user = User::factory()->create();
        $landmark = LandmarkData::factory()->create();
        $floor = FloorData::factory()->create();
        $shop = ShopData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->put(route('shop.update',
                [$shop->id,
                'landmark_coordinate_id' => $landmark->id,
                'floor' => $floor->id,
                'name' => 'test shop name',
                'about' => 'all about shop',
                'x1' => '111',
                'x2' => '115',
                'y1' => '55',
                'y2' => '60',
                'x_point' => '33',
                'y_point' => '44',
                'start_date' => date('Y-m-d'),
                'end_date' => '9999/12/31',
                ])
            );

        $response->assertStatus(302);
    }

    /**
     * ShopController destroy test .
     *
     * @test
     * @return void
     */
    public function destroy_正常ケース ()
    {
        $user = User::factory()->create();
        LandmarkData::factory()->create();
        FloorData::factory()->create();
        $shop = ShopData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->delete(route('shop.destroy',$shop->id));

        $response->assertStatus(302);
    }
}
