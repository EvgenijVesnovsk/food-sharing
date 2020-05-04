<?php

namespace App\Http\Controllers;

use App\Models\CardCategory;
use App\Models\ProductCard;
use App\Services\ProductCards\ProductCardsService;
use App\Services\Geocode\GeocodeService;
use App\Services\Comments\CommentsService;
use App\Http\Requests\StoreComment;
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

    /**
     * @var $commentsService
     */
    private $commentsService;

    public function __construct
    (
        ProductCardsService $productCardsService,
        GeocodeService $geocodeService,
        CommentsService $commentsService
    )
    {
        $this->productCardsService = $productCardsService;
        $this->geocodeService = $geocodeService;
        $this->commentsService = $commentsService;
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
     * Добавить комментарий
     *
     * @param StoreComment $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function commentStore(StoreComment $request)
    {
        $result =  $this->commentsService->create([
            'user_id' => \Auth::id(),
            'product_card_id' => $request->get('id'),
            'comment' => $request->get('comment'),
        ]);

        return response()->json([
            'user_name' => \Auth::user()->name,
            'comment' => $result->comment,
            'created_at' => $result->created_at->format('d-m-Y'),
        ]);

    }
}
