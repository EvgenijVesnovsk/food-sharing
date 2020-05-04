<?php

namespace App\Http\Controllers\Profiles;

use App\Http\Controllers\Controller;
use App\Models\ProductCard;
use App\Services\ProductCards\ProductCardsService;
use App\Services\CardCategories\CardCategoriesService;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductCardRequest;
use Illuminate\Support\Facades\Auth;

class ProductCardsController extends Controller
{
    /**
     * @var $productCardsService
     */
    private $productCardsService;

    /**
     * @var $cardCategoriesService
     */
    private $cardCategoriesService;

    public function __construct
    (
        ProductCardsService $productCardsService,
        CardCategoriesService $cardCategoriesService
    )
    {
        $this->productCardsService = $productCardsService;
        $this->cardCategoriesService = $cardCategoriesService;
    }

    public function index()
    {
        return view('profiles.index', [
            'products' => $this->productCardsService->searchByUser(Auth::id()),
        ]);
    }

    public function create()
    {
        return view('profiles.create', [
            'categories' => $this->cardCategoriesService->getAll()->pluck('name', 'id')->toArray(),
        ]);
    }

    public function store(StoreProductCardRequest $request)
    {
        $this->productCardsService->create($request->all());
        return redirect(route('profile.index'));
    }

    public function edit(ProductCard $profile)
    {
        return view('profiles.edit',[
            'product' => $profile
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCard  $productCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCard $productCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCard  $productCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCard $productCard)
    {
        //
    }
}
