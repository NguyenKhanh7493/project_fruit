<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorysController extends Controller
{
    public function add()
    {
        return view('temp.categorys.category');
    }
}
