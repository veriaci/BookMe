<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Order;
use App\Rent;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Auth;
use Stripe\Stripe;
use Stripe\Charge;

class ProductController extends Controller
{
    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return back();
    }

    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0){
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return back();
    }

    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0){
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return back();
    }

    public function getCart(){
        if (!Session::has('cart')){
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'totalQty' => $cart->totalQty]);
    }

    public function getCheckout(){
        if (!Session::has('cart')){
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('checkout', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'totalQty' => $cart->totalQty]);
    }

    public function postCheckout(Request $request){
        if (!Session::has('cart')){
            return redirect()->route('product.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_NyHxDKoEaKSUi5qG3kImKrgr00h18l1AF0');
        try {
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice,
                "currency" => "usd",
                "source" => 'tok_mastercard',
                "description" => "Test Charge"
            ));
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = $charge->id;

            Auth::user()->orders()->save($order);
        } catch (\Exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        Session::forget('cart');
        return redirect()->route('layouts.index')->with('success', 'Checkout Success');
    }

    public function postRent($id){
        $nextWeek = Carbon::now()->addDays(7);

        $rent = new Rent();
        $rent->product_id = $id;
        $rent->due_date = $nextWeek;

        Auth::user()->rents()->save($rent);
        return back()->with('success', 'Checkout Success');
    }
}
