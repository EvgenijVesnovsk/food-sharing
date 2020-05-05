<?php


namespace App\Services\ProductCards;

use App\Models\ProductCard;
use App\Services\ProductCards\Handlers\ImagesStoreHandler;
use App\Services\ProductCards\Repositories\ProductCardsInterface;

class ProductCardsService
{
    /**
     * @var $repository
     */
    private $repository;

    /**
     * @var $imagesStoreHandler
     */
    private $imagesStoreHandler;

    public function __construct
    (
        ProductCardsInterface $repository,
        ImagesStoreHandler $imagesStoreHandler
    )
    {
        $this->repository = $repository;
        $this->imagesStoreHandler = $imagesStoreHandler;
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
     * Список продуктов пользователя
     *
     * @param $id
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function searchByUser($id)
    {
        return $this->repository->searchByUser($id);
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

        if(!empty($data['images'])){
            $images = $data['images'];
            unset($data['images']);
        }

        $product = $this->repository->createFromArray($data);

        if(!empty($images)){
            $product->images = $this->imagesStoreHandler->handler($product->id,$images);
            $this->repository->updateFromArray($product, [
                'images' => $product->images
            ]);
        }

        return $product;
    }

    public function update(ProductCard $model, array $data)
    {
        if(!empty($data['images'])){
            $data['images'] = $this->imagesStoreHandler->handler($model->id,$data['images']);
        }

        return $this->repository->updateFromArray($model, $data);
    }

    public function delete(ProductCard $model)
    {
        return $this->repository->delete($model);
    }
}
