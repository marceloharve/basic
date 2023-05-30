<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Class Conta {
    protected $saldo = 0;
    public $Proprietario;
    public $NumeroConta;
    public $Agencia;
    public $DataCriacao;

    function versaldo(){
        return $this->saldo;
    }

    function sacar($valor){
        $this->saldo = $this->saldo - $valor;
        return $this->saldo;
    }
 
    function depositar($valor){
        $this->saldo = $this->saldo + $valor;
        return $this->saldo;
    }
 
 
  }

  class ContaCorrente extends Conta {
    function transferir($contaDestino, $valor){
      $this->saldo -= $valor;
    }
  }

class ContactController extends Controller
{
    //
    public function index()
    {
        $conta1 = new ContaCorrente();
        $conta1 ->depositar(500);
        $conta1->sacar(20);
        $conta1->transferir('xxx-xxx', 500);
        //return $conta1->versaldo();
        return view('contact');
    }
}
