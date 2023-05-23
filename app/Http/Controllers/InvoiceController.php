<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index(Request $req){
        $invoices = Invoice::all();

        return $invoices;
    }

    public function createInvoice(Request $req){

        $data = $req->only([
            'description', 'value', 'address_id', 'user_id'
        ]);

        if($data['description'] && $data['value'] &&
            $data['address_id'] && $data['user_id']){
            $invoice = Invoice::create($data);

            return $data;
        }
        return "Dados incompletos";

    }

    public function findOne(Request $req){

        $id = intval($req->id);

        if(is_int($id)){
            $invoice = Invoice::find($id);
            if($invoice){
                $invoice['address'] = $invoice->address;
                $invoice['user'] = $invoice->user;
                return $invoice;
            }
            return 'Invoice não cadastrado';
        }
        return 'Parâmetro de pesquisa inválido';
    }
}
