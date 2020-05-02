<?php

namespace App\Http\Controllers;

use App\Models\CardCategory;
use App\Models\ProductCard;
use App\Services\ProductCards\ProductCardsService;
use App\Services\Geocode\GeocodeService;
use Illuminate\Http\Request;

class ProductCardsController extends Controller
{
    /**
     * @var $productCardsService
     */
    private $productCardsService;

    /**
     * @var $geocodeService
     */
    private $geocodeService;

    public function __construct
    (
        ProductCardsService $productCardsService,
        GeocodeService $geocodeService
    )
    {
        $this->productCardsService = $productCardsService;
        $this->geocodeService = $geocodeService;
    }

    /**
     * Список продуктов по категории
     *
     * @param $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listByCategory(CardCategory $category)
    {
        return view('pages.productsList.productsList', [
            'category' => $category,
            'products' => $this->productCardsService->searchByCategory($category->id),
        ]);
    }

    /**
     * Карточка продукта
     */
    public function show(ProductCard $product)
    {
        return view('pages.productItem.productItem',[
            'product' => $product,
        ]);
    }

    /**
     * Пожаловаться
     */
    public function complain()
    {
        //
    }

    /**
     * Отправить сообщение
     */
    public function addMessage()
    {
        //
    }
}
