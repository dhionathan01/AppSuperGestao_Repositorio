<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;

class FornecedorController extends Controller
{
    public function index(){
        return view('app.fornecedor.index');
    }
    public function listar(Request $request){
        $fornecedores = Fornecedor::with(['produtos'])->where('nome', 'like', '%'.$request->input('nome').'%')
        ->where('site', 'like', '%'.$request->input('site').'%')
        ->where('uf', 'like', '%'.$request->input('uf').'%')
        ->where('email', 'like', '%'.$request->input('email').'%')
        ->paginate(5);
        return view('app.fornecedor.listar', array('fornecedores'=>$fornecedores, 'request' => $request->all()));
    }
    public function adicionar(Request $request){
        $msg = '';
        if($request->input('_token') != '' && $request->input('id') == ''){
          // Validação
          $regras = array(
            'nome'  => 'required|min:3|max:40',
            'site'  => 'required',
            'uf'    => 'required|min:2|max:2',
            'email' => 'email'
          );

          $feedback = array(
            'required'=> 'O campo :attribute deve ser preenchido',
            'nome.min'=> 'O campo nome deve ter no mínimo 3 caracteres',
            'nome.max'=> 'O campo nome deve ter no máximo 3 caracteres',
            'uf.min'=> 'O campo uf deve ter no mínimo 2 caracteres',
            'uf.max'=> 'O campo uf deve ter no máximo 2 caracteres',
            'email.email' => 'O campo e-mail não foi preenchido corretamente'
          );
          $request->validate($regras, $feedback);
          $fonecedor = new Fornecedor();
          $fonecedor->create($request->all());
          $msg = "Cadastro realizado com sucesso!";
        }
        // edição
        if($request->input('_token') != '' && $request->input('id') != ''){
            $fornecedor = Fornecedor::find($request->input('id'));
            $update = $fornecedor->update($request->all());
            if($update){
                $msg = "Atualização realizada com sucesso";
            }else{
                $msg = "Falha ao realizar atualização do registro";
            }
            return redirect()->route('app.fornecedor.editar', array('id' =>$request->input('id') ,'msg' => $msg));
        }
        return view('app.fornecedor.adicionar', array('msg' => $msg));

    }
    public function editar($id, $msg = ''){
        $fornecedor = Fornecedor::find($id);
        return view('app.fornecedor.adicionar', array('fornecedor' => $fornecedor, 'msg' => $msg));
    }
    public function excluir($id){
        Fornecedor::find($id)->delete();
        return redirect()->route('app.fornecedor');
    }
}
