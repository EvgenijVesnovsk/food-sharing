<?php

namespace App\Http\Controllers\Profiles;

use App\Http\Controllers\Controller;
use App\Models\ProductCard;
use App\Services\ProductCards\ProductCardsService;
use App\Services\CardCategories\CardCategoriesService;
use App\Http\Requests\StoreProductCardRequest;
use App\Http\Requests\UpdateProductCardRequest;
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
            'categories' => $this->cardCategoriesService->getAll()->pluck('name', 'id')->toArray(),
            'product' => $profile
        ]);
    }

    public function update(UpdateProductCardRequest $request, ProductCard $profile)
    {
        $this->productCardsService->update($profile, $request->all());
        return redirect(route('profile.index'));
    }

    public function destroy(ProductCard $profile)
    {
        $this->productCardsService->delete($profile);
        return redirect(route('profile.index'));
    }
}
