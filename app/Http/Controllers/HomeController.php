<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function home()
    {
        $product = Product::all();

      if(Auth::id())
      {
          
        $user = Auth::user();
        $userid = $user->id;

       
        $count = Cart::where('user_id', $userid)->count();
   
      }
      else 
      {
        $count = '';
      }

        return view('home.index',compact('product','count'));
    }
    
    public function login_home()
{
    $products = Product::all(); // Ensure this is always set
    $user = Auth::user();

    if ($user) {
        $userid = $user->id;
        $count = Cart::where('user_id', $userid)->count();
    } else {
        $count = 0;
    }

    return view('home.index', compact('products', 'count'));
}

    
    
    public function details($id)
    {
        $data = Product::find($id);

        if(Auth::id())
      {
          
        $user = Auth::user();
        $userid = $user->id;

       
        $count = Cart::where('user_id', $userid)->count();
   
      }
      else 
      {
        $count = '';
      }
    
        return view('home.details', compact('data','count'));
    }
    public function add($id)
    {
        $art_id = $id;
    
       $user = Auth::user();
       $user_id = $user->id;
       $data = new Cart;
       $data->user_id=$user_id;
       $data->art_id=$art_id;
       $data->save();
       return redirect()->back();
    }
    public function mycart()
    {
        if(Auth::id())
        {
            
          $user = Auth::user();
          $userid = $user->id;
  
         
          $count = Cart::where('user_id', $userid)->count();
          $cart = Cart::where('user_id', $userid)->get();
     
        }
       
        return view('home.mycart',compact('count','cart'));
    }
    public function con_order(Request $request)
    {
      $name = $request->name;
      $address = $request->address;
      $phone = $request->phone;
      $userid = Auth::user()->id;
      $cart = Cart::where('user_id',$userid)->get();

       foreach($cart as $carts)
       {
        $order = new Order;
        $order->name = $name;
        $order->address = $address;
        $order->phone = $phone;
        $order->user_id = $userid;
        $order->art_id = $carts->art_id;
        $order->save();
       
       }
       $cart_rem = Cart::where('user_id',$userid)->get();
       foreach($cart_rem as $rem)
       {

        $data = Cart::find($rem->id);
        $data->delete();
       }
       return redirect()->back();
    }
    
    
    
}
