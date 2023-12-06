<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class RequestUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware(function ($request,$next) {
            if(Auth::check()){
                $role = Auth::user()->role;
                if($role == 'admin'){
                    return redirect('/home');
                }
                else if(!$role || $role != 'user'){
                    return view('pages.user.auth.main');
                }
            }else{
                return redirect()->route('user.auth.index');
            }
            return $next($request);
        });
    }

    public function index()
    {
        return view('pages.web.request.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Redirect::to('https://api.whatsapp.com/send?phone=6282272944107');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'kategori' => 'required',
            'detailorder' => 'required',
            'notes' => 'required',
        ]);
        if($validator->fails()){
            $errors = $validator->errors();
            if($errors->has('nama')){
                return response()->json([
                    'alert'=>'error',
                    'message'=>$errors->first('nama')
                ]);
            }
        }else if($validator->fails()){
            $errors = $validator->errors();
            if($errors->has('email')){
                return response()->json([
                    'alert'=>'error',
                    'message'=>$errors->first('email')
                ]);
            }
        }else if($validator->fails()){
            $errors = $validator->errors();
            if($errors->has('phone')){
                return response()->json([
                    'alert'=>'error',
                    'message'=>$errors->first('phone')
                ]);
            }
        }else if($validator->fails()){
            $errors = $validator->errors();
            if($errors->has('kategori')){
                return response()->json([
                    'alert'=>'error',
                    'message'=>$errors->first('kategori')
                ]);
            }
        }else if($validator->fails()){
            $errors = $validator->errors();
            if($errors->has('detailorder')){
                return response()->json([
                    'alert'=>'error',
                    'message'=>$errors->first('detailorder')
                ]);
            }
        }else if($validator->fails()){
            $errors = $validator->errors();
            if($errors->has('notes')){
                return response()->json([
                    'alert'=>'error',
                    'message'=>$errors->first('notes')
                ]);
            }
        }
        $message = "Halo, nama saya : " . $request->nama;
        $body = "Saya membeli produk : " . $request->kategori;
        $order =  "dengan detail order : " . $request->detailorder;
        $notes = "dengan catatan : ". $request->notes;
        return response()->json([
            'alert' => 'success',
            'message' => 'Request berhasil dibuat',
            'redirect' => "https://wa.me/6282272944107?text=$message%0A$body%0a$order%0a$notes"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}