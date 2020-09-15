<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class FrontendController extends Controller
{
    public function getHome(){
        //new product
        $data['newProducts'] = Product::orderBy('product_id', 'desc')->take(4)->get();

        //feature product
        $data['featureProducts'] = Product::where('product_featured', 1)->orderBy('product_id', 'desc')->take(8)->get();



        return view('frontend.index', $data);
    }

    public function getDetail($id){
        $data['product'] = Product::find($id);

        //new product
        $data['newProducts'] = Product::orderBy('product_id', 'desc')->take(4)->get();

        //feature product
        $data['featureProducts'] = Product::where('product_featured', 1)->orderBy('product_id', 'desc')->take(4)->get();

        return view('frontend.product', $data);
    }

    public function getCategory($id){
        $data['categoryProd'] = Product::where('product_cate', $id)->orderBy('product_id', 'desc')->paginate(6);
        $data['cateName'] = Category::find($id);
        return view('frontend.product_type', $data);
    }
}
