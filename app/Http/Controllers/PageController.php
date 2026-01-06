<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $title = "Home Page";
        $message = "Welcome to laravel controllers";
        return view('home', compact('title', 'message'));
    }

    public function about()
    {
        $title = "About Page";
        $message = "Welcome to laravel controllers";
        return view('about', compact('title', 'message'));
    }

    public function contact()
    {
        $title = "Contact Page";
        $message = "Welcome to laravel controllers";
        return view('contact', compact('title', 'message'));
    }

public function user($name)
{
return view('user', ['username' =>$name]);
}

public function products() {
$products = [
    ['name' =>'Laptop','price' =>800],
    ['name' =>'Phone','price' =>500],
];
return view('products',compact('products'));
}

public function productDeatils($name){
    $products = [
    ['name' =>'Laptop','price' =>800],
    ['name' =>'Phone','price' =>500],
];
$product=null;
foreach($products as $item){
 if($item['name']==$name)
    $product=$item;
}
return view('productDetails',compact('product'));
}

}