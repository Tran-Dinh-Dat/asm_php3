<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slide;

class ProductController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
    	$hot_product = Product::orderBy('view','desc')->take(4)->get();
    	return view('client.home',compact('hot_product', 'slides'));
    }
    public function product($id)
    {
        $detail = Product::with('images')->findOrfail($id);
        //$comments = Comment::with('user')->where('product_id',$id)->get();
        // dd($comments);
        // Xem chi tiet tang view + 1
        //Product::where('id',$id)->update(['view'=> DB::raw('view+1')]);
        $detail->increment('view');
        $cat = Product::where('id',$id)->pluck('category_id')->first();
        $productByCate = Product::where('category_id',$cat)->orderBy('view','desc')->take(4)->get();
    	return view('client.productdetail',compact('detail','productByCate'));
    }
    public function cart()
    {
        return view('client.cart');
    }
}
