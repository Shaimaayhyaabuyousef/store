<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(10);
        $categories = Category::all();
        return view('admin.product.index',compact('products','categories'));
    }

    public function create(){
        $products = Product::all();
        $categories = Category::all();

        return view('admin.product.create',compact('products','categories'));
    }

    public function store (Request $request){
        $products = new Product();
        $products-> product_name = $request -> name;
        $products-> price = $request -> price;
        $products-> details = $request -> description;
        $products-> category_id = $request -> category_id;
        $products-> image = $request -> image;
        $products->save();
        return redirect() -> back();
    }



    public function destroy ($id){
        Product:: where ('id',$id)->delete();
        return redirect() -> back();
    }

    public function edit ($id){

        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.product.edit',compact('product','categories'));
    }

    public function update (Request $request , $id){
        $product = Product::find($id);

        $product-> product_name = $request -> name;
        $product-> price = $request -> price;
        $product-> details = $request -> description;
        $product-> category_id = $request -> category;
        $product-> image = $request -> image;
        $product-> created_at= now();
        $product->updated_at = now();
        $product->save();
        return redirect('Product/show');
    }

}
