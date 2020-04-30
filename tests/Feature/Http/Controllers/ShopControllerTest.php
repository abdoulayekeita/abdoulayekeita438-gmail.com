<?php

namespace Tests\Feature\Http\Controllers;

use App\Post;
use App\Shop;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ShopController
 */
class ShopControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $shops = factory(Shop::class, 3)->create();

        $response = $this->get(route('shop.index'));

        $response->assertOk();
        $response->assertViewIs('dashboard.shop.index');
        $response->assertViewHas('shops');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('shop.create'));

        $response->assertOk();
        $response->assertViewIs('dashboard.shop.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ShopController::class,
            'store',
            \App\Http\Requests\ShopStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_displays_view()
    {
        $name = $this->faker->name;
        $image  = $this->faker->word;
        $description = $this->faker->text;
        $address = $this->faker->word;
        $urlPageFacebook = $this->faker->word;
        $urlPageInstagram = $this->faker->word;
        $urlSite = $this->faker->word;
        $CategoryShop_id = $this->faker->randomDigitNotNull;
        $user_id = $this->faker->randomDigitNotNull;

        $response = $this->post(route('shop.store'), [
            'name' => $name,
            'image ' => $image ,
            'description' => $description,
            'address' => $address,
            'urlPageFacebook' => $urlPageFacebook,
            'urlPageInstagram' => $urlPageInstagram,
            'urlSite' => $urlSite,
            'CategoryShop_id' => $CategoryShop_id,
            'user_id' => $user_id,
        ]);

        $shops = Post::query()
            ->where('name', $name)
            ->where('image ', $image )
            ->where('description', $description)
            ->where('address', $address)
            ->where('urlPageFacebook', $urlPageFacebook)
            ->where('urlPageInstagram', $urlPageInstagram)
            ->where('urlSite', $urlSite)
            ->where('CategoryShop_id', $CategoryShop_id)
            ->where('user_id', $user_id)
            ->get();
        $this->assertCount(1, $shops);
        $shop = $shops->first();

        $response->assertOk();
        $response->assertViewIs('dashboard.shop.index');
    }
}
