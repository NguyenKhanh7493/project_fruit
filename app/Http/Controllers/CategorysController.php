<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorys;
use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Support\Facades\Session;

class CategorysController extends Controller
{
    protected $category;
    public function __construct(CategoryRepositoryInterface $category)
    {
        $this->category = $category;
    }
    public function add()
    {
        return view('temp.category.category');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|max:100',
        ], [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name limit is not more than 100 characters.',
        ]);
        try {
            $this->category->createCategory($request);
            Session::flash('successCategory', 'Data stored successfully');
            return redirect()->route('categoryAdd');
        } catch (\Exception $e) {
            Session::flash('errorCategory', 'Error while storing data: ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
