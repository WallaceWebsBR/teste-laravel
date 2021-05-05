<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;


class Homepage extends BaseController
{
    public function index(){
        $users = DB::select('select * from users');
        return view('home')->with('users', $users);
    }

    public function userList(Request $request){
        $name = $request->input('name');
    
        $users = DB::table('users')->where(function ($query) use ($name) {
            $query->where('name', 'like', '%'.$name.'%');
        })->get();
        return view('home', compact('name'))->with('users', $users);
    }

    public function deleteUser(Request $request){
        Users::where('id','=', $request->input('id'))->delete();
        return redirect('/');
    }
}
