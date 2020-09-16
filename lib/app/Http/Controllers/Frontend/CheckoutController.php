<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Bill;
use Cart;
use Mail;
class CheckoutController extends Controller
{
    public function getCheckOut(){
        $data['items'] =Cart::content();
        $data['totalPrice'] = Cart::total();

        return view('frontend.checkout', $data);

        // $data = Cart::content();
        // dd($data);
    }

    public function postCheckout(Request $request){
        // $customer = new Customer();
        // $customer->cus_name = $request->name;
        // $customer->cus_gender = $request->gender;
        // $customer->cus_email = $request->email;
        // $customer->cus_address = $request->address;
        // $customer->cus_phone= $request->phone;
        // $customer->cus_note= $request->note;
        // $customer->save();

        // $bill = new Bill();
        // $bill->bill_cus_id = $customer->cus_id;
        // $bill->bill_dateorder = date('Y-m-d');
        // $bill->bill_total = Cart::total();
        // $bill->bill_payment = $request->payment;
        // $bill->bill_note= $request->note;
        // $bill->save();

        // return redirect()->back()->with('noti', 'Đặt hàng thành công!');

        $data['info'] = $request->all();
        $email = $request->email;
        $data['cart'] = Cart::content();
        $data['totalPrice'] = Cart::total();
        //dd($data);
        Mail::send('frontend.email', $data, function ($message) use ($email) {
            $message->from('lamtuancong2807@gmail.com', 'CongLam'); //admin

            $message->to($email, $email); //khach hang

            $message->cc('conglt2807@gmail.com', 'CongLamShop'); //chu cua hang

            $message->subject('Xác nhận hóa đơn mua hàng CongLamShop');
        });
        Cart::destroy();
        return redirect('cart/complete');
    }

    public function getComplete(){
        return view('frontend.complete');
    }
}
