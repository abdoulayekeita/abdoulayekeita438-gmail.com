<?php

namespace Tests\Feature\Http\Controllers;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * @see \App\Http\Controllers\PostController
 */
class PostControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $posts = factory(Post::class, 3)->create();

        $response = $this->get(route('post.index'));

        $response->assertOk();
        $response->assertViewIs('dashboard.product.index');
        $response->assertViewHas('shops');
    }

    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('post.create'));

        $response->assertOk();
        $response->assertViewIs('dashboard.product.create');
    }

    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PostController::class,
            'store',
            \App\Http\Requests\PostStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_displays_view()
    {
        $name = $this->faker->word;
        $price  = $this->faker->word;
        $isPriceNegotiate = $this->faker->word;
        $isPossibleToChange = $this->faker->word;
        $description = $this->faker->word;
        $subCategoryProduct_id = $this->faker->word;

        $response = $this->post(route('post.store'), [
            'name' => $name,
            'price ' => $price ,
            'isPriceNegotiate' => $isPriceNegotiate,
            'isPossibleToChange' => $isPossibleToChange,
            'description' => $description,
            'subCategoryProduct_id' => $subCategoryProduct_id,
        ]);

        $posts = Post::query()
            ->where('name', $name)
            ->where('price ', $price)
            ->where('isPriceNegotiate', $isPriceNegotiate)
            ->where('isPossibleToChange', $isPossibleToChange)
            ->where('description', $description)
            ->where('subCategoryProduct_id', $subCategoryProduct_id)
            ->get();
        $this->assertCount(1, $posts);
        $post = $posts->first();

        $response->assertOk();
        $response->assertViewIs('dashboard.product.index');
    }
}
