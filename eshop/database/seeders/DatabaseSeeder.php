<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$this->call(CategoryTableSeeder::class);
        $this->command->info('Таблица категорий загружена.');

        $this->call(ProductTableSeeder::class);
        $this->command->info('Таблица товаров загружена.');
    }
}
