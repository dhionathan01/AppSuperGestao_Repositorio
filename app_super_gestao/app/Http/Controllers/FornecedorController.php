<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 =>[
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0'
            ],
            1 =>[
                'nome' => 'Fornecedor 2',
                'status' => 'S'
            ],
        ];
        $msgFornecedor1 =  isset($fornecedores[0]['cnpj']) ? 'Fornecedor 1: CNPJ informado <br>' : 'Fornecedor 1: CNPJ não informado <BR>';
        $msgFornecedor2 =  isset($fornecedores[1]['cnpj']) ? 'Fornecedor 2: CNPJ informado' : ' Fornecedor 2: CNPJ não informado';
        echo $msgFornecedor1 . $msgFornecedor2;
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
