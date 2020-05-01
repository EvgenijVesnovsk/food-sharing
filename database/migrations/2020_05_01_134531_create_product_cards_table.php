<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('Id пользователя');
            $table->unsignedBigInteger('card_category_id')->comment('Id категории');
            $table->string('name')->comment('Название');
            $table->text('description')->nullable()->comment('Описание');
            $table->text('images')->nullable()->comment('Изображения');
            $table->string('address')->nullable()->comment('Адрес');
            $table->float('latitude', 9, 6)->nullable()->comment('Широта');
            $table->float('longitude', 9, 6)->nullable()->comment('Долгота');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
            $table->foreign('card_category_id')->on('card_categories')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_cards', function (Blueprint $table) {
            $table->dropForeign('product_cards_user_id_foreign');
            $table->dropForeign('product_cards_card_category_id_foreign');
        });

        Schema::dropIfExists('product_cards');
    }
}
