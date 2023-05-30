<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function PostContato(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $mensagem = $request->input('mensagem');

        date_default_timezone_set('America/Sao_Paulo');
        $datacontato = date("d-m-Y");

        $result = Contact::insert([
                'nome'=>$nome,
                'email'=>$email,
                'mensagem'=>$mensagem,
                'datacontato'=>$datacontato,
            ]
        );

    }
}
