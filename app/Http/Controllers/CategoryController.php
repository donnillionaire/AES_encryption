<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Category;
 
class CategoryController extends Controller
{
    public function addcategory()
    {
        return view('category.add');
    }
 
    public function listcategory()
    {
        $category = Category::get();
        return view('category.list',compact('category'));
    }
 
    public function storecategory(Request $request)
    {
        $cat = new Category();
        $cat->name = $request->cat_name;
        $cat->sku = $request->sku;
        $cat->description = $request->cat_description;
        $cat->save();
        return redirect()->route('cat.list')->with('flash_msg_success','Category added Successfully !');
    }
}