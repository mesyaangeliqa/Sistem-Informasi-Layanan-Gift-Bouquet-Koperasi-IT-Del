<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('do_logout');
    }

    public function index()
    {
        return view('pages.admin.auth.main');
    }

    public function do_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:255',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('email')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('email'),
                ]);
            } else {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('password'),
                ]);
            }
        }
        $check = User::where("email", $request->email)->where("role","admin")->first();
        $user = $request->all();
        if ($check) {
            if (Auth::attempt($user)) {
                return response()->json([
                    'alert' => 'success',
                    'message' => 'Welcome back ' . Auth()->user()->name,
                ]);
            }
            else {
                return response()->json([
                    'alert' => 'error',
                    'message' => 'Wrong Password!',
                ]);
            }
        }else{
            return response()->json([
                'alert' => 'error',
                'message' => 'Email not found!',
            ]);
        }
    }


    public function do_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users|max:255|email',
            'phone' => 'required|unique:users|digits_between:8,14',
            'username' => 'required|unique:users|max:25|min:8|alpha_num',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('name')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('name'),
                ]);
            } elseif ($errors->has('email')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('email'),
                ]);
            } elseif ($errors->has('phone')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('phone'),
                ]);
            } elseif ($errors->has('username')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('username'),
                ]);
            } elseif ($errors->has('password')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('password'),
                ]);
            }
        }
        $user = new User;
        $user->name = Str::title($request->name);
        $user->email = $request->email;
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->role = 'user';
        $user->password = Hash::make($request->password);
        $user->created_at = now();
        $user->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Thankyou For join ' . $request->name,
        ]);
        
    }

    public function do_logout(){
        $user = Auth::guard('web')->user();
        Auth::logout($user);
        return redirect()->route('home');
    }

}