<?php

namespace App\Http\Controllers\Pages;

use App\Services\CardCategories\CardCategoriesService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends PageController
{
    /**
     * @var $cardCategoriesService
     */
    private $cardCategoriesService;

    public function __construct
    (
        CardCategoriesService $cardCategoriesService
    )
    {
        $this->cardCategoriesService = $cardCategoriesService;
    }

    public function index()
    {
        return view('pages/homepage', [
            'cardCategories' => $this->cardCategoriesService->search([]),
        ]);
    }
}
