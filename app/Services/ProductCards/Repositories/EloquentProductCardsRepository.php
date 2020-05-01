<?php


namespace App\Services\ProductCards\Repositories;

use App\Models\ProductCard;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class EloquentProductCardsRepository implements ProductCardsInterface
{
    public function find(int $id): ?ProductCard
    {
        return ProductCard::find($id);
    }

    public function search(array $filters): LengthAwarePaginator
    {
        return ProductCard::paginate();
    }

    /**
     * Список продуктов по категории
     *
     * @param int $id
     * @return LengthAwarePaginator
     */
    public function searchByCategory(int $id): LengthAwarePaginator
    {
        return ProductCard::where('card_category_id', $id)->paginate();
    }

    public function createFromArray(array $data): ProductCard
    {
        return ProductCard::create($data);
    }

    public function updateFromArray(ProductCard $model, array $data): ProductCard
    {
        $model->update($data);
        return $model;
    }

    public function delete(ProductCard $model)
    {
        $model->delete();
    }
}
