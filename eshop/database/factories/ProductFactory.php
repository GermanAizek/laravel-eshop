<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
		$list_names = [
			'DeluxeTek',
			'Neponel',
			'LopoPopo',
			'ChinaNoName',
			'Patriot'
		];
		
		$list_contents = [
			'Данный продукт сочетается в себе плюсы и минусы данной категории товаров.',
			'Продукт является самым популярным по продажам в нашем регионе.',
			'Продукт отличается износоустойчивостью и качеством бренда.'
		];
		
		$name = $list_names[array_rand($list_names)];
		
        return [
			'name' => $name,
			'content' => $list_contents[array_rand($list_contents)],
			'url' => Str::slug($name.' '.random_int(0, 99999)),
			'count' => random_int(0, 50),
			'price' => random_int(500, 50000),
			'category_id' => random_int(1, 4)
        ];
    }
}
