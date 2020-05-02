<?php


namespace App\Services\CardCategories;

use App\Services\CardCategories\Repositories\CardCategoriesInterface;
use App\Models\CardCategory;

class CardCategoriesService
{
    /**
     * @var $repository
     */
    private $repository;

    public function __construct
    (
        CardCategoriesInterface $repository
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

    public function create(array $data)
    {
        return $this->repository->createFromArray($data);
    }

    public function update(CardCategory $model, array $data)
    {
        return $this->repository->updateFromArray($model, $data);
    }

    public function delete(CardCategory $model)
    {
        return $this->repository->delete($model);
    }
}
