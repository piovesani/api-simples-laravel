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

    public function insert(Request $req){

        $user = $req->only(['name', 'email', 'password']);

        $verifyEmail = User::where('email', '=', $user['email'])->get();

        if(sizeof($verifyEmail) > 0){
            return 'Já existe um email cadastrado';
        }

        if($user['name'] && $user['email'] && $user['password']){
            $newUser = [
                'name' => $req->name,
                'email' => $req->email,
                'password' => $req->password,
            ];

            $user = new User($newUser);
            $user->save();

            return $newUser;
        }
        return "Dados incompletos";

    }
}
