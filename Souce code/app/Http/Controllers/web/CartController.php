<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax() ){
            if(Auth::check()):
                $total = Cart::where('id_user', Auth::user()->id)->select('carts.id','carts.id_product','carts.id_user','carts.qty','products.id','products.name_product','products.id_product_category','products.image_product','products.price_product', DB::raw('SUM(products.price_product * carts.qty) AS result'))->leftJoin('products','products.id','=','carts.id_product')->groupBy('carts.id','carts.id_product','carts.id_user','carts.qty','products.id','products.name_product','products.id_product_category','products.image_product','products.price_product')->get()->toArray();
                $count = 0;
                foreach($total as $value){
                    $count += $value['result'];
                }
                $collection = Cart::where('id_user', Auth::user()->id)->paginate(10);
            else:
                $collection = 0;
                $count = 0;
            endif;
            return view('pages.web.cart.list',compact('collection','count'));
        }
        return view('pages.web.cart.main');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = in_array(Auth::user()->id,  Cart::all(['id_user'])->pluck('id_user')->toArray());
        $cart = in_array($request->product, Cart::all(['id_product'])->pluck('id_product')->toArray());;
        $exist = Cart::where('id_user', Auth::user()->id)->where('id_product', $request->product);
        $get = $exist->get();
        if($user == true){
            if($cart == true && $get->count() > 0){
                $cartUpdate = $exist->first();
                $cartUpdate->qty += $request->qty;
                $cartUpdate->updated_at = now();
                $cartUpdate->update();
                return response()->json([
                    'alert'=>'success',
                    'message'=>'Produk berhasil ditambahkan'
                ]);
            }
        }
        $cart = new Cart;
        $cart->id_product = $request->product;
        $cart->id_user = Auth::user()->id;
        $cart->qty = $request->qty;
        $cart->created_at = now();
        $cart->updated_at = now();
        $cart->save();
        return response()->json([
            'alert'=>'success',
            'message'=>'Produk berhasil ditambahkan'
        ]);
        
    }

    public function show(Cart $cart)
    {
        //
    }

    public function edit(Cart $cart)
    {
        //
    }

    public function update(Request $request, Cart $cart)
    {
        //
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return response()->json([
            'alert'=>'success',
            'message'=>'Keranjang berhasil dihapus'
        ]);
    }
}