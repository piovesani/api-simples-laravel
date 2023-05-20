<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $req){
        $users = User::all();

        return $users;
    }

    public function findOne(Request $req){

        $id = intval($req->id);

        if(is_int($id)){
            $user = User::find($id);
            if($user){
                return $user;
            }
            return 'Usuário não existe';
        }
        return 'Parâmetro de pesquisa inválido';
    }
}
