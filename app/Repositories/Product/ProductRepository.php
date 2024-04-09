<?php
namespace App\Repositories\Product;

use App\Models\Categorys;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function getModel()
    {
        return Categorys::class;
    }
    // public function createCategory($req)
    // {
    //     $status = $req->status ? 1 : 0;
    //     $description = $req->description ? $req->description : null;
    //     $this->create([
    //         'name'          => $req->name,
    //         'status'        => $status,
    //         'description'   => $description,
    //     ]);
    // }
}
