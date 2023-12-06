<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProfileAdminController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = $request->keywords;
            $collection = Profile::where('name','LIKE','%'.$keywords.'%')->paginate(5);     
            return view('pages.admin.webprofile.list',compact('collection'));
        }
        return view('pages.admin.webprofile.main');
    }

    
    public function create()
    {
        return view('pages.admin.webprofile.input',['data'=>new Profile]);
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'key_meta' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'facebook' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('key_meta')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('key_meta'),
                ]);
            }elseif ($errors->has('name')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('name'),
                ]);
            }elseif ($errors->has('phone')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('phone'),
                ]);
            }
            elseif ($errors->has('description')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('description'),
                ]);
            }
            elseif ($errors->has('facebook')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('facebook'),
                ]);
            }elseif ($errors->has('image')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('image'),
                ]);
            }
        }
        $file = request()->file('image')->store('webprofile');
        $webprofile = new Profile;
        $webprofile->key_meta = $request->key_meta;
        $webprofile->name = $request->name;
        $webprofile->phone = $request->phone;
        $webprofile->image = $file;
        $webprofile->description = $request->description;
        $webprofile->facebook = $request->facebook;
        $webprofile->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Profile '. $webprofile->name_product . ' tersimpan',
        ]);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(Profile $webprofile)
    {
        return view('pages.admin.webprofile.input',['data'=>$webprofile]);
    }

    
    public function update(Request $request, Profile $webprofile)
    {
        $validator = Validator::make($request->all(), [
            'key_meta' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'facebook' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('key_meta')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('key_meta'),
                ]);
            }elseif ($errors->has('name')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('v'),
                ]);
            }elseif ($errors->has('phone')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('phone'),
                ]);
            }
            elseif ($errors->has('description')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('description'),
                ]);
            }
            elseif ($errors->has('facebook')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('facebook'),
                ]);
            }
        }

        if($request->hasfile('image')){
            Storage::delete($webprofile->image_webprofile);
            $file = request()->file('image')->store('webprofile');
            $webprofile->key_meta = $request->key_meta;
            $webprofile->name = $request->name;
            $webprofile->phone = $request->phone;
            $webprofile->image = $file;
            $webprofile->description =$request->description;
            $webprofile->facebook = $request->facebook;
            $webprofile->update();
        }else{        
            $webprofile->key_meta = $request->key_meta;
            $webprofile->name = $request->name;
            $webprofile->phone = $request->phone;
            $webprofile->description =$request->description;
            $webprofile->facebook = $request->facebook;
            $webprofile->update();
        }

        return response()->json([
            'alert' => 'success',
            'message' => 'Profile '. $webprofile->name . ' berhasil diubah',
        ]);
    }

    
    public function destroy(Profile $webprofile)
    {
        Storage::delete($webprofile->image);
        $webprofile->delete();
        return response()->json([
            'alert'=>'success',
            'message'=>'Profile '.$webprofile->name.' berhasil dihapus'
        ]);
    }
}