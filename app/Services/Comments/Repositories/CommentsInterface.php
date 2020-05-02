<?php


namespace App\Services\Comments\Repositories;

use App\Models\Comment;

interface CommentsInterface
{
    public function createFromArray(array $data): Comment;
}
