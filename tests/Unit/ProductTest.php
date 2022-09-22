<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Models\Level;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
    public function test_render_home_page()
    {
        $this->get('/')->assertStatus(200);
    }
    public function test_render_product_page()
    {
        $user = User::factory()->create([
            'level_id' => 1
        ]);
        $response = $this->actingAs($user);
        $response->get('/admin/product')->assertStatus(200);
    }
    public function test_store_product()
    {
        Product::create([
            'name' => 'Wahyu',
            'category_id' => 1,
            'description' => 'absen teruss',
            'price' => 12000,
            'stock' => 8,
            'rating' => 5,
        ]);
        $user = User::factory()->create([
            'level_id' => 1
        ]);
        $response = $this->actingAs($user)->get('/admin/product')->assertStatus(200);
    }
    public function test_edit_product()
    {
        $Product = Product::create([
            'name' => 'Wahyu',
            'category_id' => 1,
            'description' => 'absen teruss',
            'price' => 12000,
            'stock' => 8,
            'rating' => 5,
        ]);
        $user = User::factory()->create([
            'level_id' => 1
        ]);
        $response = $this->actingAs($user)->get('/admin/product/'.$Product->id.'/edit');
        $response->assertStatus(200);
        $Product = Product::where('name', 'Wahyu')->update(['name' => 'Wawan']);
        
        $response = $this->actingAs($user)->get('/admin/product');

        $response->assertSee('Wawan');

    }
    public function test_delete_data_product_page()
    {
        $Product = Product::where('name', 'Wawan')->delete();

        $user = User::factory()->create([
            'level_id' => 1
        ]);
        $response = $this->actingAs($user)->get('/admin/product');

        $response->assertDontSee('Wawan');
    }
}