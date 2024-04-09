<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add()
    {
        $units = Product::UNIT;
        return view('temp.product.product')->with('units', $units);;
    }
    public function store(Request $request)
    {
        // $request->validate([
        //     'name'  => 'required|max:100',
        // ], [
        //     'name.required' => 'The name field is required.',
        //     'name.max' => 'The name limit is not more than 100 characters.',
        // ]);
        // try {
        //     $status = $request->status ? 1 : 0;
        //     $description = $request->description ? $request->description : null;
        //     Categorys::create([
        //         'name'          => $request->name,
        //         'status'        => $status,
        //         'description'   => $description,
        //     ]);
        //     Session::flash('successCategory', 'Data stored successfully');
        //     return redirect()->route('categoryAdd');
        // } catch (\Exception $e) {
        //     Session::flash('errorCategory', 'Error while storing data: ' . $e->getMessage());
        //     return redirect()->back();
        // }
    }
}
