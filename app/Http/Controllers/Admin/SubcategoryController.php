<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pro_cat;
use App\Models\Sub_cat;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    public function index()
    {
        $scategory=Sub_cat::all();
        
        return view('dashboards.admin.category.index')->with('scategory', $scategory);
    }
    public function create()
    {
        $categories=Pro_cat::all();
        return view('dashboards.admin.category.subadd',compact('pro_cat'));
    
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validated();

        $scategory = new Sub_cat;
       
        $scategory->subcat_name = $request->subcat_name;
        $scategory->subcat_slug = Str::slug($request->subcat_slug);
        $scategory->category_id = $request->category_id;
        $scategory->save();
        return redirect()->back()->with('status',' Sub Category Added Successfully'); 


    }
 public function dropdown(){
     $categories=Pro_cat::all();
     return view('dashboards.admin.category.subadd',['categories'=>$categories]);
 }
 public function ShowEditingScreen($id)
 {
    $scategory = Sub_cat::find($id); 
    $categories=Pro_cat::all()->where('id','!=','NULL');
    

    return view("dashboards.admin.category.subedit")->with('scategory',$scategory)->with('categories',$categories);
 }
 public function update(Request $request, $id)
    {
        $scategory=Sub_cat::find($id);
        $scategory->subcat_name = $request->subcat_name;
        $scategory->subcat_slug = Str::slug($request->subcat_slug);
        $scategory->category_id = $request->category_id;
        $scategory->update();
        return redirect()->back()->with('status','Subcategory  Updated Successfully '); 
 
}
public function deletecategory(Request $request, $id)
{
    $scategory=Sub_cat::find($id);

    

    //Status 1 is active user
    // Status 2 is the user present in the recycle bin (inactive_User)
    $scategory->delete();
    return redirect()->back()->with('status', 'Subcategory  Deleted  Successfully');


}

}