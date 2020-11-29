<?php

namespace Tests\Feature;

use App\Models\CustomerLandmarkBind;
use App\Models\ItemData;
use App\Models\ShopData;
use App\Models\ShopItemBind;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShopItemBindControllerTest extends TestCase
{
    /**
     * ShopItemBindController index test .
     *
     * @test
     * @return void
     */
    public function index_正常ケース ()
    {
        $user = User::factory()->create();
        ShopData::factory()->create();
        CustomerLandmarkBind::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('shopitembind.index'));

        $response->assertStatus(200);
    }

    /**
     * ShopItemBindController show test .
     *
     * @test
     * @return void
     */
    public function show_正常ケース ()
    {
        $user = User::factory()->create();
        $shop = ShopData::factory()->create();
        ShopItemBind::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('shopitembind.show',$shop->id));

        $response->assertStatus(200);
    }

    /**
     * ShopItemBindController edit test .
     *
     * @test
     * @return void
     */
    public function edit_正常ケース ()
    {
        $user = User::factory()->create();
        $shop = ShopData::factory()->create();
        ItemData::factory()->create();
        ShopItemBind::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('shopitembind.edit',$shop->id));

        $response->assertStatus(200);
    }

    /**
     * ShopItemBindController update test .
     *
     * @test
     * @return void
     */
    public function update_正常ケース ()
    {
        $user = User::factory()->create();
        $shop = ShopData::factory()->create();
        $item = ItemData::factory()->create();
        ShopItemBind::factory()->create();

        $response = $this
            ->actingAs($user)
            ->put(route('shopitembind.update',[$shop->id,
            'chk[1]' => 'true',
            'item_id[1]' => $shop->id,
            'checked[1]' => 'checked="checked"',
            ])
        );

        $response->assertStatus(302);
    }
}
