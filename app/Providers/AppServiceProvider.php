<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ProductCards\Repositories\ProductCardsInterface;
use App\Services\ProductCards\Repositories\EloquentProductCardsRepository;
use App\Services\CardCategories\Repositories\CardCategoriesInterface;
use App\Services\CardCategories\Repositories\EloquentCardCategoriesRepository;
use App\Services\Comments\Repositories\CommentsInterface;
use App\Services\Comments\Repositories\EloquentCommentsRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductCardsInterface::class, EloquentProductCardsRepository::class);
        $this->app->bind(CardCategoriesInterface::class, EloquentCardCategoriesRepository::class);
        $this->app->bind(CommentsInterface::class, EloquentCommentsRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
