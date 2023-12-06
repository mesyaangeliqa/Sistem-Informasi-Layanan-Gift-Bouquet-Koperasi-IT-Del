<?php

namespace App\Http\Controllers\admin;

use PDF;
use App\Models\Order;
use App\Models\OrderAdmin;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class OrderAdminController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = $request->keywords;
            $collection = OrderAdmin::select('orders.order_number', 'orders_details.qty', 'products.price_product', 'users.name','orders.total','orders.status', 'orders.id', 'products.name_product', 'products.image_product')
            ->join('orders_details', 'orders.id', '=', 'orders_details.id_order')
            ->join('products', 'products.id', '=', 'orders_details.id_product')
            ->join('users','users.id','=','orders.id_user')
            ->where('users.name','LIKE','%'.$keywords.'%')
            ->orWhere('orders.order_number','LIKE','%'.$keywords.'%')
            ->orWhere('products.name_product','LIKE','%'.$keywords.'%')
            ->orderby('orders.id','desc')
            ->paginate(10);
            return view('pages.admin.order.list',compact('collection'));
        }
        return view('pages.admin.order.main');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return response()->json([
            'alert'=>'success',
            'message'=>'Data berhasil dipublished'
        ]);
    }

    public function kirim($id) {
        $show = OrderDetail::where('orders_details.id_order', '=', $id)
        ->join('products', 'orders_details.id_product', '=', 'products.id')
        ->join('orders', 'orders_details.id_order', '=', 'orders.id')
        ->join('users', 'orders.id_user', '=', 'users.id')
        ->get();
        $pdf = PDF::loadView('pages.admin.order.pdf', compact('show'));
        
        Storage::put('public/pdf/'.$show[0]->order_number.$id.'.pdf', $pdf->output());
        $url = 'https://tespagi.test/storage/public/pdf/'.$show[0]->order_number.$id.'.pdf ';

        
        
        
        $phones = $show[0]->phone;
        return redirect()->to('https://wa.me/62'.$phones.'?text=Pesanan Anda Telah Selesai!%0ABerikut Order Detail Pesanan Anda:%0A'.$url.'%0AAnda dapat mengambilnya segera!%0ATerimakasih ');
        
        // return response()->json([
        //     'alert'=>'success',
        //     'message'=>'Pesan berhasil dikirim',
        //     'redirect'=>"https://wa.me/6282272944107?text=$message"
        // ]);

    }


    
    public function z($id)
    {
        
        // $order = OrderDetail::where('orders_details.id_order', '=', $id)
        // ->join('products', 'orders_details.id_product', '=', 'products.id')
        // ->join('orders', 'orders_details.id_order', '=', 'orders.id')
        // ->join('users', 'orders.id_user', '=', 'users.id')
        // ->get();
        // dd($order);
        
        $order = OrderAdmin::where('id', '=', $id)->get();
        // dd($order);

        foreach ($order as $item) {
            $order_detail = OrderDetail::where('orders_details.id_order', '=', $item->id)
            ->join('products', 'orders_details.id_product', '=', 'products.id')
            ->join('orders', 'orders_details.id_order', '=', 'orders.id')
            ->join('users', 'orders.id_user', '=', 'users.id')
            ->get();
        }
        






        $kirim = [];
        
        foreach ($order_detail as $item) {
            $kirim[] = [
                'qty' => $item->qty,
                'name_product' => $item->name_product,
                'order_number' => $item->order_number,
                'total' => $item->total,
                'phone' => $item->phone,
            ];
        }
        
        
        
        


        
        // $i = 0;
        // while (count($kirim) > 0) {
        //     dd($kirim[$i]['name_product']);
        //     $i++;
        // }
        
        // dd(count($kirim));  
        // $temp = count($kirim); 
        
        
        
        
        // dd(count($kirim));

        // for($i = 0; $i < $temp; $i++) {
            // dd($kirim[$loop->iteration]['name_product']);
            // echo '<input type="hidden" name="product" value="'.$kirim[$i]['name_product'].'">'.$kirim[$i]['name_product'].'</input><br>';
            // dd($kirim[$i]['name_product']);
        //} 
        // dd($out);
        // dd($message);s
        
        // foreach ($kirim as $item) {
        //     dd($item['name_product']);
        //     $message = "Halo, nama saya " . Auth::user()->name . " saya membeli produk dengan nomor order : " . $item['name_product'];
        //     $url = "https://wa.me/6282272944107?text=$message";
        // }
            


        
        // dd($id);
        // $order = OrderAdmin::find($id);
        // $order =  OrderAdmin::select('orders.order_number', 'orders_details.qty', 'users.phone', 'products.price_product', 'users.name', 'orders.total', 'orders.id', 'products.name_product')
        // ->join('orders_details', 'orders.id', '=', 'orders_details.id_order')
        // ->join('products', 'products.id', '=', 'orders_details.id_product')
        // ->join('users','users.id','=','orders.id_user')
        // ->where('orders_details.id_order', '=', 'orders.id')->find($id);
        // dd($order);
        // for($i = 0; $i < count($order->column['name_product']); $i++){
        //     // $products = $order->name_product;
        //     dd($order->column['name_product'][$i]);
        // }
        
        
        // $order_number = $order->order_number;
        // $products = $order->name_product;
        // $qty = $order->qty;
        // $total = $order->total;
        // $nomor = $order->phone;
        // $message = "Halo, saya admin Gifbouquet.%0APesanan anda dengan Nomor : ". $order_number ."%0ADengan rincian produk : ". $products ."%0ADengan jumlah ". $qty ." dan total ". $total ." telah Siap.%0Pesanan bisa di ambil.%0ATerima kasih";
        // dd($message);
        // return response()->json([
        //     'alert'=>'success',
        //     'message'=>'Pesan berhasil dikirim',
        //     'redirect'=>"https://wa.me/62$phones?text=$message"
        // ]);
    }

    public function selesai(Order $order)
    {
        $order->status = 'Pesanan Selesai';
        $order->update();
        return response()->json([
            'alert'=>'success',
            'message'=>'status berhasil diubah'
        ]);
    }

    public function batal(Order $order)
    {
        $order->status = 'Pesanan Dibatalkan';
        $order->update();
        return response()->json([
            'alert'=>'success',
            'message'=>'status berhasil diubah'
        ]);
    }
    
}