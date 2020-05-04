<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('card_categories')->insert([
            ['id' => 1, 'name' => 'Молочные продукты', 'description' => 'Тут будет какое-то описание', 'image' => 'images/product_categories/molochnye-produkty.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Мясо', 'description' => 'Тут будет какое-то описание', 'image' => 'images/product_categories/myaso.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Птица', 'description' => 'Тут будет какое-то описание', 'image' => 'images/product_categories/ptica.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Яйцо', 'description' => 'Тут будет какое-то описание', 'image' => 'images/product_categories/yajco.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Мясные продукты', 'description' => 'Тут будет какое-то описание', 'image' => 'images/product_categories/myasnye-produkty.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => 'Рыба', 'description' => 'Тут будет какое-то описание', 'image' => 'images/product_categories/ryba.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'name' => 'Майонез и соусы', 'description' => 'Тут будет какое-то описание', 'image' => 'images/product_categories/majonez-i-sousy.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'name' => 'Бакалея', 'description' => 'Тут будет какое-то описание', 'image' => 'images/product_categories/bakaleya.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'name' => 'Кофе и чай', 'description' => 'Тут будет какое-то описание', 'image' => 'images/product_categories/kofe-i-chaj.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'name' => 'Кондитерские изделия', 'description' => 'Тут будет какое-то описание', 'image' => 'images/product_categories/konditerskie-izdeliya.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'name' => 'Фрукты, овощи', 'description' => 'Тут будет какое-то описание', 'image' => 'images/product_categories/frukty-ovoshchi.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'name' => 'Хлеб', 'description' => 'Тут будет какое-то описание', 'image' => 'images/product_categories/hleb.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'name' => 'Замороженные продукты', 'description' => 'Тут будет какое-то описание', 'image' => 'images/product_categories/zamorozhennye-produkty.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'name' => 'Консервы', 'description' => 'Тут будет какое-то описание', 'image' => 'images/product_categories/konservy.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'name' => 'Кулинария', 'description' => 'Тут будет какое-то описание', 'image' => 'images/product_categories/kulinariya.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'name' => 'Напитки', 'description' => 'Тут будет какое-то описание', 'image' => 'images/product_categories/napitki.jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
