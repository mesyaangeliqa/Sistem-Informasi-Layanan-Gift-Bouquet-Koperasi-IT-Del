<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Critic;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CriticsUserController extends Controller
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
        return view('pages.web.critics.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'critic' => 'required',
        ]);
        if($validator->fails()){
            $errors = $validator->errors();
            if($errors->has('critic')){
                return response()->json([
                    'alert'=>'error',
                    'message'=>$errors->first('critic')
                ]);
            }
        }

        $kritik = new Critic;
        $kritik->user_id = Auth::user()->id;
        $kritik->critic = $request->critic;
        $kritik->save();
        return response()->json([
            'alert'=>'success',
            'message'=>'Kritik dan saran berhasil dikirim'
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