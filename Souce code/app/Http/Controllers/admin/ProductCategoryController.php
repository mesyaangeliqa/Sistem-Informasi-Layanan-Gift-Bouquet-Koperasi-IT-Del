<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductCategoryController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = $request->keywords;
            $collection = ProductCategory::where('name_product_category','LIKE','%'.$keywords.'%')->paginate(5);
            return view('pages.admin.productcategory.list',compact('collection'));
        }
        return view('pages.admin.productcategory.main');
    }

    
    public function create()
    {
        return view('pages.admin.productcategory.input',['data'=>new ProductCategory]);
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_product_category' => 'required|unique:product_categories',
        ]);
        if($validator->fails()){
            $errors = $validator->errors();
            if($errors->has('name_product_category')){
                return response()->json([
                    'alert'=>'error',
                    'message'=>$errors->first('name_product_category')
                ]);
            }
        }

        $productCategory = new ProductCategory;
        $productCategory->name_product_category = $request->name_product_category;
        $productCategory->save();
        return response()->json([
            'alert'=>'success',
            'message'=>'Data '.$productCategory->name_product_category.' berhasil disimpan'
        ]);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $data = ProductCategory::find($id);
        return view('pages.admin.productcategory.input',['data'=>$data]);
    }

    
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name_product_category' => 'required|unique:product_categories,name_product_category,'.$id,
        ]);
        if($validator->fails()){
            $errors = $validator->errors();
            if($errors->has('name_product_category')){
                return response()->json([
                    'alert'=>'error',
                    'message'=>$errors->first('name_product_category')
                ]);
            }
        }

        $productCategory = ProductCategory::find($id);
        $productCategory->name_product_category = $request->name_product_category;
        $productCategory->update();
        return response()->json([
            'alert'=>'success',
            'message'=>'Data '.$productCategory->name_product_category.' berhasil diubah'
        ]);
    }

    
    public function destroy($id)
    {
        $productCategory = ProductCategory::find($id);
        $productCategory->delete();
        return response()->json([
            'alert'=>'success',
            'message'=>'Data '.$productCategory->name_product_category.' berhasil dihapus'
        ]);
    }
}