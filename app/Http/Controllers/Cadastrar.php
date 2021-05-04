<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as BaseController;


class Cadastrar extends BaseController
{
    use AuthorizesRequests;
    public function getAjax(){
        return view('home');
    }
}
