<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index()
    {
        $rows = Aluno::all(); //Select * from alunos
        return view('alunos.index', compact('rows'));
    }
    
    public function adicionar()
    {
        return view ("alunos.adicionar");
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/alunos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }
        Aluno::create($dados);
        return redirect()->route('alunos'); //Redireciona para a rota
    }  

    public function editar($id)
    {
        $linha = Aluno::find($id);

        return view("alunos.editar",compact('linha'));
    }

    public function excluir($id)
    {
        Aluno::find($id)->delete();

        return redirect()->route("alunos");
    }   

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/alunos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }
        Aluno::find($id)->update($dados);
        return redirect()->route('alunos');
    }
    
}
