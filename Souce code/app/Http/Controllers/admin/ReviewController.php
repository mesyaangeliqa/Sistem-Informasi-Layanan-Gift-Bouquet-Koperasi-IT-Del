<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Critic;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = $request->keywords;
            $collection = Review::select('users.name', 'products.name_product', 'reviews.review', 'reviews.id')
            ->join('products','reviews.id_user','=','products.id')
            ->join('users','users.id','=','reviews.id_user')
            ->where('users.name','LIKE','%'.$keywords.'%')
            ->orwhere('products.name_product','LIKE','%'.$keywords.'%')
            ->paginate(5);
            return view('pages.admin.review.list',compact('collection'));
        }
        return view('pages.admin.review.main');
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
        $critic = Review::find($id);
        $critic->delete();
        return response()->json([
            'alert'=>'success',
            'message'=>'Review berhasil dihapus'
        ]);
    }
}