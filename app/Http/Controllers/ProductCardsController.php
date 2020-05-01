<?php

namespace App\Http\Controllers;

use App\Services\ProductCards\ProductCardsService;
use App\Models\CardCategory;
use Illuminate\Http\Request;

class ProductCardsController extends Controller
{
    /**
     * @var $productCardsService
     */
    private $productCardsService;

    public function __construct
    (
        ProductCardsService $productCardsService
    )
    {
        $this->productCardsService = $productCardsService;
    }

    /**
     * Список продуктов по категории
     *
     * @param $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listByCategory(CardCategory $category)
    {
        return view('pages.productsList', [
            'category' => $category,
            'products' => $this->productCardsService->searchByCategory($category->id),
        ]);
    }

    /**
     * Карточка продукта
     */
    public function show()
    {
        //
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
