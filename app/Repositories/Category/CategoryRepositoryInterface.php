<?php
namespace App\Repositories\Category;

use App\Repositories\BaseRepositoryInterFace;

interface CategoryRepositoryInterface extends BaseRepositoryInterFace
{
    public function createCategory($req);
    public function listCategoryByStatus();
}