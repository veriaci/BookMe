<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
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
            return redirect()->route('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_NyHxDKoEaKSUi5qG3kImKrgr00h18l1AF0');
        try {
            Charge::create(array(
                "amount" => $cart->totalPrice,
                "currency" => "usd",
                "source" => 'tok_mastercard',
                "description" => "Test Charge"
            ));
        } catch (\Exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        Session::forget('cart');
        return redirect()->route('layout.index')->with('success', 'Checkout Success');
    }
}
