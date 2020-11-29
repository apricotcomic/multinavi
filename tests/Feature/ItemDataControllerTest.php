<?php

namespace Tests\Feature;

use App\Models\Classification;
use App\Models\ItemData;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ItemDataControllerTest extends TestCase
{
    /**
     * ItemDataController index test .
     *
     * @test
     * @return void
     */
    public function index_正常ケース ()
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('itemdata.index'));

        $response->assertStatus(200);
    }

    /**
     * ItemDataController create test .
     *
     * @test
     * @return void
     */
    public function create_正常ケース ()
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('itemdata.create'));

        $response->assertStatus(200);
    }

    /**
     * ItemDataController store test .
     *
     * @test
     * @return void
     */
    public function store_正常ケース ()
    {
        $user = User::factory()->create();
        $classification = Classification::factory()->create();

        $response = $this
            ->actingAs($user)
            ->post(route('itemdata.store',
                [
                    'item_name' => 'test item name',
                    'large_classification' => $classification->large_classification,
                    'middle_classification' => $classification->middle_classification,
                    'small_classification' => $classification->small_classification,
                    'about' => 'all about item',
                    'start_date' => date('Y-m-d'),
                    'end_date' => '9999/12/31',
                ])
            );
        $response->assertStatus(302);
    }

    /**
     * ItemDataController show test .
     *
     * @test
     * @return void
     */
    public function show_正常ケース ()
    {
        $user = User::factory()->create();
        $itemdata = ItemData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/itemdata',['ItemDatum' => $itemdata->id]);

        $response->assertStatus(200);
    }

    /**
     * ItemDataController edit test .
     *
     * @test
     * @return void
     */
    public function edit_正常ケース ()
    {
        $user = User::factory()->create();
        $itemdata = ItemData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/itemdata',['itemdatum' => $itemdata->id]);

        $response->assertStatus(200);
    }

    /**
     * ItemDataController update test .
     *
     * @test
     * @return void
     */
    public function update_正常ケース ()
    {
        $user = User::factory()->create();
        $classification = Classification::factory()->create();
        $itemdata = ItemData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->put(route('itemdata.update',[$itemdata->id,
            'item_name' => 'test item name',
            'large_classification' => $classification->large_classification,
            'middle_classification' => $classification->middle_classification,
            'small_classification' => $classification->small_classification,
            'about' => 'all about item',
            'start_date' => date('Y-m-d'),
            'end_date' => '9999/12/31',
            ])
        );

        $response->assertStatus(302);
    }

    /**
     * ItemDataController destroy test .
     *
     * @test
     * @return void
     */
    public function destroy_正常ケース ()
    {
        $user = User::factory()->create();
        $itemdata = ItemData::factory()->create();

        $response = $this
            ->actingAs($user)
            ->delete(route('itemdata.destroy',$itemdata->id));

        $response->assertStatus(302);
    }
}
