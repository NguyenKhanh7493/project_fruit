<?php
namespace App\Repositories\Category;

use App\Models\Categorys;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function getModel()
    {
        return Categorys::class;
    }
    public function createCategory($req)
    {
        $status = $req->status ? 1 : 0;
        $description = $req->description ? $req->description : null;
        $this->create([
            'name'          => $req->name,
            'status'        => $status,
            'description'   => $description,
        ]);
    }
    public function listCategoryByStatus()
    {
    }
}
