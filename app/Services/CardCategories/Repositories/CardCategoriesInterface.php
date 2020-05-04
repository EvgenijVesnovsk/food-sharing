<?php


namespace App\Services\CardCategories\Repositories;

use App\Models\CardCategory;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface CardCategoriesInterface
{
    public function find(int $id): ?CardCategory;

    public function getAll();

    public function search(array $filters): LengthAwarePaginator;

    public function createFromArray(array $data): CardCategory;

    public function updateFromArray(CardCategory $model, array $data): CardCategory;

    public function delete(CardCategory $model);
}
