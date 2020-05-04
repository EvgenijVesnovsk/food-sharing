<?php


namespace App\Services\CardCategories\Repositories;

use App\Models\CardCategory;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class EloquentCardCategoriesRepository implements CardCategoriesInterface
{
    public function find(int $id): ?CardCategory
    {
        return CardCategory::find($id);
    }

    public function getAll()
    {
       return CardCategory::all();
    }

    public function search(array $filters): LengthAwarePaginator
    {
        return CardCategory::paginate();
    }

    public function createFromArray(array $data): CardCategory
    {
        return CardCategory::create($data);
    }

    public function updateFromArray(CardCategory $model, array $data): CardCategory
    {
        $model->update($data);
        return $model;
    }

    public function delete(CardCategory $model)
    {
        $model->delete();
    }
}
