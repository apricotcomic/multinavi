<?php

namespace Tests\Feature;

use App\Models\LandmarkData;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LandmarkControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void {
        parent::setUp();

    }

    public function tearDown(): void {
        Artisan::call('migrate:refresh --database=contents_ja_test --path=database/migrations/contents_ja');
        Artisan::call('migrate:refresh --database=location_test --path=database/migrations/location');
        parent::tearDown();
    }


    /**
     * LandmarkController index test .
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

    /**
     * LandmarkController create test .
     *
     * @test
     * @return void
     */
    public function create_正常ケース ()
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('landmark.create'));

        $response->assertStatus(200);
    }

    /**
     * LandmarkController store test .
     *
     * @test
     * @return void
     */
    public function store_正常ケース ()
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->post(route('landmark.store',
                [
                    'landmark_coordinate_id' => '1',
                    'name' => 'test name',
                    'zip' => '123-4567',
                    'address' => '東京都新宿区',
                    'tel' => '03-1234-5678',
                    'fax' => '03-9876-5432',
                    'email' => 'test@email.com',
                    'x1' => '111',
                    'x2' => '115',
                    'y1' => '55',
                    'y2' => '60',
                    'database' => 'contents_ja',
                    'start_date' => date('Y-m-d'),
                    'end_date' => '9999/12/31',
                ])
            );
        $response->assertStatus(302);
    }

    /**
     * LandmarkController show test .
     *
     * @test
     * @return void
     */
    public function show_正常ケース ()
    {
        $user = User::factory()->create();
        $landmark = LandmarkData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/landmark',['landmark' => $landmark->id]);

        $response->assertStatus(200);
    }

    /**
     * LandmarkController edit test .
     *
     * @test
     * @return void
     */
    public function edit_正常ケース ()
    {
        $user = User::factory()->create();
        $landmark = LandmarkData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/landmark',['landmark' => $landmark->id]);

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
        $landmark = LandmarkData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->put(route('landmark.update',[$landmark->id,
                'id' => '1',
                'name' => 'test name',
                'zip' => '123-4567',
                'address' => '東京都新宿区',
                'tel' => '03-1234-5678',
                'fax' => '03-9876-5432',
                'email' => 'test@email.com',
                'x1' => '111',
                'x2' => '115',
                'y1' => '55',
                'y2' => '60',
                'database' => 'contents_ja',
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
        $landmark = LandmarkData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->delete(route('landmark.destroy',$landmark->id));

        $response->assertStatus(302);
    }

}


