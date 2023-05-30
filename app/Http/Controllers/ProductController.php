<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function getCreateProductPage(){
        $products = Product::all();
        return view('create-product', ['products' => $products]);
    }

    public function createProduct(Request $request){

        $extension = $request->file('product_logo')->getClientOriginalExtension();
        $fileName = $request->product_id.'_'.$request->product_name.'.'.$extension;//rename image
        $request->file('product_logo')->storeAs('public/image/', $fileName);//save image

        Product::create([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_rate' => $request->product_rate,
            'product_logo'=> $fileName,
        ]);

        return redirect(route('getProducts'));
    }

    public function getProducts(){
        $products = Product::all();
        return view('create-product', ['products' => $products]);
    }

    public function deleteProduct($id){

        Product::destroy($id);

        return redirect(route('getProducts'));
    }


}

