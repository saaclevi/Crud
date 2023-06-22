@extends('layout.site')
@section('titulo','Home')
@section('conteudo')

<div class='container'>
 <h3 class='center'>Escolha um banco de dados</h3>
    <div class="row">
            <div class="col s12 m6">
                <div class="card white">
                    <div class = "card-image">
                        <img src="../img/curso.png">
                    </div>
                    <div class="card-content black-text">
                        <h4 class="center">Cursos</h4>
                        </div>
                        <div class="card-action">
                            <a href="{{route('admin.cursos')}}">Página cursos</a>
                        </div>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="card white">
                    <div class = "card-image">
                        <img src="../img/aluno.png">
                    </div>
                    <div class="card-content black-text">
                        <h4 class="center">Alunos</h4>
                        </div>
                        <div class="card-action">
                            <a href="{{route('alunos')}}">Página alunos</a>
                        </div>
                </div>
            </div>
    </div>
</div>

@endsection