<?php

namespace App\Http\Controllers\web;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProductUserController extends Controller
{
    
    public function index(Request $request)
    {   
        if ($request->ajax()) {
            if($request->category == 'all'){
                $collection = Product::where('status_product','=','Published')->orderby('id', 'desc')->paginate(12);
            }else{
                $collection = Product::where('status_product','=','Published')->where('id_product_category',$request->category)->orderby('total_rating', 'desc')->paginate(12);
            }
            return view('pages.web.myproduct.list',compact('collection'));
        }
        // $collection = Product::where('status_product','=','Published')->paginate(18);
        return view('pages.web.myproduct.main');
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request,$product)
    {
        $validator = Validator::make($request->all(), [
            'review' => 'required',
        ]);
        if($validator->fails()){
            $errors = $validator->errors();
            if($errors->has('review')){
                return response()->json([
                    'alert'=>'error',
                    'message'=>$errors->first('review')
                ]);
            }
        }
        $review = new Review();
        $review->id_user = Auth::user()->id;
        $review->id_product = $product;
        $review->review = $request->review;
        $review->rating = $request->stars;
        $review->created_at = now();
        $review->save();
        $total_rating = Review::where('id_product',$product)->avg('rating');
        Product::where('id',$product)->update(['total_rating'=>$total_rating]);
        return response()->json([
            'alert' => 'success',
            'message' => 'Review Berhasil Ditambahkan'
        ]);
    }

    
    public function show(Product $product)
    {
        return view('pages.web.myproduct.desc',compact('product'));     
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