<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class Cadastro extends Controller
{
    public function index(){
        return view('cadastro');
    }
    public function insertUser(Request $request){
        $info = 'Os dados de '.$request->input('name').' foram inseridos no banco!';
        $user = new Users;
        $user->name = $request->input('name');
        $user->cpf = $request->input('cpf');
        $user->ctps = $request->input('ctps');
        $user->department = $request->input('department');
        $user->tel = $request->input('tel1').'; '.$request->input('tel2').'; '.$request->input('tel3').'; '.$request->input('tel4').'; '.$request->input('tel5');
        $user->save();
        return view('cadastro')->with('info', $info);
    }
}
