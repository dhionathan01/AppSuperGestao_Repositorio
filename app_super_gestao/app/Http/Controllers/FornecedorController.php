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
                'cnpj' => '0',
                'ddd' => '11', // São Paulo (SP)
                'telefone' => '0000-0000'
            ],
            1 =>[
                'nome' => 'Fornecedor 2',
                'status' => 'N',
                'cnpj' => null,
                'ddd' => null, // Fortaleza (CE)
                'telefone' => '0000-0000'
            ],
            2 =>[
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', // Juiz de Fora (MG)
                'telefone' => '0000-0000'
            ],
        ];
        $msgFornecedor1 =  isset($fornecedores[0]['cnpj']) ? 'Fornecedor 1: CNPJ informado <br>' : 'Fornecedor 1: CNPJ não informado <BR>';
        $msgFornecedor2 =  isset($fornecedores[1]['cnpj']) ? 'Fornecedor 2: CNPJ informado' : ' Fornecedor 2: CNPJ não informado';
        echo $msgFornecedor1 . $msgFornecedor2;
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
