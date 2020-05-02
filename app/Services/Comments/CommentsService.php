<?php


namespace App\Services\Comments;

use App\Services\Comments\Repositories\CommentsInterface;

class CommentsService
{
    /**
     * @var $repository
     */
    private $repository;

    public function __construct
    (
        CommentsInterface $repository
    )
    {
        $this->repository = $repository;
    }

    public function create(array $data)
    {
        return $this->repository->createFromArray($data);
    }
}
