<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\http\request;
use Illuminate\Support\Facades\DB;
use App\Cliente as Cliente;
use App\Produto as Produto;

class CarrinhoController extends Controller
{
    public function AdicionaCarrinho($id, Request $r){
        $produto = Produto::find($id);
        $lista = [];
        $carrinho = $r->session()->get('carrinho');
        //var_dump($carrinho);
        if (isset($carrinho)) $lista = $carrinho;

        $arrayproduto = ['produto_id'=>$produto->idProduto,
        'produto_nome'=>$produto->nomeProduto,
        'produto_valor'=>$produto->valorProduto];
        array_push($lista, $arrayproduto);
        var_dump($lista);

        $r->session()->put('carrinho',$lista);
        // $r->session()->flush();
    }

    public function VisualizaCarrinho(Request $r){
        $carrinho = $r->session()->get('carrinho');
        return $carrinho;
    }
}