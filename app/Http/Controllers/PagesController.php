<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to BookMe!';
        $products = Product::all();
        //$products = DB::table('products');
        return view('index', ['products' => $products])->with('title', $title);
        //return view('index', ['products' => $products]);
    }

    public function about(){
        $title = 'About BookMe';
        return view('about')->with('title', $title);
    }

    public function blog(){
        $title = 'BookMe Blog!';
        return view('blog')->with('title', $title);
    }

    public function blogDetails(){
        $title = 'BookMe Blog!';
        return view('blog-details')->with('title', $title);
    }

    public function cart(){
        $title = 'BookMe Cart!';
        return view('cart')->with('title', $title);
    }

    public function checkout(){
        $title = 'BookMe Checkout!';
        return view('checkout')->with('title', $title);
    }

    public function contact(){
        $title = 'Contact BookMe!';
        return view('contact')->with('title', $title);
    }

    public function error404(){
        $title = '404 Not Found!';
        return view('error404')->with('title', $title);
    }

    public function faq(){
        $title = 'BookMe FAQs!';
        return view('faq')->with('title', $title);
    }
    public function howto(){
        $title = 'How to order!';
        return view('howto')->with('title', $title);
    }
    public function history(){
        $title = 'BookMe History';
        return view('history')->with('title', $title);
    }

    public function portfolioDetails(){
        $title = 'BookMe Portofolio!';
        return view('portfolio-details')->with('title', $title);
    }

    public function portfolio(){
        $title = 'BookMe Portofolio!';
        return view('portfolio')->with('title', $title);
    }

    public function shopGrid(){
        $title = 'BookMe Shop!';
        $products = Product::paginate(12);
        return view('shop-grid', ['products' => $products])->with('title', $title);
    }

    public function show($id){
        $title = 'BookMe Product!';
        $product = Product::find($id);
        return view('single-product')->with('product' , $product);
    }

    public function team(){
        $title = 'BookMe teams!';
        return view('team')->with('title', $title);
    }

    public function wishlist(){
        $title = 'BookMe Wishlist!';
        return view('wishlist')->with('title', $title);
    }
    public function submit(){
        $title = 'BookMe submit!';
        return view('submit')->with('title', $title);
    }
}
