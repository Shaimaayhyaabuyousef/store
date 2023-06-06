<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::paginate(10);
        return view('admin.category.index',compact('categories'));
    }

    public function create(){
        $h=0;
        return view('admin.category.create',compact('h'));
    }



    public function store (Request $request){
        $categories = new Category();
        $categories->category_name= $request -> category_name;
        $categories->  created_at= now();
        $categories-> updated_at = now();
        $categories->save();
        return redirect() -> back();
    }



    public function destroy ($id){
        Category:: where ('id',$id)->delete();
        return redirect() -> back();
    }

    public function edit ($id){
        $category = Category::find($id);
        $h=1;
        return view('admin.category.edit',compact('category','h'));
    }

    public function update (Request $request , $id){
        $category = Category::find($id);

        $category->category_name= $request ->category_name;
        $category->  created_at= now();
        $category-> updated_at = now();

        $category->save();
        return redirect('category');
    }

}
