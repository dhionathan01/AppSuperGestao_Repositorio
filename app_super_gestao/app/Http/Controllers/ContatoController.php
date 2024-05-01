<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;
class ContatoController extends Controller
{
    public function contato(Request $request){
        $motivo_contatos = MotivoContato::all();
        $contato = new SiteContato();
        //$contato->fill($request->all());
        //$contato->save();
        // invés do save usar o metodo created
       /*  $contato->create($request->all());

        print_r($contato->getAttributes());*/
        $titulo = 'Contato (Controller Definição)';
        return view('site.contato', compact('titulo','motivo_contatos'));
    }

    public function salvar(Request $request){
        // Realizar a validação dos dados do formulário recebido no request
        $regras = [
            'nome' => 'required|min:3|max:40|unique:site_contatos', // nomes com no mínimo 3 caracteres e no máximo 40
            'telefone' => 'required',
            'email' => 'required|email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000',
        ];
        $feedbacks =        [
            'nome.required' => 'O campo nome precisa ser preenchido.',
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
            'nome.unique' => 'O nome informado já está em uso',
            'telefone.required' => 'O campo telefone precisa ser preenchido',
            'email.email'=> 'O email informado não é valido',
            'mensagem.max' => 'A mensagem deve ter no máximo 2000 caracteres',
            'required' => 'O campo :attribute deve ser preenchido'
        ];
        $request->validate($regras, $feedbacks);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
    public function show(SiteContato $siteContato){
        return view('app.contato.show', ['siteContato' => $siteContato]);

    }
    public function listar(Request $request){
        $contatos = SiteContato::with(['motivo_contato'])->paginate(5);
        return view('app.contato.listar', ['contatos' => $contatos, 'request' => $request->all()]);

    }
    public function destroy($id){
        $siteContato = SiteContato::find($id);
        $siteContato->delete();
        return redirect()->route('app.contato.listar');
    }
}
