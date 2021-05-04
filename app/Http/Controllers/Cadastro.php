<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cadastro extends Controller
{
    public function index(){
        return view('cadastro');
    }
    public function insertUser(Request $request){
        $data = $request->post();
        $info = '<div class="alert alert-primary" role="alert">
        Os dados foram inseridos no banco!
      </div>';
        return view('cadastro')->with('info', $info);
    }
}
