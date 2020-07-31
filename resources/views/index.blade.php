@extends('layouts.app',  ["current" => "home"])


@section('body')
    <div class="jumbotron bg-light border border-secondary" >
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Produtos</h5>
                        <p class="card-text">
                            Cadastrar todos os produtos, 
                            não esqueça de cadastrar as categorias.
                        </p> 
                        <a href="/produtos" class="btn btn-primary">Cadastre seu Produtos</a>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Categorias</h5>
                        <p class="card-text">
                            Cadastrar todos as categorias, 
                            não esqueça de cadastrar as categorias.
                        </p> 
                        <a href="/categorias" class="btn btn-primary">Cadastre sua Categorias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

