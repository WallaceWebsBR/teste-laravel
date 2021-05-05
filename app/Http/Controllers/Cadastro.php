<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

class Cadastro extends Controller
{
    public function index(){
        return view('cadastro');
    }
    public function insertUser(Request $request){
        $id = $request->input('id');
        //VERIFY IF UPDATE
        if($request->input('update') == 'yes'){
            $user = new Users;
            $user = Users::find($id);;
            $user->name = $request->input('name');
            $user->cpf = $request->input('cpf');
            $user->ctps = $request->input('ctps');
            $user->department = $request->input('department');
            $user->tel = $request->input('tel1');
            $user->tel2 = $request->input('tel2');
            $user->tel3 = $request->input('tel3');
            $user->tel4 = $request->input('tel4');
            $user->tel5 = $request->input('tel5');
            $user->save();
            $info = "Os dados de $user->name foram atualizados no banco!";
            return view('cadastro')->with('info', $info);
        }else{
            //VERIFY CPF IS UNIQUE
            try {
                
                $info = 'Os dados de '.$request->input('name').' foram inseridos no banco!';
                $user = new Users;
                $user->name = $request->input('name');
                $user->cpf = $request->input('cpf');
                $user->ctps = $request->input('ctps');
                $user->department = $request->input('department');
                $user->tel = $request->input('tel1');
                $user->tel2 = $request->input('tel2');
                $user->tel3 = $request->input('tel3');
                $user->tel4 = $request->input('tel4');
                $user->tel5 = $request->input('tel5');
                $user->save();

            } catch(\Illuminate\Database\QueryException $e){
                $errorCode = $e->errorInfo[1];
                if($errorCode == '1062'){
                    $info = "CPF JÁ EXISTE NO BANCO DE DADOS!!";
                    return view('cadastro')->with('info', $info);
                }
            }

        return view('cadastro')->with('info', $info);
        }
    }
    public function findUser(Request $request){
        $id = $request->input('id');
        $user = Users::find($id);
        //VALUE TO CHANGE VIEW REQUEST
        $update = 'yes';
        return view('cadastro',  compact('update'))->with('user', $user);
    }
}
