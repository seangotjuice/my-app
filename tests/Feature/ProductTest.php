<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateProduct()
    {
        $response = $this->post('/product', [
            'name' => 'Sample Product',
            'description' => 'This is a sample product.',
            'price' => 19.99,
            'qty' => 100
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/product');
        $this->assertDatabaseHas('products', [
            'name' => 'Sample Product'
        ]);
    }

    public function testUpdateProduct()
    {
        $product = Product::create([
            'name' => 'Original Product',
            'description' => 'Original description.',
            'price' => 20.00,
            'qty' => 50
        ]);

        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'name' => 'Original Product',
            'description' => 'Original description.',
            'price' => 20.00
        ]);

        $response = $this->put("/product/{$product->id}", [
            'name' => 'Updated Product',
            'description' => 'Updated description.',
            'price' => 25.00,
            'qty' => 55
        ]);

        $response->assertRedirect('/product');
        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'name' => 'Updated Product',
            'description' => 'Updated description.',
            'price' => 25.00
        ]);

        $this->assertDatabaseMissing('products', [
            'id' => $product->id,
            'name' => 'Original Product',
            'description' => 'Original description.',
            'price' => 20.00
        ]);
    }

    public function testDeleteProduct()
    {
        $product = Product::create([
            'name' => 'Product to Delete',
            'description' => 'This product will be deleted.',
            'price' => 10.00,
            'qty' => 50
        ]);

        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'name' => 'Product to Delete'
        ]);

        $response = $this->delete("/product/{$product->id}");
        $response->assertRedirect('/product');
        $this->assertDatabaseMissing('products', [
            'id' => $product->id
        ]);
    }
}
