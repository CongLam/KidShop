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

    public function getAbout(){
        return view('frontend.about');
    }

    public function getContact(){
        return view('frontend.contacts');
    }

    public function getDetail($cateId, $id){
        $data['product'] = Product::find($id);

        //new product
        $data['newProducts'] = Product::orderBy('product_id', 'desc')->take(4)->get();

        //featured product
        $data['featureProducts'] = Product::where('product_featured', 1)->orderBy('product_id', 'desc')->take(4)->get();

        //related product
        $data['relatedProducts'] = Product::where('product_cate', $cateId)->orderBy('product_id', 'desc')->take(3)->get();

        return view('frontend.product', $data);
    }

    public function getCategory($id){
        $data['categoryProd'] = Product::where('product_cate', $id)->orderBy('product_id', 'desc')->paginate(6);
        $data['cateName'] = Category::find($id);
        return view('frontend.product_type', $data);
    }

    public function getSearch(Request $request){
        $result = $request->enterKeyword;
        $data['keyword'] = $result;
        $result = str_replace(' ', '%', $result); //thay dau cach bang %
        $data['itemsSeach'] = Product::where('product_name','like', '%'.$result.'%')->get();
        return view('frontend.search_product', $data);
    }




}
