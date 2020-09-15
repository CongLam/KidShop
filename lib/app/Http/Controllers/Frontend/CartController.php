<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Cart;

class CartController extends Controller
{

    public function getAddCart($id){
        $product =Product::find($id);
        Cart::add(['id' => $id, 'name' => $product->product_name, 'qty' => 1, 'price' => $product->product_price, 'options' => ['img' => $product->product_img]]);
        return redirect('cart/show');

        //ktra
        // $data = Cart::content();
        // dd($data);
    }

    public function getShowCart(){
        $data['items'] =Cart::content();
        $data['totalPrice'] = Cart::total();

        return view('frontend.shopping_cart', $data);
    }

    public function getDeleteCart($id){
        //xoa het:Cart::destroy()
        Cart::remove($id);
        return back();
    }

    public function getUpdateCart(Request $request){
        Cart::update($request->rowId, $request->qty);
    }





    // public function addCartAjax(Request $request){
    //     $data = $request->all();
    //     //print_r($data);

    //     $session_id = substring(md5(microtime()), rand(0,26),5);
    //     $cart = Session::get('cart');
    //     if($cart==true){
    //         $is_avaiable = 0;
    //         foreach($cart as $key=>$val){
    //             if($val['product_id']==$data['product_id']){
    //                 $is_avaiable++;
    //             }
    //         }
    //         if($is_avaiable == 0){
    //             $cart[]=array(
    //                 'session_id'=>$session_id,
    //                 'product_name'=>$data['cart_product_name'],
    //                 'product_id'=>$data['cart_product_id'],
    //                 'product_img'=>$data['cart_product_img'],
    //                 'product_qty'=>$data['cart_product_qty'],
    //                 'product_price'=>$data['cart_product_price'],
    //             );
    //             Session::put('cart', $cart);
    //         }
    //     }else{
    //         $cart[]=array(
    //             'session_id'=>$session_id,
    //             'product_name'=>$data['cart_product_name'],
    //             'product_id'=>$data['cart_product_id'],
    //             'product_img'=>$data['cart_product_img'],
    //             'product_qty'=>$data['cart_product_qty'],
    //             'product_price'=>$data['cart_product_price'],
    //         );
    //     }
    //     Session::put('cart', $cart);

    //     Session::save();



    // }
}
