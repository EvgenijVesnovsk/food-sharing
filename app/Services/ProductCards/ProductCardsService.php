<?php


namespace App\Services\ProductCards;

use App\Models\ProductCard;
use App\Services\ProductCards\Repositories\ProductCardsInterface;

class ProductCardsService
{
    /**
     * @var $repository
     */
    private $repository;

    public function __construct
    (
        ProductCardsInterface $repository
    )
    {
        $this->repository = $repository;
    }

    public function find(int $id)
    {
        return $this->repository->find($id);
    }

    public function search(array $filters)
    {
        return $this->repository->search($filters);
    }

    /**
     * Список продуктов по категории
     *
     * @param $id
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function searchByCategory($id)
    {
        return $this->repository->searchByCategory($id);
    }

    public function create(array $data)
    {
        return $this->repository->createFromArray($data);
    }

    public function update(ProductCard $model, array $data)
    {
        return $this->repository->updateFromArray($model, $data);
    }

    public function delete(ProductCard $model)
    {
        return $this->repository->delete($model);
    }
}
