<?php

namespace Tests\Feature;

use App\Models\Classification;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class ClassificationControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void {
        parent::setUp();
        /* Artisan::call('migrate:fresh --database=contents_ja --path=database/migrations/contents_ja');
        Artisan::call('migrate:fresh --database=location --path=database/migrations/location');
        */
    }

    public function tearDown(): void {
        Artisan::call('migrate:refresh --database=contents_ja_test --path=database/migrations/contents_ja');
        Artisan::call('migrate:refresh --database=location_test --path=database/migrations/location');
        parent::tearDown();
    }

    /**
     * ClassificationController index test .
     *
     * @test
     * @return void
     */
    public function index_正常ケース ()
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('classification.index'));

        $response->assertStatus(200);
    }

    /**
     * ClassificationController create test .
     *
     * @test
     * @return void
     */
    public function create_正常ケース ()
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('classification.create'));

        $response->assertStatus(200);
    }

    /**
     * ClassificationController store test .
     *
     * @test
     * @return void
     */
    public function store_正常ケース ()
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->post(route('classification.store',
                [
                    'item_name' => 'test item name',
                    'large_classification' => '1',
                    'large_classification_name' => 'large test name',
                    'middle_classification' => '2',
                    'middle_classification_name' => 'middle test name',
                    'small_classification' => '3',
                    'small_classification_name' => 'small test name',
                ])
            );
        $response->assertStatus(302);
    }

    /**
     * ClassificationController show test .
     *
     * @test
     * @return void
     */
    public function show_正常ケース ()
    {
        $user = User::factory()->create();
        $classification = Classification::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/classification',['classification' => $classification->id]);

        $response->assertStatus(200);
    }

    /**
     * ClassificationController edit test .
     *
     * @test
     * @return void
     */
    public function edit_正常ケース ()
    {
        $user = User::factory()->create();
        $classification = Classification::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/classification',['classification' => $classification->id]);

        $response->assertStatus(200);
    }

    /**
     * ClassificationController update test .
     *
     * @test
     * @return void
     */
    public function update_正常ケース ()
    {
        $user = User::factory()->create();
        $classification = Classification::factory()->create();

        $response = $this
            ->actingAs($user)
            ->put(route('classification.update',[$classification->id,
            'large_classification' => '1',
            'large_classification_name' => 'large test name',
            'middle_classification' => '2',
            'middle_classification_name' => 'middle test name',
            'small_classification' => '3',
            'small_classification_name' => 'small test name',
            ])
        );

        $response->assertStatus(302);
    }

    /**
     * ClassificationController destroy test .
     *
     * @test
     * @return void
     */
    public function destroy_正常ケース ()
    {
        $user = User::factory()->create();
        $classification = Classification::factory()->create();

        $response = $this
            ->actingAs($user)
            ->delete(route('classification.destroy',$classification->id));

        $response->assertStatus(302);
    }
}
