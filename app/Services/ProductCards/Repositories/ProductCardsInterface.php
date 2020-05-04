<?php


namespace App\Services\ProductCards\Repositories;

use App\Models\ProductCard;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface ProductCardsInterface
{
    public function find(int $id): ?ProductCard;

    public function search(array $filters): LengthAwarePaginator;

    public function searchByUser(int $id): LengthAwarePaginator;

    public function searchByCategory(int $id) : LengthAwarePaginator;

    public function createFromArray(array $data): ProductCard;

    public function updateFromArray(ProductCard $model, array $data): ProductCard;

    public function delete(ProductCard $model);
}
