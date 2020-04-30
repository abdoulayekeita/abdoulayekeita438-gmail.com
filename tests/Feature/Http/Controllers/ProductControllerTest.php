<?php

namespace Tests\Feature\Http\Controllers;

use App\Post;
use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ProductController
 */
class ProductControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $products = factory(Product::class, 3)->create();

        $response = $this->get(route('product.index'));

        $response->assertOk();
        $response->assertViewIs('dashboard.product.index');
        $response->assertViewHas('shops');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('product.create'));

        $response->assertOk();
        $response->assertViewIs('dashboard.product.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ProductController::class,
            'store',
            \App\Http\Requests\ProductStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_displays_view()
    {
        $name = $this->faker->name;
        $price  = $this->faker->word;
        $isPriceNegotiate = $this->faker->boolean;
        $isPossibleToChange = $this->faker->boolean;
        $description = $this->faker->text;
        $subCategoryProduct_id = $this->faker->randomDigitNotNull;

        $response = $this->post(route('product.store'), [
            'name' => $name,
            'price ' => $price ,
            'isPriceNegotiate' => $isPriceNegotiate,
            'isPossibleToChange' => $isPossibleToChange,
            'description' => $description,
            'subCategoryProduct_id' => $subCategoryProduct_id,
        ]);

        $products = Post::query()
            ->where('name', $name)
            ->where('price ', $price )
            ->where('isPriceNegotiate', $isPriceNegotiate)
            ->where('isPossibleToChange', $isPossibleToChange)
            ->where('description', $description)
            ->where('subCategoryProduct_id', $subCategoryProduct_id)
            ->get();
        $this->assertCount(1, $products);
        $product = $products->first();

        $response->assertOk();
        $response->assertViewIs('dashboard.product.index');
    }
}
