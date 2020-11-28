<?php

namespace Tests\Feature;

use App\Models\LandmarkCoordinate;
use App\Models\LandmarkData;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class LandmarkControllerTest extends TestCase
{
    /*use RefreshDatabase;

    public function setUp(): void {
        parent::setUp();

    }

    public function tearDown(): void {
        Artisan::call('migrate:refresh');
        parent::tearDown();
    }
    */

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
     * LandmarkController create test .
     *
     * @test
     * @return void
     */
    public function show_正常ケース ()
    {
        $user = User::factory()->create();
        $landmark_data = LandmarkData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('landmark.show','1'));

        $response->assertStatus(200);
    }

    /**
     * LandmarkController create test .
     *
     * @test
     * @return void
     */
    public function edit_正常ケース ()
    {
        $user = User::factory()->create();
        $landmark_data = LandmarkData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('landmark.edit','1'));

        $response->assertStatus(200);
    }

    /**
     * LandmarkController create test .
     *
     * @test
     * @return void
     */
    public function update_正常ケース ()
    {
        $user = User::factory()->create();
        $landmark_data = LandmarkData::factory()->create();

        $request = Request(
            [
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
            ],
        );

        $response = $this
            ->actingAs($user)
            ->withSession($request)
            ->put(route('landmark.update',['1',
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
}


