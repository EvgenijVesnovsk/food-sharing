<?php


namespace App\Services\Comments\Repositories;

use App\Models\Comment;

class EloquentCommentsRepository implements CommentsInterface
{
    public function createFromArray(array $data): Comment
    {
        return Comment::create($data);
    }
}
