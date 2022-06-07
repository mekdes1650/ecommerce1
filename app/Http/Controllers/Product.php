<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Product;

use Illuminate\Http\Request;


class Product extends Controller

{
    public function register(){
        return view(product.register);
        } 
        public function store(Request $request)
        {
        $Product=new product();
        $product->name=$request->name;
        $product->unit=$request->unit;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $is_succes=$product::save();
        if($is_secces)
        echo "record saved successfully";
        else
        echo "something want wrong . try again";
        }

        
        


    //
}
