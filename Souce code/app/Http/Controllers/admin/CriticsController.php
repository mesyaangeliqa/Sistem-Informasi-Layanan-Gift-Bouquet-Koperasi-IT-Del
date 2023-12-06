<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Critic;
use Illuminate\Http\Request;

class CriticsController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = $request->keywords;
            $collection = Critic::join('users', 'users.id', '=', 'critics.user_id')
            ->where('users.name','LIKE','%'.$keywords.'%')
            ->orWhere('critic','LIKE','%'.$keywords.'%')
            ->paginate(5);
            return view('pages.admin.critics.list',compact('collection'));
        }
        return view('pages.admin.critics.main');
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
        $critic = Critic::find($id);
        $critic->delete();
        return response()->json([
            'alert'=>'success',
            'message'=>'Kritik berhasil dihapus'
        ]);
    }
}