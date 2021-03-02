<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
		$list_names = [
			'Тормозные диски',
			'Навигационные системы',
			'Система подушек безопасности',
			'Габаритная перефирия',
			'Шины на сезоны'
		];
		
		$list_contents = [
			'Элитный бренд иностранного происхождения',
			'Дорогой бренд иностранного происхождения',
			'Доступный бренд иностранного происхождения',
			'Бюджетный бренд иностранного происхождения',
			'Наш отечественный бренд.'
		];
		
		$name = $list_names[array_rand($list_names)];
		
        return [
            'name' => $name,
			'content' => $list_contents[array_rand($list_contents)],
			'url' => Str::slug($name.' '.random_int(0, 99999))
        ];
    }
}
