<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to BookMe!';
        return view('index')->with('title', $title);
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

    public function myAccount(){
        $title = 'BookMe Account!';
        return view('my-account')->with('title', $title);
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
        return view('shop-grid')->with('title', $title);
    }

    public function singleProduct(){
        $title = 'BookMe Product!';
        return view('single-product')->with('title', $title);
    }

    public function team(){
        $title = 'BookMe teams!';
        return view('team')->with('title', $title);
    }

    public function wishlist(){
        $title = 'BookMe Wishlist!';
        return view('wishlist')->with('title', $title);
    }
}
