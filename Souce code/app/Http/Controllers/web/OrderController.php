<?php

namespace App\Http\Controllers\web;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderAdmin;
use App\Models\OrderDetail;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    
    public function index(Request $request)
    {
        
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'total' => 'required',
        ]);
        if($validator->fails()){
            $errors = $validator->errors();
            if($errors->has('total')){
                return response()->json([
                    'alert'=>'error',
                    'message'=>'Barang harus ada'
                ]);
            }
        }
        $huruf = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $random_huruf = Str::random(7, $huruf);
        $random_string = Auth::user()->id.$random_huruf.Str::of(Auth::user()->name)->replace(' ', '') ?: 0;
        $detail = Cart::where('id_user', Auth::user()->id)->get();
        $order = new Order;
        $order->id_user = Auth::user()->id;
        $order->order_number = $random_string;
        $order->total = $request->total;
        $order->status = 'waiting';
        $order->created_at = now();
        $order->updated_at = now();
        $order->save();
        foreach ($detail as $item) {
            $order_detail = new OrderDetail;
            $order_detail->id_order = $order->id;
            $order_detail->id_product = $item->id_product;
            $order_detail->total_price = $request->total_price;
            $order_detail->qty = $item->qty;
            $order_detail->created_at = now();
            $order_detail->updated_at = now();
            $order_detail->save();
            $item->delete();
        }
        $message = "Halo, nama saya " . Auth::user()->name . " saya membeli produk dengan nomor order : " . $order->order_number;
        
        return response()->json([
            'alert' => 'success',
            'message' => 'Order berhasil dibuat',
            'redirect' => "https://wa.me/6282272944107?text=$message"
        ]);
    }

    
    public function show(Order $order)
    {
        //
    }

    
    public function edit(Order $order)
    {
        //
    }

    
    public function update(Request $request, Order $order)
    {
        //
    }

    public function destroy(Order $order)
    {
        
    }
}