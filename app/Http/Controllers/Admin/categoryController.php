<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pro_cat;
use App\Models\Sub_cat;
use Illuminate\Support\Str;
use App\Http\Requests\CategoryFormRequest;

class categoryController extends Controller
{
    public $cat_name;
    public $cat_slug;

    // public function index()
    // {
    //     $category=Sub_cat::all();
    //     return view('dashboards.admin.category.index')->with('scategory', $scategory);
    // }
    public function create()
    {
        return view('dashboards.admin.category.add');
    }

    public function store(CategoryFormRequest $request)
    {
        $validatedData = $request->validated();

        $category = new Pro_cat;
        $category->cat_name = $validatedData['cat_name'];
        $category->cat_slug = Str::slug($validatedData['cat_slug']);
        $category->save();
        return redirect()->back()->with('message','Category Added Successfully'); 


    }

}


