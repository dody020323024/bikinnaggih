<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductVisibilityTest extends TestCase
{
    use RefreshDatabase;

    public function test_out_of_stock_status_is_saved_from_admin_create_form_and_hidden_from_public_catalog(): void
    {
        $response = $this->withSession(['admin_logged_in' => true])
            ->post('/admin/products', [
                'name' => 'Produk Uji',
                'description' => 'Deskripsi uji',
                'price' => 150000,
                'is_active' => '1',
                'is_out_of_stock' => '1',
            ]);

        $response->assertRedirect('/admin/products');

        $this->assertDatabaseHas('products', [
            'name' => 'Produk Uji',
            'is_active' => 1,
            'is_out_of_stock' => 1,
        ]);

        $this->assertSame(0, Product::where('is_active', true)->where('is_out_of_stock', false)->count());
    }

    public function test_product_can_be_reactivated_from_admin_edit_form(): void
    {
        $product = Product::create([
            'name' => 'Produk Lama',
            'description' => 'Deskripsi',
            'price' => 100000,
            'is_active' => 1,
            'is_out_of_stock' => 1,
        ]);

        $response = $this->withSession(['admin_logged_in' => true])
            ->put('/admin/products/' . $product->id, [
                'name' => 'Produk Lama',
                'price' => 100000,
                'is_active' => '1',
                'is_out_of_stock' => '0',
            ]);

        $response->assertRedirect('/admin/products');

        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'is_out_of_stock' => 0,
        ]);

        $this->assertSame(1, Product::where('is_active', true)->where('is_out_of_stock', false)->count());
    }
}
