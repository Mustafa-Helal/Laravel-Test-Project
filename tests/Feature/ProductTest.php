<?php
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_product_success()
    {
        $data = [
            'name' => 'Sample Product',
            'description' => 'This is a sample product.',
            'price' => 50.99,
            'stock' => 10,
        ];

        $response = $this->postJson('/api/products', $data);

        $response->assertStatus(201)
            ->assertJson($data);
}
}