<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\Critic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct(){
        $this->middleware(function ($request,$next) {
            if(Auth::check()){
                $role = Auth::user()->role;
                if(!$role || $role != 'admin'){
                    return view('pages.admin.auth.main');
                }
            }else{
                return redirect()->route('admin.auth.index');
            }
            return $next($request);
        });
    }
    public function index()
    {
        $product = Product::count();
        $user = User::where('role','=','user')->count();
        $order = Order::count();
        $critic = Critic::count();
        $product_percent = Product::where(Product::raw("(date(created_at))"),'!=', date('Y-m-d'))->count();
        $user_percent = User::where('role','=','user')->where(User::raw("(date(created_at))"),'!=', date('Y-m-d'))->count();
        $order_percent = Order::where(Order::raw("(date(created_at))"),'!=', date('Y-m-d'))->count();
        $critic_percent = Critic::where(Critic::raw("(date(created_at))"),'!=', date('Y-m-d'))->count();
        return view('pages.admin.dashboard.main',compact('product','order','user','critic'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
        //
    }
}