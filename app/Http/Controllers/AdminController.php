<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_category()
    {
        $data=category::all();
        return view('admin.category',compact('data'));
    }
    public function add_category(Request $request)
    {

        $data= new category();
        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with('message','Category added successfully');
    }
    public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function view_product()
    {
        $category= category::all();
        return view('admin.product',compact('category'));
    }

    public function add_product(Request $request)
    {
       $product=new product;
       $product->title=$request->product_title;
       $product->description=$request->product_description;
       $product->category=$request->product_category;
       $product->quantity=$request->product_quantity;
       $product->price=$request->product_price;
       $product->discount_price=$request->product_discount;
       
       $image=$request->product_image;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $image->move('productimage',$imagename);
       $product->image=$imagename;
       $product->save();
       return redirect()->back();



    }
}
