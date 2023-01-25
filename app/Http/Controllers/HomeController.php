<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sub_cat;
use App\Models\Products;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function subcatview($scategory_subcat_slug)
    {
        $scategory = Sub_cat::where('subcat_slug',$scategory_subcat_slug)->first();
         $subcategory_id = $scategory->id;
         
         $products = Products::where('subcategory_id',$subcategory_id)->where('status','=','1')->get();
         
       return view('components.products')->with('products',$products)->with('scategory',$scategory);
    }
}
