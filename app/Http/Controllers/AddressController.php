<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Request $req){
        $adresses = Address::all();

        return $adresses;
    }

    public function findOne(Request $req){

        $id = intval($req->id);

        if(is_int($id)){
            $address = Address::find($id);
            if($address){
                return $address;
            }
            return 'Endereço não cadastrado';
        }
        return 'Parâmetro de pesquisa inválido';
    }
}
