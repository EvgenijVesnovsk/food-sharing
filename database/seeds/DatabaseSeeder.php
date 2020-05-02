<?php

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
        /**
         * Начальные данные
         */
        $this->call(CardCategoriesTableSeeder::class);

        /**
         * Тестовые данные
         */
        $this->call(UsersTableSeeder::class);
        $this->call(ProductCardsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
    }
}
